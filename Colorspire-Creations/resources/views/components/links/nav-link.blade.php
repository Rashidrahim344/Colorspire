@props([
    'url',
    'name',
])

@php
$navId = ($url === '/' || $url === '/fr') ? 'home' : str_replace('/', '', $url);
$currentPath = request()->path();
$isActive = request()->is(ltrim($url, '/')) || ($url === '/' && $currentPath === '/');
$colorClass = $isActive ? 'text-orange-400 dark:text-orange-300' : 'text-neutral-600 hover:text-neutral-500 dark:text-neutral-400 dark:hover:text-neutral-500';
@endphp

<a
  id="{{ $navId }}"
  href="{{ $url }}"
  class="rounded-lg text-base font-medium ring-zinc-500 outline-hidden focus-visible:ring-3 md:py-3 md:text-sm 2xl:text-base dark:ring-zinc-200 dark:focus:outline-hidden {{ $colorClass }}"
  @if($isActive) aria-current="page" @endif
>
  {{ $name }}
</a>
