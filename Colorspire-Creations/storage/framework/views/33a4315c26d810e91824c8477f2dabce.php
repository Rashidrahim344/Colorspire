<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'label' => app()->getLocale() === 'fr' ? 'Me rappeler' : 'Remember me',
    'id' => null,
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
    'label' => app()->getLocale() === 'fr' ? 'Me rappeler' : 'Remember me',
    'id' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="flex items-center">
  <div class="flex">
    <input
      id="<?php echo e($id); ?>"
      name="remember-me"
      type="checkbox"
      class="pointer-events-none mt-0.5 shrink-0 rounded-sm border-neutral-200 text-neutral-600 focus:ring-yellow-400 dark:border-neutral-700 dark:bg-neutral-800 dark:checked:border-yellow-400 dark:checked:bg-yellow-400 dark:focus:ring-offset-neutral-800"
    />
  </div>
  <div class="ms-3">
    <label for="<?php echo e($id); ?>" class="text-sm text-neutral-800 dark:text-neutral-200">
      <?php echo e($label); ?> <?php echo e($slot); ?>

    </label>
  </div>
</div>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Documents\GitHub\Colorspire\Colorspire-Creations\resources\views/components/forms/input/checkbox.blade.php ENDPATH**/ ?>