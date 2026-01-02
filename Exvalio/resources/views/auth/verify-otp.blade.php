<x-guest-layout title="Verify OTP">
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
    <h2 class="text-3xl font-bold text-center text-gray-800 mb-1">Verify Your Email</h2>
    <p class="text-center text-sm text-gray-700 mb-4">Enter the 6-digit OTP sent to your email</p>

    <form method="POST" action="{{ route('otp.verify.submit') }}" class="space-y-4" id="otpForm">
     @csrf
     <input type="hidden" name="email" value="{{ session('email') }}">

     @if( session('success'))
      <div class="text-green-600 text-center mb-2">{{ session('success') }}</div>
     @endif

     <div class="relative">
      <div class="input-glass rounded-2xl flex items-center px-4 py-3 shadow-lg bg-black/20">
       <div class="flex-1 grid grid-cols-6 gap-2">
        <input type="text" inputmode="numeric" maxlength="1" class="otp-box text-center text-xl bg-white/70 rounded-xl h-12 outline-none focus:ring-2 focus:ring-cyan-400" />
        <input type="text" inputmode="numeric" maxlength="1" class="otp-box text-center text-xl bg-white/70 rounded-xl h-12 outline-none focus:ring-2 focus:ring-cyan-400" />
        <input type="text" inputmode="numeric" maxlength="1" class="otp-box text-center text-xl bg-white/70 rounded-xl h-12 outline-none focus:ring-2 focus:ring-cyan-400" />
        <input type="text" inputmode="numeric" maxlength="1" class="otp-box text-center text-xl bg-white/70 rounded-xl h-12 outline-none focus:ring-2 focus:ring-cyan-400" />
        <input type="text" inputmode="numeric" maxlength="1" class="otp-box text-center text-xl bg-white/70 rounded-xl h-12 outline-none focus:ring-2 focus:ring-cyan-400" />
        <input type="text" inputmode="numeric" maxlength="1" class="otp-box text-center text-xl bg-white/70 rounded-xl h-12 outline-none focus:ring-2 focus:ring-cyan-400" />
       </div>
       <input type="hidden" name="otp" id="otpHidden" />
      </div>
      <x-input-error :messages="$errors->get('otp')" class="mt-2" style="color: red;" />
     </div>

     <button type="submit" class="w-full bg-gradient-to-r from-cyan-400 via-blue-400 to-orange-400 text-white font-bold text-xl py-3 rounded-2xl shadow-xl hover:shadow-2xl transform hover:scale-[1.02] transition-all duration-200">Verify OTP</button>
    </form>

    <form method="GET" action="{{ route('otp.resend') }}" class="mt-3 text-center">
     @csrf
     <input type="hidden" name="email" value="{{ session('email') }}">
     <button type="submit" class="text-sm font-semibold text-gray-700 hover:text-gray-900 underline">Resend OTP</button>
    </form>

    <div class="flex justify-center space-x-2 mt-4 mb-2">
     <div class="w-2 h-2 rounded-full bg-gray-400"></div>
     <div class="w-2 h-2 rounded-full bg-gray-500"></div>
     <div class="w-2 h-2 rounded-full bg-gray-400"></div>
    </div>
   </div>
  </div>
 <script>
  document.addEventListener('DOMContentLoaded', function () {
   var boxes = Array.prototype.slice.call(document.querySelectorAll('.otp-box'));
   var hidden = document.getElementById('otpHidden');
   var form = document.getElementById('otpForm');

   function syncHidden() {
    if (!hidden) return;
    hidden.value = boxes.map(function(b){ return (b.value || '').trim(); }).join('');
   }

   function focusBox(i) {
    if (i >= 0 && i < boxes.length) boxes[i].focus();
   }

   boxes.forEach(function (box, idx) {
    box.addEventListener('input', function () {
     box.value = box.value.replace(/\D/g, '').slice(0, 1);
     if (box.value && idx < boxes.length - 1) focusBox(idx + 1);
     syncHidden();
    });

    box.addEventListener('keydown', function (e) {
     if (e.key === 'Backspace' && !box.value && idx > 0) {
      e.preventDefault();
      boxes[idx - 1].value = '';
      focusBox(idx - 1);
      syncHidden();
     } else if (e.key === 'ArrowLeft') {
      e.preventDefault();
      focusBox(idx - 1);
     } else if (e.key === 'ArrowRight') {
      e.preventDefault();
      focusBox(idx + 1);
     }
    });
   });

   if (boxes[0]) {
    boxes[0].addEventListener('paste', function (e) {
     var data = (e.clipboardData || window.clipboardData).getData('text');
     if (!data) return;
     var digits = data.replace(/\D/g, '').slice(0, boxes.length).split('');
     if (digits.length > 1) e.preventDefault();
     boxes.forEach(function (b, i) { b.value = digits[i] || ''; });
     syncHidden();
     focusBox(Math.min(digits.length, boxes.length - 1));
    });
   }

   if (form) {
    form.addEventListener('submit', function(){ syncHidden(); });
   }

   focusBox(0);
   syncHidden();
  });
 </script>
 </body>
</x-guest-layout>
