<x-guest-layout title="Verify OTP">
    <body class="min-h-screen flex items-center justify-center p-4 overflow-hidden relative">

        <!-- Background -->
        <div class="absolute inset-0 bg-gradient-to-br from-blue-100 via-blue-200 to-white"></div>
        <div class="absolute inset-0 bg-gradient-to-tl from-white via-transparent to-blue-100 opacity-80"></div>

        <!-- Sparkles -->
        <div class="absolute top-20 left-20 w-2 h-2 bg-white rounded-full opacity-70"></div>
        <div class="absolute top-40 right-32 w-2.5 h-2.5 bg-blue-200 rounded-full opacity-60"></div>
        <div class="absolute bottom-32 left-40 w-2 h-2 bg-blue-300 rounded-full opacity-80"></div>
        <div class="absolute top-1/4 right-20 w-1.5 h-1.5 bg-white rounded-full opacity-70"></div>
        <div class="absolute bottom-1/4 left-1/4 w-2.5 h-2.5 bg-blue-200 rounded-full opacity-80"></div>

        <!-- Glow -->
        <div class="absolute top-0 left-0 w-96 h-96 bg-blue-300 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"></div>

        <!-- Card -->
        <div class="relative z-10 w-full max-w-md">

            <!-- Logo -->
            <div class="text-center mb-4">
                <img src="{{ asset('images/logo2.png') }}" alt="Exvalio Logo" class="w-20 h-20 mx-auto mb-2">
                <h1 class="text-4xl font-bold text-blue-700 tracking-tight">Exvalio</h1>
            </div>

            <!-- Glass Card -->
            <div class="bg-white/70 backdrop-blur-xl rounded-3xl p-6 shadow-2xl">

                <h2 class="text-3xl font-bold text-center text-blue-700 mb-1">
                    Verify Your Email
                </h2>
                <p class="text-center text-sm text-gray-700 mb-5">
                    Enter the 6-digit OTP sent to your email
                </p>

                <form method="POST" action="{{ route('otp.verify.submit') }}" class="space-y-4" id="otpForm">
                    @csrf
                    <input type="hidden" name="email" value="{{ session('email') }}">
                    <input type="hidden" name="otp" id="otpHidden">

                    @if(session('success'))
                        <div class="text-green-600 text-center text-sm mb-2">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- OTP Boxes -->
                    <div class="grid grid-cols-6 gap-2">
                        @for ($i = 0; $i < 6; $i++)
                            <input type="text" inputmode="numeric" maxlength="1"
                                   class="otp-box h-12 text-center text-xl rounded-xl
                                          bg-white shadow outline-none
                                          focus:ring-2 focus:ring-blue-500">
                        @endfor
                    </div>

                    <x-input-error :messages="$errors->get('otp')" class="mt-2" />

                    <!-- Verify Button -->
                    <button type="submit"
                            class="w-full py-3 rounded-2xl bg-gradient-to-r from-blue-500 to-blue-700
                                   text-white font-bold text-lg shadow-lg
                                   hover:scale-[1.02] transition">
                        Verify OTP
                    </button>
                </form>

                <!-- Resend OTP -->
                <form method="GET" action="{{ route('otp.resend') }}" class="mt-3 text-center">
                    <input type="hidden" name="email" value="{{ session('email') }}">
                    <button type="submit"
                            class="text-sm font-semibold text-blue-700 hover:underline">
                        Resend OTP
                    </button>
                </form>

            </div>
        </div>

        <!-- OTP JS -->
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const boxes = Array.from(document.querySelectorAll('.otp-box'));
                const hidden = document.getElementById('otpHidden');

                function sync() {
                    hidden.value = boxes.map(b => b.value || '').join('');
                }

                boxes.forEach((box, i) => {
                    box.addEventListener('input', () => {
                        box.value = box.value.replace(/\D/g, '').slice(0, 1);
                        if (box.value && i < boxes.length - 1) boxes[i + 1].focus();
                        sync();
                    });

                    box.addEventListener('keydown', e => {
                        if (e.key === 'Backspace' && !box.value && i > 0) {
                            boxes[i - 1].focus();
                        }
                    });

                    box.addEventListener('paste', e => {
                        const data = (e.clipboardData || window.clipboardData).getData('text');
                        const digits = data.replace(/\D/g, '').slice(0, 6).split('');
                        digits.forEach((d, idx) => boxes[idx].value = d || '');
                        sync();
                        e.preventDefault();
                    });
                });

                boxes[0]?.focus();
                sync();
            });
        </script>

    </body>
</x-guest-layout>