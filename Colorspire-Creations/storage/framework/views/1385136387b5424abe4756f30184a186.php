<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'label' => app()->getLocale() === 'fr' ? 'Adresse e-mail' : 'Email address',
    'id',
    'errorId',
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
    'label' => app()->getLocale() === 'fr' ? 'Adresse e-mail' : 'Email address',
    'id',
    'errorId',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div>
  <label
    for="<?php echo e($id); ?>"
    class="mb-2 block text-sm text-neutral-800 dark:text-neutral-200"
  ><?php echo e($label); ?></label>
  <div class="relative">
    <input
      type="email"
      id="<?php echo e($id); ?>"
      name="email"
      autocomplete="email"
      class="block w-full rounded-lg border border-neutral-200 bg-neutral-50 px-4 py-3 text-sm text-neutral-700 focus:border-neutral-200 focus:ring-3 focus:ring-neutral-400 focus:outline-hidden disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-600 dark:bg-neutral-700/30 dark:text-neutral-300 dark:focus:ring-1"
      required
      aria-describedby="<?php echo e($id); ?>"
    />
    <div class="pointer-events-none absolute inset-y-0 end-0 hidden pe-3">
      <svg
        class="h-5 w-5 text-red-500"
        width="16"
        height="16"
        fill="currentColor"
        viewBox="0 0 16 16"
        aria-hidden="true"
      >
        <path
          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"
        ></path>
      </svg>
    </div>
  </div>
  <p class="mt-2 hidden text-xs text-red-600" id="<?php echo e($errorId); ?>">
    Please include a valid email address so we can get back to you
  </p>
</div>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Desktop\Colorspire\screwfast-1.0.0\resources\views/components/forms/input/email-input.blade.php ENDPATH**/ ?>