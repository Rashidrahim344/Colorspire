<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title' => 'Log in',
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
    'title' => 'Log in',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
$baseClasses = 'flex items-center gap-x-2 text-base md:text-sm font-medium text-neutral-600 ring-zinc-500 transition duration-300 focus-visible:ring-3 outline-hidden';
$hoverClasses = 'hover:text-orange-400 dark:hover:text-orange-300';
$darkClasses = 'dark:border-neutral-700 dark:text-neutral-400 dark:ring-zinc-200 dark:focus:outline-hidden';
$mdClasses = 'md:my-6 md:border-s md:border-neutral-300 md:ps-6';
$txtSizeClasses = '2xl:text-base';
?>

<button
  type="button"
  class="<?php echo e($baseClasses); ?> <?php echo e($hoverClasses); ?> <?php echo e($darkClasses); ?> <?php echo e($mdClasses); ?> <?php echo e($txtSizeClasses); ?>"
  data-hs-overlay="#hs-toggle-between-modals-login-modal"
>
  <svg
      class="h-4 w-4 shrink-0"
      width="24"
      height="24"
      viewBox="0 0 24 24"
      fill="none"
      stroke="currentColor"
      stroke-width="2"
      stroke-linecap="round"
      stroke-linejoin="round"
  >
    <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
    <circle cx="12" cy="7" r="4"></circle>
  </svg>
  <?php echo e($title); ?>

</button>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Documents\GitHub\Colorspire\Colorspire-Creations\resources\views/components/buttons/login-btn.blade.php ENDPATH**/ ?>