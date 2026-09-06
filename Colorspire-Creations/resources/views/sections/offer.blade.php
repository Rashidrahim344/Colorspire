<section id="offer" class="py-16 sm:py-24 border-b border-slate-200/80 bg-slate-50">
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold tracking-wide border border-amber-200 bg-amber-50 text-amber-700 mb-4">
                <span>Tailored Offerings</span>
            </div>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight mb-4">
                Service Packages Built for Impact
            </h2>
            <p class="text-base sm:text-lg text-slate-600 leading-relaxed">
                Clear, transparent, and flexible engagement models designed to meet your creative and digital goals.
            </p>
        </div>

        <!-- 3 Offer Cards (ScrewFast structure) -->
        <div class="grid md:grid-cols-3 gap-8 items-stretch mb-12">
            <!-- Package 1: Creative Essentials -->
            <div class="bg-white rounded-2xl border border-slate-200/80 p-8 shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                <div>
                    <div class="text-xs font-mono font-bold text-amber-600 uppercase tracking-wider mb-2">Foundation</div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">Creative Essentials</h3>
                    <p class="text-sm text-slate-600 mb-6">
                        Essential communication design and marketing materials for growing initiatives and events.
                    </p>

                    <div class="border-t border-slate-100 pt-6 mb-6">
                        <div class="text-xs font-semibold uppercase tracking-wider text-slate-500 mb-4">Included Scope:</div>
                        <ul class="space-y-3 text-sm text-slate-700">
                            <li class="flex items-start gap-2.5">
                                <span class="text-amber-500 font-bold">✓</span>
                                <span>Core Graphic Design & Marketing Assets</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="text-amber-500 font-bold">✓</span>
                                <span>Flyers, Posters, Banners & Social Graphics</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="text-amber-500 font-bold">✓</span>
                                <span>High-Resolution Print & Web Export Files</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="text-amber-500 font-bold">✓</span>
                                <span>Fast-Track Production Turnaround</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="pt-6 border-t border-slate-100">
                    <a href="{{ route('contact') }}?package=Creative+Essentials" class="sf-btn-neutral w-full text-center text-sm">
                        Request a Quote
                    </a>
                </div>
            </div>

            <!-- Package 2: Brand Builder (Featured) -->
            <div class="bg-white rounded-2xl border-2 border-amber-500 p-8 shadow-lg hover:shadow-xl transition-all flex flex-col justify-between relative">
                <div class="absolute -top-3.5 left-1/2 -translate-x-1/2">
                    <span class="bg-amber-500 text-slate-950 text-xs font-black uppercase tracking-wider px-3.5 py-1 rounded-full shadow-sm">
                        Most Popular
                    </span>
                </div>

                <div>
                    <div class="text-xs font-mono font-bold text-amber-600 uppercase tracking-wider mb-2 mt-2">Brand Identity</div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">Brand Builder</h3>
                    <p class="text-sm text-slate-600 mb-6">
                        Complete visual identity system to establish professional credibility and stand out in your market.
                    </p>

                    <div class="border-t border-slate-100 pt-6 mb-6">
                        <div class="text-xs font-semibold uppercase tracking-wider text-amber-700 mb-4">Included Scope:</div>
                        <ul class="space-y-3 text-sm text-slate-800 font-medium">
                            <li class="flex items-start gap-2.5">
                                <span class="text-amber-500 font-bold">✓</span>
                                <span>Primary Logo & Brand Mark Suite</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="text-amber-500 font-bold">✓</span>
                                <span>Color Palette & Typography System</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="text-amber-500 font-bold">✓</span>
                                <span>Comprehensive Brand Style Guide</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="text-amber-500 font-bold">✓</span>
                                <span>Stationery & Social Media Kit</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="text-amber-500 font-bold">✓</span>
                                <span>Full Vector & Digital Asset Handoff</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="pt-6 border-t border-slate-100">
                    <a href="{{ route('contact') }}?package=Brand+Builder" class="sf-btn-yellow w-full text-center text-sm shadow-sm">
                        Start a Project
                    </a>
                </div>
            </div>

            <!-- Package 3: Digital Presence -->
            <div class="bg-white rounded-2xl border border-slate-200/80 p-8 shadow-sm hover:shadow-md transition-all flex flex-col justify-between">
                <div>
                    <div class="text-xs font-mono font-bold text-amber-600 uppercase tracking-wider mb-2">Digital Solution</div>
                    <h3 class="text-2xl font-bold text-slate-900 mb-2">Digital Presence</h3>
                    <p class="text-sm text-slate-600 mb-6">
                        Bespoke web design and development engineered for high performance, mobile speed, and conversion.
                    </p>

                    <div class="border-t border-slate-100 pt-6 mb-6">
                        <div class="text-xs font-semibold uppercase tracking-wider text-slate-500 mb-4">Included Scope:</div>
                        <ul class="space-y-3 text-sm text-slate-700">
                            <li class="flex items-start gap-2.5">
                                <span class="text-amber-500 font-bold">✓</span>
                                <span>Custom Website Design & Laravel Architecture</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="text-amber-500 font-bold">✓</span>
                                <span>100% Mobile-First Responsive Design</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="text-amber-500 font-bold">✓</span>
                                <span>Sub-Second Page Load Optimization</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="text-amber-500 font-bold">✓</span>
                                <span>Search Engine & Social Sharing Metadata</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <span class="text-amber-500 font-bold">✓</span>
                                <span>Lead Capture & Contact Funnels</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="pt-6 border-t border-slate-100">
                    <a href="{{ route('contact') }}?package=Digital+Presence" class="sf-btn-neutral w-full text-center text-sm">
                        Request a Quote
                    </a>
                </div>
            </div>
        </div>

        <!-- Custom Scope Banner matching ScrewFast -->
        <div class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-8 shadow-sm flex flex-col sm:flex-row items-center justify-between gap-6">
            <div>
                <h3 class="text-xl font-bold text-slate-900 mb-1">Need a Tailored or Multi-Disciplinary Scope?</h3>
                <p class="text-sm text-slate-600">
                    We create customized solutions combining branding, web engineering, and content strategy for your specific vision.
                </p>
            </div>
            <a href="{{ route('contact') }}" class="sf-btn-yellow text-sm shrink-0 whitespace-nowrap">
                Start a Project
            </a>
        </div>
    </div>
</section>
