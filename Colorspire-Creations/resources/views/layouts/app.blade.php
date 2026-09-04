<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth antialiased">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Primary SEO Meta Tags -->
    <title>@yield('title', 'Colorspire Creations — Designing Brands. Building Digital Experiences.')</title>
    <meta name="title" content="@yield('title', 'Colorspire Creations — Designing Brands. Building Digital Experiences.')">
    <meta name="description" content="@yield('meta_description', 'ColorSpire Creations is a Zambia-based creative and digital solutions studio. From Zambia to the World — Designed to Inspire.')">
    <meta name="keywords" content="ColorSpire Creations, graphic design Zambia, branding Lusaka, website development, digital marketing, creative digital solutions, The Hub">
    <meta name="author" content="ColorSpire Creations">
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', 'Colorspire Creations — Designing Brands. Building Digital Experiences.')">
    <meta property="og:description" content="@yield('meta_description', 'ColorSpire Creations helps businesses, organizations and individuals build stronger brands and meaningful digital experiences through design, content, branding and technology.')">
    <meta property="og:site_name" content="ColorSpire Creations">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('title', 'Colorspire Creations — Designing Brands. Building Digital Experiences.')">
    <meta name="twitter:description" content="@yield('meta_description', 'ColorSpire Creations helps businesses, organizations and individuals build stronger brands and meaningful digital experiences.')">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">

    <!-- Vite Styles and Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    {
      "@@context": "https://schema.org",
      "@@type": "ProfessionalService",
      "name": "ColorSpire Creations",
      "description": "Zambia-based creative and digital solutions studio. Graphic Design, Brand Identity, Website Development, and Digital Content.",
      "url": "{{ url('/') }}",
      "address": {
        "@@type": "PostalAddress",
        "addressCountry": "ZM",
        "addressLocality": "Lusaka"
      },
      "slogan": "From Zambia to the World — Designed to Inspire."
    }
    </script>
    @stack('head')
</head>
<body class="bg-[#14161b] text-neutral-200 min-h-screen flex flex-col selection:bg-yellow-400 selection:text-neutral-950">
    <!-- Accessible Skip Link -->
    <a href="#main-content" class="skip-link">Skip to main content</a>

    <!-- Session Feedback Banner -->
    @if(session('success'))
        <div id="flash-alert" class="fixed top-24 right-4 z-50 max-w-md bg-[#1f242e] border border-yellow-400/50 text-neutral-100 p-4 rounded-xl shadow-2xl backdrop-blur-md flex items-start space-x-3" role="alert">
            <svg class="w-5 h-5 text-yellow-400 shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <div class="flex-1 text-sm font-medium">
                {{ session('success') }}
            </div>
            <button id="flash-alert-close" type="button" class="text-neutral-400 hover:text-white transition-colors" aria-label="Close notification">
                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>
        </div>
    @endif

    <!-- Navigation Header -->
    @include('sections.header')

    <!-- Main Content Area -->
    <main id="main-content" class="flex-grow focus:outline-none" tabindex="-1">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('sections.footer')

    @stack('scripts')
</body>
</html>
