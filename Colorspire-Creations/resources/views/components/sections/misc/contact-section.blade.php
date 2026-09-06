@php
$isFr = app()->getLocale() === 'fr';

$title = $isFr ? 'Contactez-nous' : 'Contact us';
$subTitle = $isFr
  ? "Vous avez des questions ou souhaitez discuter d'un projet ? Contactez-nous et laissons-nous élaborer la solution parfaite avec nos outils et services."
  : "Have questions or want to discuss a project? Reach out, and let's craft the perfect solution with our tools and services.";
$formTitle = $isFr ? 'Remplissez le formulaire ci-dessous' : 'Fill in the form below';
$formSubTitle = $isFr
  ? 'Nous vous répondrons dans un délai de 1 à 2 jours ouvrables.'
  : "We'll get back to you in 1-2 business days.";
$firstName = $isFr ? 'Prénom' : 'First Name';
$lastName = $isFr ? 'Nom' : 'Last Name';
$details = $isFr ? 'Détails' : 'Details';
$sendBtn = $isFr ? 'Envoyer un message' : 'Send Message';

$kbHeading = $isFr ? 'Base de connaissances' : 'Knowledgebase';
$kbContent = $isFr ? 'Parcourez tous nos articles de base de connaissances.' : 'Browse through all of our knowledgebase articles.';
$kbLink = $isFr ? 'Visiter les guides et tutoriels' : 'Visit guides & tutorials';

$faqHeading = 'FAQ';
$faqContent = $isFr ? 'Explorez notre FAQ pour des réponses rapides et claires aux questions courantes.' : 'Explore our FAQ for quick, clear answers to common queries.';
$faqLink = $isFr ? 'Visiter la FAQ' : 'Visit FAQ';

$officeHeading = $isFr ? 'Visitez notre bureau' : 'Visit our office';
$officeBrand = $isFr ? 'ScrewFast UK' : 'UK ScrewFast';

$emailHeading = $isFr ? 'Contactez-nous par e-mail' : 'Contact us by email';
$emailContent = $isFr ? 'Préférez-vous le texte écrit ? Envoyez-nous un e-mail à' : 'Prefer the written word? Drop us an email at';
@endphp

<section class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14">
  <div class="mx-auto max-w-2xl lg:max-w-5xl">
    <div class="text-center">
      <h1
        class="text-2xl font-bold tracking-tight text-balance text-neutral-800 md:text-4xl md:leading-tight dark:text-neutral-200"
      >
        {{ $title }}
      </h1>
      <p class="mt-1 text-pretty text-neutral-600 dark:text-neutral-400">
        {{ $subTitle }}
      </p>
    </div>

    <div class="mt-12 grid items-center gap-6 lg:grid-cols-2 lg:gap-16">
      <div class="flex flex-col rounded-xl p-4 sm:p-6 lg:p-8">
        <h2
          class="mb-8 text-xl font-bold text-neutral-700 dark:text-neutral-300"
        >
          {{ $formTitle }}
        </h2>
        <form>
          <div class="grid gap-4">
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
              <x-forms.input.text-input
                id="hs-firstname-contacts"
                :label="$firstName"
                name="hs-firstname-contacts"
              />
              <x-forms.input.text-input
                id="hs-lastname-contacts"
                :label="$lastName"
                name="hs-lastname-contacts"
              />
            </div>
            <x-forms.input.email-contact-input id="hs-email-contacts" />
            <x-forms.input.phone-input id="hs-phone-number" />
            <x-forms.input.text-area-input
              id="hs-about-contacts"
              :label="$details"
              name="hs-about-contacts"
            />
          </div>

          <div class="mt-4 grid">
            <x-buttons.auth-btn :title="$sendBtn" />
          </div>

          <div class="mt-3 text-center">
            <p class="text-sm text-neutral-600 dark:text-neutral-400">
              {{ $formSubTitle }}
            </p>
          </div>
        </form>
      </div>

      <div class="divide-y divide-neutral-300 dark:divide-neutral-700">
        <x-blocks.contact-icon-block
          :heading="$kbHeading"
          :content="$kbContent"
          :isLinkVisible="true"
          :linkTitle="$kbLink"
          linkURL="#"
          :isArrowVisible="true"
        ><x-icon name="question" />
        </x-blocks.contact-icon-block>

        <x-blocks.contact-icon-block
          :heading="$faqHeading"
          :content="$faqContent"
          :isLinkVisible="true"
          :linkTitle="$faqLink"
          linkURL="#"
          :isArrowVisible="true"
        ><x-icon name="chatBubble" />
        </x-blocks.contact-icon-block>

        <x-blocks.contact-icon-block
          :heading="$officeHeading"
          :content="$officeBrand"
          :isAddressVisible="true"
          addressContent="72 Union Terrace, E10 4PE London"
        ><x-icon name="mapPin" />
        </x-blocks.contact-icon-block>

        <x-blocks.contact-icon-block
          :heading="$emailHeading"
          :content="$emailContent"
          :isLinkVisible="true"
          linkTitle="support@screwfast.uk"
          linkURL="#"
        ><x-icon name="envelopeOpen" />
        </x-blocks.contact-icon-block>
      </div>
    </div>
  </div>
</section>
