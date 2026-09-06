@props([
    'title',
    'subTitle',
    'btnExists' => false,
    'btnTitle' => '',
    'btnURL' => '#',
    'img',
    'imgAlt',
])

@php
$imgSrc = str_starts_with($img, 'http') ? $img : asset($img);
@endphp

<section
  class="mx-auto max-w-[85rem] items-center gap-8 px-4 py-10 sm:px-6 sm:py-16 md:grid md:grid-cols-2 lg:grid lg:grid-cols-2 lg:px-8 lg:py-14 xl:gap-16 2xl:max-w-full"
>
  <img
    class="w-full rounded-xl"
    src="{{ $imgSrc }}"
    alt="{{ $imgAlt }}"
    draggable="false"
  />
  <div class="mt-4 md:mt-0">
    <h2
      class="mb-4 text-4xl font-extrabold tracking-tight text-balance text-neutral-800 dark:text-neutral-200"
    >
      {{ $title }}
    </h2>
    <p
      class="mb-4 max-w-prose font-normal text-pretty text-neutral-600 sm:text-lg dark:text-neutral-400"
    >
      {{ $subTitle }}
    </p>
    @if($btnExists)
      <x-buttons.primary-cta :title="$btnTitle" :url="$btnURL" />
    @endif
  </div>
</section>
