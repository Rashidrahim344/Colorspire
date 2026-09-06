@props([
    'title',
    'subTitle' => null,
    'mainStatTitle',
    'mainStatSubTitle',
    'stats' => [],
])

<section
  class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 2xl:max-w-full"
>
  <div class="max-w-(--breakpoint-md)">
    <h2
      class="mb-4 text-3xl font-extrabold tracking-tight text-balance text-neutral-800 dark:text-neutral-200"
    >
      {{ $title }}
    </h2>
    @if($subTitle)
      <p class="mb-16 max-w-prose font-normal text-pretty text-neutral-600 sm:text-xl dark:text-neutral-400">
        {{ $subTitle }}
      </p>
    @endif
  </div>
  <div class="grid items-center gap-6 lg:grid-cols-12 lg:gap-12">
    <div class="lg:col-span-4">
      <x-blocks.stats-big :title="$mainStatTitle" :subTitle="$mainStatSubTitle" />
    </div>
    @if(!empty($stats))
      <div class="relative lg:col-span-8 lg:before:absolute lg:before:-start-12 lg:before:top-0 lg:before:h-full lg:before:w-px lg:before:bg-neutral-300 lg:dark:before:bg-neutral-700">
        <div class="grid grid-cols-2 gap-6 sm:gap-8 md:grid-cols-4 lg:grid-cols-3">
          @foreach($stats as $stat)
            <x-blocks.stats-small :title="$stat['stat']" :subTitle="$stat['description']" />
          @endforeach
        </div>
      </div>
    @endif
  </div>
</section>
