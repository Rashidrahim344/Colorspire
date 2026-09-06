@props([
    'id',
    'collapseId',
    'question',
    'answer',
    'first' => false,
])

@php
$accordionClass = $first ? 'hs-accordion pb-3 active' : 'hs-accordion pt-6 pb-3';
$contentClass = 'hs-accordion-content w-full overflow-hidden transition-[height] duration-300';
@endphp

<div class="{{ $accordionClass }}" id="{{ $id }}">
  <button
    class="hs-accordion-toggle group inline-flex w-full items-center justify-between gap-x-3 rounded-lg pb-3 text-start font-bold text-balance text-neutral-800 ring-zinc-500 outline-hidden transition hover:text-neutral-500 focus-visible:ring-3 md:text-lg dark:text-neutral-200 dark:ring-zinc-200 dark:hover:text-neutral-400 dark:focus:outline-hidden"
    aria-expanded="{{ $first ? 'true' : 'false' }}"
    aria-controls="{{ $collapseId }}"
  >
    {{ $question }}
    <x-icon name="accordionNotActive" />
    <x-icon name="accordionActive" />
  </button>
  <div
    id="{{ $collapseId }}"
    role="region"
    aria-labelledby="{{ $id }}"
    class="{{ $first ? $contentClass : 'hidden ' . $contentClass }}"
  >
    <p class="text-pretty text-neutral-600 dark:text-neutral-400">
      {{ $answer }}
    </p>
  </div>
</div>
