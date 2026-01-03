<header class="bg-white border-b border-slate-200 sticky top-0 z-40">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            
            <div class="flex items-center gap-4">
                <button @click="sidebarOpen = true" class="lg:hidden p-2 rounded-xl text-slate-600 hover:bg-slate-100">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
                </button>
                
                <div class="flex items-center gap-2">
                    <!-- logo placeholder -->
                    <div class="w-20 h-20 rounded-lg flex items-center justify-center">
                        <img src="{{ asset('images/logoExvalio.svg') }}" alt="Exvalio Logo" class="w-16 h-16">
                    </div>
                </div>

                <nav class="hidden lg:flex items-center ml-8 space-x-1">
                    @php
                        $navLinks = [
                            ['name' => 'Dashboard', 'route' => 'user.dashboard', 'active'=> true , 'url' => route('user.dashboard')],
                            ['name' => 'Add Item',  'route' => 'items.create',   'active' => false, 'url' => '#'],
                            ['name' => 'My Items',  'route' => 'items.index',    'active' => false, 'url' => '#'],
                            ['name' => 'Matches',   'route' => 'matches',        'active' => false, 'url' => '#'],
                        ];
                    @endphp

                    @foreach($navLinks as $link)
                       <a href="{{ $link['url'] ?? (Route::has($link['route']) ? route($link['route']) : '#') }}" class="px-4 py-2 rounded-xl text-sm font-medium transition-colors {{ $link['active'] ? 'bg-blue-50 text-blue-700' : 'text-slate-600 hover:bg-slate-50 hover:text-blue-600' }}">
                            {{ $link['name'] }}
                        </a>
                    @endforeach
                </nav>
            </div>

            <div class="flex items-center gap-3">
                <div class="hidden md:block relative mr-2">
                    <input type="text" placeholder="Search..." class="bg-slate-100 border-none rounded-full px-4 py-1.5 text-sm w-48 focus:ring-2 focus:ring-blue-500/20">
                </div>

                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="flex items-center gap-2 p-1 rounded-full hover:bg-slate-50 transition-all">
                            <div class="w-8 h-8 bg-blue-100 rounded-full flex items-center justify-center text-blue-700 font-bold text-xs border border-blue-200">
                                {{ substr(Auth::user()->name, 0, 1) }}
                            </div>
                            <svg class="w-4 h-4 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M19 9l-7 7-7-7"></path></svg>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <div class="px-4 py-2 border-b border-slate-50">
                            <p class="text-xs text-slate-400 uppercase font-bold tracking-widest">Signed in as</p>
                            <p class="text-sm font-medium text-slate-900 truncate">{{ Auth::user()->name }}</p>
                        </div>
                        <x-dropdown-link :href="route('profile.edit')">Profile</x-dropdown-link>
                        <div class="border-t border-slate-100"></div>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="text-red-600">
                                Log Out
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </div>
</header>