@extends('layouts.app')

@section('title', 'Services — ColorSpire Creations')
@section('meta_description', 'Explore our core creative and digital services: Graphic Design, Brand Identity, Web Development, and Content & Social Media.')

@section('content')
    <!-- Services Hero -->
    <section class="relative pt-12 sm:pt-20 pb-16 sm:pb-24 border-b border-[#2d323e]/60 bg-grid-mesh">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold tracking-wide border border-yellow-400/30 bg-yellow-400/10 text-yellow-400 mb-6">
                <span>Our Capabilities</span>
            </div>

            <h1 class="text-4xl sm:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                Services Built for <span class="text-yellow-400">Brand Growth</span>
            </h1>

            <p class="text-lg sm:text-xl text-neutral-300 max-w-3xl mx-auto leading-relaxed mb-8">
                ColorSpire Creations helps businesses, organizations and individuals build stronger brands and meaningful digital experiences through design, content, branding and technology.
            </p>

            <div class="flex items-center justify-center gap-4">
                <a href="#packages" class="sf-btn-yellow text-sm py-3 px-6">
                    View Service Packages
                </a>
                <a href="{{ route('contact') }}" class="sf-btn-neutral text-sm py-3 px-6">
                    Request a Quote
                </a>
            </div>
        </div>
    </section>

    <!-- Detailed 4 Core Services -->
    <section class="py-16 sm:py-24 border-b border-[#2d323e]/60">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            <!-- 1. Graphic Design -->
            <div class="sf-card p-8 sm:p-10 bg-[#181b22] border-neutral-700">
                <div class="grid lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-7">
                        <div class="w-12 h-12 rounded-xl bg-yellow-400/10 border border-yellow-400/30 flex items-center justify-center text-yellow-400 text-xl font-bold mb-4">
                            🎨
                        </div>
                        <h2 class="text-2xl sm:text-3xl font-extrabold text-white mb-3">
                            Graphic Design
                        </h2>
                        <p class="text-neutral-300 text-base leading-relaxed mb-6">
                            Creating visually powerful communication materials and creative assets that clarify your message and engage your audience across print, digital, and social channels.
                        </p>
                        <div class="grid sm:grid-cols-2 gap-3 text-sm text-neutral-300">
                            <div class="flex items-center gap-2">
                                <span class="text-yellow-400">✓</span> Marketing Flyers & Posters
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-yellow-400">✓</span> Corporate Reports & Profiles
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-yellow-400">✓</span> Digital Banners & Ad Creatives
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-yellow-400">✓</span> Event Signage & Billboards
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-5">
                        <div class="bg-neutral-900 border border-neutral-800 p-6 rounded-xl text-center">
                            <span class="text-xs font-mono text-neutral-400 uppercase">Turnaround</span>
                            <div class="text-2xl font-bold text-white mt-1 mb-3">Fast & Collaborative</div>
                            <a href="{{ route('contact') }}?service=graphic_design" class="sf-btn-yellow text-xs py-2 px-4 w-full text-center">
                                Inquire for Graphic Design
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 2. Brand Identity -->
            <div class="sf-card p-8 sm:p-10 bg-[#181b22] border-neutral-700">
                <div class="grid lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-7">
                        <div class="w-12 h-12 rounded-xl bg-yellow-400/10 border border-yellow-400/30 flex items-center justify-center text-yellow-400 text-xl font-bold mb-4">
                            ✨
                        </div>
                        <h2 class="text-2xl sm:text-3xl font-extrabold text-white mb-3">
                            Brand Identity & Systems
                        </h2>
                        <p class="text-neutral-300 text-base leading-relaxed mb-6">
                            Building memorable and consistent brand systems. We formulate visual guidelines, logo architectures, color palettes, and typographic hierarchies that make your business instantly recognizable.
                        </p>
                        <div class="grid sm:grid-cols-2 gap-3 text-sm text-neutral-300">
                            <div class="flex items-center gap-2">
                                <span class="text-yellow-400">✓</span> Primary & Secondary Logo Design
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-yellow-400">✓</span> Comprehensive Style Guides
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-yellow-400">✓</span> Typography & Color Tokens
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-yellow-400">✓</span> Stationery & Collateral Kits
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-5">
                        <div class="bg-neutral-900 border border-neutral-800 p-6 rounded-xl text-center">
                            <span class="text-xs font-mono text-neutral-400 uppercase">Impact</span>
                            <div class="text-2xl font-bold text-white mt-1 mb-3">Consistent Authority</div>
                            <a href="{{ route('contact') }}?service=brand_identity" class="sf-btn-yellow text-xs py-2 px-4 w-full text-center">
                                Inquire for Brand Identity
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. Web Development -->
            <div class="sf-card p-8 sm:p-10 bg-[#181b22] border-neutral-700">
                <div class="grid lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-7">
                        <div class="w-12 h-12 rounded-xl bg-yellow-400/10 border border-yellow-400/30 flex items-center justify-center text-yellow-400 text-xl font-bold mb-4">
                            💻
                        </div>
                        <h2 class="text-2xl sm:text-3xl font-extrabold text-white mb-3">
                            Website Design & Development
                        </h2>
                        <p class="text-neutral-300 text-base leading-relaxed mb-6">
                            Designing and developing modern websites and digital experiences. Engineered natively with Laravel and modern CSS for lightning-fast mobile performance, rock-solid security, and clear conversion paths.
                        </p>
                        <div class="grid sm:grid-cols-2 gap-3 text-sm text-neutral-300">
                            <div class="flex items-center gap-2">
                                <span class="text-yellow-400">✓</span> Custom Laravel 12 Web Architecture
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-yellow-400">✓</span> Mobile-First Responsive Layouts
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-yellow-400">✓</span> Search Engine & Social Metadata
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-yellow-400">✓</span> Sub-Second Core Web Vitals
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-5">
                        <div class="bg-neutral-900 border border-neutral-800 p-6 rounded-xl text-center">
                            <span class="text-xs font-mono text-neutral-400 uppercase">Stack</span>
                            <div class="text-2xl font-bold text-white mt-1 mb-3">Laravel 12 + Tailwind</div>
                            <a href="{{ route('contact') }}?service=web_dev" class="sf-btn-yellow text-xs py-2 px-4 w-full text-center">
                                Inquire for Web Development
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. Content & Social Media -->
            <div class="sf-card p-8 sm:p-10 bg-[#181b22] border-neutral-700">
                <div class="grid lg:grid-cols-12 gap-8 items-center">
                    <div class="lg:col-span-7">
                        <div class="w-12 h-12 rounded-xl bg-yellow-400/10 border border-yellow-400/30 flex items-center justify-center text-yellow-400 text-xl font-bold mb-4">
                            📣
                        </div>
                        <h2 class="text-2xl sm:text-3xl font-extrabold text-white mb-3">
                            Content Creation & Social Media Management
                        </h2>
                        <p class="text-neutral-300 text-base leading-relaxed mb-6">
                            Creating content that helps brands connect with their audiences. We produce high-engagement campaign visuals, digital storytelling assets, and consistent publishing schedules.
                        </p>
                        <div class="grid sm:grid-cols-2 gap-3 text-sm text-neutral-300">
                            <div class="flex items-center gap-2">
                                <span class="text-yellow-400">✓</span> Social Media Strategy & Roadmaps
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-yellow-400">✓</span> Custom Feed & Story Graphics
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-yellow-400">✓</span> Campaign Copywriting & Captions
                            </div>
                            <div class="flex items-center gap-2">
                                <span class="text-yellow-400">✓</span> Ongoing Channel Management
                            </div>
                        </div>
                    </div>
                    <div class="lg:col-span-5">
                        <div class="bg-neutral-900 border border-neutral-800 p-6 rounded-xl text-center">
                            <span class="text-xs font-mono text-neutral-400 uppercase">Focus</span>
                            <div class="text-2xl font-bold text-white mt-1 mb-3">Engagement & Retention</div>
                            <a href="{{ route('contact') }}?service=content_social" class="sf-btn-yellow text-xs py-2 px-4 w-full text-center">
                                Inquire for Content & Social
                            </a>
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
