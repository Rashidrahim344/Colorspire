<header class="sticky top-0 z-50 w-full bg-[#14161b]/95 backdrop-blur border-b border-[#2d323e] transition-all">
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Brand Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-3 group focus:outline-none" aria-label="ColorSpire Creations">
                <div class="w-10 h-10 rounded-xl bg-yellow-400 flex items-center justify-center text-neutral-950 font-black text-xl shadow-lg shadow-yellow-400/20 group-hover:scale-105 transition-transform">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="text-xl font-extrabold tracking-tight text-white group-hover:text-yellow-400 transition-colors">
                        ColorSpire<span class="text-yellow-400">.</span>
                    </span>
                    <span class="text-[10px] uppercase font-bold tracking-widest text-neutral-400">
                        Zambia 🇿🇲 to the World
                    </span>
                </div>
            </a>

            <!-- Desktop Navigation Links (ScrewFast visual style) -->
            <nav class="hidden lg:flex items-center gap-1 xl:gap-2" aria-label="Main Navigation">
                <a href="{{ route('home') }}" 
                   class="px-3.5 py-2 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('home') ? 'text-yellow-400 font-semibold bg-neutral-800/80' : 'text-neutral-300 hover:text-white hover:bg-neutral-800/50' }}">
                    Home
                </a>
                <a href="{{ route('services') }}" 
                   class="px-3.5 py-2 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('services') ? 'text-yellow-400 font-semibold bg-neutral-800/80' : 'text-neutral-300 hover:text-white hover:bg-neutral-800/50' }}">
                    Services
                </a>
                <a href="{{ route('portfolio') }}" 
                   class="px-3.5 py-2 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('portfolio') ? 'text-yellow-400 font-semibold bg-neutral-800/80' : 'text-neutral-300 hover:text-white hover:bg-neutral-800/50' }}">
                    Portfolio
                </a>
                <a href="{{ route('hub') }}" 
                   class="px-3.5 py-2 text-sm font-medium rounded-lg transition-colors flex items-center gap-1.5 {{ request()->routeIs('hub') ? 'text-yellow-400 font-semibold bg-neutral-800/80' : 'text-neutral-300 hover:text-white hover:bg-neutral-800/50' }}">
                    <span>The Hub</span>
                    <span class="w-1.5 h-1.5 rounded-full bg-yellow-400 animate-pulse"></span>
                </a>
                <a href="{{ route('about') }}" 
                   class="px-3.5 py-2 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('about') ? 'text-yellow-400 font-semibold bg-neutral-800/80' : 'text-neutral-300 hover:text-white hover:bg-neutral-800/50' }}">
                    About
                </a>
                <a href="{{ route('blog') }}" 
                   class="px-3.5 py-2 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('blog') ? 'text-yellow-400 font-semibold bg-neutral-800/80' : 'text-neutral-300 hover:text-white hover:bg-neutral-800/50' }}">
                    Blog
                </a>
                <a href="{{ route('contact') }}" 
                   class="px-3.5 py-2 text-sm font-medium rounded-lg transition-colors {{ request()->routeIs('contact') ? 'text-yellow-400 font-semibold bg-neutral-800/80' : 'text-neutral-300 hover:text-white hover:bg-neutral-800/50' }}">
                    Contact
                </a>
            </nav>

            <!-- Primary Action CTA Button -->
            <div class="hidden lg:flex items-center gap-3">
                <a href="{{ route('contact') }}" class="sf-btn-yellow text-sm">
                    <span>Start a Project</span>
                    <svg class="w-4 h-4 ml-1.5" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </a>
            </div>

            <!-- Mobile Hamburger Toggle -->
            <div class="flex lg:hidden items-center">
                <button id="mobile-menu-toggle" 
                        type="button" 
                        class="p-2.5 rounded-xl text-neutral-300 hover:text-white bg-neutral-800 border border-neutral-700 focus:outline-none" 
                        aria-label="Toggle navigation" 
                        aria-expanded="false">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Drawer Backdrop -->
    <div id="mobile-menu-backdrop" class="fixed inset-0 bg-black/80 z-50 opacity-0 pointer-events-none transition-opacity duration-300 lg:hidden" aria-hidden="true"></div>

    <!-- Mobile Drawer -->
    <div id="mobile-menu-drawer" class="fixed top-0 right-0 bottom-0 w-4/5 max-w-sm bg-[#161920] border-l border-neutral-700 z-50 p-6 flex flex-col justify-between translate-x-full transition-transform duration-300 ease-in-out lg:hidden shadow-2xl">
        <div>
            <div class="flex items-center justify-between pb-6 border-b border-neutral-800 mb-6">
                <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-lg bg-yellow-400 flex items-center justify-center text-neutral-950 font-bold">
                        C
                    </div>
                    <span class="font-bold text-white text-lg">ColorSpire</span>
                </div>
                <button id="mobile-menu-close" type="button" class="p-2 rounded-lg text-neutral-400 hover:text-white focus:outline-none" aria-label="Close menu">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>

            <nav class="flex flex-col space-y-2">
                <a href="{{ route('home') }}" class="mobile-nav-link text-base font-semibold px-3 py-2.5 rounded-lg {{ request()->routeIs('home') ? 'text-yellow-400 bg-neutral-800' : 'text-neutral-200 hover:text-yellow-400' }}">Home</a>
                <a href="{{ route('services') }}" class="mobile-nav-link text-base font-semibold px-3 py-2.5 rounded-lg {{ request()->routeIs('services') ? 'text-yellow-400 bg-neutral-800' : 'text-neutral-200 hover:text-yellow-400' }}">Services</a>
                <a href="{{ route('portfolio') }}" class="mobile-nav-link text-base font-semibold px-3 py-2.5 rounded-lg {{ request()->routeIs('portfolio') ? 'text-yellow-400 bg-neutral-800' : 'text-neutral-200 hover:text-yellow-400' }}">Portfolio</a>
                <a href="{{ route('hub') }}" class="mobile-nav-link text-base font-semibold px-3 py-2.5 rounded-lg flex items-center justify-between {{ request()->routeIs('hub') ? 'text-yellow-400 bg-neutral-800' : 'text-neutral-200 hover:text-yellow-400' }}">
                    <span>The Hub</span>
                    <span class="text-xs bg-yellow-400/20 text-yellow-400 px-2 py-0.5 rounded font-mono">Ecosystem</span>
                </a>
                <a href="{{ route('about') }}" class="mobile-nav-link text-base font-semibold px-3 py-2.5 rounded-lg {{ request()->routeIs('about') ? 'text-yellow-400 bg-neutral-800' : 'text-neutral-200 hover:text-yellow-400' }}">About</a>
                <a href="{{ route('blog') }}" class="mobile-nav-link text-base font-semibold px-3 py-2.5 rounded-lg {{ request()->routeIs('blog') ? 'text-yellow-400 bg-neutral-800' : 'text-neutral-200 hover:text-yellow-400' }}">Blog</a>
                <a href="{{ route('contact') }}" class="mobile-nav-link text-base font-semibold px-3 py-2.5 rounded-lg {{ request()->routeIs('contact') ? 'text-yellow-400 bg-neutral-800' : 'text-neutral-200 hover:text-yellow-400' }}">Contact</a>
            </nav>
        </div>

        <div class="pt-6 border-t border-neutral-800 flex flex-col gap-3">
            <a href="{{ route('contact') }}" class="sf-btn-yellow w-full text-center text-sm mobile-nav-link">
                Start a Project
            </a>
            <p class="text-xs text-center text-neutral-400 font-mono">
                Lusaka, Zambia • Worldwide Delivery
            </p>
        </div>
    </div>
</header>
