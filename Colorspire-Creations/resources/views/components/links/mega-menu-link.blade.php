@php
$servicesData = [
  [
    'title' => 'Explore Advice and Explanations',
    'description' => "Dive deep into helpful guides and explanations for all of ScrewFast's features",
    'icon' => 'guides',
    'url' => '#',
  ],
  [
    'title' => 'Discover Integrations',
    'description' => 'Supercharge Your Workflow. Seamless integrations with all your favorite tools',
    'icon' => 'puzzle',
    'url' => '#',
  ],
  [
    'title' => 'Expert Services',
    'description' => "Go beyond tools with ScrewFast's expert services",
    'icon' => 'rocket',
    'url' => '#',
  ],
  [
    'title' => 'Cutting-Edge Tools',
    'description' => "Build Smarter, Faster. Experience next-level efficiency with ScrewFast's cutting-edge construction tools",
    'icon' => 'hammer',
    'url' => '#',
  ],
  [
    'title' => 'Simple Plans',
    'description' => "Boost your efficiency with ScrewFast's straightforward, value-driven plans",
    'icon' => 'sparks',
    'url' => '#',
  ],
  [
    'title' => 'Community Forum',
    'description' => 'Learn, share, and connect with other ScrewFast users',
    'icon' => 'community',
    'url' => '#',
  ],
];

$successStoriesData = [
  [
    'image' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=1376&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80',
    'alt' => 'Portrait of a smiling person',
    'description' => 'See how ScrewFast has empowered businesses of all sizes to achieve outstanding results.',
    'learnMoreUrl' => '#',
  ],
];
@endphp

<div
  class="hs-dropdown py-3 [--adaptive:none] [--strategy:static] md:px-3 md:py-4 md:[--strategy:absolute] md:[--trigger:hover]"
>
  <button
    type="button"
    class="flex w-full items-center text-base font-medium text-neutral-600 hover:text-neutral-500 dark:text-neutral-400 dark:hover:text-neutral-500"
  >
    Services <x-icon name="chevronDown" />
  </button>

  <div
    class="hs-dropdown-menu hs-dropdown-open:opacity-100 start-0 top-full z-10 hidden w-full min-w-60 rounded-2xl bg-neutral-50 py-2 opacity-0 transition-[opacity,margin] duration-[0.1ms] before:absolute before:start-0 before:-top-5 before:h-5 before:w-full md:p-4 md:shadow-2xl md:duration-[150ms] dark:divide-neutral-700 dark:bg-neutral-800"
  >
    <div class="gap-4 md:grid md:grid-cols-2 lg:grid-cols-3">
      <div class="mx-1 flex flex-col md:mx-0">
        @foreach(array_slice($servicesData, 0, 3) as $data)
          <a
            class="group flex gap-x-5 rounded-lg p-4 hover:bg-neutral-100 dark:text-neutral-200 dark:hover:bg-neutral-500/10"
            href="{{ $data['url'] }}"
          >
            <x-icon :name="$data['icon']" class="mt-1 size-5 shrink-0" />
            <div class="grow">
              <p class="font-medium text-neutral-800 dark:text-neutral-200">
                {{ $data['title'] }}
              </p>
              <p class="text-sm text-neutral-500 group-hover:text-neutral-800 dark:text-neutral-400 dark:group-hover:text-neutral-200">
                {{ $data['description'] }}
              </p>
            </div>
          </a>
        @endforeach
      </div>

      <div class="mx-1 flex flex-col md:mx-0">
        @foreach(array_slice($servicesData, 3, 3) as $data)
          <a
            class="group flex gap-x-5 rounded-lg p-4 hover:bg-neutral-100 dark:text-neutral-200 dark:hover:bg-neutral-500/10"
            href="{{ $data['url'] }}"
          >
            <x-icon :name="$data['icon']" class="mt-1 size-5 shrink-0" />
            <div class="grow">
              <p class="font-medium text-neutral-800 dark:text-neutral-200">
                {{ $data['title'] }}
              </p>
              <p class="text-sm text-neutral-500 group-hover:text-neutral-800 dark:text-neutral-400 dark:group-hover:text-neutral-200">
                {{ $data['description'] }}
              </p>
            </div>
          </a>
        @endforeach
      </div>

      <div class="mx-1 flex flex-col pt-4 md:mx-0 md:pt-0">
        <span
          class="text-sm font-semibold text-neutral-800 uppercase dark:text-neutral-200"
        >Success Stories</span>
        <a
          class="group mt-2 flex items-center gap-x-5 rounded-xl p-3 hover:bg-neutral-100 dark:hover:bg-neutral-500/10"
          href="{{ $successStoriesData[0]['learnMoreUrl'] }}"
        >
          <img
            src="{{ $successStoriesData[0]['image'] }}"
            alt="{{ $successStoriesData[0]['alt'] }}"
            class="size-32 rounded-lg object-cover"
          />
          <div class="grow">
            <p class="text-sm text-neutral-800 dark:text-neutral-400">
              {{ $successStoriesData[0]['description'] }}
            </p>
            <p
              class="mt-3 inline-flex items-center gap-x-1 text-sm font-medium text-orange-400 decoration-2 hover:underline dark:text-orange-300"
            >
              Learn more
              <x-icon name="arrowRight" />
            </p>
          </div>
        </a>
      </div>
    </div>
  </div>
</div>
