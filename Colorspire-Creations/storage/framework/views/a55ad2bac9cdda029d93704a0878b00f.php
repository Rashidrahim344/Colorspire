<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'src',
    'alt' => 'Avatar',
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
    'src',
    'alt' => 'Avatar',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
$imgSrc = str_starts_with($src, 'http') ? $src : asset($src);
?>

<div class="shrink-0">
  <img
    class="size-8 rounded-full sm:h-[2.875rem] sm:w-[2.875rem] object-cover"
    src="<?php echo e($imgSrc); ?>"
    alt="<?php echo e($alt); ?>"
    loading="lazy"
  />
</div>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Documents\GitHub\Colorspire\Colorspire-Creations\resources\views/components/avatars/avatar-testimonial-section.blade.php ENDPATH**/ ?>