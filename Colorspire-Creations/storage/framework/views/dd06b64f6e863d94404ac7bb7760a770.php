<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title',
    'testimonials' => [],
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
    'testimonials' => [],
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<section
  class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 2xl:max-w-full"
  id="testimonials"
>
  <div class="mb-6 w-3/4 max-w-2xl sm:mb-10 md:mb-16 lg:w-1/2">
    <h2
      class="text-2xl font-bold text-balance text-neutral-800 sm:text-3xl lg:text-4xl dark:text-neutral-200"
    >
      <?php echo e($title); ?>

    </h2>
  </div>

  <div class="grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
    <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="flex h-auto">
        <div class="flex flex-col rounded-xl bg-neutral-50 dark:bg-neutral-700">
          <div class="flex-auto p-4 md:p-6">
            <p class="text-base text-pretty text-neutral-600 italic md:text-lg dark:text-neutral-300">
              <?php echo e($testimonial['content']); ?>

            </p>
          </div>

          <div class="rounded-b-xl bg-neutral-300/30 p-4 md:px-7 dark:bg-neutral-900/30">
            <div class="flex items-center">
              <?php if (isset($component)) { $__componentOriginal07d953a11077d05db75e0e6a8557586e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal07d953a11077d05db75e0e6a8557586e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.avatars.avatar-testimonial-section','data' => ['src' => $testimonial['avatarSrc'],'alt' => $testimonial['avatarAlt']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('avatars.avatar-testimonial-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['src' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($testimonial['avatarSrc']),'alt' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($testimonial['avatarAlt'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal07d953a11077d05db75e0e6a8557586e)): ?>
<?php $attributes = $__attributesOriginal07d953a11077d05db75e0e6a8557586e; ?>
<?php unset($__attributesOriginal07d953a11077d05db75e0e6a8557586e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal07d953a11077d05db75e0e6a8557586e)): ?>
<?php $component = $__componentOriginal07d953a11077d05db75e0e6a8557586e; ?>
<?php unset($__componentOriginal07d953a11077d05db75e0e6a8557586e); ?>
<?php endif; ?>

              <div class="ms-3 grow">
                <p class="text-sm font-bold text-neutral-800 sm:text-base dark:text-neutral-200">
                  <?php echo e($testimonial['author']); ?>

                </p>
                <p class="text-xs text-neutral-600 dark:text-neutral-400">
                  <?php echo e($testimonial['role']); ?>

                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</section>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Desktop\Colorspire\screwfast-1.0.0\resources\views/components/sections/testimonials/testimonials-section-alt.blade.php ENDPATH**/ ?>