@extends('layouts.app')

@section('title', 'The Hub — ColorSpire Creations Ecosystem')
@section('meta_description', 'The ColorSpire Hub is a central gateway connecting visitors to ColorSpire Creations children, initiatives, projects and partners.')

@section('content')
    <!-- Hub Hero Section -->
    <section class="relative pt-12 sm:pt-20 pb-16 sm:pb-24 border-b border-slate-200/80 bg-slate-50">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold tracking-wide border border-amber-200 bg-amber-50 text-amber-700 mb-6">
                <span class="w-1.5 h-1.5 rounded-full bg-amber-500 animate-pulse"></span>
                <span>The ColorSpire Ecosystem</span>
            </div>

            <h1 class="text-4xl sm:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight mb-6">
                The ColorSpire <span class="text-amber-500">Hub</span>
            </h1>

            <p class="text-lg sm:text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed mb-8">
                A central gateway connecting visitors, partners, and collaborators to ColorSpire Creations' child brands, community initiatives, strategic projects, and partner organizations.
            </p>

            <div class="flex flex-wrap items-center justify-center gap-3 text-sm">
                <a href="#child-brands" class="sf-btn-neutral text-xs py-2 px-4 shadow-xs">
                    Child Brands & Initiatives
                </a>
                <a href="#partners" class="sf-btn-neutral text-xs py-2 px-4 shadow-xs">
                    Partner Organizations
                </a>
                <a href="#projects" class="sf-btn-neutral text-xs py-2 px-4 shadow-xs">
                    Featured Projects
                </a>
                <a href="{{ route('contact') }}" class="sf-btn-yellow text-xs py-2 px-4 shadow-xs">
                    Become a Partner
                </a>
            </div>
        </div>
    </section>

    <!-- 1. Child Brands & Initiatives Section -->
    <section id="child-brands" class="py-16 sm:py-24 border-b border-slate-200/80 bg-white">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                <div>
                    <span class="text-xs font-mono font-bold text-amber-600 uppercase tracking-widest">Ecosystem Entities</span>
                    <h2 class="text-2xl sm:text-4xl font-extrabold text-slate-900 mt-1">
                        Child Brands & Initiatives
                    </h2>
                </div>
                <p class="text-sm text-slate-500 max-w-md mt-2 md:mt-0">
                    Proprietary ventures and specialized sub-brands developed and nurtured under the ColorSpire umbrella.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <!-- Child Brand 1 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-7 flex flex-col justify-between shadow-sm hover:shadow-md hover:border-slate-300 transition-all group">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <div class="w-12 h-12 rounded-xl bg-amber-50 border border-amber-200/80 flex items-center justify-center text-amber-600 font-bold text-lg group-hover:bg-amber-400 group-hover:text-slate-950 transition-colors">
                                ✦
                            </div>
                            <span class="text-xs font-mono px-2.5 py-1 rounded bg-slate-100 text-slate-700 border border-slate-200">
                                Child Brand
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-amber-600 transition-colors">
                            ColorSpire Media
                        </h3>

                        <p class="text-sm text-slate-600 leading-relaxed mb-6">
                            Independent digital publishing, creative storytelling, and cultural essays exploring African design evolution.
                        </p>
                    </div>

                    <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                        <span class="text-xs text-slate-500 font-mono">Category: Creative Ventures</span>
                        <a href="{{ route('contact') }}" class="inline-flex items-center text-xs font-bold text-amber-600 hover:text-amber-700">
                            <span>Explore Platform</span>
                            <svg class="w-3.5 h-3.5 ml-1" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Child Brand 2 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-7 flex flex-col justify-between shadow-sm hover:shadow-md hover:border-slate-300 transition-all group">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <div class="w-12 h-12 rounded-xl bg-amber-50 border border-amber-200/80 flex items-center justify-center text-amber-600 font-bold text-lg group-hover:bg-amber-400 group-hover:text-slate-950 transition-colors">
                                ✦
                            </div>
                            <span class="text-xs font-mono px-2.5 py-1 rounded bg-slate-100 text-slate-700 border border-slate-200">
                                Initiative
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-amber-600 transition-colors">
                            Zambia Design Academy
                        </h3>

                        <p class="text-sm text-slate-600 leading-relaxed mb-6">
                            Community mentorship and workshops equipping emerging Zambian youth with practical UI/UX and brand design skills.
                        </p>
                    </div>

                    <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                        <span class="text-xs text-slate-500 font-mono">Category: Education & Mentorship</span>
                        <a href="{{ route('contact') }}" class="inline-flex items-center text-xs font-bold text-amber-600 hover:text-amber-700">
                            <span>Explore Program</span>
                            <svg class="w-3.5 h-3.5 ml-1" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Child Brand 3 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-7 flex flex-col justify-between shadow-sm hover:shadow-md hover:border-slate-300 transition-all group">
                    <div>
                        <div class="flex items-center justify-between mb-5">
                            <div class="w-12 h-12 rounded-xl bg-amber-50 border border-amber-200/80 flex items-center justify-center text-amber-600 font-bold text-lg group-hover:bg-amber-400 group-hover:text-slate-950 transition-colors">
                                ✦
                            </div>
                            <span class="text-xs font-mono px-2.5 py-1 rounded bg-slate-100 text-slate-700 border border-slate-200">
                                Digital Product
                            </span>
                        </div>

                        <h3 class="text-xl font-bold text-slate-900 mb-2 group-hover:text-amber-600 transition-colors">
                            SpireKit Components
                        </h3>

                        <p class="text-sm text-slate-600 leading-relaxed mb-6">
                            Open-source Blade and Tailwind starter kit optimized for lightning-fast mobile performance in African internet environments.
                        </p>
                    </div>

                    <div class="pt-4 border-t border-slate-100 flex items-center justify-between">
                        <span class="text-xs text-slate-500 font-mono">Category: Digital Innovation</span>
                        <a href="{{ route('contact') }}" class="inline-flex items-center text-xs font-bold text-amber-600 hover:text-amber-700">
                            <span>Explore Code</span>
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
    <section id="partners" class="py-16 sm:py-24 bg-slate-50 border-b border-slate-200/80">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                <div>
                    <span class="text-xs font-mono font-bold text-amber-600 uppercase tracking-widest">Network & Alliances</span>
                    <h2 class="text-2xl sm:text-4xl font-extrabold text-slate-900 mt-1">
                        Partner Organizations & Collaborators
                    </h2>
                </div>
                <p class="text-sm text-slate-500 max-w-md mt-2 md:mt-0">
                    Trusted strategic partners, creative collectives, and industry organizations co-building with ColorSpire.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <!-- Partner 1 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-7 shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-mono text-slate-400">Alliance 01</span>
                            <span class="text-xs bg-slate-100 text-slate-700 font-mono px-2 py-0.5 rounded border border-slate-200">Partner</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">
                            African Creative Tech Alliance
                        </h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-6">
                            Strategic collaborator bridging technology research, digital infrastructure, and young creative talent across the continent.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-xs">
                        <span class="text-slate-500 font-mono">Category: Strategic Alliance</span>
                        <a href="{{ route('contact') }}" class="text-amber-600 font-bold hover:underline">Learn More →</a>
                    </div>
                </div>

                <!-- Partner 2 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-7 shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-mono text-slate-400">Alliance 02</span>
                            <span class="text-xs bg-slate-100 text-slate-700 font-mono px-2 py-0.5 rounded border border-slate-200">Partner</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">
                            Lusaka Developer Collective
                        </h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-6">
                            Engineering guild advancing high-standard Laravel and PHP development through hackathons, peer audits, and open standards.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-xs">
                        <span class="text-slate-500 font-mono">Category: Engineering Guild</span>
                        <a href="{{ route('contact') }}" class="text-amber-600 font-bold hover:underline">Learn More →</a>
                    </div>
                </div>

                <!-- Partner 3 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-7 shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="text-xs font-mono text-slate-400">Alliance 03</span>
                            <span class="text-xs bg-slate-100 text-slate-700 font-mono px-2 py-0.5 rounded border border-slate-200">Partner</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mb-2">
                            Pan-African SME Growth Forum
                        </h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-6">
                            Regional enterprise accelerator connecting emerging businesses with world-class branding, design, and digital storefronts.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-xs">
                        <span class="text-slate-500 font-mono">Category: Enterprise Growth</span>
                        <a href="{{ route('contact') }}" class="text-amber-600 font-bold hover:underline">Learn More →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Featured Ecosystem Projects Section -->
    <section id="projects" class="py-16 sm:py-24 border-b border-slate-200/80 bg-white">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                <div>
                    <span class="text-xs font-mono font-bold text-amber-600 uppercase tracking-widest">Active Showcases</span>
                    <h2 class="text-2xl sm:text-4xl font-extrabold text-slate-900 mt-1">
                        Featured Ecosystem Projects
                    </h2>
                </div>
                <p class="text-sm text-slate-500 max-w-md mt-2 md:mt-0">
                    High-impact digital systems, platforms, and identity suites born inside the ColorSpire studio.
                </p>
            </div>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-8">
                <!-- Project Card 1 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 p-6 shadow-sm hover:shadow-md hover:border-slate-300 transition-all flex flex-col justify-between group">
                    <div>
                        <div class="h-36 rounded-xl bg-slate-50 border border-slate-200/80 mb-5 flex flex-col items-center justify-center text-xs font-mono text-slate-500 p-4 text-center group-hover:border-amber-300 transition-colors">
                            <span class="text-2xl mb-1">💻</span>
                            <span class="font-semibold text-slate-700">[LARAVEL PORTAL SYSTEM]</span>
                        </div>
                        <span class="text-xs font-mono font-bold text-amber-600 uppercase tracking-wider">Web Platform</span>
                        <h3 class="text-xl font-bold text-slate-900 mt-1 mb-2 group-hover:text-amber-600 transition-colors">
                            Kavango Commerce Engine
                        </h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-6">
                            High-velocity mobile shopping portal integrating mobile money settlement and instant automated client receipts.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-xs">
                        <span class="text-slate-500 font-mono">Built with Laravel 12</span>
                        <a href="{{ route('portfolio') }}" class="text-amber-600 font-bold hover:underline">View Case Study →</a>
                    </div>
                </div>

                <!-- Project Card 2 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 p-6 shadow-sm hover:shadow-md hover:border-slate-300 transition-all flex flex-col justify-between group">
                    <div>
                        <div class="h-36 rounded-xl bg-slate-50 border border-slate-200/80 mb-5 flex flex-col items-center justify-center text-xs font-mono text-slate-500 p-4 text-center group-hover:border-amber-300 transition-colors">
                            <span class="text-2xl mb-1">✨</span>
                            <span class="font-semibold text-slate-700">[BRAND SYSTEM SUITE]</span>
                        </div>
                        <span class="text-xs font-mono font-bold text-amber-600 uppercase tracking-wider">Brand Identity System</span>
                        <h3 class="text-xl font-bold text-slate-900 mt-1 mb-2 group-hover:text-amber-600 transition-colors">
                            Lumwana Clean Energy Brand
                        </h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-6">
                            Complete corporate visual identity guidelines, responsive vector marks, and collateral system for solar infrastructure.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-xs">
                        <span class="text-slate-500 font-mono">Brand & Typography</span>
                        <a href="{{ route('portfolio') }}" class="text-amber-600 font-bold hover:underline">View Case Study →</a>
                    </div>
                </div>

                <!-- Project Card 3 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 p-6 shadow-sm hover:shadow-md hover:border-slate-300 transition-all flex flex-col justify-between group">
                    <div>
                        <div class="h-36 rounded-xl bg-slate-50 border border-slate-200/80 mb-5 flex flex-col items-center justify-center text-xs font-mono text-slate-500 p-4 text-center group-hover:border-amber-300 transition-colors">
                            <span class="text-2xl mb-1">📣</span>
                            <span class="font-semibold text-slate-700">[PAN-AFRICA CAMPAIGN]</span>
                        </div>
                        <span class="text-xs font-mono font-bold text-amber-600 uppercase tracking-wider">Digital Campaign</span>
                        <h3 class="text-xl font-bold text-slate-900 mt-1 mb-2 group-hover:text-amber-600 transition-colors">
                            Inspire Africa Series
                        </h3>
                        <p class="text-sm text-slate-600 leading-relaxed mb-6">
                            Multi-channel creative marketing initiative highlighting Zambian creators, innovators, and entrepreneurs to international audiences.
                        </p>
                    </div>
                    <div class="pt-4 border-t border-slate-100 flex items-center justify-between text-xs">
                        <span class="text-slate-500 font-mono">Social & Motion</span>
                        <a href="{{ route('portfolio') }}" class="text-amber-600 font-bold hover:underline">View Case Study →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Connect / Partner CTA Banner -->
    <section class="py-16 sm:py-20 bg-slate-900 text-white">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="bg-slate-800/90 border border-slate-700 max-w-3xl mx-auto rounded-2xl p-8 sm:p-12 shadow-xl">
                <h3 class="text-2xl sm:text-3xl font-extrabold text-white mb-3">
                    Want to Launch an Initiative or Collaborate through The Hub?
                </h3>
                <p class="text-slate-300 text-sm sm:text-base leading-relaxed mb-8">
                    We are continually expanding our ecosystem with mission-driven founders, creative partners, and forward-thinking organizations.
                </p>
                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="{{ route('contact') }}" class="sf-btn-yellow text-sm py-3.5 px-6 w-full sm:w-auto shadow-md">
                        Inquire with ColorSpire
                    </a>
                    <a href="{{ route('home') }}" class="inline-flex items-center justify-center font-bold rounded-xl px-6 py-3.5 text-sm text-slate-200 bg-slate-700/80 hover:bg-slate-700 border border-slate-600 hover:text-white transition-all w-full sm:w-auto">
                        Back to Homepage
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
