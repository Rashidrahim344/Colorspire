<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['title' => 'Submit']));

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

foreach (array_filter((['title' => 'Submit']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
$classes = 'inline-flex w-full items-center justify-center gap-x-2 rounded-lg px-4 py-3 text-sm font-bold text-neutral-700 focus-visible:ring-3 outline-hidden transition duration-300 border border-transparent bg-yellow-400 dark:focus:outline-hidden hover:bg-yellow-500 2xl:text-base disabled:pointer-events-none disabled:opacity-50 ring-zinc-500 dark:ring-zinc-200';
?>

<button type="submit" <?php echo e($attributes->merge(['class' => $classes])); ?>>
  <?php echo e($title); ?>

</button>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Documents\GitHub\Colorspire\Colorspire-Creations\resources\views/components/buttons/auth-btn.blade.php ENDPATH**/ ?>