@props([
    'src',
    'alt' => 'Avatar',
])

@php
$imgSrc = str_starts_with($src, 'http') ? $src : asset($src);
@endphp

<img
  class="inline-block h-8 w-8 rounded-full ring-2 ring-neutral-50 dark:ring-zinc-800 object-cover"
  src="{{ $imgSrc }}"
  alt="{{ $alt }}"
  loading="eager"
/>
