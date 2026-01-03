<x-guest-layout title="Register">
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

        <!-- Main Card -->
        <div class="relative z-10 w-full max-w-md">

            <!-- Logo -->
            <div class="text-center mb-4">
                <img src="{{ asset('images/logo2.png') }}" alt="Exvalio Logo" class="w-20 h-20 mx-auto mb-2">
                <h1 class="text-4xl font-bold text-blue-700 tracking-tight">Exvalio</h1>
            </div>

            <!-- Glass Card -->
            <div class="bg-white/70 backdrop-blur-xl rounded-3xl p-6 shadow-2xl">

                <h2 class="text-3xl font-bold text-center text-blue-700 mb-5">
                    Create Account
                </h2>

                <form action="{{ route('register') }}" method="POST" class="space-y-4">
                    @csrf

                    <!-- Full Name -->
                    <div class="rounded-2xl flex items-center px-4 py-3 bg-white shadow">
                        <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M5.121 17.804A7 7 0 1118.88 7.196M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <input type="text" name="name" value="{{ old('name') }}" required
                               placeholder="Full Name"
                               class="flex-1 outline-none text-gray-800 placeholder-gray-500">
                    </div>
                    <x-input-error :messages="$errors->get('name')" />

                    <!-- Email -->
                    <div class="rounded-2xl flex items-center px-4 py-3 bg-white shadow">
                        <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <input type="email" name="email" value="{{ old('email') }}" required
                               placeholder="Email"
                               class="flex-1 outline-none text-gray-800 placeholder-gray-500">
                    </div>
                    <x-input-error :messages="$errors->get('email')" />

                    <!-- Password -->
                    <div class="rounded-2xl flex items-center px-4 py-3 bg-white shadow">
                        <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                        <input type="password" name="password" id="password" required
                               placeholder="Password"
                               class="flex-1 outline-none text-gray-800 placeholder-gray-500">
                        <button type="button"
                                onclick="togglePassword('password','eye1')"
                                class="ml-2 text-gray-500 hover:text-blue-600">
                            👁
                        </button>
                    </div>
                    <x-input-error :messages="$errors->get('password')" />

                    <!-- Confirm Password -->
                    <div class="rounded-2xl flex items-center px-4 py-3 bg-white shadow">
                        <svg class="w-5 h-5 text-blue-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                        <input type="password" name="password_confirmation" id="password_confirmation" required
                               placeholder="Confirm Password"
                               class="flex-1 outline-none text-gray-800 placeholder-gray-500">
                        <button type="button"
                                onclick="togglePassword('password_confirmation','eye2')"
                                class="ml-2 text-gray-500 hover:text-blue-600">
                            👁
                        </button>
                    </div>
                    <x-input-error :messages="$errors->get('password_confirmation')" />

                    <!-- Register Button -->
                    <x-button>
                        Create Account
                    </x-button>
                </form>

                <!-- Login Link -->
                <p class="text-center mt-4 text-gray-700">
                    Already have an account?
                    <a href="{{ route('login') }}" class="font-semibold text-blue-700 hover:underline">
                        Login
                    </a>
                </p>

            </div>
        </div>

        <script>
            function togglePassword(id) {
                const input = document.getElementById(id);
                input.type = input.type === 'password' ? 'text' : 'password';
            }
        </script>

    </body>
</x-guest-layout>