@extends('layouts.app')

@section('title', 'Blog & Insights — ColorSpire Creations')
@section('meta_description', 'Articles, strategic frameworks, and creative insights on branding, website engineering, and digital growth from ColorSpire Creations.')

@section('content')
    <!-- Blog Hero -->
    <section class="relative pt-12 sm:pt-20 pb-16 sm:pb-24 border-b border-[#2d323e]/60 bg-grid-mesh">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold tracking-wide border border-yellow-400/30 bg-yellow-400/10 text-yellow-400 mb-6">
                <span>Studio Perspectives</span>
            </div>

            <h1 class="text-4xl sm:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                Design & Digital <span class="text-yellow-400">Insights</span>
            </h1>

            <p class="text-lg sm:text-xl text-neutral-300 max-w-3xl mx-auto leading-relaxed mb-8">
                Practical articles on brand building, user experience architecture, Laravel development, and creative strategy in Africa and globally.
            </p>
        </div>
    </section>

    <!-- Articles Grid (ScrewFast Blog UI) -->
    <section class="py-16 sm:py-24 border-b border-[#2d323e]/60">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Article 1 -->
                <article class="sf-card sf-card-hover p-6 sm:p-7 bg-[#181b22] flex flex-col justify-between group">
                    <div>
                        <div class="h-40 rounded-xl bg-neutral-900 border border-neutral-800 mb-5 flex items-center justify-center text-xs font-mono text-neutral-400">
                            [ARTICLE COVER — BRAND IDENTITY]
                        </div>
                        <div class="flex items-center justify-between text-xs font-mono text-neutral-400 mb-3">
                            <span class="text-yellow-400 font-bold uppercase">Strategy</span>
                            <span>5 min read</span>
                        </div>
                        <h2 class="text-xl font-bold text-white mb-3 group-hover:text-yellow-400 transition-colors">
                            Clarity Before Decoration: Why Most Brand Redesigns Fail to Convert
                        </h2>
                        <p class="text-sm text-neutral-300 leading-relaxed mb-6">
                            How focusing on value propositions, audience psychology, and clear typography outperforms decorative design trends.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-neutral-800 flex items-center justify-between text-xs">
                        <span class="text-neutral-400 font-mono">By ColorSpire Team</span>
                        <span class="text-yellow-400 font-bold group-hover:underline">Read Article →</span>
                    </div>
                </article>

                <!-- Article 2 -->
                <article class="sf-card sf-card-hover p-6 sm:p-7 bg-[#181b22] flex flex-col justify-between group">
                    <div>
                        <div class="h-40 rounded-xl bg-neutral-900 border border-neutral-800 mb-5 flex items-center justify-center text-xs font-mono text-neutral-400">
                            [ARTICLE COVER — LARAVEL ENGINEERING]
                        </div>
                        <div class="flex items-center justify-between text-xs font-mono text-neutral-400 mb-3">
                            <span class="text-yellow-400 font-bold uppercase">Engineering</span>
                            <span>7 min read</span>
                        </div>
                        <h2 class="text-xl font-bold text-white mb-3 group-hover:text-yellow-400 transition-colors">
                            Building Fast Mobile Websites on Laravel 12 with Zero Dependency Bloat
                        </h2>
                        <p class="text-sm text-neutral-300 leading-relaxed mb-6">
                            Why custom Blade components and Tailwind CSS v4 outperform heavyweight WordPress plugins on constrained cellular networks.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-neutral-800 flex items-center justify-between text-xs">
                        <span class="text-neutral-400 font-mono">By ColorSpire Team</span>
                        <span class="text-yellow-400 font-bold group-hover:underline">Read Article →</span>
                    </div>
                </article>

                <!-- Article 3 -->
                <article class="sf-card sf-card-hover p-6 sm:p-7 bg-[#181b22] flex flex-col justify-between group">
                    <div>
                        <div class="h-40 rounded-xl bg-neutral-900 border border-neutral-800 mb-5 flex items-center justify-center text-xs font-mono text-neutral-400">
                            [ARTICLE COVER — THE HUB ECOSYSTEM]
                        </div>
                        <div class="flex items-center justify-between text-xs font-mono text-neutral-400 mb-3">
                            <span class="text-yellow-400 font-bold uppercase">The Hub</span>
                            <span>4 min read</span>
                        </div>
                        <h2 class="text-xl font-bold text-white mb-3 group-hover:text-yellow-400 transition-colors">
                            The Hub: Connecting Young African Creators and Digital Initiatives
                        </h2>
                        <p class="text-sm text-neutral-300 leading-relaxed mb-6">
                            An inside look at our vision for building an interconnected creative ecosystem from Zambia to the wider world.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-neutral-800 flex items-center justify-between text-xs">
                        <span class="text-neutral-400 font-mono">By ColorSpire Team</span>
                        <span class="text-yellow-400 font-bold group-hover:underline">Read Article →</span>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    @include('sections.cta')
@endsection
