<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title',
    'firstChoice',
    'secondChoice',
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
    'title',
    'firstChoice',
    'secondChoice',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="mt-12 flex items-center justify-center gap-x-2">
  <h3 class="text-neutral-700 dark:text-neutral-300"><?php echo e($title); ?></h3>
  <button
    type="button"
    class="group inline-flex items-center gap-x-2 rounded-lg border border-neutral-400 px-3 py-2 text-sm font-medium text-neutral-700 hover:border-yellow-500 hover:bg-yellow-500 hover:shadow-2xl hover:shadow-yellow-500 dark:border-neutral-500 dark:text-neutral-300 dark:hover:border-yellow-500 dark:hover:bg-yellow-500 dark:hover:text-neutral-700 dark:focus:ring-1 dark:focus:ring-neutral-600 dark:focus:outline-hidden"
  >
    <svg
      class="size-4 shrink-0 transition duration-300 group-hover:-translate-y-1 group-focus-visible:-translate-y-1"
      width="24"
      height="24"
      viewBox="0 0 24 24"
      fill="none"
      stroke="currentColor"
      stroke-width="2"
      stroke-linecap="round"
      stroke-linejoin="round"
    ><path d="M7 10v12"></path><path
        d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2h0a3.13 3.13 0 0 1 3 3.88Z"
      ></path></svg>
    <?php echo e($firstChoice); ?>

  </button>
  <button
    type="button"
    class="group inline-flex items-center gap-x-2 rounded-lg border border-neutral-400 px-3 py-2 text-sm font-medium text-neutral-700 hover:bg-neutral-400/30 dark:border-neutral-500 dark:text-neutral-300 dark:hover:bg-neutral-700/60 dark:focus:ring-1 dark:focus:ring-neutral-600 dark:focus:outline-hidden"
  >
    <svg
      class="size-4 shrink-0 transition duration-300 group-hover:translate-y-1 group-focus-visible:translate-y-1"
      width="24"
      height="24"
      viewBox="0 0 24 24"
      fill="none"
      stroke="currentColor"
      stroke-width="2"
      stroke-linecap="round"
      stroke-linejoin="round"
    ><path d="M17 14V2"></path><path
        d="M9 18.12 10 14H4.17a2 2 0 0 1-1.92-2.56l2.33-8A2 2 0 0 1 6.5 2H20a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.76a2 2 0 0 0-1.79 1.11L12 22h0a3.13 3.13 0 0 1-3-3.88Z"
      ></path></svg>
    <?php echo e($secondChoice); ?>

  </button>
</div>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Documents\GitHub\Colorspire\Colorspire-Creations\resources\views/components/feedback/post-feedback.blade.php ENDPATH**/ ?>