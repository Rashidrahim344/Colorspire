@php
$metaDescription = $locale === 'fr'
  ? 'Explorez la durabilité et la précision des outils ScrewFast, conçus aussi bien pour les professionnels que pour les passionnés.'
  : 'Explore the durability and precision of ScrewFast tools, designed for both professionals and enthusiasts.';
$ogTitle = $locale === 'fr' ? 'Outils Matériels | ScrewFast' : 'Hardware Tools | ScrewFast';
$pageTitle = ($locale === 'fr' ? 'Produits' : 'Products') . " | {$site['title']}";
@endphp

<x-layouts.app
  :title="$pageTitle"
  :customDescription="$metaDescription"
  :customOgTitle="$ogTitle"
  :lang="$locale"
>
  <div
    class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 2xl:max-w-full"
  >
    <div class="mb-4 flex items-center justify-between gap-8 sm:mb-8 md:mb-12">
      <div class="flex items-center gap-12">
        <h1
          class="text-2xl font-bold tracking-tight text-balance text-neutral-800 md:text-4xl md:leading-tight dark:text-neutral-200"
        >
          {{ $title }}
        </h1>
        @if($subTitle)
          <p class="hidden max-w-(--breakpoint-sm) text-pretty text-neutral-600 md:block dark:text-neutral-400">
            {{ $subTitle }}
          </p>
        @endif
      </div>
      <x-buttons.primary-cta :title="$customerStoriesBtn" url="#testimonials" :noArrow="true" />
    </div>

    <section class="grid grid-cols-1 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
      @foreach($products as $index => $item)
        @php
          $position = $index % 4;
        @endphp
        @if($position === 0 || $position === 3)
          <x-cards.card-small :product="$item" :productLocale="$locale" />
        @else
          <x-cards.card-wide :product="$item" :productLocale="$locale" />
        @endif
      @endforeach
    </section>
  </div>

  <x-sections.features.features-stats-alt
    :title="$whyTitle"
    :subTitle="$whySubTitle"
    :benefits="$benefits"
  />

  <x-sections.testimonials.testimonials-section-alt
    :title="$testimonialsTitle"
    :testimonials="$testimonials"
  />
</x-layouts.app>
