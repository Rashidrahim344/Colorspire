@props([
    'title' => '',
    'tabs' => [],
])

<section
  class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 2xl:max-w-full"
>
  <div class="relative p-6 md:p-16">
    <div
      class="relative z-10 lg:grid lg:grid-cols-12 lg:items-center lg:gap-16"
    >
      <div class="mb-10 lg:order-2 lg:col-span-6 lg:col-start-8 lg:mb-0">
        <h2
          class="text-2xl font-bold text-neutral-800 sm:text-3xl dark:text-neutral-200"
        >
          {!! $title !!}
        </h2>
        <nav class="mt-5 grid gap-4 md:mt-10" aria-label="Tabs" role="tablist">
          @foreach($tabs as $index => $tab)
            <x-blocks.tab-nav
              :id="'tabs-with-card-item-' . ($index + 1)"
              :dataTab="'#tabs-with-card-' . ($index + 1)"
              :aria="'tabs-with-card-' . ($index + 1)"
              :heading="$tab['heading']"
              :content="$tab['content']"
              :first="$tab['first'] ?? ($index === 0)"
            >
              <x-icon :name="$tab['svg']" />
            </x-blocks.tab-nav>
          @endforeach
        </nav>
      </div>

      <div class="lg:col-span-6">
        <div class="relative">
          <div>
            @foreach($tabs as $index => $tab)
              <x-blocks.tab-content
                :id="'tabs-with-card-' . ($index + 1)"
                :aria="'tabs-with-card-item-' . ($index + 1)"
                :src="$tab['src']"
                :alt="$tab['alt']"
                :first="$tab['first'] ?? ($index === 0)"
                :second="$tab['second'] ?? false"
              />
            @endforeach
          </div>
        </div>
      </div>
    </div>

    <div class="absolute inset-0 grid h-full w-full grid-cols-12">
      <div
        class="col-span-full h-5/6 w-full rounded-xl bg-neutral-100 sm:h-3/4 lg:col-span-7 lg:col-start-6 lg:h-full dark:bg-white/[.075]"
      >
      </div>
    </div>
  </div>
</section>
