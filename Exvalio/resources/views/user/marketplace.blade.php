<x-app-layout>
    <div class="mb-10">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-6">
            <div>
                <h1 class="text-3xl font-black text-slate-900 tracking-tight">Marketplace</h1>
                <p class="text-slate-500 mt-1">Discover items to buy or exchange from the Exvalio community.</p>
            </div>
            
            <div class="flex gap-2 overflow-x-auto pb-2">
                <button class="px-5 py-2 rounded-full bg-blue-600 text-white text-sm font-bold shadow-lg shadow-blue-200">All</button>
                <button class="px-5 py-2 rounded-full bg-white text-slate-600 border border-slate-200 text-sm font-bold hover:bg-slate-50">Electronics</button>
                <button class="px-5 py-2 rounded-full bg-white text-slate-600 border border-slate-200 text-sm font-bold hover:bg-slate-50">Books</button>
                <button class="px-5 py-2 rounded-full bg-white text-slate-600 border border-slate-200 text-sm font-bold hover:bg-slate-50">Fashion</button>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        @php
            $marketItems = [
                ['name' => 'GoPro Hero 10', 'type' => 'sell', 'val' => '$299', 'user' => 'Sarah W.', 'img' => 'https://images.unsplash.com/photo-1564466809058-bf4114d55352?w=500'],
                ['name' => 'Economics Textbook', 'type' => 'exchange', 'val' => 'Swap Only', 'user' => 'John D.', 'img' => 'https://images.unsplash.com/photo-1544947950-fa07a98d237f?w=500'],
                ['name' => 'Electric Scooter', 'type' => 'sell', 'val' => '$450', 'user' => 'Mike R.', 'img' => 'https://images.unsplash.com/photo-1558981403-c5f9899a28bc?w=500'],
                ['name' => 'Designer Watch', 'type' => 'exchange', 'val' => 'Swap Only', 'user' => 'Emma L.', 'img' => 'https://images.unsplash.com/photo-1524592094714-0f0654e20314?w=500'],
            ];
        @endphp

        @foreach($marketItems as $item)
            <div class="bg-white rounded-3xl border border-slate-100 shadow-sm hover:shadow-xl transition-all duration-300 group">
                <div class="relative p-3">
                    <div class="absolute top-6 left-6 z-10">
                        <span class="px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest shadow-sm 
                            @if($item['type'] == 'exchange') bg-blue-600 text-white @else bg-emerald-500 text-white @endif">
                            {{ $item['type'] }}
                        </span>
                    </div>
                    <img src="{{ $item['img'] }}" class="w-full h-48 object-cover rounded-2xl group-hover:scale-105 transition-transform duration-500">
                </div>

                <div class="p-5 pt-0">
                    <div class="flex items-center gap-2 mb-2">
                        <div class="w-5 h-5 bg-slate-200 rounded-full"></div>
                        <span class="text-[11px] font-bold text-slate-400 uppercase tracking-tighter">{{ $item['user'] }}</span>
                    </div>
                    <h3 class="font-bold text-slate-800 truncate mb-1">{{ $item['name'] }}</h3>
                    
                    <div class="flex items-end justify-between mt-4">
                        <div>
                            <p class="text-[10px] text-slate-400 font-bold uppercase">Price/Value</p>
                            <p class="text-xl font-black text-slate-900 leading-none">{{ $item['val'] }}</p>
                        </div>
                        
                        @if($item['type'] == 'sell')
                            <button class="bg-emerald-600 hover:bg-emerald-700 text-white p-2.5 rounded-xl shadow-lg shadow-emerald-100 transition-all">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                            </button>
                        @else
                            <button class="bg-blue-600 hover:bg-blue-700 text-white p-2.5 rounded-xl shadow-lg shadow-blue-100 transition-all">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                            </button>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>