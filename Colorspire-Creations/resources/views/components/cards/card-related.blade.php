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
$pubDate = \Carbon\Carbon::parse($blogEntry['data']['pubDate'])->format('M d, Y');
@endphp

<a
  class="group block rounded-xl ring-zinc-500 outline-hidden transition duration-300 focus-visible:ring-3 dark:ring-zinc-200 dark:focus:outline-hidden"
  href="{{ $href }}"
>
  <div>
    <img
      class="aspect-video rounded-xl object-cover w-full"
      src="{{ $cardImg }}"
      alt="{{ $blogEntry['data']['cardImageAlt'] }}"
      draggable="false"
    />
    <h3
      class="mt-2 text-lg font-medium text-balance text-neutral-800 group-hover:text-orange-400 dark:text-neutral-300 dark:group-hover:text-neutral-50"
    >
      {{ $blogEntry['data']['title'] }}
    </h3>
    <p class="mt-2 text-sm text-neutral-600 dark:text-neutral-400">
      {{ $pubDate }}
    </p>
  </div>
</a>
