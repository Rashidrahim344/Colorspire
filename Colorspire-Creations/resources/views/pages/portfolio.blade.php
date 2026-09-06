@extends('layouts.app')

@section('title', 'Portfolio — ColorSpire Creations Showcase')
@section('meta_description', 'Explore selected brand identities, custom web applications, graphic design, and digital experiences created by ColorSpire Creations.')

@section('content')
    <!-- Portfolio Hero -->
    <section class="relative pt-12 sm:pt-20 pb-16 sm:pb-24 border-b border-slate-200/80 bg-slate-50">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold tracking-wide border border-amber-200 bg-amber-50 text-amber-700 mb-6">
                <span>Selected Showcase</span>
            </div>

            <h1 class="text-4xl sm:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight mb-6">
                Creative Work & <span class="text-amber-500">Digital Solutions</span>
            </h1>

            <p class="text-lg sm:text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed mb-8">
                Explore how we turn ideas into powerful brands, engaging communication materials, and high-performance websites for clients in Zambia and beyond.
            </p>

            <!-- Minimalist Filter Pills -->
            <div class="flex flex-wrap items-center justify-center gap-2 text-xs sm:text-sm">
                <span class="px-4 py-1.5 rounded-full bg-amber-500 text-slate-950 font-bold shadow-xs">All Projects</span>
                <span class="px-4 py-1.5 rounded-full bg-white text-slate-600 border border-slate-200/80 hover:text-slate-900 hover:border-slate-300 font-medium shadow-xs transition-colors cursor-pointer">Brand Identity</span>
                <span class="px-4 py-1.5 rounded-full bg-white text-slate-600 border border-slate-200/80 hover:text-slate-900 hover:border-slate-300 font-medium shadow-xs transition-colors cursor-pointer">Web Development</span>
                <span class="px-4 py-1.5 rounded-full bg-white text-slate-600 border border-slate-200/80 hover:text-slate-900 hover:border-slate-300 font-medium shadow-xs transition-colors cursor-pointer">Graphic Design</span>
                <span class="px-4 py-1.5 rounded-full bg-white text-slate-600 border border-slate-200/80 hover:text-slate-900 hover:border-slate-300 font-medium shadow-xs transition-colors cursor-pointer">Social Media</span>
            </div>
        </div>
    </section>

    <!-- Project Showcase Grid (3-Column Layout) -->
    <section class="py-16 sm:py-24 border-b border-slate-200/80 bg-white">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-sm hover:shadow-md hover:border-slate-300 transition-all flex flex-col justify-between group">
                    <div>
                        <div class="h-48 rounded-xl bg-slate-50 border border-slate-200/80 mb-5 flex flex-col items-center justify-center text-xs font-mono text-slate-500 p-4 text-center group-hover:border-amber-300 transition-colors">
                            <span class="text-3xl mb-2">🎨</span>
                            <span class="font-semibold text-slate-700">[BRAND IDENTITY SHOWCASE]</span>
                            <span class="text-[11px] text-slate-400 mt-1">High-Resolution Vector Suite</span>
                        </div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs font-mono font-bold text-amber-600 uppercase tracking-wider">Brand Identity</span>
                            <span class="text-xs text-slate-500 font-mono">Lusaka, Zambia</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-amber-600 transition-colors">
                            Vibrant Horizons Identity System
                        </h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-6">
                            Complete visual identity design, logo suite, typography hierarchy, brand guideline book, and executive collateral rollout.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-xs">
                        <span class="text-slate-500 font-mono">Scope: Full Brand Book</span>
                        <a href="{{ route('contact') }}" class="text-amber-600 font-bold hover:text-amber-700 hover:underline inline-flex items-center gap-1">
                            <span>View Case Study</span>
                            <span>→</span>
                        </a>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-sm hover:shadow-md hover:border-slate-300 transition-all flex flex-col justify-between group">
                    <div>
                        <div class="h-48 rounded-xl bg-slate-50 border border-slate-200/80 mb-5 flex flex-col items-center justify-center text-xs font-mono text-slate-500 p-4 text-center group-hover:border-amber-300 transition-colors">
                            <span class="text-3xl mb-2">💻</span>
                            <span class="font-semibold text-slate-700">[WEB APPLICATION PLATFORM]</span>
                            <span class="text-[11px] text-slate-400 mt-1">Laravel 12 + Tailwind Architecture</span>
                        </div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs font-mono font-bold text-amber-600 uppercase tracking-wider">Web Development</span>
                            <span class="text-xs text-slate-500 font-mono">Enterprise SaaS</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-amber-600 transition-colors">
                            Nexus Enterprise Client Hub
                        </h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-6">
                            High-performance responsive website and client portal engineered with Laravel, Vite, sub-second queries, and custom Blade UI.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-xs">
                        <span class="text-slate-500 font-mono">Performance: 100/100 CWV</span>
                        <a href="{{ route('contact') }}" class="text-amber-600 font-bold hover:text-amber-700 hover:underline inline-flex items-center gap-1">
                            <span>View Case Study</span>
                            <span>→</span>
                        </a>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-sm hover:shadow-md hover:border-slate-300 transition-all flex flex-col justify-between group">
                    <div>
                        <div class="h-48 rounded-xl bg-slate-50 border border-slate-200/80 mb-5 flex flex-col items-center justify-center text-xs font-mono text-slate-500 p-4 text-center group-hover:border-amber-300 transition-colors">
                            <span class="text-3xl mb-2">📣</span>
                            <span class="font-semibold text-slate-700">[DIGITAL MARKETING CAMPAIGN]</span>
                            <span class="text-[11px] text-slate-400 mt-1">Multi-Channel Growth Creative</span>
                        </div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs font-mono font-bold text-amber-600 uppercase tracking-wider">Content & Social</span>
                            <span class="text-xs text-slate-500 font-mono">Pan-African Campaign</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-amber-600 transition-colors">
                            Pulse Initiative Growth Launch
                        </h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-6">
                            Multi-channel content creation and strategic social campaign driving elevated engagement and cross-border partnership traction.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-xs">
                        <span class="text-slate-500 font-mono">Growth: +140% Reach</span>
                        <a href="{{ route('contact') }}" class="text-amber-600 font-bold hover:text-amber-700 hover:underline inline-flex items-center gap-1">
                            <span>View Case Study</span>
                            <span>→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    @include('sections.cta')
@endsection
