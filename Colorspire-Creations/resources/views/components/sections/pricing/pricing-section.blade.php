@props([
    'pricing',
])

<section
  class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 2xl:max-w-full"
>
  <div class="mx-auto mb-10 max-w-2xl text-center lg:mb-14">
    <h2
      class="text-2xl font-bold tracking-tight text-balance text-neutral-800 md:text-4xl md:leading-tight dark:text-neutral-200"
    >
      {{ $pricing['title'] }}
    </h2>
    <p class="mt-1 text-pretty text-neutral-600 dark:text-neutral-400">
      {{ $pricing['subTitle'] }}
    </p>
  </div>
  <div class="flex flex-wrap items-center justify-center gap-4 sm:gap-0">
    <!-- Starter Kit -->
    <div
      class="w-full rounded-xl bg-gray-800 p-6 sm:w-1/2 sm:rounded-r-none sm:p-8 lg:w-1/3"
    >
      <div class="mb-4">
        <h3 class="text-2xl font-bold text-neutral-100 sm:text-3xl">
          {{ $pricing['starterKit']['name'] }}
        </h3>
        <p class="text-indigo-300">{{ $pricing['starterKit']['description'] }}</p>
      </div>

      <div class="mb-4">
        <span class="text-4xl font-bold text-neutral-200"
          >{{ $pricing['starterKit']['price'] }}</span
        >
        <span class="text-lg font-bold text-neutral-300"
          >{{ $pricing['starterKit']['cents'] }}</span
        >
        <span class="ms-3 text-sm text-indigo-200"
          >{{ $pricing['starterKit']['billingFrequency'] }}</span
        >
      </div>
      <ul class="mb-6 space-y-2 text-neutral-300">
        @foreach($pricing['starterKit']['features'] as $feature)
          <li class="flex items-center gap-1.5">
            <x-icon name="checkCircle" />
            <span>{{ $feature }}</span>
          </li>
        @endforeach
      </ul>
      <a
        href="{{ $pricing['starterKit']['purchaseLink'] }}"
        class="block rounded-lg bg-gray-500 px-8 py-3 text-center text-sm font-bold text-gray-100 ring-indigo-300 outline-hidden transition duration-100 hover:bg-gray-600 focus-visible:ring-3 active:text-gray-300 md:text-base"
      >{{ $pricing['starterKit']['purchaseBtnTitle'] }}</a>
    </div>

    <!-- Professional Toolbox -->
    <div
      class="w-full rounded-xl bg-linear-to-tr from-[#FF512F] to-[#F09819] p-6 shadow-xl sm:w-1/2 sm:p-8"
    >
      <div
        class="mb-4 flex flex-col items-start justify-between gap-4 lg:flex-row"
      >
        <div>
          <h3 class="text-2xl font-bold text-neutral-100 sm:text-3xl">
            {{ $pricing['professionalToolbox']['name'] }}
          </h3>
          <p class="text-orange-200">
            {{ $pricing['professionalToolbox']['description'] }}
          </p>
        </div>

        <span
          class="bg-opacity-50 order-first inline-block rounded-full bg-orange-200/60 px-3 py-1 text-center text-xs font-bold tracking-wider text-orange-600 uppercase lg:order-none"
        >{{ $pricing['badge'] }}</span>
      </div>

      <div class="mb-4">
        <span class="text-6xl font-bold text-neutral-100"
          >{{ $pricing['professionalToolbox']['price'] }}</span
        >
        <span class="text-lg font-bold text-orange-100"
          >{{ $pricing['professionalToolbox']['cents'] }}</span
        >
        <span class="ms-3 text-orange-200"
          >{{ $pricing['professionalToolbox']['billingFrequency'] }}</span
        >
      </div>
      <ul class="mb-6 space-y-2 text-orange-100">
        @foreach($pricing['professionalToolbox']['features'] as $feature)
          <li class="flex items-center gap-1.5">
            <x-icon name="checkCircle" />
            <span>{{ $feature }}</span>
          </li>
        @endforeach
      </ul>
      <a
        href="{{ $pricing['professionalToolbox']['purchaseLink'] }}"
        class="bg-opacity-50 block rounded-lg bg-orange-200/40 px-8 py-3 text-center text-sm font-bold text-neutral-100 ring-orange-300 outline-hidden transition duration-300 hover:bg-orange-300 focus-visible:ring-3 active:bg-orange-400 md:text-base"
      >{{ $pricing['professionalToolbox']['purchaseBtnTitle'] }}</a>
    </div>
  </div>

  <div class="mt-8 flex items-center justify-center gap-x-3 md:mt-12">
    <p class="text-sm text-neutral-600 dark:text-neutral-400">
      {{ $pricing['thirdOption'] }}
    </p>
    <x-buttons.secondary-cta :title="$pricing['btnText']" url="#" />
  </div>
</section>
