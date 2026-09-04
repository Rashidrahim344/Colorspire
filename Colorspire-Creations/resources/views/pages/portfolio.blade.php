@extends('layouts.app')

@section('title', 'Portfolio — ColorSpire Creations Showcase')
@section('meta_description', 'Explore selected brand identities, custom web applications, graphic design, and digital experiences created by ColorSpire Creations.')

@section('content')
    <!-- Portfolio Hero -->
    <section class="relative pt-12 sm:pt-20 pb-16 sm:pb-24 border-b border-[#2d323e]/60 bg-grid-mesh">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold tracking-wide border border-yellow-400/30 bg-yellow-400/10 text-yellow-400 mb-6">
                <span>Selected Showcase</span>
            </div>

            <h1 class="text-4xl sm:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                Creative Work & <span class="text-yellow-400">Digital Solutions</span>
            </h1>

            <p class="text-lg sm:text-xl text-neutral-300 max-w-3xl mx-auto leading-relaxed mb-8">
                Explore how we turn ideas into powerful brands, engaging communication materials, and high-performance websites for clients in Zambia and beyond.
            </p>

            <!-- Filter Categories -->
            <div class="flex flex-wrap items-center justify-center gap-2 text-xs sm:text-sm">
                <span class="px-4 py-2 rounded-lg bg-yellow-400 text-neutral-950 font-bold">All Projects</span>
                <span class="px-4 py-2 rounded-lg bg-neutral-800 text-neutral-300 border border-neutral-700 hover:text-white cursor-pointer">Brand Identity</span>
                <span class="px-4 py-2 rounded-lg bg-neutral-800 text-neutral-300 border border-neutral-700 hover:text-white cursor-pointer">Web Development</span>
                <span class="px-4 py-2 rounded-lg bg-neutral-800 text-neutral-300 border border-neutral-700 hover:text-white cursor-pointer">Graphic Design</span>
                <span class="px-4 py-2 rounded-lg bg-neutral-800 text-neutral-300 border border-neutral-700 hover:text-white cursor-pointer">Social Media</span>
            </div>
        </div>
    </section>

    <!-- Project Showcase Grid -->
    <section class="py-16 sm:py-24 border-b border-[#2d323e]/60">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="sf-card sf-card-hover p-6 sm:p-7 bg-[#181b22] flex flex-col justify-between group">
                    <div>
                        <div class="h-44 rounded-xl bg-neutral-900 border border-neutral-800 mb-5 flex flex-col items-center justify-center text-xs font-mono text-neutral-400 p-4 text-center">
                            <span class="text-2xl mb-2">🎨</span>
                            <span>[PORTFOLIO IMAGE — BRAND IDENTITY]</span>
                        </div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs font-mono font-bold text-yellow-400 uppercase tracking-wider">Brand Identity</span>
                            <span class="text-xs text-neutral-400 font-mono">Zambia</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-yellow-400 transition-colors">
                            [BRAND IDENTITY SHOWCASE 01]
                        </h3>
                        <p class="text-sm text-neutral-300 leading-relaxed mb-6">
                            [Project description placeholder — Complete visual identity design, logo suite, typography hierarchy, and corporate rollout package.]
                        </p>
                    </div>
                    <div class="pt-4 border-t border-neutral-800 flex items-center justify-between text-xs">
                        <span class="text-neutral-400 font-mono">Deliverables: Full Brand Book</span>
                        <a href="{{ route('contact') }}" class="text-yellow-400 font-bold hover:underline">Start Similar →</a>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="sf-card sf-card-hover p-6 sm:p-7 bg-[#181b22] flex flex-col justify-between group">
                    <div>
                        <div class="h-44 rounded-xl bg-neutral-900 border border-neutral-800 mb-5 flex flex-col items-center justify-center text-xs font-mono text-neutral-400 p-4 text-center">
                            <span class="text-2xl mb-2">💻</span>
                            <span>[PORTFOLIO IMAGE — WEB APPLICATION]</span>
                        </div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs font-mono font-bold text-yellow-400 uppercase tracking-wider">Web Development</span>
                            <span class="text-xs text-neutral-400 font-mono">Laravel 12</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-yellow-400 transition-colors">
                            [WEB PLATFORM SHOWCASE 02]
                        </h3>
                        <p class="text-sm text-neutral-300 leading-relaxed mb-6">
                            [Project description placeholder — High-performance responsive website and client portal engineered with Laravel, Vite, and Tailwind CSS.]
                        </p>
                    </div>
                    <div class="pt-4 border-t border-neutral-800 flex items-center justify-between text-xs">
                        <span class="text-neutral-400 font-mono">Performance: 100/100 Vitals</span>
                        <a href="{{ route('contact') }}" class="text-yellow-400 font-bold hover:underline">Start Similar →</a>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="sf-card sf-card-hover p-6 sm:p-7 bg-[#181b22] flex flex-col justify-between group">
                    <div>
                        <div class="h-44 rounded-xl bg-neutral-900 border border-neutral-800 mb-5 flex flex-col items-center justify-center text-xs font-mono text-neutral-400 p-4 text-center">
                            <span class="text-2xl mb-2">📣</span>
                            <span>[PORTFOLIO IMAGE — DIGITAL CAMPAIGN]</span>
                        </div>
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs font-mono font-bold text-yellow-400 uppercase tracking-wider">Content & Social</span>
                            <span class="text-xs text-neutral-400 font-mono">Campaign</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-yellow-400 transition-colors">
                            [DIGITAL CAMPAIGN SHOWCASE 03]
                        </h3>
                        <p class="text-sm text-neutral-300 leading-relaxed mb-6">
                            [Project description placeholder — Multi-channel content creation and creative marketing campaign resulting in elevated audience engagement.]
                        </p>
                    </div>
                    <div class="pt-4 border-t border-neutral-800 flex items-center justify-between text-xs">
                        <span class="text-neutral-400 font-mono">Reach: +140% Growth</span>
                        <a href="{{ route('contact') }}" class="text-yellow-400 font-bold hover:underline">Start Similar →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    @include('sections.cta')
@endsection
