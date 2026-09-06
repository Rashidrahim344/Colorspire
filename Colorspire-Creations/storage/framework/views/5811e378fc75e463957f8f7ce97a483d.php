<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title',
    'subTitle' => null,
    'mainStatTitle',
    'mainStatSubTitle',
    'stats' => [],
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
    'mainStatTitle',
    'mainStatSubTitle',
    'stats' => [],
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
>
  <div class="max-w-(--breakpoint-md)">
    <h2
      class="mb-4 text-3xl font-extrabold tracking-tight text-balance text-neutral-800 dark:text-neutral-200"
    >
      <?php echo e($title); ?>

    </h2>
    <?php if($subTitle): ?>
      <p class="mb-16 max-w-prose font-normal text-pretty text-neutral-600 sm:text-xl dark:text-neutral-400">
        <?php echo e($subTitle); ?>

      </p>
    <?php endif; ?>
  </div>
  <div class="grid items-center gap-6 lg:grid-cols-12 lg:gap-12">
    <div class="lg:col-span-4">
      <?php if (isset($component)) { $__componentOriginal1f95e676c0a4ef59101fffd90b63d27b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f95e676c0a4ef59101fffd90b63d27b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.blocks.stats-big','data' => ['title' => $mainStatTitle,'subTitle' => $mainStatSubTitle]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('blocks.stats-big'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($mainStatTitle),'subTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($mainStatSubTitle)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f95e676c0a4ef59101fffd90b63d27b)): ?>
<?php $attributes = $__attributesOriginal1f95e676c0a4ef59101fffd90b63d27b; ?>
<?php unset($__attributesOriginal1f95e676c0a4ef59101fffd90b63d27b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f95e676c0a4ef59101fffd90b63d27b)): ?>
<?php $component = $__componentOriginal1f95e676c0a4ef59101fffd90b63d27b; ?>
<?php unset($__componentOriginal1f95e676c0a4ef59101fffd90b63d27b); ?>
<?php endif; ?>
    </div>
    <?php if(!empty($stats)): ?>
      <div class="relative lg:col-span-8 lg:before:absolute lg:before:-start-12 lg:before:top-0 lg:before:h-full lg:before:w-px lg:before:bg-neutral-300 lg:dark:before:bg-neutral-700">
        <div class="grid grid-cols-2 gap-6 sm:gap-8 md:grid-cols-4 lg:grid-cols-3">
          <?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginal4706ddce9208516e486865500caf4c6e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4706ddce9208516e486865500caf4c6e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.blocks.stats-small','data' => ['title' => $stat['stat'],'subTitle' => $stat['description']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('blocks.stats-small'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($stat['stat']),'subTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($stat['description'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4706ddce9208516e486865500caf4c6e)): ?>
<?php $attributes = $__attributesOriginal4706ddce9208516e486865500caf4c6e; ?>
<?php unset($__attributesOriginal4706ddce9208516e486865500caf4c6e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4706ddce9208516e486865500caf4c6e)): ?>
<?php $component = $__componentOriginal4706ddce9208516e486865500caf4c6e; ?>
<?php unset($__componentOriginal4706ddce9208516e486865500caf4c6e); ?>
<?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Desktop\Colorspire\screwfast-1.0.0\resources\views/components/sections/features/features-stats.blade.php ENDPATH**/ ?>