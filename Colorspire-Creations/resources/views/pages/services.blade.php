@extends('layouts.app')

@section('title', 'Services — ColorSpire Creations')
@section('meta_description', 'Explore our core creative and digital services: Graphic Design, Brand Identity, Web Development, and Content & Social Media.')

@section('content')
    <!-- Services Hero -->
    <section class="relative pt-12 sm:pt-20 pb-16 sm:pb-24 border-b border-slate-200/80 bg-slate-50">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold tracking-wide border border-amber-200 bg-amber-50 text-amber-700 mb-6">
                <span>Our Capabilities</span>
            </div>

            <h1 class="text-4xl sm:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight mb-6">
                Services Built for <span class="text-amber-500">Brand Growth</span>
            </h1>

            <p class="text-lg sm:text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed mb-8">
                ColorSpire Creations helps businesses, organizations and individuals build stronger brands and meaningful digital experiences through design, content, branding and technology.
            </p>

            <div class="flex items-center justify-center gap-4">
                <a href="#packages" class="sf-btn-yellow text-sm py-3 px-6 shadow-sm">
                    View Service Packages
                </a>
                <a href="{{ route('contact') }}" class="sf-btn-neutral text-sm py-3 px-6">
                    Request a Quote
                </a>
            </div>
        </div>
    </section>

    <!-- Detailed 4 Core Services in Alternating Z-Pattern -->
    <section class="py-16 sm:py-24 border-b border-slate-200/80 bg-white">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <!-- 1. Graphic Design (Z-Pattern: Text Left, Visual Right) -->
            <div class="bg-white rounded-2xl p-8 sm:p-10 border border-slate-200/80 shadow-sm hover:shadow-md transition-all">
                <div class="grid lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-7">
                        <div class="w-12 h-12 rounded-xl bg-amber-50 border border-amber-200/80 flex items-center justify-center text-amber-600 text-xl font-bold mb-4">
                            🎨
                        </div>
                        <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mb-3">
                            Graphic Design
                        </h2>
                        <p class="text-slate-600 text-base leading-relaxed mb-6">
                            Creating visually powerful communication materials and creative assets that clarify your message and engage your audience across print, digital, and social channels.
                        </p>
                        <div class="grid sm:grid-cols-2 gap-3 text-sm text-slate-700">
                            <div class="flex items-center gap-2">
                                <span class="text-amber-500 font-bold">✓</span> Marketing Flyers & Posters
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-amber-500 font-bold">✓</span> Corporate Reports & Profiles
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-amber-500 font-bold">✓</span> Digital Banners & Ad Creatives
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-amber-500 font-bold">✓</span> Event Signage & Billboards
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-5">
                        <div class="bg-slate-50 border border-slate-200/80 p-6 rounded-xl text-center shadow-xs">
                            <span class="text-xs font-mono font-semibold uppercase text-amber-600 tracking-wider">Turnaround</span>
                            <div class="text-2xl font-bold text-slate-900 mt-1 mb-2">Fast & Collaborative</div>
                            <p class="text-xs text-slate-500 mb-4">Print-ready PDF, vector SVG, and optimized social formats.</p>
                            <a href="{{ route('contact') }}?service=graphic_design" class="sf-btn-yellow text-xs py-2.5 px-4 w-full text-center shadow-xs">
                                Inquire for Graphic Design
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. Brand Identity (Z-Pattern: Visual Left, Text Right) -->
            <div class="bg-white rounded-2xl p-8 sm:p-10 border border-slate-200/80 shadow-sm hover:shadow-md transition-all">
                <div class="grid lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-5 order-2 lg:order-1">
                        <div class="bg-slate-50 border border-slate-200/80 p-6 rounded-xl text-center shadow-xs">
                            <span class="text-xs font-mono font-semibold uppercase text-amber-600 tracking-wider">Impact</span>
                            <div class="text-2xl font-bold text-slate-900 mt-1 mb-2">Consistent Authority</div>
                            <p class="text-xs text-slate-500 mb-4">Complete brand manual, typography hierarchy, and export suites.</p>
                            <a href="{{ route('contact') }}?service=brand_identity" class="sf-btn-yellow text-xs py-2.5 px-4 w-full text-center shadow-xs">
                                Inquire for Brand Identity
                            </a>
                        </div>
                    </div>
                    <div class="lg:col-span-7 order-1 lg:order-2">
                        <div class="w-12 h-12 rounded-xl bg-amber-50 border border-amber-200/80 flex items-center justify-center text-amber-600 text-xl font-bold mb-4">
                            ✨
                        </div>
                        <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mb-3">
                            Brand Identity & Systems
                        </h2>
                        <p class="text-slate-600 text-base leading-relaxed mb-6">
                            Building memorable and consistent brand systems. We formulate visual guidelines, logo architectures, color palettes, and typographic hierarchies that make your business instantly recognizable.
                        </p>
                        <div class="grid sm:grid-cols-2 gap-3 text-sm text-slate-700">
                            <div class="flex items-center gap-2">
                                <span class="text-amber-500 font-bold">✓</span> Primary & Secondary Logo Design
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-amber-500 font-bold">✓</span> Comprehensive Style Guides
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-amber-500 font-bold">✓</span> Typography & Color Tokens
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-amber-500 font-bold">✓</span> Stationery & Collateral Kits
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. Web Development (Z-Pattern: Text Left, Visual Right) -->
            <div class="bg-white rounded-2xl p-8 sm:p-10 border border-slate-200/80 shadow-sm hover:shadow-md transition-all">
                <div class="grid lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-7">
                        <div class="w-12 h-12 rounded-xl bg-amber-50 border border-amber-200/80 flex items-center justify-center text-amber-600 text-xl font-bold mb-4">
                            💻
                        </div>
                        <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mb-3">
                            Website Design & Development
                        </h2>
                        <p class="text-slate-600 text-base leading-relaxed mb-6">
                            Designing and developing modern websites and digital experiences. Engineered natively with Laravel and modern CSS for lightning-fast mobile performance, rock-solid security, and clear conversion paths.
                        </p>
                        <div class="grid sm:grid-cols-2 gap-3 text-sm text-slate-700">
                            <div class="flex items-center gap-2">
                                <span class="text-amber-500 font-bold">✓</span> Custom Laravel 12 Web Architecture
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-amber-500 font-bold">✓</span> Mobile-First Responsive Layouts
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-amber-500 font-bold">✓</span> Search Engine & Social Metadata
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-amber-500 font-bold">✓</span> Sub-Second Core Web Vitals
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-5">
                        <div class="bg-slate-50 border border-slate-200/80 p-6 rounded-xl text-center shadow-xs">
                            <span class="text-xs font-mono font-semibold uppercase text-amber-600 tracking-wider">Stack</span>
                            <div class="text-2xl font-bold text-slate-900 mt-1 mb-2">Laravel 12 + Tailwind</div>
                            <p class="text-xs text-slate-500 mb-4">Clean Blade components, Vite bundling, zero bloat.</p>
                            <a href="{{ route('contact') }}?service=web_dev" class="sf-btn-yellow text-xs py-2.5 px-4 w-full text-center shadow-xs">
                                Inquire for Web Development
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. Content & Social Media (Z-Pattern: Visual Left, Text Right) -->
            <div class="bg-white rounded-2xl p-8 sm:p-10 border border-slate-200/80 shadow-sm hover:shadow-md transition-all">
                <div class="grid lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-5 order-2 lg:order-1">
                        <div class="bg-slate-50 border border-slate-200/80 p-6 rounded-xl text-center shadow-xs">
                            <span class="text-xs font-mono font-semibold uppercase text-amber-600 tracking-wider">Focus</span>
                            <div class="text-2xl font-bold text-slate-900 mt-1 mb-2">Engagement & Growth</div>
                            <p class="text-xs text-slate-500 mb-4">Editorial calendar, multi-channel templates, brand voice alignment.</p>
                            <a href="{{ route('contact') }}?service=content_social" class="sf-btn-yellow text-xs py-2.5 px-4 w-full text-center shadow-xs">
                                Inquire for Content & Social
                            </a>
                        </div>
                    </div>
                    <div class="lg:col-span-7 order-1 lg:order-2">
                        <div class="w-12 h-12 rounded-xl bg-amber-50 border border-amber-200/80 flex items-center justify-center text-amber-600 text-xl font-bold mb-4">
                            📣
                        </div>
                        <h2 class="text-2xl sm:text-3xl font-extrabold text-slate-900 mb-3">
                            Content Creation & Social Media Management
                        </h2>
                        <p class="text-slate-600 text-base leading-relaxed mb-6">
                            Creating content that helps brands connect with their audiences. We produce high-engagement campaign visuals, digital storytelling assets, and consistent publishing schedules.
                        </p>
                        <div class="grid sm:grid-cols-2 gap-3 text-sm text-slate-700">
                            <div class="flex items-center gap-2">
                                <span class="text-amber-500 font-bold">✓</span> Social Media Strategy & Roadmaps
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-amber-500 font-bold">✓</span> Custom Feed & Story Graphics
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-amber-500 font-bold">✓</span> Campaign Copywriting & Captions
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-amber-500 font-bold">✓</span> Ongoing Channel Management
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Packages Section -->
    <div id="packages">
        @include('sections.offer')
    </div>

    <!-- Final CTA -->
    @include('sections.cta')
@endsection
