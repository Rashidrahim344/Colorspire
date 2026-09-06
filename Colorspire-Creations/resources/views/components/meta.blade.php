@props([
    'title' => null,
    'meta' => null,
    'structuredData' => null,
    'customDescription' => null,
    'customOgTitle' => null,
])

@php
$site = \App\Services\ContentService::getSite();
$og = \App\Services\ContentService::getOg();
$seo = \App\Services\ContentService::getSeo();

$description = $customDescription ?: ($meta ?: $site['description']);
$ogTitle = $customOgTitle ?: $og['title'];
$ogDescription = $customDescription ?: $og['description'];
$siteURL = config('app.url', url('/'));
$canonical = url()->current();
$basePath = request()->path();
$socialImage = asset($og['image']);
$jsonLd = $structuredData ?: $seo['structuredData'];
@endphp

@if($jsonLd)
  <script type="application/ld+json">
    {!! json_encode($jsonLd, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
  </script>
@endif

<meta charset="utf-8" />
<meta content="{{ $description }}" name="description" />
<meta name="web_author" content="{{ $site['author'] }}" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<link rel="canonical" href="{{ $canonical }}" />

<link rel="alternate" hreflang="en" href="{{ url('/') }}" />
<link rel="alternate" hreflang="fr" href="{{ url('/fr') }}" />

<!-- Facebook Meta Tags -->
<meta property="og:locale" content="{{ str_starts_with($basePath, 'fr') ? 'fr_FR' : 'en_US' }}" />
<meta property="og:url" content="{{ $siteURL }}" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{ $ogTitle }}" />
<meta property="og:site_name" content="{{ $site['title'] }}" />
<meta property="og:description" content="{{ $ogDescription }}" />
<meta property="og:image" content="{{ $socialImage }}" />
<meta content="1200" property="og:image:width" />
<meta content="600" property="og:image:height" />
<meta content="image/png" property="og:image:type" />

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image" />
<meta property="twitter:domain" content="{{ parse_url($siteURL, PHP_URL_HOST) }}" />
<meta property="twitter:url" content="{{ $siteURL }}" />
<meta name="twitter:title" content="{{ $ogTitle }}" />
<meta name="twitter:description" content="{{ $ogDescription }}" />
<meta name="twitter:image" content="{{ $socialImage }}" />

<!-- Links to webmanifest -->
<link rel="manifest" href="/manifest.json" />

<!-- Favicons -->
<link href="/favicon.ico" rel="icon" sizes="any" type="image/x-icon" />
<link href="/images/icon.svg" rel="icon" type="image/svg+xml" sizes="any" />
<meta name="mobile-web-app-capable" content="yes" />
<link href="/images/icon.png" rel="apple-touch-icon" />
<link href="/images/icon.png" rel="shortcut icon" />
<meta name="theme-color" content="#facc15" />
