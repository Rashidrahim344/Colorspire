<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => ['lang' => $locale]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['lang' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($locale)]); ?>
  <?php if (isset($component)) { $__componentOriginalbd62305e670a299d69070fc5c014342f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbd62305e670a299d69070fc5c014342f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.banners.announcement-banner','data' => ['btnId' => 'dismiss-button','btnTitle' => $locale === 'fr' ? 'Découvrez ScrewFast sur GitHub' : 'Explore ScrewFast on GitHub','url' => '#!']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('banners.announcement-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['btnId' => 'dismiss-button','btnTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($locale === 'fr' ? 'Découvrez ScrewFast sur GitHub' : 'Explore ScrewFast on GitHub'),'url' => '#!']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbd62305e670a299d69070fc5c014342f)): ?>
<?php $attributes = $__attributesOriginalbd62305e670a299d69070fc5c014342f; ?>
<?php unset($__attributesOriginalbd62305e670a299d69070fc5c014342f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd62305e670a299d69070fc5c014342f)): ?>
<?php $component = $__componentOriginalbd62305e670a299d69070fc5c014342f; ?>
<?php unset($__componentOriginalbd62305e670a299d69070fc5c014342f); ?>
<?php endif; ?>

  <?php if($locale === 'fr'): ?>
    <?php if (isset($component)) { $__componentOriginal8b82850521ad3ee867ba2b233314a5e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8b82850521ad3ee867ba2b233314a5e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.landing.hero-section','data' => ['title' => 'Équipez vos projets avec <span class="text-yellow-500 dark:text-yellow-400">ScrewFast</span>','subTitle' => 'Outils matériels de haute qualité et services de construction experts pour tous les besoins en projet.','primaryBtn' => 'Commencez à explorer','primaryBtnURL' => '/fr/products','secondaryBtn' => 'Contacter l\'équipe commerciale','secondaryBtnURL' => '/fr/contact','withReview' => true,'avatars' => $avatars,'rating' => '<span class="font-bold">4.8</span> / 5','starCount' => 4,'reviews' => 'À partir de plus de <span class="font-bold">12,8k</span> avis','src' => 'images/hero-image.avif','alt' => 'Pile de boîtes de produits ScrewFast contenant des outils matériels assortis']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.landing.hero-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Équipez vos projets avec <span class="text-yellow-500 dark:text-yellow-400">ScrewFast</span>','subTitle' => 'Outils matériels de haute qualité et services de construction experts pour tous les besoins en projet.','primaryBtn' => 'Commencez à explorer','primaryBtnURL' => '/fr/products','secondaryBtn' => 'Contacter l\'équipe commerciale','secondaryBtnURL' => '/fr/contact','withReview' => true,'avatars' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($avatars),'rating' => '<span class="font-bold">4.8</span> / 5','starCount' => 4,'reviews' => 'À partir de plus de <span class="font-bold">12,8k</span> avis','src' => 'images/hero-image.avif','alt' => 'Pile de boîtes de produits ScrewFast contenant des outils matériels assortis']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8b82850521ad3ee867ba2b233314a5e4)): ?>
