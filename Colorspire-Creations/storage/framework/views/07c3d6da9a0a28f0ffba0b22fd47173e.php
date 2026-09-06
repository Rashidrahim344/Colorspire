<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'url',
    'name',
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
    'url',
    'name',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
$navId = ($url === '/' || $url === '/fr') ? 'home' : str_replace('/', '', $url);
$currentPath = request()->path();
$isActive = request()->is(ltrim($url, '/')) || ($url === '/' && $currentPath === '/');
$colorClass = $isActive ? 'text-orange-400 dark:text-orange-300' : 'text-neutral-600 hover:text-neutral-500 dark:text-neutral-400 dark:hover:text-neutral-500';
?>

<a
  id="<?php echo e($navId); ?>"
  href="<?php echo e($url); ?>"
  class="rounded-lg text-base font-medium ring-zinc-500 outline-hidden focus-visible:ring-3 md:py-3 md:text-sm 2xl:text-base dark:ring-zinc-200 dark:focus:outline-hidden <?php echo e($colorClass); ?>"
  <?php if($isActive): ?> aria-current="page" <?php endif; ?>
>
  <?php echo e($name); ?>

</a>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Desktop\Colorspire\screwfast-1.0.0\resources\views/components/links/nav-link.blade.php ENDPATH**/ ?>