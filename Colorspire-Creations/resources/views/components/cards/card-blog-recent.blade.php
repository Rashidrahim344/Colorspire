@props([
    'blogEntry',
    'recentBlogLocale' => '',
])

@php
$blogId = preg_replace('/^(en|fr)\//', '', $blogEntry['id']);
$href = ($recentBlogLocale && $recentBlogLocale !== 'en')
    ? "/{$recentBlogLocale}/blog/{$blogId}/"
    : "/blog/{$blogId}/";
$cardImg = str_starts_with($blogEntry['data']['cardImage'], 'http')
    ? $blogEntry['data']['cardImage']
    : asset($blogEntry['data']['cardImage']);
@endphp

<div class="grid gap-8 sm:grid-cols-2 sm:items-center">
  <div class="sm:order-2">
    <div class="relative rounded-lg pt-[50%] sm:pt-[100%]">
      <img
        class="absolute start-0 top-0 size-full rounded-xl object-cover"
        src="{{ $cardImg }}"
        alt="{{ $blogEntry['data']['cardImageAlt'] }}"
        draggable="false"
        loading="eager"
      />
    </div>
  </div>
  <div class="sm:order-1">
    <h2
      class="text-2xl font-bold tracking-tight text-balance text-neutral-800 md:text-3xl lg:text-4xl lg:leading-tight xl:text-5xl xl:leading-tight dark:text-neutral-200"
    >
      <a
        class="ring-zinc-500 outline-hidden transition duration-300 hover:text-orange-400 focus-visible:ring-3 dark:text-neutral-300 dark:ring-zinc-200 dark:hover:text-neutral-50 dark:focus:outline-hidden"
        href="{{ $href }}"
      >
        {{ $blogEntry['data']['description'] }}
      </a>
    </h2>
    <div class="mt-6 flex items-center sm:mt-10">
      <x-avatars.avatar-blog-large :blogEntry="$blogEntry" />
      <div class="ms-3 sm:ms-4">
        <p class="font-bold text-neutral-800 sm:mb-1 dark:text-neutral-200">
          {{ $blogEntry['data']['author'] }}
        </p>
        <p class="text-xs text-neutral-500">
          {{ $blogEntry['data']['role'] ?? '' }}
        </p>
      </div>
    </div>
    <div class="mt-5">
      <x-buttons.primary-cta
        :url="$href"
        title="Read More"
      />
    </div>
  </div>
</div>
