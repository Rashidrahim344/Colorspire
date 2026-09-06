<x-layouts.app
  :title="$pageTitle"
  :customDescription="$metaDescription"
  :customOgTitle="$ogTitle"
  :lang="$locale"
>
  <section class="mx-auto max-w-[85rem] px-4 pt-16 pb-10 sm:px-6 lg:px-8 2xl:max-w-full">
    <div class="mx-auto max-w-3xl text-center">
      <span class="text-sm font-semibold uppercase tracking-wider text-yellow-500 dark:text-yellow-400">
        {{ $locale === 'fr' ? 'Écosystème Numérique' : 'Digital Ecosystem' }}
      </span>
      <h1 class="mt-3 text-3xl font-bold tracking-tight text-balance text-neutral-800 md:text-5xl lg:text-6xl dark:text-neutral-200">
        {{ $title }}
      </h1>
      <p class="mt-4 text-lg text-pretty text-neutral-600 dark:text-neutral-400">
        {{ $subTitle }}
      </p>
      <p class="mt-4 text-base text-pretty text-neutral-500 dark:text-neutral-400">
        {{ $intro }}
      </p>
    </div>
  </section>

  <!-- Hub Categories -->
  <section class="mx-auto max-w-[85rem] px-4 py-8 sm:px-6 lg:px-8 2xl:max-w-full">
    <div class="mb-8 text-center">
      <h2 class="text-xl font-bold uppercase tracking-wider text-neutral-800 dark:text-neutral-200">
        {{ $locale === 'fr' ? 'Catégories du Hub' : 'Hub Categories' }}
      </h2>
    </div>
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
      @foreach($categories as $category)
        <div class="rounded-xl border border-neutral-200 bg-white p-6 shadow-xs dark:border-neutral-700 dark:bg-neutral-800">
          <div class="mb-3 inline-flex h-9 w-9 items-center justify-center rounded-lg bg-yellow-400/20 text-yellow-600 dark:bg-yellow-500/10 dark:text-yellow-400">
            <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
            </svg>
          </div>
          <h3 class="text-base font-bold text-neutral-800 dark:text-neutral-200">
            {{ $category['name'] }}
          </h3>
          <p class="mt-2 text-sm text-neutral-600 dark:text-neutral-400">
            {{ $category['description'] }}
          </p>
        </div>
      @endforeach
    </div>
  </section>

  <!-- Hub Entities / Cards -->
  <section class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 2xl:max-w-full">
    <div class="mb-6 flex flex-col items-center justify-between gap-4 sm:flex-row">
      <div>
        <h2 class="text-2xl font-bold text-neutral-800 dark:text-neutral-200">
          {{ $locale === 'fr' ? 'Entités et Projets de l\'Écosystème' : 'Ecosystem Entities & Projects' }}
        </h2>
        <p class="text-sm text-neutral-500 dark:text-neutral-400">
          {{ $locale === 'fr' ? 'Gabarit de présentation des initiatives ColorSpire' : 'Standard card structure for ColorSpire ecosystem initiatives' }}
        </p>
      </div>
      <span class="rounded-full bg-yellow-100 px-3 py-1 text-xs font-semibold text-yellow-800 dark:bg-yellow-900/40 dark:text-yellow-300">
        {{ $locale === 'fr' ? 'Données Vérifiées Uniquement' : 'Verified Data Only' }}
      </span>
    </div>

    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
      @foreach($hubCards as $card)
        <div class="flex flex-col justify-between rounded-xl border border-neutral-200 bg-neutral-50 p-6 dark:border-neutral-700 dark:bg-neutral-800/80">
          <div>
            <span class="inline-block rounded-md bg-neutral-200 px-2.5 py-1 text-xs font-semibold text-neutral-700 dark:bg-neutral-700 dark:text-neutral-300">
              {{ $card['category'] }}
            </span>
            <h3 class="mt-3 text-lg font-bold text-neutral-800 dark:text-neutral-200">
              {{ $card['name'] }}
            </h3>
            <p class="mt-2 text-sm leading-relaxed text-neutral-600 dark:text-neutral-400">
              {{ $card['description'] }}
            </p>
          </div>
          <div class="mt-6 border-t border-neutral-200 pt-4 dark:border-neutral-700">
            <span class="inline-flex items-center gap-x-2 text-xs font-semibold text-neutral-400 dark:text-neutral-500">
              {{ $card['linkLabel'] }}
              <svg class="h-3.5 w-3.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
              </svg>
            </span>
          </div>
        </div>
      @endforeach
    </div>

    <!-- Official Notice from Guide -->
    <div class="mt-8 rounded-xl border border-dashed border-amber-300 bg-amber-50/50 p-4 text-center text-xs text-amber-800 dark:border-amber-800 dark:bg-amber-950/20 dark:text-amber-300">
      <p><strong>Note:</strong> {{ $notice }}</p>
    </div>
  </section>

  <x-sections.landing.hero-section-alt
    :title="$locale === 'fr' ? 'Vous souhaitez collaborer ou rejoindre l\'écosystème ?' : 'Interested in Partnering or Collaborating?'"
    :subTitle="$locale === 'fr' ? 'Nous sommes ouverts aux partenariats stratégiques, initiatives communautaires et projets créatifs.' : 'We welcome strategic collaborations, ecosystem initiatives, and creative partnerships.'"
    :primaryBtn="$locale === 'fr' ? 'Démarrer un projet' : 'Start a Project'"
    :primaryBtnURL="$locale === 'fr' ? '/fr/contact' : '/contact'"
    :secondaryBtn="$locale === 'fr' ? 'Contacter ColorSpire' : 'Contact ColorSpire'"
    :secondaryBtnURL="$locale === 'fr' ? '/fr/contact' : '/contact'"
  />
</x-layouts.app>
