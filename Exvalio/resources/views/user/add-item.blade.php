<x-app-layout>
    <div class="max-w-5xl mx-auto py-8 px-4" x-data="{ tradeType: 'exchange' }">
        <div class="mb-8">
            <h1 class="text-3xl font-extrabold text-slate-900 tracking-tight">List Your Item</h1>
            <p class="text-slate-500 mt-2 text-lg">Choose how you want to value your goods on Exvalio.</p>
        </div>

        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                
                <div class="lg:col-span-2 space-y-6">
                    
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
                        <label class="block text-sm font-bold text-slate-700 uppercase tracking-wider mb-4">Transaction Type</label>
                        <div class="grid grid-cols-2 gap-4">
                            <label :class="tradeType === 'exchange' ? 'border-blue-500 bg-blue-50/50 ring-2 ring-blue-100' : 'border-slate-100 hover:border-slate-200'" 
                                   class="relative flex flex-col p-4 border-2 rounded-2xl cursor-pointer transition-all">
                                <input type="radio" name="trade_type" value="exchange" x-model="tradeType" class="sr-only">
                                <div class="flex items-center gap-3">
                                    <div :class="tradeType === 'exchange' ? 'bg-blue-600 text-white' : 'bg-slate-100 text-slate-400'" class="w-10 h-10 rounded-full flex items-center justify-center transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                                    </div>
                                    <div>
                                        <span class="block font-bold text-slate-900">Exchange</span>
                                        <span class="text-xs text-slate-500">Swap for other items</span>
                                    </div>
                                </div>
                            </label>

                            <label :class="tradeType === 'sell' ? 'border-emerald-500 bg-emerald-50/50 ring-2 ring-emerald-100' : 'border-slate-100 hover:border-slate-200'" 
                                   class="relative flex flex-col p-4 border-2 rounded-2xl cursor-pointer transition-all">
                                <input type="radio" name="trade_type" value="sell" x-model="tradeType" class="sr-only">
                                <div class="flex items-center gap-3">
                                    <div :class="tradeType === 'sell' ? 'bg-emerald-600 text-white' : 'bg-slate-100 text-slate-400'" class="w-10 h-10 rounded-full flex items-center justify-center transition-colors">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    </div>
                                    <div>
                                        <span class="block font-bold text-slate-900">Sell</span>
                                        <span class="text-xs text-slate-500">Fixed cash price</span>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="bg-white p-6 md:p-8 rounded-2xl shadow-sm border border-slate-100">
                        <div class="flex items-center gap-2 mb-6">
                            <span class="w-1.5 h-6 bg-blue-500 rounded-full"></span>
                            <h3 class="text-lg font-bold text-slate-800">Item Requirements</h3>
                        </div>

                        <div class="space-y-6">
                            <div x-show="tradeType === 'sell'" x-transition:enter class="bg-emerald-50 p-4 rounded-xl border border-emerald-100">
                                <label class="block text-sm font-bold text-emerald-800 mb-1">Asking Price ($)</label>
                                <input type="number" name="price" placeholder="0.00" 
                                    class="w-full px-4 py-3 rounded-xl border border-emerald-200 focus:ring-emerald-500 focus:border-emerald-500 outline-none">
                            </div>

                            <div x-show="tradeType === 'exchange'" x-transition:enter>
                                <label class="block text-sm font-bold text-slate-700 mb-1">I am looking for...</label>
                                <input type="text" name="exchange_for" placeholder="e.g. A tablet, books, or electronics" 
                                    class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-blue-500 outline-none">
                            </div>

                            <div>
                                <label class="block text-sm font-bold text-slate-700 mb-1">Item Title</label>
                                <input type="text" name="title" class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-blue-500 outline-none">
                            </div>

                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-1">Category</label>
                                    <select class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-blue-500 outline-none bg-white">
                                        <option>Electronics</option>
                                        <option>Academic Books</option>
                                        <option>Furniture</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-bold text-slate-700 mb-1">Condition</label>
                                    <select class="w-full px-4 py-3 rounded-xl border border-slate-200 focus:ring-blue-500 outline-none bg-white">
                                        <option>Like New</option>
                                        <option>Good</option>
                                        <option>Fair</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-slate-100">
                        <h3 class="text-lg font-bold text-slate-800 mb-4">Item Gallery</h3>
                        <div class="border-2 border-dashed border-slate-200 rounded-2xl py-12 flex flex-col items-center justify-center hover:bg-slate-50 transition-colors cursor-pointer">
                            <svg class="w-10 h-10 text-slate-300 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M12 4v16m8-8H4"></path></svg>
                            <span class="text-sm font-medium text-slate-500">Upload Photos</span>
                        </div>
                    </div>

                    <button type="submit" class="w-full py-4 bg-blue-600 hover:bg-blue-700 text-white font-bold rounded-2xl shadow-lg shadow-blue-200 transition-all">
                        <span x-text="tradeType === 'exchange' ? 'Post for Exchange' : 'Post for Sale'"></span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-app-layout>