@php
$metaDescription = $locale === 'fr'
  ? "Unissant l'expertise à votre vision, ScrewFast fournit un service exceptionnel et des solutions complètes dans le secteur du matériel et de la construction, de la consultation à l'achèvement du projet."
  : 'Uniting expertise with your vision, ScrewFast provides exceptional service and comprehensive solutions in the hardware and construction industry, from consultation to project completion.';
$ogTitle = $locale === 'fr'
  ? "Services de Consultation d'Experts | ScrewFast"
  : 'Expert Consultation Services | ScrewFast';
$title = "Services | {$site['title']}";
@endphp

<x-layouts.app
  :title="$title"
  :customDescription="$metaDescription"
  :customOgTitle="$ogTitle"
  :lang="$locale"
>
  <x-blocks.main-section
    :title="$mainSection['title']"
    :subTitle="$mainSection['subTitle']"
    :btnExists="true"
    :btnTitle="$mainSection['btnTitle']"
    :btnURL="$mainSection['btnURL']"
  />

  @foreach($articles as $article)
    @if($article['isRightSection'])
      <x-blocks.right-section
        :title="$article['title']"
        :subTitle="$article['subTitle']"
        :single="$article['single'] ?? false"
        :imgOne="$article['imgOne']"
        :imgOneAlt="$article['imgOneAlt']"
        :imgTwo="$article['imgTwo'] ?? null"
        :imgTwoAlt="$article['imgTwoAlt'] ?? ''"
        :btnExists="$article['btnExists'] ?? false"
        :btnTitle="$article['btnTitle'] ?? ''"
        :btnURL="$article['btnURL'] ?? '#'"
      />
    @else
      <x-blocks.left-section
        :title="$article['title']"
        :subTitle="$article['subTitle']"
        :img="$article['img']"
        :imgAlt="$article['imgAlt']"
        :btnExists="$article['btnExists'] ?? false"
        :btnTitle="$article['btnTitle'] ?? ''"
        :btnURL="$article['btnURL'] ?? '#'"
      />
    @endif
  @endforeach

  <x-sections.features.features-stats
    :title="$statsSection['title']"
    :subTitle="$statsSection['subTitle']"
    :mainStatTitle="$statsSection['mainStatTitle']"
    :mainStatSubTitle="$statsSection['mainStatSubTitle']"
    :stats="$statsSection['stats']"
  />
</x-layouts.app>
