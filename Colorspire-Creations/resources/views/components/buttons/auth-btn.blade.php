@props(['title' => 'Submit'])

@php
$classes = 'inline-flex w-full items-center justify-center gap-x-2 rounded-lg px-4 py-3 text-sm font-bold text-neutral-700 focus-visible:ring-3 outline-hidden transition duration-300 border border-transparent bg-yellow-400 dark:focus:outline-hidden hover:bg-yellow-500 2xl:text-base disabled:pointer-events-none disabled:opacity-50 ring-zinc-500 dark:ring-zinc-200';
@endphp

<button type="submit" {{ $attributes->merge(['class' => $classes]) }}>
  {{ $title }}
</button>
