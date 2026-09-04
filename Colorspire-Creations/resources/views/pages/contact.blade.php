@extends('layouts.app')

@section('title', 'Contact Us — Start a Project with ColorSpire Creations')
@section('meta_description', 'Get in touch with ColorSpire Creations. Request a quote or schedule a consultation for branding, graphic design, and web development.')

@section('content')
    <!-- Contact Hero -->
    <section class="relative pt-12 sm:pt-20 pb-16 sm:pb-24 border-b border-[#2d323e]/60 bg-grid-mesh">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold tracking-wide border border-yellow-400/30 bg-yellow-400/10 text-yellow-400 mb-6">
                <span>Start a Project</span>
            </div>

            <h1 class="text-4xl sm:text-6xl font-extrabold text-white tracking-tight leading-tight mb-6">
                Let's Build Something <span class="text-yellow-400">Meaningful</span>
            </h1>

            <p class="text-lg sm:text-xl text-neutral-300 max-w-3xl mx-auto leading-relaxed mb-8">
                Have an idea, a brand or a project in mind? Tell us about your goals and our team will get back to you with a strategic roadmap within 24 hours.
            </p>
        </div>
    </section>

    <!-- Contact Form & Coordinates Section (ScrewFast 2-column layout) -->
    <section class="py-16 sm:py-24 border-b border-[#2d323e]/60">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                <!-- Left Column: Studio Information -->
                <div class="lg:col-span-5">
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-white mb-4">
                        Studio Coordinates
                    </h2>
                    <p class="text-sm sm:text-base text-neutral-300 leading-relaxed mb-8">
                        Whether you are an emerging venture in Zambia or an international organization expanding globally, our studio is ready to collaborate.
                    </p>

                    <div class="space-y-6 mb-8 text-sm">
                        <div class="sf-card p-5 bg-[#181b22] flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-yellow-400/10 border border-yellow-400/30 flex items-center justify-center text-yellow-400 font-bold shrink-0">
                                📍
                            </div>
                            <div>
                                <div class="text-xs text-neutral-400 font-mono">Location</div>
                                <div class="text-white font-bold text-base">Lusaka, Zambia</div>
                                <div class="text-xs text-neutral-400 mt-0.5">Delivering to clients worldwide</div>
                            </div>
                        </div>

                        <div class="sf-card p-5 bg-[#181b22] flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-yellow-400/10 border border-yellow-400/30 flex items-center justify-center text-yellow-400 font-bold shrink-0">
                                ✉️
                            </div>
                            <div>
                                <div class="text-xs text-neutral-400 font-mono">Direct Inquiries</div>
                                <a href="mailto:hello@colorspirecreations.com" class="text-white font-bold text-base hover:text-yellow-400 transition-colors">
                                    hello@colorspirecreations.com
                                </a>
                                <div class="text-xs text-neutral-400 mt-0.5">Guaranteed reply &lt; 24 hours</div>
                            </div>
                        </div>

                        <div class="sf-card p-5 bg-[#181b22] flex items-start gap-4">
                            <div class="w-10 h-10 rounded-lg bg-yellow-400/10 border border-yellow-400/30 flex items-center justify-center text-yellow-400 font-bold shrink-0">
                                🌐
                            </div>
                            <div>
                                <div class="text-xs text-neutral-400 font-mono">The Ecosystem</div>
                                <a href="{{ route('hub') }}" class="text-white font-bold text-base hover:text-yellow-400 transition-colors">
                                    The ColorSpire Hub
                                </a>
                                <div class="text-xs text-neutral-400 mt-0.5">Explore child brands & partners</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Consultation Inquiry Form -->
                <div class="lg:col-span-7">
                    <div class="sf-card p-6 sm:p-10 bg-[#181b22] border-neutral-700 shadow-2xl">
                        <h3 class="text-2xl font-bold text-white mb-2">Request a Quote / Project Brief</h3>
                        <p class="text-sm text-neutral-400 mb-8">
                            Fill out the brief below and we will prepare a tailored proposal.
                        </p>

                        @if(isset($errors) && $errors->any())
                            <div class="mb-6 p-4 rounded-xl bg-rose-950/80 border border-rose-500/50 text-rose-200 text-sm" role="alert">
                                <div class="font-bold mb-1">Please review the following errors:</div>
                                <ul class="list-disc list-inside space-y-1 text-xs">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('contact.store') }}" method="POST" class="space-y-6">
                            @csrf

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-xs font-bold uppercase tracking-wider text-neutral-300 mb-2">
                                        Your Name <span class="text-yellow-400">*</span>
                                    </label>
                                    <input type="text" 
                                           id="name" 
                                           name="name" 
                                           value="{{ old('name') }}" 
                                           required
                                           placeholder="e.g. Mwila Chanda" 
                                           class="w-full px-4 py-3 rounded-xl bg-neutral-900 border border-neutral-700 text-white placeholder-neutral-500 text-sm focus:border-yellow-400 transition-colors">
                                </div>

                                <div>
                                    <label for="email" class="block text-xs font-bold uppercase tracking-wider text-neutral-300 mb-2">
                                        Work Email <span class="text-yellow-400">*</span>
                                    </label>
                                    <input type="email" 
                                           id="email" 
                                           name="email" 
                                           value="{{ old('email') }}" 
                                           required
                                           placeholder="mwila@company.com" 
                                           class="w-full px-4 py-3 rounded-xl bg-neutral-900 border border-neutral-700 text-white placeholder-neutral-500 text-sm focus:border-yellow-400 transition-colors">
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                                <div>
                                    <label for="service" class="block text-xs font-bold uppercase tracking-wider text-neutral-300 mb-2">
                                        Service Needed
                                    </label>
                                    <select id="service" 
                                            name="service" 
                                            class="w-full px-4 py-3 rounded-xl bg-neutral-900 border border-neutral-700 text-white text-sm focus:border-yellow-400 transition-colors">
                                        <option value="brand_identity" {{ (old('service') == 'brand_identity' || request('package') == 'Brand Builder') ? 'selected' : '' }}>Brand Identity & Systems</option>
                                        <option value="web_dev" {{ (old('service') == 'web_dev' || request('package') == 'Digital Presence') ? 'selected' : '' }}>Website Design & Development</option>
                                        <option value="graphic_design" {{ (old('service') == 'graphic_design' || request('package') == 'Creative Essentials') ? 'selected' : '' }}>Graphic Design & Assets</option>
                                        <option value="content_social" {{ old('service') == 'content_social' ? 'selected' : '' }}>Content & Social Media Management</option>
                                        <option value="hub_collaboration" {{ old('service') == 'hub_collaboration' ? 'selected' : '' }}>The Hub Initiative / Partnership</option>
                                    </select>
                                </div>

                                <div>
                                    <label for="budget" class="block text-xs font-bold uppercase tracking-wider text-neutral-300 mb-2">
                                        Service Package / Scope
                                    </label>
                                    <select id="budget" 
                                            name="budget" 
                                            class="w-full px-4 py-3 rounded-xl bg-neutral-900 border border-neutral-700 text-white text-sm focus:border-yellow-400 transition-colors">
                                        <option value="creative_essentials" {{ request('package') == 'Creative Essentials' ? 'selected' : '' }}>Creative Essentials Package</option>
                                        <option value="brand_builder" {{ request('package') == 'Brand Builder' ? 'selected' : '' }}>Brand Builder Package</option>
                                        <option value="digital_presence" {{ request('package') == 'Digital Presence' ? 'selected' : '' }}>Digital Presence Package</option>
                                        <option value="custom_scope" {{ empty(request('package')) ? 'selected' : '' }}>Custom / Enterprise Scope</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label for="message" class="block text-xs font-bold uppercase tracking-wider text-neutral-300 mb-2">
                                    Project Brief <span class="text-yellow-400">*</span>
                                </label>
                                <textarea id="message" 
                                          name="message" 
                                          rows="5" 
                                          required
                                          placeholder="Tell us about your brand, goals, key deliverables, and target launch timeline..." 
                                          class="w-full px-4 py-3 rounded-xl bg-neutral-900 border border-neutral-700 text-white placeholder-neutral-500 text-sm focus:border-yellow-400 transition-colors">{{ old('message') }}</textarea>
                            </div>

                            <div>
                                <button type="submit" class="sf-btn-yellow w-full text-base py-3.5">
                                    <span>Send Project Inquiry</span>
                                    <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                    </svg>
                                </button>
                            </div>

                            <p class="text-center text-xs text-neutral-500">
                                Your information is kept strictly confidential. From Zambia with excellence.
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
