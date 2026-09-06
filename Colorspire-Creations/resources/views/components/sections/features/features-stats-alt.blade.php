@props([
    'title',
    'subTitle' => null,
    'benefits' => [],
])

<section
  class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 2xl:max-w-full"
>
  <div class="lg:grid lg:grid-cols-12 lg:items-center lg:gap-16">
    <div class="lg:col-span-7">
      <img class="rounded-xl" src="{{ asset('images/features-image.avif') }}" alt="Mockup of floating boxes" />
    </div>
    <div class="mt-5 sm:mt-10 lg:col-span-5 lg:mt-0">
      <div class="space-y-6 sm:space-y-8">
        <div class="space-y-2 md:space-y-4">
          <h2
            class="text-3xl font-bold text-balance text-neutral-800 lg:text-4xl dark:text-neutral-200"
          >
            {{ $title }}
          </h2>
          @if($subTitle)
            <p class="text-pretty text-neutral-600 dark:text-neutral-400">
              {{ $subTitle }}
            </p>
          @endif
        </div>
        @if(!empty($benefits))
          <ul class="space-y-2 sm:space-y-4">
            @foreach($benefits as $item)
              <li class="flex space-x-3">
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mt-0.5 h-6 w-6 text-orange-400 dark:text-orange-300 flex-none"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
                <span class="text-base font-medium text-pretty text-neutral-600 dark:text-neutral-400">
                  {{ $item }}
                </span>
              </li>
            @endforeach
          </ul>
        @endif
      </div>
    </div>
  </div>
</section>
