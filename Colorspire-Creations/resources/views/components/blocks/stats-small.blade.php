@props([
    'title',
    'subTitle',
])

<div>
  <p class="text-3xl font-bold text-orange-400 dark:text-orange-300">{{ $title }}</p>
  <p class="mt-1 text-neutral-600 dark:text-neutral-400">{{ $subTitle }}</p>
</div>
