<x-app-layout>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mb-8">
        @for ($i = 1; $i <= 4; $i++)
            <div class="bg-white p-5 rounded-2xl shadow-sm border border-slate-100 flex items-center gap-4">
                <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center text-blue-600">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                </div>
                <div>
                    <p class="text-xs text-slate-500 uppercase font-bold tracking-wider">Stat Title</p>
                    <p class="text-xl font-bold text-slate-800">2,450</p>
                </div>
            </div>
        @endfor
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="group bg-white rounded-2xl shadow-sm border border-slate-100 overflow-hidden">
            <div class="relative overflow-hidden">
                <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=500&q=80" class="w-full h-48 object-cover group-hover:scale-105 transition-transform duration-500">
                <div class="absolute top-3 right-3 px-3 py-1 bg-white/90 backdrop-blur rounded-full text-[10px] font-bold uppercase text-emerald-600 shadow-sm">
                    Approved
                </div>
            </div>
            <div class="p-5">
                <h4 class="font-bold text-slate-800 truncate">MacBook Pro M1</h4>
                <p class="text-sm text-slate-500 mb-4 line-clamp-1">Slightly used laptop for exchange...</p>
                <div class="flex items-center justify-between pt-4 border-t border-slate-50">
                    <span class="text-xs text-slate-400">Posted 2h ago</span>
                    <button class="text-blue-600 text-sm font-bold">View Details</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>