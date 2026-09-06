<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title' => '',
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
    'title' => '',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
$baseClasses = 'inline-flex w-full items-center justify-center gap-x-2 rounded-lg px-4 py-3 text-sm dark:text-neutral-400 font-medium text-neutral-600 shadow-xs transition duration-300 focus-visible:ring-3 outline-hidden';
$borderClasses = 'border border-neutral-200 dark:border-neutral-700';
$bgColorClasses = 'bg-neutral-50 dark:bg-neutral-800 hover:bg-neutral-200 dark:hover:bg-neutral-900';
$disableClasses = 'disabled:pointer-events-none disabled:opacity-50';
$ringClasses = 'ring-zinc-500 dark:ring-zinc-200';
?>

<button
  type="button"
  class="<?php echo e($baseClasses); ?> <?php echo e($borderClasses); ?> <?php echo e($bgColorClasses); ?> <?php echo e($disableClasses); ?> <?php echo e($ringClasses); ?>"
>
  <svg
    class="h-auto w-4"
    width="46"
    height="47"
    viewBox="0 0 46 47"
    fill="none"
  >
    <path
      d="M46 24.0287C46 22.09 45.8533 20.68 45.5013 19.2112H23.4694V27.9356H36.4069C36.1429 30.1094 34.7347 33.37 31.5957 35.5731L31.5663 35.8669L38.5191 41.2719L38.9885 41.3306C43.4477 37.2181 46 31.1669 46 24.0287Z"
      fill="#4285F4"></path>
    <path
      d="M23.4694 47C29.8061 47 35.1161 44.9144 39.0179 41.3012L31.625 35.5437C29.6301 36.9244 26.9898 37.8937 23.4987 37.8937C17.2793 37.8937 12.0281 33.7812 10.1505 28.1412L9.88649 28.1706L2.61097 33.7812L2.52296 34.0456C6.36608 41.7125 14.287 47 23.4694 47Z"
      fill="#34A853"></path>
    <path
      d="M10.1212 28.1413C9.62245 26.6725 9.32908 25.1156 9.32908 23.5C9.32908 21.8844 9.62245 20.3275 10.0918 18.8588V18.5356L2.75765 12.8369L2.52296 12.9544C0.909439 16.1269 0 19.7106 0 23.5C0 27.2894 0.909439 30.8731 2.49362 34.0456L10.1212 28.1413Z"
      fill="#FBBC05"></path>
    <path
      d="M23.4694 9.07688C27.8699 9.07688 30.8622 10.9863 32.5344 12.5725L39.1645 6.11C35.0867 2.32063 29.8061 0 23.4694 0C14.287 0 6.36607 5.2875 2.49362 12.9544L10.0918 18.8588C11.9987 13.1894 17.25 9.07688 23.4694 9.07688Z"
      fill="#EB4335"></path>
  </svg>
  <?php echo e($title); ?>

</button>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Documents\GitHub\Colorspire\Colorspire-Creations\resources\views/components/buttons/google-btn.blade.php ENDPATH**/ ?>