@props([
    'avatars' => [],
    'starCount' => 0,
    'rating' => '',
    'reviews' => '',
])

<div class="mt-6 lg:mt-10">
  <div class="py-5">
    <div class="text-center sm:flex sm:items-center sm:text-start">
      <div class="shrink-0 pb-5 sm:flex sm:pe-5 sm:pb-0">
        <div class="flex justify-center -space-x-3">
          @foreach($avatars as $src)
            <x-avatars.avatar :src="$src" alt="Avatar Description" />
          @endforeach
          <span
            class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-zinc-800 ring-2 ring-white dark:bg-zinc-900 dark:ring-zinc-800"
          >
            <span class="text-xs leading-none font-medium text-white uppercase"
              >7k+</span
            >
          </span>
        </div>
      </div>
      <div
        class="mx-auto h-px w-32 border-t border-neutral-400 sm:mx-0 sm:h-8 sm:w-auto sm:border-s sm:border-t-0 dark:border-neutral-500"
      >
      </div>
      <div class="flex flex-col items-center sm:items-start">
        <div class="flex items-baseline space-x-1 pt-5 sm:ps-5 sm:pt-0">
          <div class="flex space-x-1">
            @for($i = 0; $i < $starCount; $i++)
              <x-stars.full-star />
            @endfor
            <x-stars.half-star />
          </div>
          <p class="text-neutral-800 dark:text-neutral-200">
            {!! $rating !!}
          </p>
        </div>
        <div class="text-sm text-neutral-800 sm:ps-5 dark:text-neutral-200">
          <p>
            {!! $reviews !!}
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
