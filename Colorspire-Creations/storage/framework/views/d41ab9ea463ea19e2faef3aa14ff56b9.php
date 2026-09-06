<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'blogEntry',
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
    'blogEntry',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
$authorImg = str_starts_with($blogEntry['data']['authorImage'], 'http')
    ? $blogEntry['data']['authorImage']
    : asset($blogEntry['data']['authorImage']);
?>

<div class="shrink-0">
  <img
    class="size-10 rounded-full sm:h-14 sm:w-14 object-cover"
    src="<?php echo e($authorImg); ?>"
    alt="<?php echo e($blogEntry['data']['authorImageAlt']); ?>"
    draggable="false"
  />
</div>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Desktop\Colorspire\screwfast-1.0.0\resources\views/components/avatars/avatar-blog-large.blade.php ENDPATH**/ ?>