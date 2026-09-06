<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'blogEntry',
    'recentBlogLocale' => '',
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
    'blogEntry',
    'recentBlogLocale' => '',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
$blogId = preg_replace('/^(en|fr)\//', '', $blogEntry['id']);
$href = ($recentBlogLocale && $recentBlogLocale !== 'en')
    ? "/{$recentBlogLocale}/blog/{$blogId}/"
    : "/blog/{$blogId}/";
$cardImg = str_starts_with($blogEntry['data']['cardImage'], 'http')
    ? $blogEntry['data']['cardImage']
    : asset($blogEntry['data']['cardImage']);
$pubDate = \Carbon\Carbon::parse($blogEntry['data']['pubDate'])->format('M d, Y');
?>

<a
  class="group block rounded-xl ring-zinc-500 outline-hidden transition duration-300 focus-visible:ring-3 dark:ring-zinc-200 dark:focus:outline-hidden"
  href="<?php echo e($href); ?>"
>
  <div>
    <img
      class="aspect-video rounded-xl object-cover w-full"
      src="<?php echo e($cardImg); ?>"
      alt="<?php echo e($blogEntry['data']['cardImageAlt']); ?>"
      draggable="false"
    />
    <h3
      class="mt-2 text-lg font-medium text-balance text-neutral-800 group-hover:text-orange-400 dark:text-neutral-300 dark:group-hover:text-neutral-50"
    >
      <?php echo e($blogEntry['data']['title']); ?>

    </h3>
    <p class="mt-2 text-sm text-neutral-600 dark:text-neutral-400">
      <?php echo e($pubDate); ?>

    </p>
  </div>
</a>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Documents\GitHub\Colorspire\Colorspire-Creations\resources\views/components/cards/card-related.blade.php ENDPATH**/ ?>