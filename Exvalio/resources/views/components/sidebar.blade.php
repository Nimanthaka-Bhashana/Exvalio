<aside 
    x-show="sidebarOpen"
    x-transition:enter="transition ease-in-out duration-300 transform"
    x-transition:enter-start="-translate-x-full"
    x-transition:enter-end="translate-x-0"
    x-transition:leave="transition ease-in-out duration-300 transform"
    x-transition:leave-start="translate-x-0"
    x-transition:leave-end="-translate-x-full"
    class="fixed inset-y-0 left-0 w-72 bg-white shadow-2xl z-50 lg:hidden flex flex-col"
    x-cloak>
    
    <div class="p-6 border-b border-slate-100 flex items-center justify-between">
        <span class="text-xl font-bold text-slate-900">Menu</span>
        <button @click="sidebarOpen = false" class="p-2 text-slate-400 hover:text-slate-600">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
    </div>

    <div class="p-4 space-y-2">
        @php
            $mobileLinks = [
                ['name' => 'Dashboard', 'icon' => 'home', 'url' => route('user.dashboard')],
                ['name' => 'Add Item', 'icon' => 'plus', 'url' => '#'],
                ['name' => 'My Items', 'icon' => 'list', 'url' => '#'],
                ['name' => 'Matches', 'icon' => 'heart', 'url' => '#'],
                ['name' => 'Inspection Status', 'icon' => 'shield', 'url' => '#'],
                ['name' => 'Profile', 'icon' => 'user', 'url' => '#'],
            ];
        @endphp

        @foreach($mobileLinks as $link)
            <a href="{{ $link['url'] }}" class="flex items-center gap-4 px-4 py-3 rounded-2xl text-slate-600 hover:bg-blue-50 hover:text-blue-600 transition-all font-medium">
                <span class="w-8 h-8 rounded-lg bg-slate-100 flex items-center justify-center text-slate-400 group-hover:bg-blue-100 group-hover:text-blue-600">
                    </span>
                {{ $link['name'] }}
            </a>
        @endforeach
    </div>
</aside>