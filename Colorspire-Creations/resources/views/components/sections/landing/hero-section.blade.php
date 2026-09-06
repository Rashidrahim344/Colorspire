@props([
    'title',
    'subTitle' => null,
    'primaryBtn' => null,
    'primaryBtnURL' => '#',
    'secondaryBtn' => null,
    'secondaryBtnURL' => '#',
    'withReview' => false,
    'avatars' => [],
    'starCount' => 0,
    'rating' => '',
    'reviews' => '',
    'src' => null,
    'alt' => '',
])

@php
$heroSrc = $src ? (str_starts_with($src, 'http') ? $src : asset($src)) : null;
@endphp

<section
  class="mx-auto grid max-w-[85rem] gap-4 px-4 py-14 sm:px-6 md:grid-cols-2 md:items-center md:gap-8 lg:px-8 2xl:max-w-full"
>
  <div>
    <h1
      class="block text-3xl font-bold tracking-tight text-balance text-neutral-800 sm:text-4xl lg:text-6xl lg:leading-tight dark:text-neutral-200"
    >
      {!! $title !!}
    </h1>
    @if($subTitle)
      <p class="mt-3 text-lg leading-relaxed text-pretty text-neutral-700 lg:w-4/5 dark:text-neutral-400">
        {{ $subTitle }}
      </p>
    @endif
    <div class="mt-7 grid w-full gap-3 sm:inline-flex">
      @if($primaryBtn)
        <x-buttons.primary-cta :title="$primaryBtn" :url="$primaryBtnURL" />
      @endif
      @if($secondaryBtn)
        <x-buttons.secondary-cta :title="$secondaryBtn" :url="$secondaryBtnURL" />
      @endif
    </div>

    @if($withReview)
      <x-blocks.review-component
        :avatars="$avatars"
        :starCount="$starCount"
        :rating="$rating"
        :reviews="$reviews"
      />
    @endif
  </div>

  <div class="flex w-full">
    <div class="top-12 overflow-hidden">
      @if($heroSrc && $alt)
        <img
          src="{{ $heroSrc }}"
          alt="{{ $alt }}"
          class="h-full w-full scale-110 object-cover object-center"
          draggable="false"
          loading="eager"
        />
      @endif
    </div>
  </div>
</section>
