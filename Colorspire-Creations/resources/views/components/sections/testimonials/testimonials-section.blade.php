@props([
    'title',
    'subTitle' => null,
    'testimonials' => [],
    'statistics' => [],
])

<section
  class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 2xl:max-w-full"
>
  <div
    class="lg:grid lg:grid-cols-12 lg:items-center lg:justify-between lg:gap-16"
  >
    <div class="lg:col-span-5 lg:col-start-1">
      <div class="mb-8">
        <h2
          class="mb-2 text-3xl font-bold text-neutral-800 lg:text-4xl dark:text-neutral-200"
        >
          {{ $title }}
        </h2>
        @if($subTitle)
          <p class="text-neutral-600 dark:text-neutral-400">{{ $subTitle }}</p>
        @endif
      </div>

      @if(!empty($testimonials))
        @foreach($testimonials as $testimonial)
          <x-sections.testimonials.testimonial-item
            :content="$testimonial['content']"
            :author="$testimonial['author']"
            :role="$testimonial['role']"
            :avatarSrc="$testimonial['avatarSrc']"
          />
        @endforeach
      @endif
    </div>
    @if(!empty($statistics))
      <div class="mt-10 lg:col-span-6 lg:col-end-13 lg:mt-0">
        <div class="space-y-6 sm:space-y-8">
          <ul class="grid grid-cols-2 divide-x-2 divide-y-2 divide-neutral-300 overflow-hidden dark:divide-neutral-700">
            @foreach($statistics as $index => $stat)
              <x-blocks.stats-grid
                :count="$stat['count']"
                :description="$stat['description']"
                :index="$index"
              />
            @endforeach
          </ul>
        </div>
      </div>
    @endif
  </div>
</section>
