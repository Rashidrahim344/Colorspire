@props(['id', 'dataTab', 'title', 'first' => false])

@php
$buttonClass = 'flex w-full justify-center rounded-xl border border-transparent p-3 outline-hidden ring-zinc-500 transition duration-300 hover:bg-neutral-100 focus-visible:ring-3 dark:ring-zinc-200 dark:hover:bg-neutral-700 dark:focus:outline-hidden md:p-5' . ($first ? ' active bg-neutral-100 hover:border-transparent dark:bg-white/[.05]' : '');
$headingClass = 'block text-center font-bold ' . ($first ? 'text-orange-400 dark:text-orange-300' : 'text-neutral-800 dark:text-neutral-200');
@endphp

<button
  type="button"
  class="{{ $buttonClass }}"
  id="{{ $id }}"
  data-target="{{ $dataTab }}"
  role="tab"
>
  <span class="{{ $headingClass }}">
    {{ $title }}
  </span>
</button>
