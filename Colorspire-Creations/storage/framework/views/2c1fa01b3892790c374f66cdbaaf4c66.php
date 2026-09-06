<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title' => null,
    'btnId',
    'btnTitle',
    'url',
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
    'title' => null,
    'btnId',
    'btnTitle',
    'url',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div id="banner-wrapper-<?php echo e($btnId); ?>">
  <div
    class="fixed start-1/2 bottom-0 z-50 mx-auto w-full -translate-x-1/2 transform p-6 sm:max-w-4xl hidden"
    role="region"
    aria-label="Informational Banner"
  >
    <div
      class="rounded-xl bg-neutral-800 bg-[url('/banner-pattern.svg')] bg-cover bg-center bg-no-repeat p-4 text-center shadow-xs dark:bg-neutral-200"
    >
      <div class="flex items-center justify-center">
        <div class="ml-auto">
          <?php if($title): ?>
            <p class="me-2 inline-block font-medium text-neutral-50 dark:text-neutral-700">
              <?php echo e($title); ?>

            </p>
          <?php endif; ?>
          <a
            class="group inline-flex items-center gap-x-2 rounded-full border-2 border-neutral-50 px-3 py-2 text-sm font-semibold text-neutral-50 backdrop-brightness-75 transition duration-300 hover:border-neutral-100/70 hover:text-neutral-50/70 disabled:pointer-events-none disabled:opacity-50 sm:backdrop-brightness-100 dark:border-neutral-700 dark:text-neutral-700 dark:backdrop-brightness-100 dark:hover:border-neutral-700/70 dark:hover:text-neutral-800/70 dark:focus:outline-hidden"
            href="<?php echo e($url); ?>"
            target="_blank"
          >
            <?php echo e($btnTitle); ?>

            <svg
              class="size-4 shrink-0 transition duration-300 group-hover:translate-x-1"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"><path d="m9 18 6-6-6-6"></path></svg>
          </a>
        </div>
        <button
          type="button"
          class="ml-auto inline-flex items-center gap-x-2 rounded-full border border-transparent bg-gray-100 p-2 text-sm font-semibold text-gray-800 hover:bg-gray-200 disabled:pointer-events-none disabled:opacity-50 dark:bg-neutral-700 dark:text-neutral-50 dark:hover:bg-neutral-700/80 dark:hover:text-neutral-50 dark:focus:outline-hidden"
          id="<?php echo e($btnId); ?>"
        >
          <span class="sr-only">Dismiss</span>
          <svg
            class="size-5 shrink-0"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          ><path d="M18 6 6 18"></path><path d="m6 6 12 12"></path></svg>
        </button>
      </div>
    </div>
  </div>
</div>

<script>
  (function () {
    const btn = document.getElementById('<?php echo e($btnId); ?>');
    if (btn) {
      btn.addEventListener('click', () => {
        const wrapper = document.getElementById('banner-wrapper-<?php echo e($btnId); ?>');
        if (wrapper) wrapper.remove();
      });
    }
  })();
</script>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Desktop\Colorspire\screwfast-1.0.0\resources\views/components/banners/announcement-banner.blade.php ENDPATH**/ ?>