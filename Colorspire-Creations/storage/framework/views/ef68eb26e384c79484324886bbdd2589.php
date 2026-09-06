<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['name', 'class' => null]));

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

foreach (array_filter((['name', 'class' => null]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
    $iconConfig = config("icons.{$name}") ?? [];
    $paths = $iconConfig['paths'] ?? [];
    $iconClass = $class ?? ($iconConfig['class'] ?? '');
    $height = $iconConfig['height'] ?? null;
    $width = $iconConfig['width'] ?? null;
    $viewBox = $iconConfig['viewBox'] ?? '0 0 24 24';
    $fill = $iconConfig['fill'] ?? null;
    $stroke = $iconConfig['stroke'] ?? null;
    $strokeWidth = $iconConfig['strokeWidth'] ?? null;
    $strokeLinecap = $iconConfig['strokeLinecap'] ?? null;
    $strokeLinejoin = $iconConfig['strokeLinejoin'] ?? null;
    $clipRule = $iconConfig['clipRule'] ?? null;
    $fillRule = $iconConfig['fillRule'] ?? null;
    $title = $iconConfig['title'] ?? null;
?>

<?php if(!empty($iconConfig)): ?>
<svg
  <?php echo e($attributes->merge(['class' => $iconClass])); ?>

  <?php if($height): ?> height="<?php echo e($height); ?>" <?php endif; ?>
  <?php if($width): ?> width="<?php echo e($width); ?>" <?php endif; ?>
  viewBox="<?php echo e($viewBox); ?>"
  <?php if($fill): ?> fill="<?php echo e($fill); ?>" <?php endif; ?>
  <?php if($clipRule): ?> clip-rule="<?php echo e($clipRule); ?>" <?php endif; ?>
  <?php if($fillRule): ?> fill-rule="<?php echo e($fillRule); ?>" <?php endif; ?>
  <?php if($stroke): ?> stroke="<?php echo e($stroke); ?>" <?php endif; ?>
  <?php if($strokeWidth): ?> stroke-width="<?php echo e($strokeWidth); ?>" <?php endif; ?>
  <?php if($strokeLinecap): ?> stroke-linecap="<?php echo e($strokeLinecap); ?>" <?php endif; ?>
  <?php if($strokeLinejoin): ?> stroke-linejoin="<?php echo e($strokeLinejoin); ?>" <?php endif; ?>
>
  <?php if($title): ?>
    <title><?php echo e($title); ?></title>
  <?php endif; ?>
  <?php $__currentLoopData = $paths; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <path d="<?php echo e($p['d']); ?>" class="<?php echo e($p['class'] ?? ''); ?>" />
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</svg>
<?php endif; ?>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Documents\GitHub\Colorspire\Colorspire-Creations\resources\views/components/icon.blade.php ENDPATH**/ ?>