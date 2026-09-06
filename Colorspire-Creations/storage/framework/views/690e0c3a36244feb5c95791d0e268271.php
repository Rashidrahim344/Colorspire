<?php
$metaDescription = $locale === 'fr'
  ? 'Explorez la durabilité et la précision des outils ScrewFast, conçus aussi bien pour les professionnels que pour les passionnés.'
  : 'Explore the durability and precision of ScrewFast tools, designed for both professionals and enthusiasts.';
$ogTitle = $locale === 'fr' ? 'Outils Matériels | ScrewFast' : 'Hardware Tools | ScrewFast';
$pageTitle = ($locale === 'fr' ? 'Produits' : 'Products') . " | {$site['title']}";
?>

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
  <div
    class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 2xl:max-w-full"
  >
    <div class="mb-4 flex items-center justify-between gap-8 sm:mb-8 md:mb-12">
      <div class="flex items-center gap-12">
        <h1
          class="text-2xl font-bold tracking-tight text-balance text-neutral-800 md:text-4xl md:leading-tight dark:text-neutral-200"
        >
          <?php echo e($title); ?>

        </h1>
        <?php if($subTitle): ?>
          <p class="hidden max-w-(--breakpoint-sm) text-pretty text-neutral-600 md:block dark:text-neutral-400">
            <?php echo e($subTitle); ?>

          </p>
        <?php endif; ?>
      </div>
      <?php if (isset($component)) { $__componentOriginalc195594364a586cb1e89cd7db6efa1e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc195594364a586cb1e89cd7db6efa1e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.primary-cta','data' => ['title' => $customerStoriesBtn,'url' => '#testimonials','noArrow' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('buttons.primary-cta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($customerStoriesBtn),'url' => '#testimonials','noArrow' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc195594364a586cb1e89cd7db6efa1e4)): ?>
<?php $attributes = $__attributesOriginalc195594364a586cb1e89cd7db6efa1e4; ?>
<?php unset($__attributesOriginalc195594364a586cb1e89cd7db6efa1e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc195594364a586cb1e89cd7db6efa1e4)): ?>
<?php $component = $__componentOriginalc195594364a586cb1e89cd7db6efa1e4; ?>
<?php unset($__componentOriginalc195594364a586cb1e89cd7db6efa1e4); ?>
<?php endif; ?>
    </div>

    <section class="grid grid-cols-1 gap-4 sm:grid-cols-3 md:gap-6 xl:gap-8">
      <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
          $position = $index % 4;
        ?>
        <?php if($position === 0 || $position === 3): ?>
          <?php if (isset($component)) { $__componentOriginalb68e90b85ed61b6fcdf5869ffe333412 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb68e90b85ed61b6fcdf5869ffe333412 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.card-small','data' => ['product' => $item,'productLocale' => $locale]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.card-small'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item),'productLocale' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($locale)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb68e90b85ed61b6fcdf5869ffe333412)): ?>
<?php $attributes = $__attributesOriginalb68e90b85ed61b6fcdf5869ffe333412; ?>
<?php unset($__attributesOriginalb68e90b85ed61b6fcdf5869ffe333412); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb68e90b85ed61b6fcdf5869ffe333412)): ?>
<?php $component = $__componentOriginalb68e90b85ed61b6fcdf5869ffe333412; ?>
<?php unset($__componentOriginalb68e90b85ed61b6fcdf5869ffe333412); ?>
<?php endif; ?>
        <?php else: ?>
          <?php if (isset($component)) { $__componentOriginalb0c98072d299adba76925247f499eee2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb0c98072d299adba76925247f499eee2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.card-wide','data' => ['product' => $item,'productLocale' => $locale]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.card-wide'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['product' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item),'productLocale' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($locale)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb0c98072d299adba76925247f499eee2)): ?>
<?php $attributes = $__attributesOriginalb0c98072d299adba76925247f499eee2; ?>
<?php unset($__attributesOriginalb0c98072d299adba76925247f499eee2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb0c98072d299adba76925247f499eee2)): ?>
<?php $component = $__componentOriginalb0c98072d299adba76925247f499eee2; ?>
<?php unset($__componentOriginalb0c98072d299adba76925247f499eee2); ?>
<?php endif; ?>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </section>
  </div>

  <?php if (isset($component)) { $__componentOriginal457b300881efe573e19b5a1bfe05a8b6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal457b300881efe573e19b5a1bfe05a8b6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.features.features-stats-alt','data' => ['title' => $whyTitle,'subTitle' => $whySubTitle,'benefits' => $benefits]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.features.features-stats-alt'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($whyTitle),'subTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($whySubTitle),'benefits' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($benefits)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal457b300881efe573e19b5a1bfe05a8b6)): ?>
<?php $attributes = $__attributesOriginal457b300881efe573e19b5a1bfe05a8b6; ?>
<?php unset($__attributesOriginal457b300881efe573e19b5a1bfe05a8b6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal457b300881efe573e19b5a1bfe05a8b6)): ?>
<?php $component = $__componentOriginal457b300881efe573e19b5a1bfe05a8b6; ?>
<?php unset($__componentOriginal457b300881efe573e19b5a1bfe05a8b6); ?>
<?php endif; ?>

  <?php if (isset($component)) { $__componentOriginal70dc8ed3cad8dcd792a882e4e1dc8137 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal70dc8ed3cad8dcd792a882e4e1dc8137 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.testimonials.testimonials-section-alt','data' => ['title' => $testimonialsTitle,'testimonials' => $testimonials]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.testimonials.testimonials-section-alt'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($testimonialsTitle),'testimonials' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($testimonials)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal70dc8ed3cad8dcd792a882e4e1dc8137)): ?>
<?php $attributes = $__attributesOriginal70dc8ed3cad8dcd792a882e4e1dc8137; ?>
<?php unset($__attributesOriginal70dc8ed3cad8dcd792a882e4e1dc8137); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal70dc8ed3cad8dcd792a882e4e1dc8137)): ?>
<?php $component = $__componentOriginal70dc8ed3cad8dcd792a882e4e1dc8137; ?>
<?php unset($__componentOriginal70dc8ed3cad8dcd792a882e4e1dc8137); ?>
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
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Desktop\Colorspire\screwfast-1.0.0\resources\views/pages/products/index.blade.php ENDPATH**/ ?>