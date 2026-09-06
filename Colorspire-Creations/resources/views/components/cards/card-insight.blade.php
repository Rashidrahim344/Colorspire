@props([
    'insightEntry',
    'insightLocale' => '',
    'label' => app()->getLocale() === 'fr' ? 'Lire plus' : 'Read more',
])

@php
$insightId = preg_replace('/^(en|fr)\//', '', $insightEntry['id']);
$href = ($insightLocale && $insightLocale !== 'en')
    ? "/{$insightLocale}/insights/{$insightId}/"
    : "/insights/{$insightId}/";
$cardImg = str_starts_with($insightEntry['data']['cardImage'], 'http')
    ? $insightEntry['data']['cardImage']
    : asset($insightEntry['data']['cardImage']);
@endphp

<a
  class="group rounded-xl ring-zinc-500 outline-hidden transition duration-300 focus-visible:ring-3 dark:ring-zinc-200 dark:focus:outline-hidden"
  href="{{ $href }}"
>
  <div class="relative overflow-hidden rounded-xl pt-[50%] sm:pt-[70%]">
    <img
      class="absolute start-0 top-0 size-full rounded-xl object-cover transition duration-500 ease-in-out group-hover:scale-105"
      src="{{ $cardImg }}"
      alt="{{ $insightEntry['data']['cardImageAlt'] }}"
      draggable="false"
    />
  </div>
  <div class="mt-7">
    <h3
      class="text-xl font-bold text-neutral-800 group-hover:text-neutral-600 dark:text-neutral-200 dark:group-hover:text-neutral-400"
    >
      {{ $insightEntry['data']['title'] }}
    </h3>
    <p class="mt-3 text-neutral-600 dark:text-neutral-400">
      {{ $insightEntry['data']['description'] }}
    </p>
    <p
      class="mt-5 inline-flex items-center gap-x-1 font-medium text-orange-400 decoration-2 group-hover:underline dark:text-orange-300"
    >
      {{ $label }}
      <x-icon name="arrowRightStatic" />
    </p>
  </div>
</a>
