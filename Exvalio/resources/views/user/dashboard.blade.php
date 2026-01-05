<x-app-layout>
    <div class="mb-8 flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h1 class="text-3xl font-black text-slate-900 tracking-tight">Dashboard</h1>
            <p class="text-slate-500">Welcome back! Here is what's happening with your items.</p>
        </div>
        <div class="flex gap-3">
            <a href="{{ route('user.marketplace') }}" class="bg-white border border-slate-200 text-slate-700 px-5 py-2.5 rounded-xl font-bold text-sm hover:bg-slate-50 transition-all">
                Browse Market
            </a>
            <a href="{{ route('user.item.add') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2.5 rounded-xl font-bold text-sm shadow-lg shadow-blue-200 transition-all flex items-center gap-2">
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                Post New Item
            </a>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-10">
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100">
            <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Active Swaps</p>
            <p class="text-2xl font-black text-blue-600 mt-1">08</p>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100">
            <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Items Sold</p>
            <p class="text-2xl font-black text-emerald-600 mt-1">12</p>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100">
            <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Total Spent</p>
            <p class="text-2xl font-black text-slate-800 mt-1">$1,450</p>
        </div>
        <div class="bg-white p-6 rounded-3xl shadow-sm border border-slate-100">
            <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">Balance</p>
            <p class="text-2xl font-black text-indigo-600 mt-1">$420</p>
        </div>
    </div>

    <div x-data="{ activeTab: 'exchange' }">
        <div class="flex items-center space-x-8 mb-8 border-b border-slate-200">
            <button @click="activeTab = 'exchange'" :class="activeTab === 'exchange' ? 'border-blue-600 text-blue-600' : 'border-transparent text-slate-400'" class="pb-4 border-b-2 font-bold text-sm transition-all flex items-center gap-2">
                My Exchanges
                <span class="bg-blue-50 text-blue-600 px-2 py-0.5 rounded-md text-[10px]">5</span>
            </button>
            <button @click="activeTab = 'sell'" :class="activeTab === 'sell' ? 'border-emerald-600 text-emerald-600' : 'border-transparent text-slate-400'" class="pb-4 border-b-2 font-bold text-sm transition-all flex items-center gap-2">
                My Sales
                <span class="bg-emerald-50 text-emerald-600 px-2 py-0.5 rounded-md text-[10px]">3</span>
            </button>
            <button @click="activeTab = 'buy'" :class="activeTab === 'buy' ? 'border-indigo-600 text-indigo-600' : 'border-transparent text-slate-400'" class="pb-4 border-b-2 font-bold text-sm transition-all flex items-center gap-2">
                My Purchases
                <span class="bg-indigo-50 text-indigo-600 px-2 py-0.5 rounded-md text-[10px]">2</span>
            </button>
        </div>

        <div x-show="activeTab === 'exchange'" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-white rounded-3xl border border-slate-100 overflow-hidden shadow-sm hover:shadow-md transition-all">
                <img src="https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=400" class="h-40 w-full object-cover">
                <div class="p-5">
                    <span class="text-[10px] font-bold text-blue-600 bg-blue-50 px-2 py-1 rounded uppercase tracking-widest">Exchange Item</span>
                    <h3 class="font-bold text-slate-800 mt-2">MacBook Air M1</h3>
                    <p class="text-xs text-slate-400 mt-1 font-medium">Looking for: Gaming PC</p>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-xs font-bold text-amber-500 bg-amber-50 px-2 py-1 rounded">Pending Match</span>
                        <button class="text-blue-600 font-bold text-sm">View Offers</button>
                    </div>
                </div>
            </div>
        </div>

        <div x-show="activeTab === 'sell'" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" x-cloak>
            <div class="bg-white rounded-3xl border border-slate-100 overflow-hidden shadow-sm hover:shadow-md transition-all">
                <img src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400" class="h-40 w-full object-cover">
                <div class="p-5">
                    <span class="text-[10px] font-bold text-emerald-600 bg-emerald-50 px-2 py-1 rounded uppercase tracking-widest">Selling</span>
                    <h3 class="font-bold text-slate-800 mt-2">Nike Red Runners</h3>
                    <p class="text-xl font-black text-slate-900 mt-1">$85.00</p>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-xs font-bold text-emerald-500 bg-emerald-50 px-2 py-1 rounded">Active Listing</span>
                        <button class="text-slate-400 font-bold text-sm">Edit Price</button>
                    </div>
                </div>
            </div>
        </div>

        <div x-show="activeTab === 'buy'" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" x-cloak>
            <div class="bg-white rounded-3xl border border-slate-100 overflow-hidden shadow-sm hover:shadow-md transition-all">
                <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=400" class="h-40 w-full object-cover">
                <div class="p-5">
                    <span class="text-[10px] font-bold text-indigo-600 bg-indigo-50 px-2 py-1 rounded uppercase tracking-widest">Purchased</span>
                    <h3 class="font-bold text-slate-800 mt-2">Minimalist Watch</h3>
                    <p class="text-sm font-bold text-slate-500 mt-1">Bought from: @AlexMarket</p>
                    <div class="mt-4 flex justify-between items-center">
                        <span class="text-xs font-bold text-blue-500 bg-blue-50 px-2 py-1 rounded">On the way</span>
                        <button class="bg-indigo-600 text-white px-3 py-1.5 rounded-lg text-xs font-bold">Track Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>