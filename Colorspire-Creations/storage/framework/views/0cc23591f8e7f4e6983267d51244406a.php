<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['id', 'dataTab', 'title', 'first' => false]));

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

foreach (array_filter((['id', 'dataTab', 'title', 'first' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
$buttonClass = 'flex w-full justify-center rounded-xl border border-transparent p-3 outline-hidden ring-zinc-500 transition duration-300 hover:bg-neutral-100 focus-visible:ring-3 dark:ring-zinc-200 dark:hover:bg-neutral-700 dark:focus:outline-hidden md:p-5' . ($first ? ' active bg-neutral-100 hover:border-transparent dark:bg-white/[.05]' : '');
$headingClass = 'block text-center font-bold ' . ($first ? 'text-orange-400 dark:text-orange-300' : 'text-neutral-800 dark:text-neutral-200');
?>

<button
  type="button"
  class="<?php echo e($buttonClass); ?>"
  id="<?php echo e($id); ?>"
  data-target="<?php echo e($dataTab); ?>"
  role="tab"
>
  <span class="<?php echo e($headingClass); ?>">
    <?php echo e($title); ?>

  </span>
</button>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Desktop\Colorspire\screwfast-1.0.0\resources\views/components/buttons/product-tab-btn.blade.php ENDPATH**/ ?>