<?php
$pageTitle = ($locale === 'fr' ? 'Perspectives' : 'Insights') . " | {$site['title']}";
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
  <section
    class="mx-auto max-w-[85rem] space-y-8 px-4 pt-16 sm:px-6 lg:px-8 2xl:max-w-full"
  >
    <div class="mx-auto max-w-3xl text-left sm:text-center">
      <h1
        class="block text-4xl font-bold tracking-tight text-balance text-neutral-800 md:text-5xl lg:text-6xl dark:text-neutral-200"
      >
        <?php echo e($title); ?>

      </h1>
      <p
        class="mt-4 text-lg text-pretty text-neutral-600 dark:text-neutral-400"
      >
        <?php echo e($subTitle); ?>

      </p>
    </div>
  </section>

  <section
    class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 2xl:max-w-full"
  >
    <div class="grid gap-6 lg:grid-cols-2">
      <?php $__currentLoopData = $otherPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blogEntry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (isset($component)) { $__componentOriginal0c1782f75fb77362dbbcd637e5783c19 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0c1782f75fb77362dbbcd637e5783c19 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.card-blog','data' => ['blogEntry' => $blogEntry,'blogLocale' => $locale]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.card-blog'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['blogEntry' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($blogEntry),'blogLocale' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($locale)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0c1782f75fb77362dbbcd637e5783c19)): ?>
<?php $attributes = $__attributesOriginal0c1782f75fb77362dbbcd637e5783c19; ?>
<?php unset($__attributesOriginal0c1782f75fb77362dbbcd637e5783c19); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0c1782f75fb77362dbbcd637e5783c19)): ?>
<?php $component = $__componentOriginal0c1782f75fb77362dbbcd637e5783c19; ?>
<?php unset($__componentOriginal0c1782f75fb77362dbbcd637e5783c19); ?>
<?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </section>

  <?php if($mostRecentPost): ?>
    <section
      class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 2xl:max-w-full"
    >
      <?php if (isset($component)) { $__componentOriginalcb9e2ff981f9939dc96b3ddf54c91016 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcb9e2ff981f9939dc96b3ddf54c91016 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.card-blog-recent','data' => ['blogEntry' => $mostRecentPost,'recentBlogLocale' => $locale]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.card-blog-recent'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['blogEntry' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($mostRecentPost),'recentBlogLocale' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($locale)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcb9e2ff981f9939dc96b3ddf54c91016)): ?>
<?php $attributes = $__attributesOriginalcb9e2ff981f9939dc96b3ddf54c91016; ?>
<?php unset($__attributesOriginalcb9e2ff981f9939dc96b3ddf54c91016); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcb9e2ff981f9939dc96b3ddf54c91016)): ?>
<?php $component = $__componentOriginalcb9e2ff981f9939dc96b3ddf54c91016; ?>
<?php unset($__componentOriginalcb9e2ff981f9939dc96b3ddf54c91016); ?>
<?php endif; ?>
    </section>
  <?php endif; ?>

  <section
    class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 2xl:max-w-full"
  >
    <div class="mx-auto mb-10 max-w-2xl text-center lg:mb-14">
      <h2
        class="text-2xl font-bold text-neutral-800 md:text-4xl md:leading-tight dark:text-neutral-200"
      >
        <?php echo e($secondTitle); ?>

      </h2>
      <p class="mt-1 text-pretty text-neutral-600 dark:text-neutral-400">
        <?php echo e($secondSubTitle); ?>

      </p>
    </div>
    <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      <?php $__currentLoopData = $insightPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $insightEntry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (isset($component)) { $__componentOriginale94c46468167939767e7b6890ebf65ba = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale94c46468167939767e7b6890ebf65ba = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.card-insight','data' => ['insightEntry' => $insightEntry,'insightLocale' => $locale]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.card-insight'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['insightEntry' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($insightEntry),'insightLocale' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($locale)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale94c46468167939767e7b6890ebf65ba)): ?>
<?php $attributes = $__attributesOriginale94c46468167939767e7b6890ebf65ba; ?>
<?php unset($__attributesOriginale94c46468167939767e7b6890ebf65ba); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale94c46468167939767e7b6890ebf65ba)): ?>
<?php $component = $__componentOriginale94c46468167939767e7b6890ebf65ba; ?>
<?php unset($__componentOriginale94c46468167939767e7b6890ebf65ba); ?>
<?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </section>
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
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Documents\GitHub\Colorspire\Colorspire-Creations\resources\views/pages/blog/index.blade.php ENDPATH**/ ?>