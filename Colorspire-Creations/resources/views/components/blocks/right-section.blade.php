@props([
    'title',
    'subTitle',
    'btnExists' => false,
    'btnTitle' => '',
    'btnURL' => '#',
    'single' => false,
    'imgOne' => null,
    'imgOneAlt' => '',
    'imgTwo' => null,
    'imgTwoAlt' => '',
])

@php
$imgOneSrc = str_starts_with($imgOne, 'http') ? $imgOne : asset($imgOne);
$imgTwoSrc = $imgTwo ? (str_starts_with($imgTwo, 'http') ? $imgTwo : asset($imgTwo)) : null;
@endphp

<section
  class="mx-auto max-w-[85rem] items-center gap-16 px-4 py-10 sm:px-6 lg:grid lg:grid-cols-2 lg:px-8 lg:py-14 2xl:max-w-full"
>
  <div>
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
  @if($single)
    <div class="mt-8">
      <img
        class="w-full rounded-lg"
        src="{{ $imgOneSrc }}"
        alt="{{ $imgOneAlt }}"
      />
    </div>
  @else
    <div class="mt-8 grid grid-cols-2 gap-4">
      <img
        class="w-full rounded-xl"
        src="{{ $imgOneSrc }}"
        alt="{{ $imgOneAlt }}"
        draggable="false"
      />
      @if($imgTwoSrc)
        <img
          class="mt-4 w-full rounded-xl lg:mt-10"
          src="{{ $imgTwoSrc }}"
          alt="{{ $imgTwoAlt }}"
          draggable="false"
        />
      @endif
    </div>
  @endif
</section>
