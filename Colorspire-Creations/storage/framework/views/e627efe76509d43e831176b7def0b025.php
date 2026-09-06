<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'label' => 'Search',
    'title' => app()->getLocale() === 'fr' ? "S'abonner" : 'Subscribe',
    'id' => 'footer-input',
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
    'label' => 'Search',
    'title' => app()->getLocale() === 'fr' ? "S'abonner" : 'Subscribe',
    'id' => 'footer-input',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
$placeholder = app()->getLocale() === 'fr' ? 'Entrez votre email' : 'Enter your email';
?>

<div
  class="mt-4 flex flex-col items-center gap-2 rounded-lg bg-neutral-200 p-2 sm:flex-row sm:gap-3 dark:bg-neutral-800"
>
  <div class="w-full">
    <label for="<?php echo e($id); ?>" class="sr-only"><?php echo e($label); ?></label>
    <input
      type="text"
      id="<?php echo e($id); ?>"
      name="footer-input"
      class="block w-full rounded-lg border-transparent bg-neutral-100 px-4 py-3 text-sm text-neutral-600 caret-orange-400 focus:border-orange-400 focus:ring-orange-400 disabled:pointer-events-none disabled:opacity-50 dark:border-transparent dark:bg-neutral-700 dark:text-gray-300 dark:placeholder:text-neutral-300"
      placeholder="<?php echo e($placeholder); ?>"
    />
  </div>
  <a
    class="inline-flex w-full items-center justify-center gap-x-2 rounded-lg border border-transparent bg-orange-400 p-3 text-sm font-bold whitespace-nowrap text-neutral-50 ring-zinc-500 outline-hidden transition duration-300 hover:bg-orange-500 focus-visible:ring-3 disabled:pointer-events-none disabled:opacity-50 sm:w-auto dark:ring-zinc-200 dark:focus:ring-1 dark:focus:outline-hidden"
    href="#"
  >
    <?php echo e($title); ?>

  </a>
</div>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Desktop\Colorspire\screwfast-1.0.0\resources\views/components/forms/input/email-footer-input.blade.php ENDPATH**/ ?>