<?php $attributes = $__attributesOriginal8b82850521ad3ee867ba2b233314a5e4; ?>
<?php unset($__attributesOriginal8b82850521ad3ee867ba2b233314a5e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8b82850521ad3ee867ba2b233314a5e4)): ?>
<?php $component = $__componentOriginal8b82850521ad3ee867ba2b233314a5e4; ?>
<?php unset($__componentOriginal8b82850521ad3ee867ba2b233314a5e4); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalf3f06e19bdd700d96fbecb3fe1c301eb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf3f06e19bdd700d96fbecb3fe1c301eb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.landing.clients-section','data' => ['title' => 'Faites confiance aux leaders de l\'industrie','subTitle' => 'Découvrez la fiabilité choisie par les géants de l\'industrie.','partners' => $partners]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.landing.clients-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Faites confiance aux leaders de l\'industrie','subTitle' => 'Découvrez la fiabilité choisie par les géants de l\'industrie.','partners' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($partners)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf3f06e19bdd700d96fbecb3fe1c301eb)): ?>
<?php $attributes = $__attributesOriginalf3f06e19bdd700d96fbecb3fe1c301eb; ?>
<?php unset($__attributesOriginalf3f06e19bdd700d96fbecb3fe1c301eb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf3f06e19bdd700d96fbecb3fe1c301eb)): ?>
<?php $component = $__componentOriginalf3f06e19bdd700d96fbecb3fe1c301eb; ?>
<?php unset($__componentOriginalf3f06e19bdd700d96fbecb3fe1c301eb); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal05aa5c1b310d3deca2315a7d82ec4fb3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal05aa5c1b310d3deca2315a7d82ec4fb3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.features.features-general','data' => ['title' => 'Répondre aux exigences de l\'industrie','subTitle' => 'Chez ScrewFast, nous relevons les défis uniques rencontrés dans les secteurs du matériel et de la construction. Des outils de pointe aux services experts, nous sommes déterminés à vous aider à surmonter les obstacles et à atteindre vos objectifs.','src' => 'images/features-image.avif','alt' => 'Produits ScrewFast dans des boîtes flottantes','features' => $features]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.features.features-general'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Répondre aux exigences de l\'industrie','subTitle' => 'Chez ScrewFast, nous relevons les défis uniques rencontrés dans les secteurs du matériel et de la construction. Des outils de pointe aux services experts, nous sommes déterminés à vous aider à surmonter les obstacles et à atteindre vos objectifs.','src' => 'images/features-image.avif','alt' => 'Produits ScrewFast dans des boîtes flottantes','features' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($features)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal05aa5c1b310d3deca2315a7d82ec4fb3)): ?>
<?php $attributes = $__attributesOriginal05aa5c1b310d3deca2315a7d82ec4fb3; ?>
<?php unset($__attributesOriginal05aa5c1b310d3deca2315a7d82ec4fb3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal05aa5c1b310d3deca2315a7d82ec4fb3)): ?>
<?php $component = $__componentOriginal05aa5c1b310d3deca2315a7d82ec4fb3; ?>
<?php unset($__componentOriginal05aa5c1b310d3deca2315a7d82ec4fb3); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalc91e2e789fc6bca47da051e62a101d20 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc91e2e789fc6bca47da051e62a101d20 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.features.features-navs','data' => ['title' => 'Personnalisez les offres de <span class="text-yellow-500 dark:text-yellow-400">ScrewFast</span> pour répondre parfaitement à vos besoins en matériel et en construction.','tabs' => [
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
      ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.features.features-navs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Personnalisez les offres de <span class="text-yellow-500 dark:text-yellow-400">ScrewFast</span> pour répondre parfaitement à vos besoins en matériel et en construction.','tabs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
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
      ])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc91e2e789fc6bca47da051e62a101d20)): ?>
