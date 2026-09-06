<header class="sticky top-0 z-50 w-full pt-3 sm:pt-4 pb-2 px-3 sm:px-6 lg:px-8 pointer-events-none transition-all duration-300">
    <!-- Floating Pill Container -->
    <div class="pointer-events-auto max-w-7xl mx-auto bg-white/90 backdrop-blur-md border border-slate-200/80 shadow-lg shadow-slate-900/5 rounded-full px-4 sm:px-6 py-2 sm:py-2.5 transition-all duration-200 hover:shadow-xl hover:shadow-slate-900/10">
        <div class="flex items-center justify-between">
            <!-- Left: Brand Logo & Subtitle Badge -->
            <a href="{{ route('home') }}" class="flex items-center gap-2.5 sm:gap-3 group focus:outline-none" aria-label="ColorSpire Creations">
                <div class="w-9 h-9 sm:w-10 sm:h-10 rounded-full bg-amber-400 flex items-center justify-center text-slate-950 font-black text-lg shadow-sm shadow-amber-400/20 group-hover:scale-105 transition-transform shrink-0">
                    <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                    </svg>
                </div>
                <div class="flex flex-col">
                    <span class="text-lg sm:text-xl font-extrabold tracking-tight text-slate-900 group-hover:text-amber-600 transition-colors leading-tight">
                        ColorSpire<span class="text-amber-500">.</span>
                    </span>
                    <span class="text-[9px] sm:text-[10px] uppercase font-bold tracking-wider text-slate-500 leading-none">
                        ZAMBIA TO THE WORLD 🇿🇲
                    </span>
                </div>
            </a>

            <!-- Center: Nav links (ScrewFast visual style) -->
            <nav class="hidden lg:flex items-center gap-1 xl:gap-1.5" aria-label="Main Navigation">
                <a href="{{ route('home') }}" 
                   class="px-3.5 py-1.5 text-sm font-medium rounded-full transition-colors {{ request()->routeIs('home') ? 'text-amber-600 font-semibold bg-amber-50' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100/70' }}">
                    Home
                </a>
                <a href="{{ route('services') }}" 
                   class="px-3.5 py-1.5 text-sm font-medium rounded-full transition-colors {{ request()->routeIs('services') ? 'text-amber-600 font-semibold bg-amber-50' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100/70' }}">
                    Services
                </a>
                <a href="{{ route('portfolio') }}" 
                   class="px-3.5 py-1.5 text-sm font-medium rounded-full transition-colors {{ request()->routeIs('portfolio') ? 'text-amber-600 font-semibold bg-amber-50' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100/70' }}">
                    Portfolio
                </a>
                <a href="{{ route('hub') }}" 
                   class="px-3.5 py-1.5 text-sm font-medium rounded-full transition-colors flex items-center gap-1.5 {{ request()->routeIs('hub') ? 'text-amber-600 font-semibold bg-amber-50' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100/70' }}">
                    <span>The Hub</span>
                    <span class="w-1.5 h-1.5 rounded-full bg-amber-500 animate-pulse"></span>
                </a>
                <a href="{{ route('about') }}" 
                   class="px-3.5 py-1.5 text-sm font-medium rounded-full transition-colors {{ request()->routeIs('about') ? 'text-amber-600 font-semibold bg-amber-50' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100/70' }}">
                    About
                </a>
                <a href="{{ route('blog') }}" 
                   class="px-3.5 py-1.5 text-sm font-medium rounded-full transition-colors {{ request()->routeIs('blog') ? 'text-amber-600 font-semibold bg-amber-50' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100/70' }}">
                    Blog
                </a>
                <a href="{{ route('contact') }}" 
                   class="px-3.5 py-1.5 text-sm font-medium rounded-full transition-colors {{ request()->routeIs('contact') ? 'text-amber-600 font-semibold bg-amber-50' : 'text-slate-600 hover:text-slate-900 hover:bg-slate-100/70' }}">
                    Contact
                </a>
            </nav>

            <!-- Right: Theme Toggle, Language Dropdown & Primary Action CTA Button -->
            <div class="hidden lg:flex items-center gap-2.5">
                <!-- Theme Toggle Button -->
                <button type="button" 
                        class="w-9 h-9 rounded-full flex items-center justify-center text-slate-500 hover:text-slate-900 hover:bg-slate-100 border border-slate-200/80 transition-colors focus:outline-none" 
                        aria-label="Toggle theme">
                    <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 3v2.25m6.364.386l-1.591 1.591M21 12h-2.25m-.386 6.364l-1.591-1.591M12 18.75V21m-4.773-4.227l-1.591 1.591M5.25 12H3m4.227-4.773L5.636 5.636M15.75 12a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" />
                    </svg>
                </button>

                <!-- Language Dropdown Button -->
                <div class="relative">
                    <button type="button" 
                            class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-semibold rounded-full text-slate-700 bg-white border border-slate-200/80 hover:bg-slate-50 transition-colors" 
                            aria-label="Language selector">
                        <svg class="w-3.5 h-3.5 text-slate-500" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418" />
                        </svg>
                        <span>EN</span>
                        <svg class="w-3 h-3 text-slate-400" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                        </svg>
                    </button>
                </div>

                <!-- Primary CTA Button -->
                <a href="{{ route('contact') }}" class="sf-btn-yellow text-xs sm:text-sm font-bold !rounded-full px-4.5 py-2 shadow-sm">
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
                        class="p-2 sm:p-2.5 rounded-full text-slate-700 hover:text-slate-900 bg-white border border-slate-200/80 focus:outline-none shadow-sm" 
                        aria-label="Toggle navigation" 
                        aria-expanded="false">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Drawer Backdrop -->
    <div id="mobile-menu-backdrop" class="fixed inset-0 bg-slate-900/50 z-50 opacity-0 pointer-events-none transition-opacity duration-300 lg:hidden" aria-hidden="true"></div>

    <!-- Mobile Drawer -->
    <div id="mobile-menu-drawer" class="fixed top-0 right-0 bottom-0 w-4/5 max-w-sm bg-white border-l border-slate-200 z-50 p-6 flex flex-col justify-between translate-x-full transition-transform duration-300 ease-in-out lg:hidden shadow-2xl pointer-events-auto">
        <div>
            <div class="flex items-center justify-between pb-6 border-b border-slate-200 mb-6">
                <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-full bg-amber-400 flex items-center justify-center text-slate-950 font-black">
                        C
                    </div>
                    <span class="font-bold text-slate-900 text-lg">ColorSpire</span>
                </div>
                <button id="mobile-menu-close" type="button" class="p-2 rounded-full text-slate-400 hover:text-slate-700 focus:outline-none" aria-label="Close menu">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
                </button>
            </div>

            <nav class="flex flex-col space-y-1.5">
                <a href="{{ route('home') }}" class="mobile-nav-link text-base font-semibold px-3.5 py-2.5 rounded-full {{ request()->routeIs('home') ? 'text-amber-600 bg-amber-50' : 'text-slate-700 hover:text-amber-600 hover:bg-slate-50' }}">Home</a>
                <a href="{{ route('services') }}" class="mobile-nav-link text-base font-semibold px-3.5 py-2.5 rounded-full {{ request()->routeIs('services') ? 'text-amber-600 bg-amber-50' : 'text-slate-700 hover:text-amber-600 hover:bg-slate-50' }}">Services</a>
                <a href="{{ route('portfolio') }}" class="mobile-nav-link text-base font-semibold px-3.5 py-2.5 rounded-full {{ request()->routeIs('portfolio') ? 'text-amber-600 bg-amber-50' : 'text-slate-700 hover:text-amber-600 hover:bg-slate-50' }}">Portfolio</a>
                <a href="{{ route('hub') }}" class="mobile-nav-link text-base font-semibold px-3.5 py-2.5 rounded-full flex items-center justify-between {{ request()->routeIs('hub') ? 'text-amber-600 bg-amber-50' : 'text-slate-700 hover:text-amber-600 hover:bg-slate-50' }}">
                    <span>The Hub</span>
                    <span class="text-xs bg-amber-100 text-amber-800 px-2 py-0.5 rounded-full font-semibold">Ecosystem</span>
                </a>
                <a href="{{ route('about') }}" class="mobile-nav-link text-base font-semibold px-3.5 py-2.5 rounded-full {{ request()->routeIs('about') ? 'text-amber-600 bg-amber-50' : 'text-slate-700 hover:text-amber-600 hover:bg-slate-50' }}">About</a>
                <a href="{{ route('blog') }}" class="mobile-nav-link text-base font-semibold px-3.5 py-2.5 rounded-full {{ request()->routeIs('blog') ? 'text-amber-600 bg-amber-50' : 'text-slate-700 hover:text-amber-600 hover:bg-slate-50' }}">Blog</a>
                <a href="{{ route('contact') }}" class="mobile-nav-link text-base font-semibold px-3.5 py-2.5 rounded-full {{ request()->routeIs('contact') ? 'text-amber-600 bg-amber-50' : 'text-slate-700 hover:text-amber-600 hover:bg-slate-50' }}">Contact</a>
            </nav>
        </div>

        <div class="pt-6 border-t border-slate-200 flex flex-col gap-3">
            <a href="{{ route('contact') }}" class="sf-btn-yellow w-full text-center text-sm !rounded-full mobile-nav-link">
                Start a Project
            </a>
            <p class="text-xs text-center text-slate-500 font-mono">
                Lusaka, Zambia • Worldwide Delivery
            </p>
        </div>
    </div>
</header>

