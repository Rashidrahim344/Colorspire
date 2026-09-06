<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'id',
    'aria',
    'src' => null,
    'alt' => '',
    'first' => false,
    'second' => false,
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
    'id',
    'aria',
    'src' => null,
    'alt' => '',
    'first' => false,
    'second' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
$firstClass = $first ? '' : 'hidden';
$secondClass = $second
  ? 'shadow-xl aspect-video object-contain bg-neutral-300 dark:bg-neutral-600 p-3 lg:object-cover lg:aspect-square shadow-neutral-200 rounded-xl dark:shadow-neutral-900/[.2]'
  : 'shadow-xl aspect-video object-cover lg:aspect-square shadow-neutral-200 rounded-xl dark:shadow-neutral-900/[.2]';
$imgSrc = str_starts_with($src, 'http') ? $src : asset($src);
?>

<div id="<?php echo e($id); ?>" role="tabpanel" class="<?php echo e($firstClass); ?>" aria-labelledby="<?php echo e($aria); ?>">
  <img
    src="<?php echo e($imgSrc); ?>"
    alt="<?php echo e($alt); ?>"
    class="<?php echo e($secondClass); ?>"
    draggable="false"
    loading="eager"
  />
</div>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Documents\GitHub\Colorspire\Colorspire-Creations\resources\views/components/blocks/tab-content.blade.php ENDPATH**/ ?>