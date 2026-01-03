<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class GoogleAuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')
            ->stateless()
            ->redirect();
    }

    public function callback()
    {
        $googleUser = Socialite::driver('google')
            ->stateless()
            ->user();

        $user = User::firstOrCreate(
            ['email' => $googleUser->email],
            [
                'name' => $googleUser->name,
                'password' => bcrypt(Str::random(16)),
                'role' => 'user',
                'is_verified' => true,
            ]
        );

        Auth::login($user);

        return redirect()->route('user.dashboard');
    }
}
