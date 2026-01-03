<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendOtpMail;
use Carbon\Carbon;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $otp = rand(100000, 999999);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
            'otp' => $otp,
            'otp_expires_at' => Carbon::now()->addMinutes(10),
            'is_verified' => false,
        ]);

        Mail::to($user->email)->send(new SendOtpMail($otp));

        return redirect()->route('otp.verify')->with('email', $user->email)->with('success', 'OTP sent successfully');

    }
    
    public function resendOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'User not found']);
        }

        $otp = rand(100000, 999999);
        $user->update([
            'otp' => $otp,
            'otp_expires_at' => Carbon::now()->addMinutes(10),
        ]);

        Mail::to($user->email)->send(new SendOtpMail($otp));

        return redirect()->route('otp.verify')->with('email', $user->email)->with('success', 'OTP resent successfully');
    }
    
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required|digits:6',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'User not found']);
        }

        if ($user->otp !== $request->otp) {
            return back()->withErrors(['otp' => 'Invalid OTP']);
        }

        if (now()->greaterThan($user->otp_expires_at)) {
            return back()->withErrors(['otp' => 'OTP expired']);
        }

        $user->update([
            'is_verified' => true,
            'email_verified_at' => now(),
            'otp' => $request->otp,
            'otp_expires_at' => null,
        ]);

        auth()->login($user);

        return redirect()->route('user.dashboard')->with('success', 'Email verified successfully and you can now login.');
    }
}
