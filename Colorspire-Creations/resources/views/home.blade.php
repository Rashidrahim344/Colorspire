@extends('layouts.app')

@section('title', 'Colorspire Creations — Designing Brands. Building Digital Experiences.')
@section('meta_description', 'ColorSpire Creations helps businesses and organizations turn ideas into powerful brands, engaging content and meaningful digital experiences.')

@section('content')
    {{-- 1. Hero Section (ScrewFast composition) --}}
    @include('sections.hero')

    {{-- 2. Trust Section (Client/partner strip) --}}
    @include('sections.trust')

    {{-- 3. Services / Features Grid (4 core capabilities) --}}
    @include('sections.features')

    {{-- 4. Capability Section (Split image/text layout) --}}
    @include('sections.capability')

    {{-- 5. Featured Visual Section (Turning Ideas Into Experiences) --}}
    @include('sections.visual-journey')

    {{-- 6. Testimonials & Results (Quote card + 4 metric placeholders) --}}
    @include('sections.testimonials-metrics')

    {{-- 7. Services / Offer Section (Packages & custom quote banner) --}}
    @include('sections.offer')

    {{-- 8. Frequently Asked Questions (ScrewFast accordion UI) --}}
    @include('sections.faq')

    {{-- 9. Final Call-to-Action Banner --}}
    @include('sections.cta')
@endsection