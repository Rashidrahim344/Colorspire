<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'heading' => '',
    'content' => '',
    'isAddressVisible' => false,
    'addressContent' => '',
    'isLinkVisible' => false,
    'linkTitle' => '',
    'linkURL' => '',
    'isArrowVisible' => false,
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
    'heading' => '',
    'content' => '',
    'isAddressVisible' => false,
    'addressContent' => '',
    'isLinkVisible' => false,
    'linkTitle' => '',
    'linkURL' => '',
    'isArrowVisible' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<div class="flex gap-x-7 py-6">
  <?php echo e($slot); ?>

  <div class="grow">
    <h3 class="font-bold text-neutral-700 dark:text-neutral-300">
      <?php echo e($heading); ?>

    </h3>
    <p class="mt-1 text-sm text-neutral-600 dark:text-neutral-400"><?php echo e($content); ?></p>
    <?php if($isAddressVisible): ?>
      <p class="mt-1 text-sm text-neutral-500 italic"><?php echo e($addressContent); ?></p>
    <?php endif; ?>
    <?php if($isLinkVisible): ?>
      <a
        class="group mt-2 inline-flex items-center gap-x-2 rounded-lg text-sm font-medium text-zinc-600 ring-zinc-500 outline-hidden transition duration-300 hover:text-zinc-800 focus-visible:ring-3 dark:text-zinc-400 dark:ring-zinc-200 dark:hover:text-zinc-200 dark:focus:ring-1 dark:focus:outline-hidden"
        href="<?php echo e($linkURL); ?>"
      >
        <?php echo e($linkTitle); ?>

        <?php if($isArrowVisible): ?>
          <svg
            class="h-4 w-4 shrink-0 transition ease-in-out group-hover:translate-x-1"
            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" >
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
          </svg>
        <?php endif; ?>
      </a>
    <?php endif; ?>
  </div>
</div>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Desktop\Colorspire\screwfast-1.0.0\resources\views/components/blocks/contact-icon-block.blade.php ENDPATH**/ ?>