<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title',
    'subTitle',
    'btnExists' => false,
    'btnTitle' => '',
    'btnURL' => '#',
    'single' => false,
    'imgOne' => null,
    'imgOneAlt' => '',
    'imgTwo' => null,
    'imgTwoAlt' => '',
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
    'subTitle',
    'btnExists' => false,
    'btnTitle' => '',
    'btnURL' => '#',
    'single' => false,
    'imgOne' => null,
    'imgOneAlt' => '',
    'imgTwo' => null,
    'imgTwoAlt' => '',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
$imgOneSrc = str_starts_with($imgOne, 'http') ? $imgOne : asset($imgOne);
$imgTwoSrc = $imgTwo ? (str_starts_with($imgTwo, 'http') ? $imgTwo : asset($imgTwo)) : null;
?>

<section
  class="mx-auto max-w-[85rem] items-center gap-16 px-4 py-10 sm:px-6 lg:grid lg:grid-cols-2 lg:px-8 lg:py-14 2xl:max-w-full"
>
  <div>
    <h2
      class="mb-4 text-4xl font-extrabold tracking-tight text-balance text-neutral-800 dark:text-neutral-200"
    >
      <?php echo e($title); ?>

    </h2>
    <p
      class="mb-4 max-w-prose font-normal text-pretty text-neutral-600 sm:text-lg dark:text-neutral-400"
    >
      <?php echo e($subTitle); ?>

    </p>
    <?php if($btnExists): ?>
      <?php if (isset($component)) { $__componentOriginalc195594364a586cb1e89cd7db6efa1e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc195594364a586cb1e89cd7db6efa1e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.primary-cta','data' => ['title' => $btnTitle,'url' => $btnURL]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('buttons.primary-cta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($btnTitle),'url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($btnURL)]); ?>
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
  </div>
  <?php if($single): ?>
    <div class="mt-8">
      <img
        class="w-full rounded-lg"
        src="<?php echo e($imgOneSrc); ?>"
        alt="<?php echo e($imgOneAlt); ?>"
      />
    </div>
  <?php else: ?>
    <div class="mt-8 grid grid-cols-2 gap-4">
      <img
        class="w-full rounded-xl"
        src="<?php echo e($imgOneSrc); ?>"
        alt="<?php echo e($imgOneAlt); ?>"
        draggable="false"
      />
      <?php if($imgTwoSrc): ?>
        <img
          class="mt-4 w-full rounded-xl lg:mt-10"
          src="<?php echo e($imgTwoSrc); ?>"
          alt="<?php echo e($imgTwoAlt); ?>"
          draggable="false"
        />
      <?php endif; ?>
    </div>
  <?php endif; ?>
</section>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Desktop\Colorspire\screwfast-1.0.0\resources\views/components/blocks/right-section.blade.php ENDPATH**/ ?>