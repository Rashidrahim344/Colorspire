<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title' => '', 'url' => '#']));

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

foreach (array_filter((['title' => '', 'url' => '#']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
$classes = 'inline-flex items-center justify-center gap-x-2 rounded-lg px-4 py-3 text-center text-sm font-medium text-neutral-600 shadow-xs outline-hidden ring-zinc-500 focus-visible:ring-3 transition duration-300 border border-neutral-200 bg-neutral-300 hover:bg-neutral-400/50 hover:text-neutral-600 active:text-neutral-700 disabled:pointer-events-none disabled:opacity-50 2xl:text-base ring-zinc-500 dark:border-neutral-700 dark:bg-zinc-700 dark:text-neutral-300 dark:ring-zinc-200 dark:hover:bg-zinc-600 dark:focus:outline-hidden';
?>

<a <?php echo e($attributes->merge(['class' => $classes])); ?> href="<?php echo e($url); ?>">
  <?php echo e($title); ?>

</a>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Documents\GitHub\Colorspire\Colorspire-Creations\resources\views/components/buttons/secondary-cta.blade.php ENDPATH**/ ?>