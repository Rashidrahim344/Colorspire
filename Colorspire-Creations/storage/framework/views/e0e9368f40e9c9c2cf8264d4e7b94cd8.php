<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'label',
    'id',
    'name',
    'options' => [],
    'placeholder' => null,
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
    'label',
    'id',
    'name',
    'options' => [],
    'placeholder' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div>
  <label for="<?php echo e($id); ?>" class="sr-only"><?php echo e($label); ?></label>
  <select
    name="<?php echo e($name); ?>"
    id="<?php echo e($id); ?>"
    <?php echo e($attributes->merge(['class' => 'block w-full rounded-lg border border-neutral-200 bg-neutral-50 px-4 py-3 text-sm text-neutral-700 focus:border-neutral-200 focus:ring-3 focus:ring-neutral-400 focus:outline-hidden disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-600 dark:bg-neutral-700/30 dark:text-neutral-300 dark:focus:ring-1'])); ?>

  >
    <?php if($placeholder): ?>
      <option value="" disabled selected class="text-neutral-500 dark:bg-neutral-800 dark:text-neutral-400"><?php echo e($placeholder); ?></option>
    <?php endif; ?>
    <?php $__currentLoopData = $options; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php
        $optVal = is_numeric($key) ? $val : $key;
      ?>
      <option value="<?php echo e($optVal); ?>" class="text-neutral-700 dark:bg-neutral-800 dark:text-neutral-200">
        <?php echo e($val); ?>

      </option>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </select>
</div>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Documents\GitHub\Colorspire\Colorspire-Creations\resources\views/components/forms/input/select-input.blade.php ENDPATH**/ ?>