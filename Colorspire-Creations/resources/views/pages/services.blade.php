@php
$metaDescription = $locale === 'fr'
  ? "D'un simple élément visuel à une présence numérique complète, ColorSpire allie créativité, cohérence et exécution pratique."
  : 'From a single visual asset to a complete digital presence, ColorSpire combines creativity, consistency and practical execution.';
$ogTitle = $locale === 'fr'
  ? "Services Créatifs & Numériques | {$site['title']}"
  : "Creative & Digital Services | {$site['title']}";
$title = $locale === 'fr'
  ? "Services Créatifs & Numériques | {$site['title']}"
  : "Creative & Digital Services | {$site['title']}";
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
