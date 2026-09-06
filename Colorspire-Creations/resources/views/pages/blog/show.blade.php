@php
$metaDescription = $post['data']['contents'][0] ?? "Read {$post['data']['title']} on ScrewFast's blog";
$ogTitle = "{$post['data']['title']} | Blog | {$site['title']}";
$pageTitle = "{$post['data']['title']} | {$site['title']}";
$pubDate = \Carbon\Carbon::parse($post['data']['pubDate'])->format('M d, Y');
$cardImg = str_starts_with($post['data']['cardImage'], 'http')
    ? $post['data']['cardImage']
    : asset($post['data']['cardImage']);
$isFr = $locale === 'fr';
@endphp

<x-layouts.app
  :title="$pageTitle"
  :customDescription="$metaDescription"
  :customOgTitle="$ogTitle"
  :lang="$locale"
>
  <section class="mx-auto max-w-3xl px-4 pt-6 pb-12 sm:px-6 lg:px-8 lg:pt-10">
    <div class="max-w-2xl">
      <div class="mb-6 flex items-center justify-between">
        <div class="flex w-full gap-x-5 sm:items-center sm:gap-x-3">
          <x-avatars.avatar-blog-large :blogEntry="$post" />
          <div class="grow">
            <div class="flex items-center justify-between gap-x-2">
              <div>
                <span class="font-bold text-neutral-700 dark:text-neutral-300">
                  {{ $post['data']['author'] }}
                </span>
                <ul class="text-xs text-neutral-500">
                  <li
                    class="relative inline-block pe-6 before:absolute before:end-2 before:top-1/2 before:size-1 before:-translate-y-1/2 before:rounded-full before:bg-neutral-300 last:pe-0 last-of-type:before:hidden dark:text-neutral-400 dark:before:bg-neutral-600"
                  >
                    {{ $pubDate }}
                  </li>
                  <li
                    class="relative inline-block pe-6 before:absolute before:end-2 before:top-1/2 before:size-1 before:-translate-y-1/2 before:rounded-full before:bg-neutral-300 last:pe-0 last-of-type:before:hidden dark:text-neutral-400 dark:before:bg-neutral-600"
                  >
                    {{ $post['data']['readTime'] }} {{ $isFr ? 'min de lecture' : 'min read' }}
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <h2
        class="mb-3 text-2xl font-bold text-neutral-800 md:text-3xl dark:text-neutral-200"
      >
        {{ $post['data']['title'] }}
      </h2>

      <div class="mb-5 space-y-5 md:mb-8 md:space-y-8">
        @foreach($post['data']['contents'] as $index => $content)
          @if($index === 1)
            <p class="text-lg text-pretty text-neutral-700 dark:text-neutral-300">
              {{ $content }}
            </p>
            <img
              class="w-full rounded-xl object-cover"
              src="{{ $cardImg }}"
              alt="{{ $post['data']['cardImageAlt'] }}"
              draggable="false"
            />
          @else
            <p class="text-lg text-pretty text-neutral-700 dark:text-neutral-300">
              {{ $content }}
            </p>
          @endif
        @endforeach
      </div>

      <div
        class="mx-auto grid max-w-(--breakpoint-lg) gap-y-5 sm:flex sm:items-center sm:justify-between sm:gap-y-0"
      >
        <div
          class="flex flex-wrap gap-x-2 gap-y-1 sm:flex-nowrap sm:items-center sm:gap-y-0"
        >
          @foreach($post['data']['tags'] ?? [] as $tag)
            <span class="inline-flex items-center gap-x-1.5 rounded-lg bg-neutral-400/30 px-3 py-1.5 text-xs font-medium text-neutral-700 outline-hidden focus:outline-hidden focus-visible:ring-3 focus-visible:outline-hidden dark:bg-neutral-700/60 dark:text-neutral-300">
              {{ ucfirst($tag) }}
            </span>
          @endforeach
        </div>

        <div class="flex items-center justify-end gap-x-1.5">
          <x-buttons.bookmark />
          <div
            class="mx-3 block h-4 border-e border-neutral-400 dark:border-neutral-500"
          >
          </div>
          <div class="inline-flex">
            <x-buttons.social-share :pageTitle="$post['data']['title']" />
          </div>
        </div>
      </div>
    </div>

    <x-feedback.post-feedback
      :title="$isFr ? 'Cet article vous a-t-il été utile ?' : 'Was this post helpful?'"
      :firstChoice="$isFr ? 'Oui' : 'Yes'"
      :secondChoice="$isFr ? 'Non' : 'No'"
    />
  </section>

  @if(!empty($relatedPosts))
    <section class="mx-auto max-w-3xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14">
      <div class="mb-10 max-w-2xl">
        <h2
          class="text-2xl font-bold text-balance text-neutral-800 md:text-4xl md:leading-tight dark:text-neutral-200"
        >
          {{ $isFr ? 'Articles connexes' : 'Related articles' }}
        </h2>
      </div>

      <div class="grid grid-cols-2 gap-6">
        @foreach($relatedPosts as $entry)
          <x-cards.card-related :blogEntry="$entry" :recentBlogLocale="$locale" />
        @endforeach
      </div>
    </section>
  @endif
</x-layouts.app>
