@props([
    'src',
    'alt' => 'Avatar',
])

@php
$imgSrc = str_starts_with($src, 'http') ? $src : asset($src);
@endphp

<div class="shrink-0">
  <img
    class="size-8 rounded-full sm:h-[2.875rem] sm:w-[2.875rem] object-cover"
    src="{{ $imgSrc }}"
    alt="{{ $alt }}"
    loading="lazy"
  />
</div>
