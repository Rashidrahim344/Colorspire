<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'avatars' => [],
    'starCount' => 0,
    'rating' => '',
    'reviews' => '',
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
    'avatars' => [],
    'starCount' => 0,
    'rating' => '',
    'reviews' => '',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="mt-6 lg:mt-10">
  <div class="py-5">
    <div class="text-center sm:flex sm:items-center sm:text-start">
      <div class="shrink-0 pb-5 sm:flex sm:pe-5 sm:pb-0">
        <div class="flex justify-center -space-x-3">
          <?php $__currentLoopData = $avatars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $src): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginal509c53a7568e07868cb1e8962f0ef801 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal509c53a7568e07868cb1e8962f0ef801 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.avatars.avatar','data' => ['src' => $src,'alt' => 'Avatar Description']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('avatars.avatar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($src),'alt' => 'Avatar Description']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal509c53a7568e07868cb1e8962f0ef801)): ?>
<?php $attributes = $__attributesOriginal509c53a7568e07868cb1e8962f0ef801; ?>
<?php unset($__attributesOriginal509c53a7568e07868cb1e8962f0ef801); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal509c53a7568e07868cb1e8962f0ef801)): ?>
<?php $component = $__componentOriginal509c53a7568e07868cb1e8962f0ef801; ?>
<?php unset($__componentOriginal509c53a7568e07868cb1e8962f0ef801); ?>
<?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <span
            class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-zinc-800 ring-2 ring-white dark:bg-zinc-900 dark:ring-zinc-800"
          >
            <span class="text-xs leading-none font-medium text-white uppercase"
              >7k+</span
            >
          </span>
        </div>
      </div>
      <div
        class="mx-auto h-px w-32 border-t border-neutral-400 sm:mx-0 sm:h-8 sm:w-auto sm:border-s sm:border-t-0 dark:border-neutral-500"
      >
      </div>
      <div class="flex flex-col items-center sm:items-start">
        <div class="flex items-baseline space-x-1 pt-5 sm:ps-5 sm:pt-0">
          <div class="flex space-x-1">
            <?php for($i = 0; $i < $starCount; $i++): ?>
              <?php if (isset($component)) { $__componentOriginale7953042bf5a32a2a1baabdcf1515964 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale7953042bf5a32a2a1baabdcf1515964 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.stars.full-star','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('stars.full-star'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale7953042bf5a32a2a1baabdcf1515964)): ?>
<?php $attributes = $__attributesOriginale7953042bf5a32a2a1baabdcf1515964; ?>
<?php unset($__attributesOriginale7953042bf5a32a2a1baabdcf1515964); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale7953042bf5a32a2a1baabdcf1515964)): ?>
<?php $component = $__componentOriginale7953042bf5a32a2a1baabdcf1515964; ?>
<?php unset($__componentOriginale7953042bf5a32a2a1baabdcf1515964); ?>
<?php endif; ?>
            <?php endfor; ?>
            <?php if (isset($component)) { $__componentOriginald59691f74fdba99a5b9eab636fb6fcbc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald59691f74fdba99a5b9eab636fb6fcbc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.stars.half-star','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('stars.half-star'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald59691f74fdba99a5b9eab636fb6fcbc)): ?>
<?php $attributes = $__attributesOriginald59691f74fdba99a5b9eab636fb6fcbc; ?>
<?php unset($__attributesOriginald59691f74fdba99a5b9eab636fb6fcbc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald59691f74fdba99a5b9eab636fb6fcbc)): ?>
<?php $component = $__componentOriginald59691f74fdba99a5b9eab636fb6fcbc; ?>
<?php unset($__componentOriginald59691f74fdba99a5b9eab636fb6fcbc); ?>
<?php endif; ?>
          </div>
          <p class="text-neutral-800 dark:text-neutral-200">
            <?php echo $rating; ?>

          </p>
        </div>
        <div class="text-sm text-neutral-800 sm:ps-5 dark:text-neutral-200">
          <p>
            <?php echo $reviews; ?>

          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Desktop\Colorspire\screwfast-1.0.0\resources\views/components/blocks/review-component.blade.php ENDPATH**/ ?>