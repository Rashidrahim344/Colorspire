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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.banners.announcement-banner','data' => ['btnId' => 'dismiss-button','btnTitle' => $locale === 'fr' ? 'Concevoir l\'influence visuelle — Bâtir pour inspirer' : 'Designing Visual Influence — Built to Inspire','url' => '#!']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('banners.announcement-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['btnId' => 'dismiss-button','btnTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($locale === 'fr' ? 'Concevoir l\'influence visuelle — Bâtir pour inspirer' : 'Designing Visual Influence — Built to Inspire'),'url' => '#!']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.landing.hero-section','data' => ['title' => 'Concevoir des marques. <span class="text-yellow-500 dark:text-yellow-400">Bâtir des expériences numériques.</span>','subTitle' => 'ColorSpire Creations aide les entreprises, organisations et esprits ambitieux à transformer leurs idées en identités visuelles fortes, contenus captivants et expériences numériques conçues pour marquer les esprits.','primaryBtn' => 'Démarrer un projet','primaryBtnURL' => '/fr/contact','secondaryBtn' => 'Explorer nos réalisations','secondaryBtnURL' => '/fr/portfolio','withReview' => true,'avatars' => $avatars,'rating' => '<span class="font-bold">5.0</span>','starCount' => 5,'reviews' => '<span class="font-bold">[AVIS CLIENTS VÉRIFIÉS]</span>','src' => 'images/hero-image.avif','alt' => 'ColorSpire Creations branding et solutions numériques']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.landing.hero-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Concevoir des marques. <span class="text-yellow-500 dark:text-yellow-400">Bâtir des expériences numériques.</span>','subTitle' => 'ColorSpire Creations aide les entreprises, organisations et esprits ambitieux à transformer leurs idées en identités visuelles fortes, contenus captivants et expériences numériques conçues pour marquer les esprits.','primaryBtn' => 'Démarrer un projet','primaryBtnURL' => '/fr/contact','secondaryBtn' => 'Explorer nos réalisations','secondaryBtnURL' => '/fr/portfolio','withReview' => true,'avatars' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($avatars),'rating' => '<span class="font-bold">5.0</span>','starCount' => 5,'reviews' => '<span class="font-bold">[AVIS CLIENTS VÉRIFIÉS]</span>','src' => 'images/hero-image.avif','alt' => 'ColorSpire Creations branding et solutions numériques']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.landing.clients-section','data' => ['title' => 'Conçu pour aider les marques à mieux communiquer','subTitle' => 'Du design visuel aux expériences numériques, ColorSpire réunit stratégie, créativité et exécution. [PARTENAIRES VÉRIFIÉS]','partners' => $partners]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.landing.clients-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Conçu pour aider les marques à mieux communiquer','subTitle' => 'Du design visuel aux expériences numériques, ColorSpire réunit stratégie, créativité et exécution. [PARTENAIRES VÉRIFIÉS]','partners' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($partners)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.features.features-general','data' => ['title' => 'Des solutions créatives pour les marques qui veulent être prises au sérieux','subTitle' => 'Votre marque est plus qu\'un logo, et votre site web est plus qu\'une collection de pages. Nous combinons design, contenu et technologie pour vous aider à communiquer clairement, afficher votre professionnalisme et développer des points de contact numériques plus solides.','src' => 'images/features-image.avif','alt' => 'Solutions créatives ColorSpire Creations','features' => $features]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.features.features-general'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Des solutions créatives pour les marques qui veulent être prises au sérieux','subTitle' => 'Votre marque est plus qu\'un logo, et votre site web est plus qu\'une collection de pages. Nous combinons design, contenu et technologie pour vous aider à communiquer clairement, afficher votre professionnalisme et développer des points de contact numériques plus solides.','src' => 'images/features-image.avif','alt' => 'Solutions créatives ColorSpire Creations','features' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($features)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.features.features-navs','data' => ['title' => 'Tout ce dont vous avez besoin pour bâtir une <span class="text-yellow-500 dark:text-yellow-400">présence numérique plus forte</span>','tabs' => [
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
      ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.features.features-navs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Tout ce dont vous avez besoin pour bâtir une <span class="text-yellow-500 dark:text-yellow-400">présence numérique plus forte</span>','tabs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.testimonials.testimonials-section','data' => ['title' => 'Un travail créatif qui fait progresser vos projets','subTitle' => 'Conçu autour de résultats créatifs concrets','testimonials' => $testimonials,'statistics' => $statistics]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.testimonials.testimonials-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Un travail créatif qui fait progresser vos projets','subTitle' => 'Conçu autour de résultats créatifs concrets','testimonials' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($testimonials),'statistics' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($statistics)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.landing.hero-section-alt','data' => ['title' => 'Créons ensemble quelque chose qui inspire.','subTitle' => 'Vous avez une idée, une marque ou un projet en tête ? Donnons-lui vie sous une forme riche de sens, utile et conçue pour durer.','primaryBtn' => 'Démarrer un projet','primaryBtnURL' => '/fr/contact','secondaryBtn' => 'Contacter ColorSpire','secondaryBtnURL' => '/fr/contact']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.landing.hero-section-alt'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Créons ensemble quelque chose qui inspire.','subTitle' => 'Vous avez une idée, une marque ou un projet en tête ? Donnons-lui vie sous une forme riche de sens, utile et conçue pour durer.','primaryBtn' => 'Démarrer un projet','primaryBtnURL' => '/fr/contact','secondaryBtn' => 'Contacter ColorSpire','secondaryBtnURL' => '/fr/contact']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.landing.hero-section','data' => ['title' => 'Designing Visual <span class="text-yellow-500 dark:text-yellow-400">Influence.</span>','subTitle' => 'ColorSpire Creations helps businesses, organizations and ambitious individuals turn ideas into strong visual identities, compelling content and digital experiences that are built to make an impact.','primaryBtn' => 'Start a Project','primaryBtnURL' => '/contact','secondaryBtn' => 'Explore Our Work','secondaryBtnURL' => '/portfolio','withReview' => true,'avatars' => $avatars,'rating' => '<span class="font-bold">4.5</span>','starCount' => 4,'reviews' => '<span class="font-bold">Very Excellent services!</span>','src' => 'images/hero-image.avif','alt' => 'ColorSpire Creations visual design and digital experiences']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.landing.hero-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Designing Visual <span class="text-yellow-500 dark:text-yellow-400">Influence.</span>','subTitle' => 'ColorSpire Creations helps businesses, organizations and ambitious individuals turn ideas into strong visual identities, compelling content and digital experiences that are built to make an impact.','primaryBtn' => 'Start a Project','primaryBtnURL' => '/contact','secondaryBtn' => 'Explore Our Work','secondaryBtnURL' => '/portfolio','withReview' => true,'avatars' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($avatars),'rating' => '<span class="font-bold">4.5</span>','starCount' => 4,'reviews' => '<span class="font-bold">Very Excellent services!</span>','src' => 'images/hero-image.avif','alt' => 'ColorSpire Creations visual design and digital experiences']); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.landing.clients-section','data' => ['title' => 'Built to Help Brands Communicate Better','subTitle' => 'From visual design to digital experiences, ColorSpire brings strategy, creativity and execution together. [VERIFIED PARTNERS]','partners' => $partners]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.landing.clients-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Built to Help Brands Communicate Better','subTitle' => 'From visual design to digital experiences, ColorSpire brings strategy, creativity and execution together. [VERIFIED PARTNERS]','partners' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($partners)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.features.features-general','data' => ['title' => 'Creative Solutions for Brands That Want to Be Taken Seriously','subTitle' => 'Your brand is more than a logo, and your website is more than a collection of pages. We combine design, content and technology to help you communicate clearly, look professional and build stronger digital touchpoints.','src' => 'images/features-image.avif','alt' => 'ColorSpire Creations creative capability showcase','features' => $features]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.features.features-general'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Creative Solutions for Brands That Want to Be Taken Seriously','subTitle' => 'Your brand is more than a logo, and your website is more than a collection of pages. We combine design, content and technology to help you communicate clearly, look professional and build stronger digital touchpoints.','src' => 'images/features-image.avif','alt' => 'ColorSpire Creations creative capability showcase','features' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($features)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.features.features-navs','data' => ['title' => 'Everything You Need to Build a <span class="text-yellow-500 dark:text-yellow-400">Stronger Digital Presence</span>','tabs' => [
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
      ]]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.features.features-navs'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Everything You Need to Build a <span class="text-yellow-500 dark:text-yellow-400">Stronger Digital Presence</span>','tabs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute([
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.testimonials.testimonials-section','data' => ['title' => 'Creative Work That Moves Projects Forward','subTitle' => 'Built Around Real Creative Outcomes','testimonials' => $testimonials,'statistics' => $statistics]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.testimonials.testimonials-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Creative Work That Moves Projects Forward','subTitle' => 'Built Around Real Creative Outcomes','testimonials' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($testimonials),'statistics' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($statistics)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.misc.faq','data' => ['title' => 'Frequently<br />Asked Questions','faqs' => $faqs]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.misc.faq'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Frequently<br />Asked Questions','faqs' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($faqs)]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.landing.hero-section-alt','data' => ['title' => 'Let’s Create Something That Inspires.','subTitle' => 'Have an idea, a brand or a project in mind? Let’s turn it into something meaningful, useful and built to last.','primaryBtn' => 'Start a Project','primaryBtnURL' => '/contact','secondaryBtn' => 'Contact ColorSpire','secondaryBtnURL' => '/contact']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.landing.hero-section-alt'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Let’s Create Something That Inspires.','subTitle' => 'Have an idea, a brand or a project in mind? Let’s turn it into something meaningful, useful and built to last.','primaryBtn' => 'Start a Project','primaryBtnURL' => '/contact','secondaryBtn' => 'Contact ColorSpire','secondaryBtnURL' => '/contact']); ?>
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