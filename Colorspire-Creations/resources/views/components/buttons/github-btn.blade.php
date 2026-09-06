@props([
    'title' => '',
    'url' => '#',
])

@php
$baseClasses = 'group inline-flex items-center justify-center gap-x-3 rounded-lg px-4 py-3 text-center text-sm font-medium text-neutral-700 ring-zinc-500 focus-visible:ring-3 transition duration-300 outline-hidden';
$borderClasses = 'border border-transparent';
$bgColorClasses = 'bg-yellow-400 dark:focus:outline-hidden';
$hoverClasses = 'hover:shadow-2xl hover:shadow-yellow-500';
$fontSizeClasses = '2xl:text-base';
$ringClasses = 'dark:ring-zinc-200';
@endphp

<a
  class="{{ $baseClasses }} {{ $borderClasses }} {{ $bgColorClasses }} {{ $hoverClasses }} {{ $fontSizeClasses }} {{ $ringClasses }}"
  href="{{ $url }}"
  rel="noopener noreferrer"
>
  <x-icon name="github" />
  {{ $title }}
</a>
