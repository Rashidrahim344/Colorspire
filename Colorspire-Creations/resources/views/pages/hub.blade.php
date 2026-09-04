@extends('layouts.app')

@section('title', 'The Hub — ColorSpire Creations Ecosystem')
@section('meta_description', 'The ColorSpire Hub is a central gateway connecting visitors to ColorSpire Creations children, initiatives, projects and partners.')

@section('content')
    <!-- Hub Hero Section -->
    <section class="relative pt-12 sm:pt-20 pb-16 sm:pb-24 border-b border-[#2d323e]/60 bg-grid-mesh">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold tracking-wide border border-yellow-400/30 bg-yellow-400/10 text-yellow-400 mb-6">
                <span class="w-1.5 h-1.5 rounded-full bg-yellow-400 animate-pulse"></span>
                <span>The ColorSpire Ecosystem</span>
            </div>

            <h1 class="text-4xl sm:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                The ColorSpire <span class="text-yellow-400">Hub</span>
            </h1>

            <p class="text-lg sm:text-xl text-neutral-300 max-w-3xl mx-auto leading-relaxed mb-8">
                A central gateway connecting visitors, partners, and collaborators to ColorSpire Creations' child brands, community initiatives, strategic projects, and partner organizations.
            </p>

            <div class="flex flex-wrap items-center justify-center gap-4 text-sm">
                <a href="#child-brands" class="sf-btn-neutral text-xs py-2 px-4">
                    Child Brands & Initiatives
                </a>
                <a href="#partners" class="sf-btn-neutral text-xs py-2 px-4">
                    Partner Organizations
                </a>
                <a href="#projects" class="sf-btn-neutral text-xs py-2 px-4">
                    Featured Projects
                </a>
                <a href="{{ route('contact') }}" class="sf-btn-yellow text-xs py-2 px-4">
                    Become a Partner
                </a>
            </div>
        </div>
    </section>

    <!-- 1. Child Brands & Initiatives Section -->
    <section id="child-brands" class="py-16 sm:py-24 border-b border-[#2d323e]/60">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                <div>
                    <span class="text-xs font-mono font-bold text-yellow-400 uppercase tracking-widest">Ecosystem Entities</span>
                    <h2 class="text-2xl sm:text-4xl font-extrabold text-white mt-1">
                        Child Brands & Initiatives
                    </h2>
                </div>
                <p class="text-sm text-neutral-400 max-w-md mt-2 md:mt-0">
                    Proprietary ventures and specialized sub-brands developed and nurtured under the ColorSpire umbrella.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <!-- Child Brand 1 -->
                <div class="sf-card sf-card-hover p-6 sm:p-7 flex flex-col justify-between bg-[#181b22] group">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <div class="w-12 h-12 rounded-xl bg-yellow-400/10 border border-yellow-400/30 flex items-center justify-center text-yellow-400 font-bold text-lg">
                                ✦
                            </div>
                            <span class="text-xs font-mono px-2.5 py-1 rounded bg-neutral-800 text-yellow-400 border border-neutral-700">
                                Child Brand
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-yellow-400 transition-colors">
                            [CHILD BRAND NAME 01]
                        </h3>

                        <p class="text-sm text-neutral-300 leading-relaxed mb-6">
                            [Short description placeholder — Define the primary mission, service focus, or target demographic of this ColorSpire child entity.]
                        </p>
                    </div>

                    <div class="pt-4 border-t border-neutral-800 flex items-center justify-between">
                        <span class="text-xs text-neutral-400 font-mono">Category: Creative Ventures</span>
                        <a href="#" class="inline-flex items-center text-xs font-bold text-yellow-400 hover:text-yellow-300">
                            <span>Visit Platform</span>
                            <svg class="w-3.5 h-3.5 ml-1" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Child Brand 2 -->
                <div class="sf-card sf-card-hover p-6 sm:p-7 flex flex-col justify-between bg-[#181b22] group">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <div class="w-12 h-12 rounded-xl bg-yellow-400/10 border border-yellow-400/30 flex items-center justify-center text-yellow-400 font-bold text-lg">
                                ✦
                            </div>
                            <span class="text-xs font-mono px-2.5 py-1 rounded bg-neutral-800 text-yellow-400 border border-neutral-700">
                                Initiative
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-yellow-400 transition-colors">
                            [CHILD BRAND NAME 02]
                        </h3>

                        <p class="text-sm text-neutral-300 leading-relaxed mb-6">
                            [Short description placeholder — Define the initiative, community program, or specialized division powered by ColorSpire.]
                        </p>
                    </div>

                    <div class="pt-4 border-t border-neutral-800 flex items-center justify-between">
                        <span class="text-xs text-neutral-400 font-mono">Category: Community & Education</span>
                        <a href="#" class="inline-flex items-center text-xs font-bold text-yellow-400 hover:text-yellow-300">
                            <span>Visit Platform</span>
                            <svg class="w-3.5 h-3.5 ml-1" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Child Brand 3 -->
                <div class="sf-card sf-card-hover p-6 sm:p-7 flex flex-col justify-between bg-[#181b22] group">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <div class="w-12 h-12 rounded-xl bg-yellow-400/10 border border-yellow-400/30 flex items-center justify-center text-yellow-400 font-bold text-lg">
                                ✦
                            </div>
                            <span class="text-xs font-mono px-2.5 py-1 rounded bg-neutral-800 text-yellow-400 border border-neutral-700">
                                Digital Product
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-white mb-2 group-hover:text-yellow-400 transition-colors">
                            [CHILD BRAND NAME 03]
                        </h3>

                        <p class="text-sm text-neutral-300 leading-relaxed mb-6">
                            [Short description placeholder — Proprietary digital tool, media platform, or content initiative created in Zambia for global audiences.]
                        </p>
                    </div>

                    <div class="pt-4 border-t border-neutral-800 flex items-center justify-between">
                        <span class="text-xs text-neutral-400 font-mono">Category: Digital Innovation</span>
                        <a href="#" class="inline-flex items-center text-xs font-bold text-yellow-400 hover:text-yellow-300">
                            <span>Visit Platform</span>
                            <svg class="w-3.5 h-3.5 ml-1" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Partner Organizations & Collaborators Section -->
    <section id="partners" class="py-16 sm:py-24 bg-[#111317] border-b border-[#2d323e]/60">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                <div>
                    <span class="text-xs font-mono font-bold text-yellow-400 uppercase tracking-widest">Network & Alliances</span>
                    <h2 class="text-2xl sm:text-4xl font-extrabold text-white mt-1">
                        Partner Organizations & Collaborators
                    </h2>
                </div>
                <p class="text-sm text-neutral-400 max-w-md mt-2 md:mt-0">
                    Trusted strategic partners, creative collectives, and industry organizations co-building with ColorSpire.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <!-- Partner 1 -->
                <div class="sf-card p-6 sm:p-7 bg-[#161920] border-neutral-700 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-mono text-neutral-400">Alliance 01</span>
                            <span class="text-xs bg-neutral-800 text-white font-mono px-2 py-0.5 rounded">Partner</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">
                            [PARTNER NAME 01]
                        </h3>
                        <p class="text-sm text-neutral-300 leading-relaxed mb-6">
                            [Description placeholder — Strategic collaborator in technology, media, commercial business, or creative production.]
                        </p>
                    </div>
                    <div class="pt-4 border-t border-neutral-800 flex items-center justify-between text-xs">
                        <span class="text-neutral-400 font-mono">Category: Strategic Alliance</span>
                        <a href="#" class="text-yellow-400 font-bold hover:underline">Learn More →</a>
                    </div>
                </div>

                <!-- Partner 2 -->
                <div class="sf-card p-6 sm:p-7 bg-[#161920] border-neutral-700 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-mono text-neutral-400">Alliance 02</span>
                            <span class="text-xs bg-neutral-800 text-white font-mono px-2 py-0.5 rounded">Partner</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">
                            [PARTNER NAME 02]
                        </h3>
                        <p class="text-sm text-neutral-300 leading-relaxed mb-6">
                            [Description placeholder — Institutional partner, regional network, or digital agency collaborator.]
                        </p>
                    </div>
                    <div class="pt-4 border-t border-neutral-800 flex items-center justify-between text-xs">
                        <span class="text-neutral-400 font-mono">Category: Technology & Dev</span>
                        <a href="#" class="text-yellow-400 font-bold hover:underline">Learn More →</a>
                    </div>
                </div>

                <!-- Partner 3 -->
                <div class="sf-card p-6 sm:p-7 bg-[#161920] border-neutral-700 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-mono text-neutral-400">Alliance 03</span>
                            <span class="text-xs bg-neutral-800 text-white font-mono px-2 py-0.5 rounded">Partner</span>
                        </div>
                        <h3 class="text-xl font-bold text-white mb-2">
                            [PARTNER NAME 03]
                        </h3>
                        <p class="text-sm text-neutral-300 leading-relaxed mb-6">
                            [Description placeholder — Non-governmental or commercial collaborative organization.]
                        </p>
                    </div>
                    <div class="pt-4 border-t border-neutral-800 flex items-center justify-between text-xs">
                        <span class="text-neutral-400 font-mono">Category: Enterprise Services</span>
                        <a href="#" class="text-yellow-400 font-bold hover:underline">Learn More →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Featured Ecosystem Projects Section -->
    <section id="projects" class="py-16 sm:py-24 border-b border-[#2d323e]/60">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                <div>
                    <span class="text-xs font-mono font-bold text-yellow-400 uppercase tracking-widest">Active Showcases</span>
                    <h2 class="text-2xl sm:text-4xl font-extrabold text-white mt-1">
                        Featured Ecosystem Projects
                    </h2>
                </div>
                <p class="text-sm text-neutral-400 max-w-md mt-2 md:mt-0">
                    High-impact digital systems, platforms, and identity suites born inside the ColorSpire studio.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <!-- Project Card 1 -->
                <div class="sf-card sf-card-hover p-6 bg-[#181b22] border-neutral-700 flex flex-col justify-between">
                    <div>
                        <div class="h-32 rounded-xl bg-neutral-900 border border-neutral-800 mb-5 flex items-center justify-center text-xs font-mono text-neutral-400">
                            [PROJECT PREVIEW IMAGE 01]
                        </div>
                        <span class="text-xs font-mono font-bold text-yellow-400 uppercase tracking-wider">Web Platform</span>
                        <h3 class="text-xl font-bold text-white mt-1 mb-2">
                            [PROJECT NAME 01]
                        </h3>
                        <p class="text-sm text-neutral-300 leading-relaxed mb-6">
                            [Short project overview — Purpose, framework architecture, and key deliverables created by the studio.]
                        </p>
                    </div>
                    <div class="pt-4 border-t border-neutral-800 flex items-center justify-between text-xs">
                        <span class="text-neutral-400 font-mono">Built with Laravel 12</span>
                        <a href="{{ route('portfolio') }}" class="text-yellow-400 font-bold hover:underline">View Case Study →</a>
                    </div>
                </div>

                <!-- Project Card 2 -->
                <div class="sf-card sf-card-hover p-6 bg-[#181b22] border-neutral-700 flex flex-col justify-between">
                    <div>
                        <div class="h-32 rounded-xl bg-neutral-900 border border-neutral-800 mb-5 flex items-center justify-center text-xs font-mono text-neutral-400">
                            [PROJECT PREVIEW IMAGE 02]
                        </div>
                        <span class="text-xs font-mono font-bold text-yellow-400 uppercase tracking-wider">Brand Identity System</span>
                        <h3 class="text-xl font-bold text-white mt-1 mb-2">
                            [PROJECT NAME 02]
                        </h3>
                        <p class="text-sm text-neutral-300 leading-relaxed mb-6">
                            [Short project overview — Visual identity design, guidelines, typography hierarchy, and corporate rollout.]
                        </p>
                    </div>
                    <div class="pt-4 border-t border-neutral-800 flex items-center justify-between text-xs">
                        <span class="text-neutral-400 font-mono">Brand & Typography</span>
                        <a href="{{ route('portfolio') }}" class="text-yellow-400 font-bold hover:underline">View Case Study →</a>
                    </div>
                </div>

                <!-- Project Card 3 -->
                <div class="sf-card sf-card-hover p-6 bg-[#181b22] border-neutral-700 flex flex-col justify-between">
                    <div>
                        <div class="h-32 rounded-xl bg-neutral-900 border border-neutral-800 mb-5 flex items-center justify-center text-xs font-mono text-neutral-400">
                            [PROJECT PREVIEW IMAGE 03]
                        </div>
                        <span class="text-xs font-mono font-bold text-yellow-400 uppercase tracking-wider">Digital Campaign</span>
                        <h3 class="text-xl font-bold text-white mt-1 mb-2">
                            [PROJECT NAME 03]
                        </h3>
                        <p class="text-sm text-neutral-300 leading-relaxed mb-6">
                            [Short project overview — Multi-channel content creation, social campaign assets, and creative marketing.]
                        </p>
                    </div>
                    <div class="pt-4 border-t border-neutral-800 flex items-center justify-between text-xs">
                        <span class="text-neutral-400 font-mono">Social & Motion</span>
                        <a href="{{ route('portfolio') }}" class="text-yellow-400 font-bold hover:underline">View Case Study →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Connect / Partner CTA Banner -->
    <section class="py-16 sm:py-20 bg-[#14161b]">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="sf-card p-8 sm:p-12 bg-[#181b22] border-neutral-700 max-w-3xl mx-auto shadow-2xl">
                <h3 class="text-2xl sm:text-3xl font-extrabold text-white mb-3">
                    Want to Launch an Initiative or Collaborate through The Hub?
                </h3>
                <p class="text-neutral-300 text-sm sm:text-base leading-relaxed mb-8">
                    We are continually expanding our ecosystem with mission-driven founders, creative partners, and forward-thinking organizations.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('contact') }}" class="sf-btn-yellow text-sm py-3 px-6 w-full sm:w-auto">
                        Inquire with ColorSpire
                    </a>
                    <a href="{{ route('home') }}" class="sf-btn-neutral text-sm py-3 px-6 w-full sm:w-auto">
                        Back to Homepage
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
