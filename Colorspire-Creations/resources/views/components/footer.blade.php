@php
$locale = app()->getLocale();
$nav = \App\Services\ContentService::getNavigation($locale);
$site = \App\Services\ContentService::getSite();
$sectionThreeTitle = $locale === 'fr' ? 'Bulletin d\'information' : 'Newsletter';
$sectionThreeContent = $locale === 'fr'
    ? 'Recevez des conseils créatifs et numériques pratiques de ColorSpire.'
    : 'Get practical creative and digital insights from ColorSpire.';
$crafted = $locale === 'fr' ? 'Fabriqué par' : 'Crafted by';
@endphp

<footer class="w-full bg-neutral-300 dark:bg-neutral-900">
  <div
    class="mx-auto w-full max-w-[85rem] px-4 py-10 sm:px-6 lg:px-16 lg:pt-20 2xl:max-w-(--breakpoint-2xl)"
  >
    <div class="grid grid-cols-2 gap-6 md:grid-cols-4 lg:grid-cols-5">
      <div class="col-span-full lg:col-span-1">
        <x-brand-logo class="h-auto w-52" />
      </div>
      @foreach($nav['footerLinks'] as $section)
        <div class="col-span-1">
          <h3 class="font-bold text-neutral-800 dark:text-neutral-200">
            {{ $section['section'] }}
          </h3>
          <ul class="mt-3 grid space-y-3">
            @foreach($section['links'] as $index => $link)
              <li>
                <a
                  href="{{ $link['url'] }}"
                  class="inline-flex gap-x-2 rounded-lg text-neutral-600 ring-zinc-500 outline-hidden transition duration-300 hover:text-neutral-500 focus-visible:ring-3 dark:text-neutral-400 dark:ring-zinc-200 dark:hover:text-neutral-300 dark:focus:outline-hidden"
                >
                  {{ $link['name'] }}
                </a>
              </li>
            @endforeach
          </ul>
        </div>
      @endforeach

      <div class="col-span-2">
        <h3 class="font-bold text-neutral-800 dark:text-neutral-200">
          {{ $sectionThreeTitle }}
        </h3>

        <form>
          <x-forms.input.email-footer-input />
          <p class="mt-3 text-sm text-neutral-600 dark:text-neutral-400">
            {{ $sectionThreeContent }}
          </p>
        </form>
      </div>
    </div>

    <div
      class="mt-9 grid gap-y-2 sm:mt-12 sm:flex sm:items-center sm:justify-between sm:gap-y-0"
    >
      <div class="flex items-center justify-between">
        <p class="text-sm text-neutral-600 dark:text-neutral-400">
          © 2024 {{ $site['title'] }}. {{ $locale === 'fr' ? 'Tous droits réservés.' : 'All rights reserved.' }}
        </p>
      </div>

      <div>
        <x-links.footer-social-link :url="$nav['socialLinks']['facebook']">
          <x-icon name="facebookFooter" />
        </x-links.footer-social-link>

        <x-links.footer-social-link :url="$nav['socialLinks']['x']">
          <x-icon name="xFooter" />
        </x-links.footer-social-link>

        <x-links.footer-social-link :url="$nav['socialLinks']['github']">
          <x-icon name="githubFooter" />
        </x-links.footer-social-link>

        <x-links.footer-social-link :url="$nav['socialLinks']['google']">
          <x-icon name="googleFooter" />
        </x-links.footer-social-link>

        <x-links.footer-social-link :url="$nav['socialLinks']['slack']">
          <x-icon name="slackFooter" />
        </x-links.footer-social-link>
      </div>
    </div>
  </div>
</footer>
