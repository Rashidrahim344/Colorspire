@php
$locale = app()->getLocale();
$nav = \App\Services\ContentService::getNavigation($locale);
$homeUrl = $locale === 'fr' ? '/fr' : '/';
@endphp

<header
  class="sticky inset-x-0 top-4 z-50 flex w-full flex-wrap text-sm md:flex-nowrap md:justify-start"
>
  <nav
    class="relative mx-2 w-full rounded-[36px] border border-yellow-100/40 bg-yellow-50/60 px-4 py-3 backdrop-blur-md md:flex md:items-center md:justify-between md:px-6 md:py-0 md:min-h-[70px] lg:px-8 xl:mx-auto dark:border-neutral-700/40 dark:bg-neutral-800/80 dark:backdrop-blur-md"
    aria-label="Global"
  >
    <div class="flex items-center justify-between">
      <a
        class="flex-none rounded-lg text-xl font-bold ring-zinc-500 outline-hidden focus-visible:ring-3 dark:ring-zinc-200 dark:focus:outline-hidden"
        href="{{ $homeUrl }}"
        aria-label="Brand"
      >
        <x-brand-logo class="h-auto w-40" />
      </a>
      <div class="mr-5 ml-auto md:hidden">
        <button
          type="button"
          class="hs-collapse-toggle flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold text-neutral-600 transition duration-300 hover:bg-neutral-200 disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:outline-hidden"
          data-hs-collapse="#navbar-collapse-with-animation"
          aria-controls="navbar-collapse-with-animation"
          aria-label="Toggle navigation"
        >
          <svg
            class="hs-collapse-open:hidden h-[1.25rem] w-[1.25rem] shrink-0"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <line x1="3" x2="21" y1="6" y2="6"></line>
            <line x1="3" x2="21" y1="12" y2="12"></line>
            <line x1="3" x2="21" y1="18" y2="18"></line>
          </svg>
          <svg
            class="hs-collapse-open:block hidden h-[1.25rem] w-[1.25rem] shrink-0"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path d="M18 6 6 18"></path>
            <path d="m6 6 12 12"></path>
          </svg>
        </button>
      </div>
      <span class="inline-block md:hidden">
        <x-theme-icon />
      </span>
    </div>
    <div
      id="navbar-collapse-with-animation"
      class="hs-collapse hidden grow basis-full overflow-hidden transition-all duration-300 md:block"
    >
      <div
        class="mt-5 flex flex-col gap-x-0 gap-y-4 md:mt-0 md:flex-row md:items-center md:justify-end md:gap-x-4 md:gap-y-0 md:ps-7 lg:gap-x-7"
      >
        @foreach($nav['navBarLinks'] as $link)
          <x-links.nav-link :url="$link['url']" :name="$link['name']" />
        @endforeach

        @php
        $ctaUrl = $locale === 'fr' ? '/fr/contact' : '/contact';
        $ctaLabel = $locale === 'fr' ? 'Démarrer un projet' : 'Start a Project';
        @endphp
        <a
          href="{{ $ctaUrl }}"
          class="inline-flex items-center justify-center gap-x-2 rounded-full bg-yellow-400 px-3.5 py-1.5 text-sm font-semibold text-neutral-800 transition duration-300 hover:bg-yellow-500 focus:outline-hidden dark:bg-yellow-500 dark:text-neutral-900 dark:hover:bg-yellow-400"
        >
          {{ $ctaLabel }}
        </a>

        {{-- Authentication & Language Picker (Hidden) --}}
        <div class="hidden" aria-hidden="true">
          <x-buttons.login-btn />
          <x-forms.login-modal />
          <x-forms.register-modal />
          <x-forms.recover-modal />
          <x-language-picker />
        </div>

        <span class="hidden md:inline-flex md:items-center md:border-s md:border-neutral-300 md:ps-4 lg:ps-6 dark:border-neutral-700">
          <x-theme-icon />
        </span>
      </div>
    </div>
  </nav>
</header>