<?php $attributes = $__attributesOriginalc91e2e789fc6bca47da051e62a101d20; ?>
<?php unset($__attributesOriginalc91e2e789fc6bca47da051e62a101d20); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc91e2e789fc6bca47da051e62a101d20)): ?>
<?php $component = $__componentOriginalc91e2e789fc6bca47da051e62a101d20; ?>
<?php unset($__componentOriginalc91e2e789fc6bca47da051e62a101d20); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginaled2321f3593672d7b1b24c688bdda757 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled2321f3593672d7b1b24c688bdda757 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.testimonials.testimonials-section','data' => ['title' => 'Accélérez vos projets','subTitle' => 'Chez ScrewFast, nous assurons un démarrage rapide avec une configuration de compte instantanée. Découvrez la vitesse de la construction redéfinie.','testimonials' => $testimonials,'statistics' => $statistics]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.testimonials.testimonials-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Accélérez vos projets','subTitle' => 'Chez ScrewFast, nous assurons un démarrage rapide avec une configuration de compte instantanée. Découvrez la vitesse de la construction redéfinie.','testimonials' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($testimonials),'statistics' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($statistics)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled2321f3593672d7b1b24c688bdda757)): ?>
<?php $attributes = $__attributesOriginaled2321f3593672d7b1b24c688bdda757; ?>
<?php unset($__attributesOriginaled2321f3593672d7b1b24c688bdda757); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled2321f3593672d7b1b24c688bdda757)): ?>
<?php $component = $__componentOriginaled2321f3593672d7b1b24c688bdda757; ?>
<?php unset($__componentOriginaled2321f3593672d7b1b24c688bdda757); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginala98772913e378972031b1d24f232d6ca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala98772913e378972031b1d24f232d6ca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.pricing.pricing-section','data' => ['pricing' => $pricing]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.pricing.pricing-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['pricing' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($pricing)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala98772913e378972031b1d24f232d6ca)): ?>
<?php $attributes = $__attributesOriginala98772913e378972031b1d24f232d6ca; ?>
<?php unset($__attributesOriginala98772913e378972031b1d24f232d6ca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala98772913e378972031b1d24f232d6ca)): ?>
<?php $component = $__componentOriginala98772913e378972031b1d24f232d6ca; ?>
<?php unset($__componentOriginala98772913e378972031b1d24f232d6ca); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal11c68d59fc7233bcd1d371861aa4b6c3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal11c68d59fc7233bcd1d371861aa4b6c3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.misc.faq','data' => ['title' => 'Questions<br />fréquemment posées','faqs' => $faqs]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.misc.faq'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Questions<br />fréquemment posées','faqs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($faqs)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal11c68d59fc7233bcd1d371861aa4b6c3)): ?>
<?php $attributes = $__attributesOriginal11c68d59fc7233bcd1d371861aa4b6c3; ?>
<?php unset($__attributesOriginal11c68d59fc7233bcd1d371861aa4b6c3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11c68d59fc7233bcd1d371861aa4b6c3)): ?>
<?php $component = $__componentOriginal11c68d59fc7233bcd1d371861aa4b6c3; ?>
<?php unset($__componentOriginal11c68d59fc7233bcd1d371861aa4b6c3); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal0a03e1af953e8affe1656c8e8c8791a6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0a03e1af953e8affe1656c8e8c8791a6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.landing.hero-section-alt','data' => ['title' => 'Construisons ensemble','subTitle' => 'ScrewFast est un modèle open source, méticuleusement conçu avec les frameworks Astro, Tailwind CSS et Preline UI.','url' => '#!']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.landing.hero-section-alt'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Construisons ensemble','subTitle' => 'ScrewFast est un modèle open source, méticuleusement conçu avec les frameworks Astro, Tailwind CSS et Preline UI.','url' => '#!']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0a03e1af953e8affe1656c8e8c8791a6)): ?>
<?php $attributes = $__attributesOriginal0a03e1af953e8affe1656c8e8c8791a6; ?>
<?php unset($__attributesOriginal0a03e1af953e8affe1656c8e8c8791a6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0a03e1af953e8affe1656c8e8c8791a6)): ?>
<?php $component = $__componentOriginal0a03e1af953e8affe1656c8e8c8791a6; ?>
<?php unset($__componentOriginal0a03e1af953e8affe1656c8e8c8791a6); ?>
<?php endif; ?>
  <?php else: ?>
    <?php if (isset($component)) { $__componentOriginal8b82850521ad3ee867ba2b233314a5e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8b82850521ad3ee867ba2b233314a5e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.landing.hero-section','data' => ['title' => 'Equip Your Projects with <span class="text-yellow-500 dark:text-yellow-400">ScrewFast</span>','subTitle' => 'Top-quality hardware tools and expert construction services for every project need.','primaryBtn' => 'Start Exploring','primaryBtnURL' => '/products','secondaryBtn' => 'Contact Sales Team','secondaryBtnURL' => '/contact','withReview' => true,'avatars' => $avatars,'rating' => '<span class="font-bold">4.8</span> / 5','starCount' => 4,'reviews' => 'From Over <span class="font-bold">12.8k</span> Reviews','src' => 'images/hero-image.avif','alt' => 'Stack of ScrewFast product boxes containing assorted hardware tools']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.landing.hero-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Equip Your Projects with <span class="text-yellow-500 dark:text-yellow-400">ScrewFast</span>','subTitle' => 'Top-quality hardware tools and expert construction services for every project need.','primaryBtn' => 'Start Exploring','primaryBtnURL' => '/products','secondaryBtn' => 'Contact Sales Team','secondaryBtnURL' => '/contact','withReview' => true,'avatars' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($avatars),'rating' => '<span class="font-bold">4.8</span> / 5','starCount' => 4,'reviews' => 'From Over <span class="font-bold">12.8k</span> Reviews','src' => 'images/hero-image.avif','alt' => 'Stack of ScrewFast product boxes containing assorted hardware tools']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8b82850521ad3ee867ba2b233314a5e4)): ?>
