<x-layouts.app
  :title="$pageTitle"
  :customDescription="$metaDescription"
  :customOgTitle="$ogTitle"
  :lang="$locale"
>
  <div
    class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 2xl:max-w-full"
  >
    <div class="mb-8 flex flex-col gap-4 sm:mb-12 md:flex-row md:items-end md:justify-between">
      <div class="max-w-2xl">
        <span class="text-sm font-semibold uppercase tracking-wider text-yellow-500 dark:text-yellow-400">
          {{ $locale === 'fr' ? 'Portfolio & Études de Cas' : 'Portfolio & Case Studies' }}
        </span>
        <h1
          class="mt-2 text-3xl font-bold tracking-tight text-balance text-neutral-800 md:text-5xl md:leading-tight dark:text-neutral-200"
        >
          {{ $title }}
        </h1>
        @if($subTitle)
          <p class="mt-3 text-lg text-pretty text-neutral-600 dark:text-neutral-400">
            {{ $subTitle }}
          </p>
        @endif
      </div>
      <div>
        <x-buttons.primary-cta
          :title="$locale === 'fr' ? 'Démarrer un projet' : 'Start a Project'"
          :url="$locale === 'fr' ? '/fr/contact' : '/contact'"
          :noArrow="true"
        />
      </div>
    </div>

    <!-- Portfolio Category Filters -->
    <div class="mb-10 flex flex-wrap gap-2">
      @foreach($filters as $index => $filter)
        <button
          type="button"
          class="inline-flex items-center rounded-full px-4 py-2 text-xs sm:text-sm font-medium transition duration-300 {{ $index === 0 ? 'bg-yellow-400 text-neutral-900 font-semibold dark:bg-yellow-500 dark:text-neutral-900' : 'bg-neutral-100 text-neutral-600 hover:bg-neutral-200 dark:bg-neutral-800 dark:text-neutral-300 dark:hover:bg-neutral-700' }}"
        >
          {{ $filter }}
        </button>
      @endforeach
    </div>

    <!-- Portfolio Projects Grid -->
    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
      @foreach($projects as $index => $project)
        @php
          $data = $project['data'] ?? [];
          $main = $data['main'] ?? [];
          $imgCard = $main['imgCard'] ?? 'images/features-image.avif';
          $imgSrc = str_starts_with($imgCard, 'http') ? $imgCard : asset($imgCard);
        @endphp
        <div class="group flex flex-col overflow-hidden rounded-xl border border-neutral-200 bg-white shadow-xs transition duration-300 hover:shadow-md dark:border-neutral-700 dark:bg-neutral-800">
          <div class="relative h-60 w-full overflow-hidden bg-neutral-100 dark:bg-neutral-900">
            <img
              src="{{ $imgSrc }}"
              alt="{{ $main['imgAlt'] ?? ($project['title'] ?? 'Project') }}"
              class="h-full w-full object-cover object-center transition duration-500 group-hover:scale-105"
            />
            <div class="absolute top-3 right-3 rounded-md bg-neutral-900/80 px-2.5 py-1 text-xs font-medium text-white backdrop-blur-xs">
              {{ $project['category'] ?? $data['description'] ?? 'Design & Development' }}
            </div>
          </div>
          <div class="flex flex-1 flex-col p-5">
            <div class="mb-2">
              <span class="text-xs font-semibold uppercase tracking-wider text-yellow-600 dark:text-yellow-400">
                {{ $project['client'] ?? '[VERIFIED CLIENT / PRIVATE CLIENT / SELF-INITIATED]' }}
              </span>
              <h3 class="mt-1 text-xl font-bold text-neutral-800 dark:text-neutral-200">
                {{ $project['title'] ?? $project['name'] ?? '[VERIFIED PROJECT NAME]' }}
              </h3>
            </div>
            <p class="mb-4 text-sm text-neutral-600 dark:text-neutral-400">
              {{ $project['challenge'] ?? $data['content'] ?? 'Strategic creative thinking and digital execution built around clarity, trust and measurable outcomes.' }}
            </p>
            <div class="mt-auto space-y-2 border-t border-neutral-100 pt-3 text-xs text-neutral-500 dark:border-neutral-700 dark:text-neutral-400">
              <p><strong class="text-neutral-700 dark:text-neutral-300">Deliverables:</strong> {{ $project['deliverables'] ?? ($locale === 'fr' ? 'Direction visuelle, actifs de marque, développement réactif' : 'Visual direction, brand assets, responsive development') }}</p>
              <p><strong class="text-neutral-700 dark:text-neutral-300">Outcome:</strong> {{ $project['outcome'] ?? '[VERIFIED OUTCOME ONLY]' }}</p>
              <p><strong class="text-neutral-700 dark:text-neutral-300">Tools:</strong> {{ $project['tools'] ?? '[VERIFIED TOOLS OR FRAMEWORKS]' }}</p>
            </div>
            <div class="mt-5 pt-3">
              <a
                href="{{ $locale === 'fr' ? '/fr/contact' : '/contact' }}"
                class="inline-flex items-center gap-x-2 text-sm font-semibold text-yellow-600 hover:text-yellow-700 dark:text-yellow-400 dark:hover:text-yellow-300"
              >
                {{ $locale === 'fr' ? 'Discuter d\'un projet similaire' : 'Discuss a Similar Project' }}
                <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                </svg>
              </a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

  <x-sections.landing.hero-section-alt
    :title="$locale === 'fr' ? 'Prêt à donner vie à votre vision ?' : 'Ready to Bring Your Vision to Life?'"
    :subTitle="$locale === 'fr' ? 'De l\'identité de marque au développement web moderne, nous concevons des solutions faites pour durer.' : 'From brand identity to modern responsive web development, we build digital solutions made to last.'"
    :primaryBtn="$locale === 'fr' ? 'Démarrer un projet' : 'Start a Project'"
    :primaryBtnURL="$locale === 'fr' ? '/fr/contact' : '/contact'"
    :secondaryBtn="$locale === 'fr' ? 'Contacter ColorSpire' : 'Contact ColorSpire'"
    :secondaryBtnURL="$locale === 'fr' ? '/fr/contact' : '/contact'"
  />
</x-layouts.app>
