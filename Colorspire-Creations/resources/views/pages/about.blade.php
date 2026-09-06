@extends('layouts.app')

@section('title', 'About Us — ColorSpire Creations')
@section('meta_description', 'Learn about ColorSpire Creations, a Zambia-based creative and digital solutions studio. From Zambia to the World — Designed to Inspire.')

@section('content')
    <!-- About Hero Section -->
    <section class="relative pt-12 sm:pt-20 pb-16 sm:pb-24 border-b border-slate-200/80 bg-slate-50">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold tracking-wide border border-amber-200 bg-amber-50 text-amber-700 mb-6">
                <span>Our Story & Mission</span>
            </div>

            <h1 class="text-4xl sm:text-6xl font-extrabold text-slate-900 tracking-tight leading-tight mb-6">
                From Zambia 🇿🇲 to the World —<br />
                <span class="text-amber-500">Designed to Inspire</span>.
            </h1>

            <p class="text-lg sm:text-xl text-slate-600 max-w-3xl mx-auto leading-relaxed mb-8">
                ColorSpire Creations is a Zambia-based creative and digital solutions studio. We help businesses, organizations and individuals build stronger brands and meaningful digital experiences through design, content, branding and technology.
            </p>
        </div>
    </section>

    <!-- Narrative & Values Section -->
    <section class="py-16 sm:py-24 border-b border-slate-200/80 bg-white">
        <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-12 gap-12 items-center mb-16">
                <div class="lg:col-span-6">
                    <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mb-6">
                        Why We Exist
                    </h2>
                    <p class="text-slate-600 text-base sm:text-lg leading-relaxed mb-6">
                        Too many brands are held back by fragmented visual identities, confusing messaging, and sluggish websites that fail to communicate value.
                    </p>
                    <p class="text-slate-600 text-base leading-relaxed mb-6">
                        At ColorSpire Creations, we believe that design is not mere decoration — it is a strategic business system. By bringing together visual design discipline, brand storytelling, and clean Laravel engineering, we build assets that command attention and drive conversion.
                    </p>
                </div>
                <div class="lg:col-span-6">
                    <div class="bg-slate-50 rounded-2xl border border-slate-200/80 p-8 shadow-sm">
                        <div class="text-xs font-mono text-amber-600 font-semibold uppercase tracking-wider mb-2">Our Operating Standard</div>
                        <h3 class="text-2xl font-bold text-slate-900 mb-4">The ColorSpire Philosophy</h3>
                        <ul class="space-y-3.5 text-sm text-slate-700">
                            <li class="flex items-start gap-3">
                                <span class="text-amber-600 font-bold">01.</span>
                                <span><strong class="text-slate-900">Clarity before Creativity:</strong> The audience must understand the offer before being impressed by visual flourishes.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-amber-600 font-bold">02.</span>
                                <span><strong class="text-slate-900">Strategy before Screens:</strong> Business goals and user journeys are locked in before opening design tools.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-amber-600 font-bold">03.</span>
                                <span><strong class="text-slate-900">Systems before Isolated Pages:</strong> Reusable design tokens, component architecture, and consistent identity rules.</span>
                            </li>
                            <li class="flex items-start gap-3">
                                <span class="text-amber-600 font-bold">04.</span>
                                <span><strong class="text-slate-900">Originality over Imitation:</strong> Original thinking tailored specifically to your unique organizational strengths.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Studio Pillars Grid -->
            <div class="grid sm:grid-cols-3 gap-8">
                <div class="bg-white rounded-2xl border border-slate-200/80 p-6 shadow-sm hover:shadow-md transition-all">
                    <div class="text-3xl mb-3">📍</div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Rooted in Zambia</h3>
                    <p class="text-sm text-slate-600">
                        Proudly based in Lusaka, Zambia, bringing rich perspective, cultural resonance, and homegrown ingenuity to every project.
                    </p>
                </div>
                <div class="bg-white rounded-2xl border border-slate-200/80 p-6 shadow-sm hover:shadow-md transition-all">
                    <div class="text-3xl mb-3">🌍</div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Global Standards</h3>
                    <p class="text-sm text-slate-600">
                        Engineered to compete on the world stage with world-class code quality, mobile responsiveness, and modern typography.
                    </p>
                </div>
                <div class="bg-white rounded-2xl border border-slate-200/80 p-6 shadow-sm hover:shadow-md transition-all">
                    <div class="text-3xl mb-3">🚀</div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">The Ecosystem</h3>
                    <p class="text-sm text-slate-600">
                        Connected through The ColorSpire Hub to empower young African creatives, digital initiatives, and partner enterprises.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    @include('sections.cta')
@endsection