<?php $attributes = $__attributesOriginal8b82850521ad3ee867ba2b233314a5e4; ?>
<?php unset($__attributesOriginal8b82850521ad3ee867ba2b233314a5e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8b82850521ad3ee867ba2b233314a5e4)): ?>
<?php $component = $__componentOriginal8b82850521ad3ee867ba2b233314a5e4; ?>
<?php unset($__componentOriginal8b82850521ad3ee867ba2b233314a5e4); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalf3f06e19bdd700d96fbecb3fe1c301eb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf3f06e19bdd700d96fbecb3fe1c301eb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.landing.clients-section','data' => ['title' => 'Trusted by Industry Leaders','subTitle' => 'Experience the reliability chosen by industry giants.','partners' => $partners]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.landing.clients-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Trusted by Industry Leaders','subTitle' => 'Experience the reliability chosen by industry giants.','partners' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($partners)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf3f06e19bdd700d96fbecb3fe1c301eb)): ?>
<?php $attributes = $__attributesOriginalf3f06e19bdd700d96fbecb3fe1c301eb; ?>
<?php unset($__attributesOriginalf3f06e19bdd700d96fbecb3fe1c301eb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf3f06e19bdd700d96fbecb3fe1c301eb)): ?>
<?php $component = $__componentOriginalf3f06e19bdd700d96fbecb3fe1c301eb; ?>
<?php unset($__componentOriginalf3f06e19bdd700d96fbecb3fe1c301eb); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal05aa5c1b310d3deca2315a7d82ec4fb3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal05aa5c1b310d3deca2315a7d82ec4fb3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.features.features-general','data' => ['title' => 'Meeting Industry Demands','subTitle' => 'At ScrewFast, we tackle the unique challenges encountered in the hardware and construction sectors. From cutting-edge tools to expert services, we\'re dedicated to helping you overcome obstacles and achieve your goals.','src' => 'images/features-image.avif','alt' => 'ScrewFast products in floating boxes','features' => $features]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.features.features-general'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Meeting Industry Demands','subTitle' => 'At ScrewFast, we tackle the unique challenges encountered in the hardware and construction sectors. From cutting-edge tools to expert services, we\'re dedicated to helping you overcome obstacles and achieve your goals.','src' => 'images/features-image.avif','alt' => 'ScrewFast products in floating boxes','features' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($features)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal05aa5c1b310d3deca2315a7d82ec4fb3)): ?>
<?php $attributes = $__attributesOriginal05aa5c1b310d3deca2315a7d82ec4fb3; ?>
<?php unset($__attributesOriginal05aa5c1b310d3deca2315a7d82ec4fb3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal05aa5c1b310d3deca2315a7d82ec4fb3)): ?>
<?php $component = $__componentOriginal05aa5c1b310d3deca2315a7d82ec4fb3; ?>
<?php unset($__componentOriginal05aa5c1b310d3deca2315a7d82ec4fb3); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginalc91e2e789fc6bca47da051e62a101d20 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc91e2e789fc6bca47da051e62a101d20 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.features.features-navs','data' => ['title' => 'Customize <span class="text-yellow-500 dark:text-yellow-400">ScrewFast</span>&apos;s offerings to perfectly suit your hardware and construction needs.','tabs' => [
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
      ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.features.features-navs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Customize <span class="text-yellow-500 dark:text-yellow-400">ScrewFast</span>&apos;s offerings to perfectly suit your hardware and construction needs.','tabs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
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
      ])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc91e2e789fc6bca47da051e62a101d20)): ?>
