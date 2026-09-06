<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'aria',
    'dataTab',
    'id',
    'heading' => '',
    'content' => '',
    'first' => false,
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
    'aria',
    'dataTab',
    'id',
    'heading' => '',
    'content' => '',
    'first' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
$buttonClass = 'dark:hover:bg-neutral-700 rounded-xl p-4 text-start outline-hidden ring-zinc-500 transition duration-300 hover:bg-neutral-200 focus-visible:ring-3 hs-tab-active:bg-neutral-50 hs-tab-active:shadow-md hs-tab-active:hover:border-transparent dark:ring-zinc-200 dark:focus:outline-hidden dark:hs-tab-active:bg-neutral-700/60 md:p-5';
?>

<button
  type="button"
  class="<?php echo e($first ? 'active ' : ''); ?><?php echo e($buttonClass); ?>"
  id="<?php echo e($id); ?>"
  data-hs-tab="<?php echo e($dataTab); ?>"
  aria-controls="<?php echo e($aria); ?>"
  aria-selected="<?php echo e($first ? 'true' : 'false'); ?>"
  role="tab"
>
  <span class="flex">
    <?php echo e($slot); ?>

    <span class="ms-6 grow">
      <span
        class="hs-tab-active:text-orange-400 dark:hs-tab-active:text-orange-300 block text-lg font-bold text-neutral-800 dark:text-neutral-200"
      ><?php echo e($heading); ?></span>
      <span
        class="hs-tab-active:text-neutral-600 dark:hs-tab-active:text-neutral-200 mt-1 block text-neutral-500 dark:text-neutral-400"
      ><?php echo e($content); ?></span>
    </span>
  </span>
</button>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Documents\GitHub\Colorspire\Colorspire-Creations\resources\views/components/blocks/tab-nav.blade.php ENDPATH**/ ?>