@props([
    'title' => null,
    'meta' => null,
    'structuredData' => null,
    'lang' => app()->getLocale(),
    'customDescription' => null,
    'customOgTitle' => null,
])

@php
$site = \App\Services\ContentService::getSite();
$pageTitle = $title ? "{$title} | {$site['title']}" : "{$site['title']} - {$site['description']}";
if ($title && str_contains($title, $site['title'])) {
    $pageTitle = $title;
}
@endphp

<!DOCTYPE html>
<html lang="{{ $lang }}" class="scrollbar-hide lenis lenis-smooth scroll-pt-16">
  <head>
    <x-meta
      :meta="$meta"
      :structuredData="$structuredData"
      :customDescription="$customDescription"
      :customOgTitle="$customOgTitle"
    />
    <title>{{ $pageTitle }}</title>
    <script>
      if (
        localStorage.getItem('hs_theme') === 'dark' ||
        (!('hs_theme' in localStorage) &&
          window.matchMedia('(prefers-color-scheme: dark)').matches)
      ) {
        document.documentElement.classList.add('dark');
      } else {
        document.documentElement.classList.remove('dark');
      }
    </script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
      .scrollbar-hide::-webkit-scrollbar {
        display: none;
      }
      .scrollbar-hide {
        -ms-overflow-style: none;
        scrollbar-width: none;
      }
    </style>
  </head>
  <body
    class="flex min-h-screen flex-col bg-neutral-200 selection:bg-yellow-400 selection:text-neutral-700 dark:bg-neutral-800"
  >
    <div
      class="mx-auto w-full max-w-(--breakpoint-2xl) grow px-4 sm:px-6 lg:px-8"
    >
      <x-navbar />
      <main>
        {{ $slot }}
      </main>
    </div>
    <x-footer />
    @stack('scripts')
  </body>
</html>
