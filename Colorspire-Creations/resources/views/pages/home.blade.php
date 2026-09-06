<x-layouts.app :lang="$locale">
  <x-banners.announcement-banner
    btnId="dismiss-button"
    :btnTitle="$locale === 'fr' ? 'Découvrez ScrewFast sur GitHub' : 'Explore ScrewFast on GitHub'"
    url="#!"
  />

  @if($locale === 'fr')
    <x-sections.landing.hero-section
      title='Équipez vos projets avec <span class="text-yellow-500 dark:text-yellow-400">ScrewFast</span>'
      subTitle="Outils matériels de haute qualité et services de construction experts pour tous les besoins en projet."
      primaryBtn="Commencez à explorer"
      primaryBtnURL="/fr/products"
      secondaryBtn="Contacter l'équipe commerciale"
      secondaryBtnURL="/fr/contact"
      :withReview="true"
      :avatars="$avatars"
      rating='<span class="font-bold">4.8</span> / 5'
      :starCount="4"
      reviews='À partir de plus de <span class="font-bold">12,8k</span> avis'
      src="images/hero-image.avif"
      alt="Pile de boîtes de produits ScrewFast contenant des outils matériels assortis"
    />

    <x-sections.landing.clients-section
      title="Faites confiance aux leaders de l'industrie"
      subTitle="Découvrez la fiabilité choisie par les géants de l'industrie."
      :partners="$partners"
    />

    <x-sections.features.features-general
      title="Répondre aux exigences de l'industrie"
      subTitle="Chez ScrewFast, nous relevons les défis uniques rencontrés dans les secteurs du matériel et de la construction. Des outils de pointe aux services experts, nous sommes déterminés à vous aider à surmonter les obstacles et à atteindre vos objectifs."
      src="images/features-image.avif"
      alt="Produits ScrewFast dans des boîtes flottantes"
      :features="$features"
    />

    <x-sections.features.features-navs
      title='Personnalisez les offres de <span class="text-yellow-500 dark:text-yellow-400">ScrewFast</span> pour répondre parfaitement à vos besoins en matériel et en construction.'
      :tabs="[
        [
          'heading' => 'Outils de pointe',
          'content' => 'Optimisez vos projets avec les outils de pointe de ScrewFast. Faites l\'expérience d\'une efficacité accrue dans la gestion de la construction avec nos solutions automatisées sophistiquées.',
          'svg' => 'tools',
          'src' => 'images/automated-tools.avif',
          'alt' => 'Équipement lourd jaune et noir sur un champ d\'herbe brune',
          'first' => true,
        ],
        [
          'heading' => 'Tableaux de bord intuitifs',
          'content' => 'Naviguez facilement avec les tableaux de bord intuitifs de ScrewFast. Configurez et supervisez vos projets de manière transparente, avec des interfaces conviviales conçues pour une gestion efficace des flux de travail rapide et efficace.',
          'svg' => 'dashboard',
          'src' => 'images/dashboard-image.avif',
          'alt' => 'Capture d\'écran ou représentation graphique du tableau de bord intuitif',
          'second' => true,
        ],
        [
          'heading' => 'Fonctionnalités robustes',
          'content' => 'Minimisez la complexité, maximisez la productivité. Les fonctionnalités robustes de ScrewFast sont conçues pour rationaliser votre processus de construction, offrant des résultats qui se distinguent par leur excellence.',
          'svg' => 'house',
          'src' => 'images/construction-image.avif',
          'alt' => 'Structure métallique grise d\'un bâtiment près d\'une grue à tour pendant la journée',
        ],
      ]"
    />

    <x-sections.testimonials.testimonials-section
      title="Accélérez vos projets"
      subTitle="Chez ScrewFast, nous assurons un démarrage rapide avec une configuration de compte instantanée. Découvrez la vitesse de la construction redéfinie."
      :testimonials="$testimonials"
      :statistics="$statistics"
    />

    <x-sections.pricing.pricing-section :pricing="$pricing" />

    <x-sections.misc.faq title="Questions<br />fréquemment posées" :faqs="$faqs" />

    <x-sections.landing.hero-section-alt
      title="Construisons ensemble"
      subTitle="ScrewFast est un modèle open source, méticuleusement conçu avec les frameworks Astro, Tailwind CSS et Preline UI."
      url="#!"
    />
  @else
    <x-sections.landing.hero-section
      title='Equip Your Projects with <span class="text-yellow-500 dark:text-yellow-400">ScrewFast</span>'
      subTitle="Top-quality hardware tools and expert construction services for every project need."
      primaryBtn="Start Exploring"
      primaryBtnURL="/products"
      secondaryBtn="Contact Sales Team"
      secondaryBtnURL="/contact"
      :withReview="true"
      :avatars="$avatars"
      rating='<span class="font-bold">4.8</span> / 5'
      :starCount="4"
      reviews='From Over <span class="font-bold">12.8k</span> Reviews'
      src="images/hero-image.avif"
      alt="Stack of ScrewFast product boxes containing assorted hardware tools"
    />

    <x-sections.landing.clients-section
      title="Trusted by Industry Leaders"
      subTitle="Experience the reliability chosen by industry giants."
      :partners="$partners"
    />

    <x-sections.features.features-general
      title="Meeting Industry Demands"
      subTitle="At ScrewFast, we tackle the unique challenges encountered in the hardware and construction sectors. From cutting-edge tools to expert services, we're dedicated to helping you overcome obstacles and achieve your goals."
      src="images/features-image.avif"
      alt="ScrewFast products in floating boxes"
      :features="$features"
    />

    <x-sections.features.features-navs
      title='Customize <span class="text-yellow-500 dark:text-yellow-400">ScrewFast</span>&apos;s offerings to perfectly suit your hardware and construction needs.'
      :tabs="[
        [
          'heading' => 'Cutting-Edge Tools',
          'content' => 'Empower your projects with ScrewFast\'s cutting-edge tools. Experience enhanced efficiency in construction management with our sophisticated automated solutions.',
          'svg' => 'tools',
          'src' => 'images/automated-tools.avif',
          'alt' => 'Yellow and black heavy equipment on brown grass field',
          'first' => true,
        ],
        [
          'heading' => 'Intuitive Dashboards',
          'content' => 'Navigate with ease using ScrewFast\'s intuitive dashboards. Set up and oversee your projects seamlessly, with user-friendly interfaces designed for quick and effective workflow management.',
          'svg' => 'dashboard',
          'src' => 'images/dashboard-image.avif',
          'alt' => 'A screenshot or graphic representation of the intuitive dashboard',
          'second' => true,
        ],
        [
          'heading' => 'Robust Features',
          'content' => 'Minimize complexity, maximize productivity. ScrewFast\'s robust features are engineered to streamline your construction process, delivering results that stand out for their excellence.',
          'svg' => 'house',
          'src' => 'images/construction-image.avif',
          'alt' => 'Gray metal building frame near tower crane during daytime',
        ],
      ]"
    />

    <x-sections.testimonials.testimonials-section
      title="Fast-Track Your Projects"
      subTitle="At ScrewFast, we ensure a swift start with instant account setup. Experience the speed of construction redefined."
      :testimonials="$testimonials"
      :statistics="$statistics"
    />

    <x-sections.pricing.pricing-section :pricing="$pricing" />

    <x-sections.misc.faq title="Frequently<br />asked questions" :faqs="$faqs" />

    <x-sections.landing.hero-section-alt
      title="Let's Build Together"
      subTitle="ScrewFast is an open-source template, meticulously crafted with Astro, Tailwind CSS, and Preline UI frameworks."
      url="#!"
    />
  @endif
</x-layouts.app>
