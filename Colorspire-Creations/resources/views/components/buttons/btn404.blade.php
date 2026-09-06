@props([
    'title' => '',
    'id' => null,
    'noArrow' => false,
])

@php
$baseClasses = 'group inline-flex items-center justify-center gap-x-2 rounded-lg px-4 py-3 text-sm font-bold text-neutral-50 ring-zinc-500 transition duration-300 focus-visible:ring-3 outline-hidden';
$borderClasses = 'border border-transparent';
$bgColorClasses = 'bg-orange-400 hover:bg-orange-500 active:bg-orange-500 dark:focus:outline-hidden';
$disableClasses = 'disabled:pointer-events-none disabled:opacity-50';
$fontSizeClasses = '2xl:text-base';
$ringClasses = 'dark:ring-zinc-200';
@endphp

<button
  class="{{ $baseClasses }} {{ $borderClasses }} {{ $bgColorClasses }} {{ $disableClasses }} {{ $fontSizeClasses }} {{ $ringClasses }}"
  @if($id) id="{{ $id }}" @endif
>
  {{ $title }}
  @if(!$noArrow)
    <x-icon name="arrowRight" />
  @endif
</button>
