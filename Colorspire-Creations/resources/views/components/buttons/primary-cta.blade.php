@props(['title' => '', 'url' => '#', 'noArrow' => false])

@php
$baseClasses = 'group inline-flex items-center justify-center gap-x-2 rounded-lg px-4 py-3 text-sm font-bold text-neutral-50 ring-zinc-500 transition duration-300 focus-visible:ring-3 outline-hidden border border-transparent bg-orange-400 hover:bg-orange-500 active:bg-orange-500 dark:focus:outline-hidden disabled:pointer-events-none disabled:opacity-50 2xl:text-base dark:ring-zinc-200';
@endphp

<a {{ $attributes->merge(['class' => $baseClasses]) }} href="{{ $url }}">
  {{ $title }}
  @if(!$noArrow)
    <x-icon name="arrowRight" />
  @endif
</a>
