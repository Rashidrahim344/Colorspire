@php
$isFr = request()->segment(1) === 'fr' || app()->getLocale() === 'fr';
$pageTitle = $isFr ? 'Page Non Trouvée | ScrewFast' : 'Page Not Found | ScrewFast';
$subTitle = $isFr ? "Oops, ce n'est pas l'outil que vous recherchiez!" : "Oops, this isn't the tool you were looking for!";
$content = $isFr ? "Ne laissez pas ce contretemps vous ralentir. Revenons à la construction de votre chef-d'œuvre." : "Don't let this hiccup slow you down. Let's get you back to building your masterpiece.";
$btnTitle = $isFr ? 'Retournez' : 'Go Back';
@endphp

<x-layouts.app :title="$pageTitle">
  <section class="grid h-svh place-content-center">
    <div class="mx-auto max-w-(--breakpoint-xl) px-4 py-8 lg:px-6 lg:py-16">
      <div class="mx-auto max-w-(--breakpoint-sm) text-center">
        <h1
          class="text-dark mb-4 text-7xl font-extrabold text-yellow-500 lg:text-9xl dark:text-yellow-400"
        >
          404
        </h1>
        <p
          id="subtitle"
          class="mb-4 text-3xl font-bold tracking-tight text-balance text-neutral-700 md:text-4xl dark:text-neutral-300"
        >
          {{ $subTitle }}
        </p>
        <p
          id="content"
          class="mb-4 text-lg text-pretty text-neutral-600 dark:text-neutral-400"
        >
          {{ $content }}
        </p>
        <x-buttons.btn404 :title="$btnTitle" id="go-back" />
      </div>
    </div>
  </section>

  @push('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const goBackButton = document.getElementById('go-back');
      if (goBackButton) {
        goBackButton.addEventListener('click', () => {
          window.history.back();
        });
      }
    });
  </script>
  @endpush
</x-layouts.app>
