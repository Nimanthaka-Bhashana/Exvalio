<x-guest-layout title="Register">
 <body class="min-h-screen flex items-center justify-center p-4 overflow-hidden relative">
  <div class="absolute inset-0 bg-gradient-to-br from-cyan-400 via-blue-500 to-orange-400"></div>
  <div class="absolute inset-0 bg-gradient-to-tl from-orange-300 via-transparent to-cyan-300 opacity-70"></div>
  <div class="sparkle absolute top-20 left-20 w-2 h-2 bg-white rounded-full opacity-80"></div>
  <div class="sparkle absolute top-40 right-32 w-3 h-3 bg-white rounded-full opacity-60"></div>
  <div class="sparkle absolute bottom-32 left-40 w-2 h-2 bg-yellow-200 rounded-full opacity-90"></div>
  <div class="sparkle absolute top-1/4 right-20 w-1.5 h-1.5 bg-white rounded-full opacity-70"></div>
  <div class="sparkle absolute bottom-1/4 left-1/4 w-2.5 h-2.5 bg-cyan-200 rounded-full opacity-80"></div>
  <div class="sparkle absolute top-1/3 left-1/2 w-1 h-1 bg-orange-200 rounded-full opacity-60"></div>
  <div class="absolute top-0 left-0 w-96 h-96 bg-cyan-400 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse"></div>
  <div class="absolute bottom-0 right-0 w-96 h-96 bg-orange-400 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-pulse" style="animation-delay: 1s;"></div>
  <div class="relative z-10 w-full max-w-md">
   <div class="text-center mb-2">
    <div class="relative inline-block mb-2">
     <img src="{{ asset('images/logo2.png') }}" alt="Exvalio Logo" class="w-20 h-20 mx-auto"/>
    </div>
    <h1 class="text-4xl font-bold text-gray-800 mb-2 drop-shadow-lg" style="font-family: system-ui, -apple-system, sans-serif; letter-spacing: -0.02em;">Exvalio</h1>
   </div>
   <div class="glass-card rounded-3xl p-6 shadow-2xl">
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-4">Register</h2>
    <form action="{{ route('register') }}" method="POST" class="space-y-4">
     @csrf
     <div class="relative">
        <div class="input-glass rounded-2xl flex items-center px-4 py-3 shadow-lg">
        <svg class="w-5 h-5 text-gray-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A7 7 0 1118.88 7.196M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
        </svg>
        <input type="text" name="name" placeholder="Full Name" class="flex-1 bg-transparent outline-none text-gray-800 placeholder-gray-600" :value="old('name')" required />
        </div>
        <x-input-error :messages="$errors->get('name')" class="mt-2" style="color: red;" />
     </div>
     <div class="relative">
      <div class="input-glass rounded-2xl flex items-center px-4 py-3 shadow-lg">
       <svg class="w-5 h-5 text-gray-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
       </svg>
       <input type="email" name="email" placeholder="Email" class="flex-1 bg-transparent outline-none text-gray-800 placeholder-gray-600" :value="old('email')" required />
    </div>
    <x-input-error :messages="$errors->get('email')" class="mt-2" style="color: red;" />
     </div>
     <div class="relative">
      <div class="input-glass rounded-2xl flex items-center px-4 py-3 shadow-lg">
       <svg class="w-5 h-5 text-gray-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
       </svg>
       <input type="password" name="password" id="password" placeholder="Password" class="flex-1 bg-transparent outline-none text-gray-800 placeholder-gray-600" required />
       <button type="button" onclick="togglePasswordRegsiterForm('password','eye-icon-1')" class="ml-2 text-gray-600 hover:text-gray-800 focus:outline-none">
        <svg id="eye-icon-1" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
        </svg>
       </button>
    </div>
    <x-input-error :messages="$errors->get('password')" class="mt-2" style="color: red;" />
     </div>
     <div class="relative">
      <div class="input-glass rounded-2xl flex items-center px-4 py-3 shadow-lg">
       <svg class="w-5 h-5 text-gray-600 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
       </svg>
       <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password" class="flex-1 bg-transparent outline-none text-gray-800 placeholder-gray-600" required />
       <button type="button" onclick="togglePasswordRegsiterForm('password_confirmation','eye-icon-2')" class="ml-2 text-gray-600 hover:text-gray-800 focus:outline-none">
        <svg id="eye-icon-2" class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
         <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
        </svg>
       </button>
      </div>
        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" style="color: red;" />
     </div>
     <button type="submit" class="w-full bg-gradient-to-r from-cyan-400 via-blue-400 to-orange-400 text-white font-bold text-xl py-3 rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-[1.02] transition-all duration-200">Create Account</button>
    </form>
    <p class="text-center mt-4 text-gray-700">Already have an account? <a href="/login" class="font-bold text-gray-800 hover:text-gray-900 ml-1">Login</a></p>
    <div class="flex justify-center space-x-2 mt-4 mb-4">
     <div class="w-2 h-2 rounded-full bg-gray-400"></div>
     <div class="w-2 h-2 rounded-full bg-gray-500"></div>
     <div class="w-2 h-2 rounded-full bg-gray-400"></div>
    </div>
   </div>
  </div>
  <script>
   function togglePasswordRegsiterForm(inputId, iconId) {
     const input = document.getElementById(inputId);
     const icon = document.getElementById(iconId);
     const isPassword = input.getAttribute('type') === 'password';
     input.setAttribute('type', isPassword ? 'text' : 'password');
     icon.classList.toggle('text-gray-800', isPassword);
   }
  </script>
 </body>
</x-guest-layout>
