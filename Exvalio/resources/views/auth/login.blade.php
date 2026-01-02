<x-guest-layout title="Login">
<body class="min-h-screen flex items-center justify-center p-4 overflow-hidden relative">
    <!-- Animated gradient background -->
    <div class="absolute inset-0 bg-gradient-to-br from-cyan-400 via-blue-500 to-orange-400"></div>
    <div class="absolute inset-0 bg-gradient-to-tl from-orange-300 via-transparent to-cyan-300 opacity-70"></div>
    
    <!-- Sparkle effects -->
    <div class="sparkle absolute top-20 left-20 w-2 h-2 bg-white rounded-full opacity-80"></div>
    <div class="sparkle absolute top-40 right-32 w-3 h-3 bg-white rounded-full opacity-60"></div>
    <div class="sparkle absolute bottom-32 left-40 w-2 h-2 bg-yellow-200 rounded-full opacity-90"></div>
    <div class="sparkle absolute top-1/4 right-20 w-1.5 h-1.5 bg-white rounded-full opacity-70"></div>
    <div class="sparkle absolute bottom-1/4 left-1/4 w-2.5 h-2.5 bg-cyan-200 rounded-full opacity-80"></div>
    <div class="sparkle absolute top-1/3 left-1/2 w-1 h-1 bg-orange-200 rounded-full opacity-60"></div>
    
    <!-- Glow effects -->
    <div class="absolute top-0 left-0 w-96 h-96 bg-cyan-400 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"></div>
    <div class="absolute bottom-0 right-0 w-96 h-96 bg-orange-400 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse" style="animation-delay: 1s;"></div>
    
    <!-- Main login card -->
    <div class="relative z-10 w-full max-w-md">
        <!-- Logo and brand -->
        <div class="text-center mb-2">
            <!-- Circular arrow logo -->
            <div class="relative inline-block mb-2">
                <img src="{{ asset('images/logo2.png') }}" alt="Exvalio Logo" class="w-20 h-20 mx-auto"/>
            </div>
            
            <!-- Brand name -->
            <h1 class="text-4xl font-bold text-gray-800 mb-2 drop-shadow-lg" style="font-family: system-ui, -apple-system, sans-serif; letter-spacing: -0.02em;">Exvalio</h1>
        </div>
        
        <!-- Glass login card -->
        <div class="glass-card rounded-3xl p-6 shadow-2xl">
            <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Login</h2>
            
            <!-- Login form - Add your Laravel form action here -->
            <form action="{{ route('auth.login') }}" method="POST" class="space-y-4">
                @csrf
                 @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
                @endif
                
                <!-- Email input -->
                <div class="relative">
                    <div class="input-glass rounded-2xl flex items-center px-4 py-3 shadow-lg">
                        <svg class="w-5 h-5 text-gray-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <input 
                            type="email" 
                            name="email" 
                            placeholder="Email" 
                            class="flex-1 bg-transparent outline-none text-gray-800 placeholder-gray-600"
                            required
                        />
                    </div>
                </div>
                
                <!-- Password input -->
                <div class="relative">
                    <div class="input-glass rounded-2xl flex items-center px-4 py-3 shadow-lg">
                        <svg class="w-5 h-5 text-gray-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                        </svg>
                        <input 
                            type="password" 
                            name="password" 
                            id="password"
                            placeholder="Password" 
                            class="flex-1 bg-transparent outline-none text-gray-800 placeholder-gray-600"
                            required
                        />
                        <button type="button" onclick="togglePassword()" class="ml-2 text-gray-600 hover:text-gray-800 focus:outline-none">
                            <svg id="eye-icon" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Remember me and forgot password -->
                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center text-gray-700 cursor-pointer">
                        <input type="checkbox" name="remember" class="mr-2 w-4 h-4 accent-cyan-500"/>
                        <span>Remember me</span>
                    </label>
                    <a href="/forgot-password" class="text-gray-700 hover:text-gray-900 font-medium">Forgot password?</a>
                </div>
                
                <!-- Login button with gradient -->
                <button 
                    type="submit" 
                    class="w-full bg-gradient-to-r from-cyan-400 via-blue-400 to-orange-400 text-white font-bold text-xl py-3 rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-[1.02] transition-all duration-200"
                >
                    Login
                </button>
            </form>
            
            <!-- Register link -->
            <p class="text-center mt-4 text-gray-700">
                Don't have an account? 
                <a href="/register" class="font-bold text-gray-800 hover:text-gray-900 ml-1">Register</a>
            </p>
            
            <!-- Dots indicator -->
            <div class="flex justify-center space-x-2 mt-4 mb-4">
                <div class="w-2 h-2 rounded-full bg-gray-400"></div>
                <div class="w-2 h-2 rounded-full bg-gray-500"></div>
                <div class="w-2 h-2 rounded-full bg-gray-400"></div>
            </div>
            
            <!-- Social login buttons -->
            <div class="flex justify-center space-x-4">
                <!-- Google -->
                <a href="/auth/google" class="w-14 h-14 bg-white rounded-xl shadow-lg hover:shadow-xl flex items-center justify-center transform hover:scale-110 transition-all duration-200">
                    <svg class="w-7 h-7" viewBox="0 0 24 24">
                        <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                        <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                        <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/>
                        <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/>
                    </svg>
                </a>
                
                <!-- Facebook -->
                <a href="/auth/facebook" class="w-14 h-14 bg-[#1877F2] rounded-xl shadow-lg hover:shadow-xl flex items-center justify-center transform hover:scale-110 transition-all duration-200">
                    <svg class="w-7 h-7" fill="white" viewBox="0 0 24 24">
                        <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                    </svg>
                </a>
                
                <!-- Twitter -->
                <a href="/auth/twitter" class="w-14 h-14 bg-[#1DA1F2] rounded-xl shadow-lg hover:shadow-xl flex items-center justify-center transform hover:scale-110 transition-all duration-200">
                    <svg class="w-6 h-6" fill="white" viewBox="0 0 24 24">
                        <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</x-guest-layout>
   