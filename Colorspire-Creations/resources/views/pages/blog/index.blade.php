@php
$pageTitle = "Blog | {$site['title']}";
@endphp

<x-layouts.app
  :title="$pageTitle"
  :customDescription="$metaDescription"
  :customOgTitle="$ogTitle"
  :lang="$locale"
>
  <section
    class="mx-auto max-w-[85rem] space-y-8 px-4 pt-16 sm:px-6 lg:px-8 2xl:max-w-full"
  >
    <div class="mx-auto max-w-3xl text-left sm:text-center">
      <h1
        class="block text-4xl font-bold tracking-tight text-balance text-neutral-800 md:text-5xl lg:text-6xl dark:text-neutral-200"
      >
        {{ $title }}
      </h1>
      <p
        class="mt-4 text-lg text-pretty text-neutral-600 dark:text-neutral-400"
      >
        {{ $subTitle }}
      </p>
    </div>
  </section>

  <section
    class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 2xl:max-w-full"
  >
    <div class="grid gap-6 lg:grid-cols-2">
      @foreach($otherPosts as $blogEntry)
        <x-cards.card-blog :blogEntry="$blogEntry" :blogLocale="$locale" />
      @endforeach
    </div>
  </section>

  @if($mostRecentPost)
    <section
      class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 2xl:max-w-full"
    >
      <x-cards.card-blog-recent :blogEntry="$mostRecentPost" :recentBlogLocale="$locale" />
    </section>
  @endif

  <section
    class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 2xl:max-w-full"
  >
    <div class="mx-auto mb-10 max-w-2xl text-center lg:mb-14">
      <h2
        class="text-2xl font-bold text-neutral-800 md:text-4xl md:leading-tight dark:text-neutral-200"
      >
        {{ $secondTitle }}
      </h2>
      <p class="mt-1 text-pretty text-neutral-600 dark:text-neutral-400">
        {{ $secondSubTitle }}
      </p>
    </div>
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      @foreach($insightPosts as $insightEntry)
        <x-cards.card-insight :insightEntry="$insightEntry" :insightLocale="$locale" />
      @endforeach
    </div>
  </section>
</x-layouts.app>