<?php $attributes = $__attributesOriginalc91e2e789fc6bca47da051e62a101d20; ?>
<?php unset($__attributesOriginalc91e2e789fc6bca47da051e62a101d20); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc91e2e789fc6bca47da051e62a101d20)): ?>
<?php $component = $__componentOriginalc91e2e789fc6bca47da051e62a101d20; ?>
<?php unset($__componentOriginalc91e2e789fc6bca47da051e62a101d20); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginaled2321f3593672d7b1b24c688bdda757 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled2321f3593672d7b1b24c688bdda757 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.testimonials.testimonials-section','data' => ['title' => 'Fast-Track Your Projects','subTitle' => 'At ScrewFast, we ensure a swift start with instant account setup. Experience the speed of construction redefined.','testimonials' => $testimonials,'statistics' => $statistics]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.testimonials.testimonials-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Fast-Track Your Projects','subTitle' => 'At ScrewFast, we ensure a swift start with instant account setup. Experience the speed of construction redefined.','testimonials' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($testimonials),'statistics' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($statistics)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled2321f3593672d7b1b24c688bdda757)): ?>
<?php $attributes = $__attributesOriginaled2321f3593672d7b1b24c688bdda757; ?>
<?php unset($__attributesOriginaled2321f3593672d7b1b24c688bdda757); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled2321f3593672d7b1b24c688bdda757)): ?>
<?php $component = $__componentOriginaled2321f3593672d7b1b24c688bdda757; ?>
<?php unset($__componentOriginaled2321f3593672d7b1b24c688bdda757); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginala98772913e378972031b1d24f232d6ca = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala98772913e378972031b1d24f232d6ca = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.pricing.pricing-section','data' => ['pricing' => $pricing]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.pricing.pricing-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['pricing' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($pricing)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala98772913e378972031b1d24f232d6ca)): ?>
<?php $attributes = $__attributesOriginala98772913e378972031b1d24f232d6ca; ?>
<?php unset($__attributesOriginala98772913e378972031b1d24f232d6ca); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala98772913e378972031b1d24f232d6ca)): ?>
<?php $component = $__componentOriginala98772913e378972031b1d24f232d6ca; ?>
<?php unset($__componentOriginala98772913e378972031b1d24f232d6ca); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal11c68d59fc7233bcd1d371861aa4b6c3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal11c68d59fc7233bcd1d371861aa4b6c3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.misc.faq','data' => ['title' => 'Frequently<br />asked questions','faqs' => $faqs]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.misc.faq'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Frequently<br />asked questions','faqs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($faqs)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal11c68d59fc7233bcd1d371861aa4b6c3)): ?>
<?php $attributes = $__attributesOriginal11c68d59fc7233bcd1d371861aa4b6c3; ?>
<?php unset($__attributesOriginal11c68d59fc7233bcd1d371861aa4b6c3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal11c68d59fc7233bcd1d371861aa4b6c3)): ?>
<?php $component = $__componentOriginal11c68d59fc7233bcd1d371861aa4b6c3; ?>
<?php unset($__componentOriginal11c68d59fc7233bcd1d371861aa4b6c3); ?>
<?php endif; ?>

    <?php if (isset($component)) { $__componentOriginal0a03e1af953e8affe1656c8e8c8791a6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0a03e1af953e8affe1656c8e8c8791a6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.landing.hero-section-alt','data' => ['title' => 'Let\'s Build Together','subTitle' => 'ScrewFast is an open-source template, meticulously crafted with Astro, Tailwind CSS, and Preline UI frameworks.','url' => '#!']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.landing.hero-section-alt'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Let\'s Build Together','subTitle' => 'ScrewFast is an open-source template, meticulously crafted with Astro, Tailwind CSS, and Preline UI frameworks.','url' => '#!']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0a03e1af953e8affe1656c8e8c8791a6)): ?>
<?php $attributes = $__attributesOriginal0a03e1af953e8affe1656c8e8c8791a6; ?>
<?php unset($__attributesOriginal0a03e1af953e8affe1656c8e8c8791a6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0a03e1af953e8affe1656c8e8c8791a6)): ?>
<?php $component = $__componentOriginal0a03e1af953e8affe1656c8e8c8791a6; ?>
<?php unset($__componentOriginal0a03e1af953e8affe1656c8e8c8791a6); ?>
<?php endif; ?>
  <?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $attributes = $__attributesOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__attributesOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $component = $__componentOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__componentOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Documents\GitHub\Colorspire\Colorspire-Creations\resources\views/pages/home.blade.php ENDPATH**/ ?>