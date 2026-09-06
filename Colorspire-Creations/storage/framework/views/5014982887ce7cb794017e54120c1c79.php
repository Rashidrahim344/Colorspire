<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => ['title' => $pageTitle,'customDescription' => $metaDescription,'customOgTitle' => $ogTitle,'lang' => $locale]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($pageTitle),'customDescription' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($metaDescription),'customOgTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ogTitle),'lang' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($locale)]); ?>
  <section class="mx-auto max-w-[85rem] px-4 pt-16 pb-10 sm:px-6 lg:px-8 2xl:max-w-full">
    <div class="mx-auto max-w-3xl text-center">
      <span class="text-sm font-semibold uppercase tracking-wider text-yellow-500 dark:text-yellow-400">
        <?php echo e($locale === 'fr' ? 'À Propos de ColorSpire Creations' : 'About ColorSpire Creations'); ?>

      </span>
      <h1 class="mt-3 text-3xl font-bold tracking-tight text-balance text-neutral-800 md:text-5xl lg:text-6xl dark:text-neutral-200">
        <?php echo e($title); ?>

      </h1>
      <p class="mt-5 text-lg leading-relaxed text-pretty text-neutral-600 dark:text-neutral-400">
        <?php echo e($lead); ?>

      </p>
    </div>
  </section>

  <!-- Story & Vision/Mission Grid -->
  <section class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 2xl:max-w-full">
    <div class="grid gap-12 lg:grid-cols-2 lg:items-center">
      <div class="space-y-6">
        <h2 class="text-2xl font-bold text-neutral-800 md:text-3xl dark:text-neutral-200">
          <?php echo e($storyTitle); ?>

        </h2>
        <p class="text-base leading-relaxed text-neutral-600 md:text-lg dark:text-neutral-400">
          <?php echo e($storyContent); ?>

        </p>

        <div class="grid gap-6 sm:grid-cols-2 pt-4">
          <div class="rounded-xl border border-neutral-200 bg-neutral-50 p-6 dark:border-neutral-700 dark:bg-neutral-800">
            <h3 class="text-lg font-bold text-neutral-800 dark:text-neutral-200">
              <?php echo e($visionTitle); ?>

            </h3>
            <p class="mt-2 text-sm leading-relaxed text-neutral-600 dark:text-neutral-400">
              <?php echo e($visionContent); ?>

            </p>
          </div>
          <div class="rounded-xl border border-neutral-200 bg-neutral-50 p-6 dark:border-neutral-700 dark:bg-neutral-800">
            <h3 class="text-lg font-bold text-neutral-800 dark:text-neutral-200">
              <?php echo e($missionTitle); ?>

            </h3>
            <p class="mt-2 text-sm leading-relaxed text-neutral-600 dark:text-neutral-400">
              <?php echo e($missionContent); ?>

            </p>
          </div>
        </div>
      </div>

      <div class="relative overflow-hidden rounded-2xl shadow-xl">
        <img
          src="<?php echo e(asset('images/construction-image.avif')); ?>"
          alt="ColorSpire Creations Studio Environment"
          class="h-full w-full object-cover"
        />
        <div class="absolute inset-0 bg-linear-to-t from-neutral-900/60 to-transparent"></div>
        <div class="absolute bottom-6 left-6 right-6 text-white">
          <p class="text-sm font-semibold uppercase tracking-wider text-yellow-400">
            <?php echo e($locale === 'fr' ? 'Studio de solutions créatives & numériques' : 'Creative & Digital Solutions Studio'); ?>

          </p>
          <p class="mt-1 text-lg font-bold">
            <?php echo e($locale === 'fr' ? 'Basé en Zambie • Marchés régionaux et internationaux' : 'Zambia-based • Regional & International Reach'); ?>

          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- What We Believe -->
  <section class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 2xl:max-w-full">
    <div class="rounded-2xl bg-neutral-100 p-8 md:p-12 dark:bg-neutral-800/60">
      <div class="mx-auto max-w-2xl text-center">
        <h2 class="text-2xl font-bold text-neutral-800 md:text-3xl dark:text-neutral-200">
          <?php echo e($beliefsTitle); ?>

        </h2>
        <p class="mt-2 text-sm text-neutral-600 dark:text-neutral-400">
          <?php echo e($locale === 'fr' ? 'Nos principes directeurs pour chaque projet' : 'Our guiding principles across every collaboration'); ?>

        </p>
      </div>

      <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <?php $__currentLoopData = $beliefs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $belief): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="flex items-start gap-4 rounded-xl bg-white p-6 shadow-xs dark:bg-neutral-800">
            <span class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-yellow-400 text-sm font-bold text-neutral-900 dark:bg-yellow-500">
              0<?php echo e($index + 1); ?>

            </span>
            <p class="text-sm leading-relaxed text-neutral-700 dark:text-neutral-300">
              <?php echo e($belief); ?>

            </p>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </section>

  <?php if (isset($component)) { $__componentOriginal0a03e1af953e8affe1656c8e8c8791a6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0a03e1af953e8affe1656c8e8c8791a6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.landing.hero-section-alt','data' => ['title' => $locale === 'fr' ? 'Construisons ensemble votre projet' : 'Let\'s Create Something That Inspires.','subTitle' => $locale === 'fr' ? 'Vous avez une idée ou une marque à valoriser ? Discutons de vos objectifs dès aujourd\'hui.' : 'Have an idea, a brand or a project in mind? Let\'s turn it into something meaningful, useful and built to last.','primaryBtn' => $locale === 'fr' ? 'Démarrer un projet' : 'Start a Project','primaryBtnURL' => $locale === 'fr' ? '/fr/contact' : '/contact','secondaryBtn' => $locale === 'fr' ? 'Explorer nos réalisations' : 'Explore Our Work','secondaryBtnURL' => $locale === 'fr' ? '/fr/portfolio' : '/portfolio']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.landing.hero-section-alt'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($locale === 'fr' ? 'Construisons ensemble votre projet' : 'Let\'s Create Something That Inspires.'),'subTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($locale === 'fr' ? 'Vous avez une idée ou une marque à valoriser ? Discutons de vos objectifs dès aujourd\'hui.' : 'Have an idea, a brand or a project in mind? Let\'s turn it into something meaningful, useful and built to last.'),'primaryBtn' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($locale === 'fr' ? 'Démarrer un projet' : 'Start a Project'),'primaryBtnURL' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($locale === 'fr' ? '/fr/contact' : '/contact'),'secondaryBtn' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($locale === 'fr' ? 'Explorer nos réalisations' : 'Explore Our Work'),'secondaryBtnURL' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($locale === 'fr' ? '/fr/portfolio' : '/portfolio')]); ?>
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
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Documents\GitHub\Colorspire\Colorspire-Creations\resources\views/pages/about.blade.php ENDPATH**/ ?>