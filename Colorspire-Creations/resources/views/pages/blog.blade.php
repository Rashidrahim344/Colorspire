@extends('layouts.app')

@section('title', 'Blog & Insights — ColorSpire Creations')
@section('meta_description', 'Articles, strategic frameworks, and creative insights on branding, website engineering, and digital growth from ColorSpire Creations.')

@section('content')
    <!-- Blog Hero -->
    <section class="relative pt-12 sm:pt-20 pb-16 sm:pb-24 border-b border-slate-200/80 bg-slate-50">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold tracking-wide border border-amber-200 bg-amber-50 text-amber-700 mb-6">
                <span>Studio Perspectives</span>
            </div>

            <h1 class="text-4xl sm:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight mb-6">
                Design & Digital <span class="text-amber-500">Insights</span>
            </h1>

            <p class="text-lg sm:text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed mb-8">
                Practical articles on brand building, user experience architecture, Laravel development, and creative strategy in Africa and globally.
            </p>
        </div>
    </section>

    <!-- Top 2-Column Split Feature Row -->
    <section class="pt-16 pb-8 bg-white">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-slate-50 rounded-2xl border border-slate-200/80 p-6 sm:p-10 shadow-sm hover:shadow-md transition-all group">
                <div class="grid lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-6 order-2 lg:order-1">
                        <div class="flex items-center gap-3 text-xs font-mono mb-4">
                            <span class="px-2.5 py-0.5 rounded-full bg-amber-500 text-slate-950 font-bold uppercase">Featured</span>
                            <span class="text-amber-700 font-bold uppercase">Strategic Branding</span>
                            <span class="text-slate-400">•</span>
                            <span class="text-slate-500">6 min read</span>
                        </div>
                        <h2 class="text-2xl sm:text-4xl font-extrabold text-slate-900 tracking-tight mb-4 group-hover:text-amber-600 transition-colors">
                            The African Digital Renaissance: How Purpose-Led Design Commands Global Influence
                        </h2>
                        <p class="text-slate-600 text-sm sm:text-base leading-relaxed mb-6">
                            From Lusaka to international markets, emerging brands are rejecting generic Western templates in favor of authentic cultural identity, lean technology, and direct customer resonance.
                        </p>
                        <div class="flex items-center justify-between pt-4 border-t border-slate-200 text-xs">
                            <span class="text-slate-500 font-mono font-medium">By ColorSpire Editorial Team</span>
                            <span class="text-amber-600 font-bold group-hover:underline inline-flex items-center gap-1">
                                <span>Read Full Article</span>
                                <span>→</span>
                            </span>
                        </div>
                    </div>
                    <div class="lg:col-span-6 order-1 lg:order-2">
                        <div class="h-64 sm:h-80 rounded-xl bg-white border border-slate-200/80 flex flex-col items-center justify-center p-6 text-center shadow-xs">
                            <span class="text-5xl mb-3">🌍</span>
                            <span class="font-mono text-sm font-bold text-slate-800">[FEATURED COVER STORY]</span>
                            <span class="text-xs text-slate-400 mt-1">Design Systems • Pan-African Creative Economy</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Balanced 3-Column Article Card Grid -->
    <section class="py-12 sm:py-16 border-b border-slate-200/80 bg-white">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Article 1 -->
                <article class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-sm hover:shadow-md hover:border-slate-300 transition-all flex flex-col justify-between group">
                    <div>
                        <div class="h-44 rounded-xl bg-slate-50 border border-slate-200/80 mb-5 flex flex-col items-center justify-center text-xs font-mono text-slate-500 p-4 text-center">
                            <span class="text-3xl mb-2">🎯</span>
                            <span class="font-semibold text-slate-700">[BRAND STRATEGY]</span>
                        </div>
                        <div class="flex items-center justify-between text-xs font-mono text-slate-500 mb-3">
                            <span class="text-amber-600 font-bold uppercase">Strategy</span>
                            <span>5 min read</span>
                        </div>
                        <h2 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-amber-600 transition-colors">
                            Clarity Before Decoration: Why Most Brand Redesigns Fail to Convert
                        </h2>
                        <p class="text-sm text-slate-600 leading-relaxed mb-6">
                            How focusing on value propositions, audience psychology, and clear typography outperforms decorative design trends.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-xs">
                        <span class="text-slate-500 font-mono">By ColorSpire Team</span>
                        <span class="text-amber-600 font-bold group-hover:underline">Read Article →</span>
                    </div>
                </article>

                <!-- Article 2 -->
                <article class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-sm hover:shadow-md hover:border-slate-300 transition-all flex flex-col justify-between group">
                    <div>
                        <div class="h-44 rounded-xl bg-slate-50 border border-slate-200/80 mb-5 flex flex-col items-center justify-center text-xs font-mono text-slate-500 p-4 text-center">
                            <span class="text-3xl mb-2">💻</span>
                            <span class="font-semibold text-slate-700">[LARAVEL ARCHITECTURE]</span>
                        </div>
                        <div class="flex items-center justify-between text-xs font-mono text-slate-500 mb-3">
                            <span class="text-amber-600 font-bold uppercase">Engineering</span>
                            <span>7 min read</span>
                        </div>
                        <h2 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-amber-600 transition-colors">
                            Building Fast Mobile Websites on Laravel 12 with Zero Dependency Bloat
                        </h2>
                        <p class="text-sm text-slate-600 leading-relaxed mb-6">
                            Why custom Blade components and Tailwind CSS v4 outperform heavyweight WordPress plugins on constrained cellular networks.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-xs">
                        <span class="text-slate-500 font-mono">By ColorSpire Team</span>
                        <span class="text-amber-600 font-bold group-hover:underline">Read Article →</span>
                    </div>
                </article>

                <!-- Article 3 -->
                <article class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-sm hover:shadow-md hover:border-slate-300 transition-all flex flex-col justify-between group">
                    <div>
                        <div class="h-44 rounded-xl bg-slate-50 border border-slate-200/80 mb-5 flex flex-col items-center justify-center text-xs font-mono text-slate-500 p-4 text-center">
                            <span class="text-3xl mb-2">✨</span>
                            <span class="font-semibold text-slate-700">[THE HUB ECOSYSTEM]</span>
                        </div>
                        <div class="flex items-center justify-between text-xs font-mono text-slate-500 mb-3">
                            <span class="text-amber-600 font-bold uppercase">The Hub</span>
                            <span>4 min read</span>
                        </div>
                        <h2 class="text-xl font-bold text-slate-900 mb-3 group-hover:text-amber-600 transition-colors">
                            The Hub: Connecting Young African Creators and Digital Initiatives
                        </h2>
                        <p class="text-sm text-slate-600 leading-relaxed mb-6">
                            An inside look at our vision for building an interconnected creative ecosystem from Zambia to the wider world.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-xs">
                        <span class="text-slate-500 font-mono">By ColorSpire Team</span>
                        <span class="text-amber-600 font-bold group-hover:underline">Read Article →</span>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    @include('sections.cta')
@endsection
