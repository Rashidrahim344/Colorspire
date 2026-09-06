@props([
    'title',
    'subTitle',
])

<div class="lg:pe-6 xl:pe-12">
  <p class="text-6xl leading-10 font-bold text-orange-400 dark:text-orange-300">
    {{ $title }}
  </p>
  <p class="mt-2 text-neutral-600 sm:mt-3 dark:text-neutral-400">{{ $subTitle }}</p>
</div>
