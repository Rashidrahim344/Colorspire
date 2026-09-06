<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title',
    'subTitle' => null,
    'primaryBtn' => null,
    'primaryBtnURL' => '#',
    'secondaryBtn' => null,
    'secondaryBtnURL' => '#',
    'withReview' => false,
    'avatars' => [],
    'starCount' => 0,
    'rating' => '',
    'reviews' => '',
    'src' => null,
    'alt' => '',
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'title',
    'subTitle' => null,
    'primaryBtn' => null,
    'primaryBtnURL' => '#',
    'secondaryBtn' => null,
    'secondaryBtnURL' => '#',
    'withReview' => false,
    'avatars' => [],
    'starCount' => 0,
    'rating' => '',
    'reviews' => '',
    'src' => null,
    'alt' => '',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
$heroSrc = $src ? (str_starts_with($src, 'http') ? $src : asset($src)) : null;
?>

<section
  class="mx-auto grid max-w-[85rem] gap-4 px-4 py-14 sm:px-6 md:grid-cols-2 md:items-center md:gap-8 lg:px-8 2xl:max-w-full"
>
  <div>
    <h1
      class="block text-3xl font-bold tracking-tight text-balance text-neutral-800 sm:text-4xl lg:text-6xl lg:leading-tight dark:text-neutral-200"
    >
      <?php echo $title; ?>

    </h1>
    <?php if($subTitle): ?>
      <p class="mt-3 text-lg leading-relaxed text-pretty text-neutral-700 lg:w-4/5 dark:text-neutral-400">
        <?php echo e($subTitle); ?>

      </p>
    <?php endif; ?>
    <div class="mt-7 grid w-full gap-3 sm:inline-flex">
      <?php if($primaryBtn): ?>
        <?php if (isset($component)) { $__componentOriginalc195594364a586cb1e89cd7db6efa1e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc195594364a586cb1e89cd7db6efa1e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.primary-cta','data' => ['title' => $primaryBtn,'url' => $primaryBtnURL]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('buttons.primary-cta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($primaryBtn),'url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($primaryBtnURL)]); ?>
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
      <?php endif; ?>
      <?php if($secondaryBtn): ?>
        <?php if (isset($component)) { $__componentOriginal5deb6f71b9a2baa14baea84636213375 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5deb6f71b9a2baa14baea84636213375 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.secondary-cta','data' => ['title' => $secondaryBtn,'url' => $secondaryBtnURL]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('buttons.secondary-cta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($secondaryBtn),'url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($secondaryBtnURL)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5deb6f71b9a2baa14baea84636213375)): ?>
<?php $attributes = $__attributesOriginal5deb6f71b9a2baa14baea84636213375; ?>
<?php unset($__attributesOriginal5deb6f71b9a2baa14baea84636213375); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5deb6f71b9a2baa14baea84636213375)): ?>
<?php $component = $__componentOriginal5deb6f71b9a2baa14baea84636213375; ?>
<?php unset($__componentOriginal5deb6f71b9a2baa14baea84636213375); ?>
<?php endif; ?>
      <?php endif; ?>
    </div>

    <?php if($withReview): ?>
      <?php if (isset($component)) { $__componentOriginal442566e08755d3c0ad630eb4820a038d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal442566e08755d3c0ad630eb4820a038d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.blocks.review-component','data' => ['avatars' => $avatars,'starCount' => $starCount,'rating' => $rating,'reviews' => $reviews]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('blocks.review-component'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['avatars' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($avatars),'starCount' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($starCount),'rating' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($rating),'reviews' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($reviews)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal442566e08755d3c0ad630eb4820a038d)): ?>
<?php $attributes = $__attributesOriginal442566e08755d3c0ad630eb4820a038d; ?>
<?php unset($__attributesOriginal442566e08755d3c0ad630eb4820a038d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal442566e08755d3c0ad630eb4820a038d)): ?>
<?php $component = $__componentOriginal442566e08755d3c0ad630eb4820a038d; ?>
<?php unset($__componentOriginal442566e08755d3c0ad630eb4820a038d); ?>
<?php endif; ?>
    <?php endif; ?>
  </div>

  <div class="flex w-full">
    <div class="top-12 overflow-hidden">
      <?php if($heroSrc && $alt): ?>
        <img
          src="<?php echo e($heroSrc); ?>"
          alt="<?php echo e($alt); ?>"
          class="h-full w-full scale-110 object-cover object-center"
          draggable="false"
          loading="eager"
        />
      <?php endif; ?>
    </div>
  </div>
</section>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Documents\GitHub\Colorspire\Colorspire-Creations\resources\views/components/sections/landing/hero-section.blade.php ENDPATH**/ ?>