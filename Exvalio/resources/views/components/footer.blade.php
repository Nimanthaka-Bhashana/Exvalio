<footer class="bg-white border-t border-slate-200 mt-auto">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div class="col-span-1 md:col-span-1">
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-20 h-20 rounded-lg flex items-center justify-center">
                        <img src="{{ asset('images/logoExvalio.svg') }}" alt="Exvalio Logo" class="w-16 h-16">
                    </div>
                    <span class="text-lg font-bold text-slate-900 tracking-tight">EXVALIO</span>
                </div>
                <p class="text-sm text-slate-500 leading-relaxed">
                    The next generation goods exchange platform. Trade value, build trust, and reduce waste.
                </p>
            </div>

            <div>
                <h4 class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-4">Platform</h4>
                <ul class="space-y-2 text-sm text-slate-600">
                    <li><a href="#" class="hover:text-blue-600 transition-colors">Marketplace</a></li>
                    <li><a href="#" class="hover:text-blue-600 transition-colors">How it Works</a></li>
                    <li><a href="#" class="hover:text-blue-600 transition-colors">Safety Rules</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-4">Support</h4>
                <ul class="space-y-2 text-sm text-slate-600">
                    <li><a href="#" class="hover:text-blue-600 transition-colors">Help Center</a></li>
                    <li><a href="#" class="hover:text-blue-600 transition-colors">Inspection Info</a></li>
                    <li><a href="#" class="hover:text-blue-600 transition-colors">Contact Us</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-4">Address</h4>
                <div class="bg-slate-50 rounded-xl p-4 border border-slate-100">
                    <p class="text-[11px] text-slate-500 italic">
                      Matara Sri Lanaka.
                       
                    </p>
                </div>
            </div>
        </div>

        <div class="pt-8 mt-8 border-t border-slate-100 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-xs text-slate-400">
                &copy; {{ date('Y') }} Exvalio Platform. All rights reserved.
            </p>
            <div class="flex items-center gap-6 text-xs text-slate-400">
                <a href="#" class="hover:text-blue-600 transition-colors">Privacy Policy</a>
                <a href="#" class="hover:text-blue-600 transition-colors">Terms of Service</a>
                <div class="flex items-center gap-1 ml-4">
                    <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span>
                    <span class="text-slate-500">System Online</span>
                </div>
            </div>
        </div>
    </div>
</footer>