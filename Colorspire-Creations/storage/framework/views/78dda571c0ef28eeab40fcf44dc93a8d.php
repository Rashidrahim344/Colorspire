<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title' => '',
    'subTitle' => '',
    'src' => null,
    'alt' => '',
    'features' => [],
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
    'title' => '',
    'subTitle' => '',
    'src' => null,
    'alt' => '',
    'features' => [],
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
$imgSrc = $src ? (str_starts_with($src, 'http') ? $src : asset($src)) : null;
?>

<section
  class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 2xl:max-w-full"
>
  <?php if($imgSrc && $alt): ?>
    <div class="relative mb-6 overflow-hidden md:mb-8">
      <img
        src="<?php echo e($imgSrc); ?>"
        alt="<?php echo e($alt); ?>"
        class="h-full w-full object-cover object-center"
        draggable="false"
        loading="eager"
      />
    </div>
  <?php endif; ?>

  <div class="mt-5 grid gap-8 lg:mt-16 lg:grid-cols-3 lg:gap-12">
    <div class="lg:col-span-1">
      <h2
        class="text-2xl font-bold text-balance text-neutral-800 md:text-3xl dark:text-neutral-200"
      >
        <?php echo e($title); ?>

      </h2>
      <?php if($subTitle): ?>
        <p class="mt-2 text-pretty text-neutral-600 md:mt-4 dark:text-neutral-400">
          <?php echo e($subTitle); ?>

        </p>
      <?php endif; ?>
    </div>

    <div class="lg:col-span-2">
      <div class="grid gap-8 sm:grid-cols-2 md:gap-12">
        <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if (isset($component)) { $__componentOriginalcdbf0c70adddf887c2dbaebfd46275d4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcdbf0c70adddf887c2dbaebfd46275d4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.blocks.icon-block','data' => ['heading' => $feature['heading'],'content' => $feature['content']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('blocks.icon-block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($feature['heading']),'content' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($feature['content'])]); ?>
            <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => $feature['svg']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($feature['svg'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
           <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcdbf0c70adddf887c2dbaebfd46275d4)): ?>
<?php $attributes = $__attributesOriginalcdbf0c70adddf887c2dbaebfd46275d4; ?>
<?php unset($__attributesOriginalcdbf0c70adddf887c2dbaebfd46275d4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcdbf0c70adddf887c2dbaebfd46275d4)): ?>
<?php $component = $__componentOriginalcdbf0c70adddf887c2dbaebfd46275d4; ?>
<?php unset($__componentOriginalcdbf0c70adddf887c2dbaebfd46275d4); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>
</section>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Documents\GitHub\Colorspire\Colorspire-Creations\resources\views/components/sections/features/features-general.blade.php ENDPATH**/ ?>