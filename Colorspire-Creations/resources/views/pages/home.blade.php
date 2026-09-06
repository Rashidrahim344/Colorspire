<x-layouts.app :lang="$locale">
  <x-banners.announcement-banner
    btnId="dismiss-button"
    :btnTitle="$locale === 'fr' ? 'Concevoir l\'influence visuelle — Bâtir pour inspirer' : 'Designing Visual Influence — Built to Inspire'"
    url="#!"
  />

  @if($locale === 'fr')
    <x-sections.landing.hero-section
      title='Concevoir des marques. <span class="text-yellow-500 dark:text-yellow-400">Bâtir des expériences numériques.</span>'
      subTitle="ColorSpire Creations aide les entreprises, organisations et esprits ambitieux à transformer leurs idées en identités visuelles fortes, contenus captivants et expériences numériques conçues pour marquer les esprits."
      primaryBtn="Démarrer un projet"
      primaryBtnURL="/fr/contact"
      secondaryBtn="Explorer nos réalisations"
      secondaryBtnURL="/fr/portfolio"
      :withReview="true"
      :avatars="$avatars"
      rating='<span class="font-bold">5.0</span>'
      :starCount="5"
      reviews='<span class="font-bold">[AVIS CLIENTS VÉRIFIÉS]</span>'
      src="images/hero-image.avif"
      alt="ColorSpire Creations branding et solutions numériques"
    />

    <x-sections.landing.clients-section
      title="Conçu pour aider les marques à mieux communiquer"
      subTitle="Du design visuel aux expériences numériques, ColorSpire réunit stratégie, créativité et exécution. [PARTENAIRES VÉRIFIÉS]"
      :partners="$partners"
    />

    <x-sections.features.features-general
      title="Des solutions créatives pour les marques qui veulent être prises au sérieux"
      subTitle="Votre marque est plus qu'un logo, et votre site web est plus qu'une collection de pages. Nous combinons design, contenu et technologie pour vous aider à communiquer clairement, afficher votre professionnalisme et développer des points de contact numériques plus solides."
      src="images/features-image.avif"
      alt="Solutions créatives ColorSpire Creations"
      :features="$features"
    />

    <x-sections.features.features-navs
      title='Tout ce dont vous avez besoin pour bâtir une <span class="text-yellow-500 dark:text-yellow-400">présence numérique plus forte</span>'
      :tabs="[
        [
          'heading' => 'Stratégie créative',
          'content' => 'Transformez vos idées en réalisations visibles, compréhensibles et mémorables — Nous partons de vos objectifs pour concevoir une direction visuelle adaptée à votre message, à votre audience et aux résultats visés. [Créer ma marque]',
          'svg' => 'tools',
          'src' => 'images/automated-tools.avif',
          'alt' => 'Stratégie créative et direction visuelle',
          'first' => true,
        ],
        [
          'heading' => 'Expériences numériques',
          'content' => 'Des sites web conçus pour les humains, pas seulement pour les écrans — Nous créons des expériences numériques responsives qui permettent à vos visiteurs de comprendre votre offre, de vous faire confiance et de passer à l\'action. [Lancer un projet de site]',
          'svg' => 'dashboard',
          'src' => 'images/dashboard-image.avif',
          'alt' => 'Expériences numériques responsives et sites web',
          'second' => true,
        ],
        [
          'heading' => 'Contenu et réseaux sociaux',
          'content' => 'Gardez votre marque visible sans perdre son identité — Des visuels sociaux aux campagnes de communication, nous vous aidons à bâtir une présence visuelle cohérente là où se trouve votre public. [Planifier mon contenu]',
          'svg' => 'house',
          'src' => 'images/construction-image.avif',
          'alt' => 'Création de contenu et visuels pour réseaux sociaux',
        ],
      ]"
    />

    <x-sections.testimonials.testimonials-section
      title="Un travail créatif qui fait progresser vos projets"
      subTitle="Conçu autour de résultats créatifs concrets"
      :testimonials="$testimonials"
      :statistics="$statistics"
    />

    <x-sections.pricing.pricing-section :pricing="$pricing" />

    <x-sections.misc.faq title="Questions<br />fréquemment posées" :faqs="$faqs" />

    <x-sections.landing.hero-section-alt
      title="Créons ensemble quelque chose qui inspire."
      subTitle="Vous avez une idée, une marque ou un projet en tête ? Donnons-lui vie sous une forme riche de sens, utile et conçue pour durer."
      primaryBtn="Démarrer un projet"
      primaryBtnURL="/fr/contact"
      secondaryBtn="Contacter ColorSpire"
      secondaryBtnURL="/fr/contact"
    />
  @else
    <x-sections.landing.hero-section
      title='Designing Visual <span class="text-yellow-500 dark:text-yellow-400">Influence.</span>'
      subTitle="ColorSpire Creations helps businesses, organizations and ambitious individuals turn ideas into strong visual identities, compelling content and digital experiences that are built to make an impact."
      primaryBtn="Start a Project"
      primaryBtnURL="/contact"
      secondaryBtn="Explore Our Work"
      secondaryBtnURL="/portfolio"
      :withReview="true"
      :avatars="$avatars"
      rating='<span class="font-bold">4.5</span>'
      :starCount="4"
      reviews='<span class="font-bold">Very Excellent services!</span>'
      src="images/hero-image.avif"
      alt="ColorSpire Creations visual design and digital experiences"
    />

    <x-sections.landing.clients-section
      title="Built to Help Brands Communicate Better"
      subTitle="From visual design to digital experiences, ColorSpire brings strategy, creativity and execution together. [VERIFIED PARTNERS]"
      :partners="$partners"
    />

    <x-sections.features.features-general
      title="Creative Solutions for Brands That Want to Be Taken Seriously"
      subTitle="Your brand is more than a logo, and your website is more than a collection of pages. We combine design, content and technology to help you communicate clearly, look professional and build stronger digital touchpoints."
      src="images/features-image.avif"
      alt="ColorSpire Creations creative capability showcase"
      :features="$features"
    />

    <x-sections.features.features-navs
      title='Everything You Need to Build a <span class="text-yellow-500 dark:text-yellow-400">Stronger Digital Presence</span>'
      :tabs="[
        [
          'heading' => 'Creative Strategy',
          'content' => 'Turn Ideas Into Work People Can See, Understand and Remember — We start with what you are trying to achieve, then shape the visual direction around the message, audience and desired outcome. [Build My Brand]',
          'svg' => 'tools',
          'src' => 'images/automated-tools.avif',
          'alt' => 'Creative Strategy visual direction',
          'first' => true,
        ],
        [
          'heading' => 'Digital Experiences',
          'content' => 'Websites Built Around People, Not Just Screens — We create responsive digital experiences that make it easier for visitors to understand your offer, trust your business and take the next step. [Start a Website Project]',
          'svg' => 'dashboard',
          'src' => 'images/dashboard-image.avif',
          'alt' => 'Responsive digital experiences and modern websites',
          'second' => true,
        ],
        [
          'heading' => 'Content & Social',
          'content' => 'Keep Your Brand Visible Without Losing Its Identity — From social graphics to campaign content, we help brands create a recognizable visual presence across the platforms where their audiences spend time. [Plan My Content]',
          'svg' => 'house',
          'src' => 'images/construction-image.avif',
          'alt' => 'Content creation and social media visuals',
        ],
      ]"
    />

    <x-sections.testimonials.testimonials-section
      title="Creative Work That Moves Projects Forward"
      subTitle="Built Around Real Creative Outcomes"
      :testimonials="$testimonials"
      :statistics="$statistics"
    />

    <x-sections.pricing.pricing-section :pricing="$pricing" />

    <x-sections.misc.faq title="Frequently<br />Asked Questions" :faqs="$faqs" />

    <x-sections.landing.hero-section-alt
      title="Let’s Create Something That Inspires."
      subTitle="Have an idea, a brand or a project in mind? Let’s turn it into something meaningful, useful and built to last."
      primaryBtn="Start a Project"
      primaryBtnURL="/contact"
      secondaryBtn="Contact ColorSpire"
      secondaryBtnURL="/contact"
    />
  @endif
</x-layouts.app>
