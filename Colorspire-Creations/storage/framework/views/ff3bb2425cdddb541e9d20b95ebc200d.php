<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'content',
    'author',
    'role',
    'avatarSrc',
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
    'content',
    'author',
    'role',
    'avatarSrc',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
$imgSrc = str_starts_with($avatarSrc, 'http') ? $avatarSrc : asset($avatarSrc);
?>

<blockquote class="relative">
  <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'quotation']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'quotation']); ?>
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

  <div class="relative z-10">
    <p class="text-xl text-neutral-800 italic dark:text-neutral-200">
      <?php echo e($content); ?>

    </p>
  </div>

  <div class="mt-6">
    <div class="flex items-center">
      <div class="shrink-0">
        <img
          class="h-8 w-8 rounded-full object-cover"
          src="<?php echo e($imgSrc); ?>"
          alt="Avatar Description"
          loading="eager"
        />
      </div>
      <div class="ms-4 grow">
        <div class="font-bold text-neutral-800 dark:text-neutral-200">
          <?php echo e($author); ?>

        </div>
        <div class="text-xs text-neutral-500"><?php echo e($role); ?></div>
      </div>
    </div>
  </div>
</blockquote>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Desktop\Colorspire\screwfast-1.0.0\resources\views/components/sections/testimonials/testimonial-item.blade.php ENDPATH**/ ?>