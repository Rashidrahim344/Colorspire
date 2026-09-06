<section class="py-20 sm:py-28 relative overflow-hidden bg-slate-900 text-white">
    <!-- Ambient Amber Glow Accent -->
    <div class="absolute inset-0 flex items-center justify-center pointer-events-none -z-10">
        <div class="w-[650px] h-[320px] bg-amber-500/15 blur-[120px] rounded-full"></div>
    </div>

    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10">
        <div class="max-w-3xl mx-auto">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold tracking-wide border border-amber-500/30 bg-amber-500/10 text-amber-400 mb-6">
                <span>Start Your Transformation</span>
            </div>

            <h2 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                Let's Create Something That <span class="text-amber-400">Inspires</span>.
            </h2>

            <p class="text-lg sm:text-xl text-slate-300 leading-relaxed mb-10">
                Have an idea, a brand or a project in mind? Let's turn it into something meaningful with world-class design and clean code.
            </p>

            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('contact') }}" class="sf-btn-yellow text-base py-3.5 px-8 w-full sm:w-auto shadow-md">
                    <span>Start a Project</span>
                    <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </a>
                <a href="{{ route('services') }}" class="inline-flex items-center justify-center font-bold rounded-xl px-8 py-3.5 text-base text-slate-200 bg-slate-800/80 hover:bg-slate-800 border border-slate-700 hover:text-white transition-all w-full sm:w-auto">
                    <span>Explore All Services</span>
                </a>
            </div>
        </div>
    </div>
</section>
