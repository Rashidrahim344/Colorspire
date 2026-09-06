<footer class="bg-slate-900 border-t border-slate-800/80 py-16 text-slate-400 text-sm">
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 lg:gap-8 pb-12 border-b border-slate-800">
            <!-- Col 1: Logo and Agency Mission Statement (4 cols) -->
            <div class="lg:col-span-4">
                <a href="{{ route('home') }}" class="inline-flex items-center gap-3 mb-4 focus:outline-none" aria-label="ColorSpire Creations">
                    <div class="w-9 h-9 rounded-xl bg-amber-400 flex items-center justify-center text-slate-950 font-black text-lg shadow-sm">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5" />
                        </svg>
                    </div>
                    <span class="text-xl font-extrabold text-white">ColorSpire<span class="text-amber-400">.</span></span>
                </a>
                <p class="text-slate-400 text-sm leading-relaxed max-w-sm mb-6">
                    A Zambia-based creative and digital solutions studio. Helping businesses, organizations and individuals build stronger brands and meaningful digital experiences.
                </p>
                <div class="inline-flex items-center gap-2 text-xs font-semibold text-amber-400 bg-amber-400/10 border border-amber-400/20 px-3 py-1.5 rounded-full">
                    <span>From Zambia 🇿🇲 to the World — Designed to Inspire</span>
                </div>
            </div>

            <!-- Col 2 (Explore): Links to Services, Portfolio, The Hub (2 cols) -->
            <div class="lg:col-span-2">
                <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-4">Explore</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('services') }}" class="text-slate-400 hover:text-amber-400 transition-colors">Services</a>
                    </li>
                    <li>
                        <a href="{{ route('portfolio') }}" class="text-slate-400 hover:text-amber-400 transition-colors">Portfolio</a>
                    </li>
                    <li>
                        <a href="{{ route('hub') }}" class="text-slate-400 hover:text-amber-400 transition-colors flex items-center gap-1.5">
                            <span>The Hub</span>
                            <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Col 3 (Company): About, Blog, Contact, Careers (2 cols) -->
            <div class="lg:col-span-2">
                <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-4">Company</h4>
                <ul class="space-y-3">
                    <li>
                        <a href="{{ route('about') }}" class="text-slate-400 hover:text-amber-400 transition-colors">About</a>
                    </li>
                    <li>
                        <a href="{{ route('blog') }}" class="text-slate-400 hover:text-amber-400 transition-colors">Blog</a>
                    </li>
                    <li>
                        <a href="{{ route('contact') }}" class="text-slate-400 hover:text-amber-400 transition-colors">Contact</a>
                    </li>
                    <li class="flex items-center gap-2">
                        <a href="{{ route('contact') }}" class="text-slate-400 hover:text-amber-400 transition-colors">Careers</a>
                        <span class="inline-flex items-center text-[10px] font-bold uppercase tracking-wider px-2 py-0.5 rounded-full bg-amber-400/15 text-amber-400 border border-amber-400/30">
                            We're hiring!
                        </span>
                    </li>
                </ul>
            </div>

            <!-- Col 4 (Newsletter): Email input combined with an amber submit button (4 cols) -->
            <div class="lg:col-span-4">
                <h4 class="text-white font-bold text-sm uppercase tracking-wider mb-4">Newsletter</h4>
                <p class="text-xs text-slate-400 mb-4 leading-relaxed">
                    Subscribe for studio insights, design breakdowns, and new initiatives from The Hub.
                </p>

                <!-- Newsletter Form (ScrewFast style) -->
                <form action="{{ route('contact') }}" method="GET" class="flex items-center gap-2 mb-6">
                    <input type="email" 
                           placeholder="Enter your email" 
                           class="w-full px-3.5 py-2.5 rounded-xl bg-slate-800/80 border border-slate-700 text-white text-sm placeholder-slate-500 focus:border-amber-400 focus:outline-none transition-colors">
                    <button type="submit" class="sf-btn-yellow text-xs py-2.5 px-4 shrink-0 font-bold whitespace-nowrap">
                        Subscribe
                    </button>
                </form>

                <p class="text-xs text-slate-500 font-mono">
                    No spam. Unsubscribe at any time.
                </p>
            </div>
        </div>

        <!-- Sub-footer: Copyright & Social icon links -->
        <div class="pt-8 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-400">
            <div>
                &copy; {{ date('Y') }} ColorSpire Creations. All rights reserved.
            </div>

            <!-- Social Links -->
            <div class="flex items-center space-x-3 text-slate-400">
                <a href="https://facebook.com" target="_blank" rel="noopener" class="p-2 rounded-lg bg-slate-800 hover:bg-slate-700 hover:text-amber-400 transition-colors" aria-label="Facebook">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                </a>
                <a href="https://twitter.com" target="_blank" rel="noopener" class="p-2 rounded-lg bg-slate-800 hover:bg-slate-700 hover:text-amber-400 transition-colors" aria-label="Twitter">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                </a>
                <a href="https://linkedin.com" target="_blank" rel="noopener" class="p-2 rounded-lg bg-slate-800 hover:bg-slate-700 hover:text-amber-400 transition-colors" aria-label="LinkedIn">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                </a>
                <a href="https://instagram.com" target="_blank" rel="noopener" class="p-2 rounded-lg bg-slate-800 hover:bg-slate-700 hover:text-amber-400 transition-colors" aria-label="Instagram">
                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                </a>
            </div>
        </div>
    </div>
</footer>

