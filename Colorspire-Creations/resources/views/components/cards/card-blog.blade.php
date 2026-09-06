@props([
    'blogEntry',
    'blogLocale' => '',
])

@php
$blogId = preg_replace('/^(en|fr)\//', '', $blogEntry['id']);
$href = ($blogLocale && $blogLocale !== 'en')
    ? "/{$blogLocale}/blog/{$blogId}/"
    : "/blog/{$blogId}/";
$cardImg = str_starts_with($blogEntry['data']['cardImage'], 'http')
    ? $blogEntry['data']['cardImage']
    : asset($blogEntry['data']['cardImage']);
$pubDate = \Carbon\Carbon::parse($blogEntry['data']['pubDate'])->format('M d, Y');
@endphp

<a
  class="group relative block rounded-xl ring-zinc-500 outline-hidden transition duration-500 focus-visible:ring-3 dark:ring-zinc-200 dark:focus:outline-hidden"
  href="{{ $href }}"
>
  <div
    class="relative h-[350px] w-full shrink-0 overflow-hidden rounded-xl before:absolute before:inset-x-0 before:z-1 before:size-full before:bg-linear-to-t before:from-neutral-900/[.7]"
  >
    <img
      class="absolute start-0 top-0 size-full object-cover transition duration-500 group-hover:scale-110"
      src="{{ $cardImg }}"
      alt="{{ $blogEntry['data']['cardImageAlt'] }}"
      draggable="false"
      loading="eager"
    />
  </div>
  <div class="absolute inset-x-0 top-0 z-10">
    <div class="flex h-full flex-col p-4 sm:p-6">
      <div class="flex items-center">
        <x-avatars.avatar-blog :blogEntry="$blogEntry" />
        <div class="ms-2.5 sm:ms-4">
          <h4 class="font-bold text-neutral-50">
            {{ $blogEntry['data']['author'] }}
          </h4>
          <p class="text-xs text-neutral-50/[.8]">
            {{ $pubDate }}
          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="absolute inset-x-0 bottom-0 z-10">
    <div class="flex h-full flex-col p-4 sm:p-6">
      <h3
        class="text-lg font-bold text-balance text-neutral-50 group-hover:text-neutral-50/[.8] sm:text-3xl"
      >
        {{ $blogEntry['data']['title'] }}
      </h3>
      <p class="mt-2 text-pretty text-neutral-50/[.8]">
        {{ $blogEntry['data']['description'] }}
      </p>
    </div>
  </div>
</a>
