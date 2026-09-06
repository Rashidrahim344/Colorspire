<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'blogEntry',
    'blogLocale' => '',
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
    'blogLocale' => '',
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
$href = ($blogLocale && $blogLocale !== 'en')
    ? "/{$blogLocale}/blog/{$blogId}/"
    : "/blog/{$blogId}/";
$cardImg = str_starts_with($blogEntry['data']['cardImage'], 'http')
    ? $blogEntry['data']['cardImage']
    : asset($blogEntry['data']['cardImage']);
$pubDate = \Carbon\Carbon::parse($blogEntry['data']['pubDate'])->format('M d, Y');
?>

<a
  class="group relative block rounded-xl ring-zinc-500 outline-hidden transition duration-500 focus-visible:ring-3 dark:ring-zinc-200 dark:focus:outline-hidden"
  href="<?php echo e($href); ?>"
>
  <div
    class="relative h-[350px] w-full shrink-0 overflow-hidden rounded-xl before:absolute before:inset-x-0 before:z-1 before:size-full before:bg-linear-to-t before:from-neutral-900/[.7]"
  >
    <img
      class="absolute start-0 top-0 size-full object-cover transition duration-500 group-hover:scale-110"
      src="<?php echo e($cardImg); ?>"
      alt="<?php echo e($blogEntry['data']['cardImageAlt']); ?>"
      draggable="false"
      loading="eager"
    />
  </div>
  <div class="absolute inset-x-0 top-0 z-10">
    <div class="flex h-full flex-col p-4 sm:p-6">
      <div class="flex items-center">
        <?php if (isset($component)) { $__componentOriginal0265d84ee4eb8c684f962572351414db = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0265d84ee4eb8c684f962572351414db = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.avatars.avatar-blog','data' => ['blogEntry' => $blogEntry]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('avatars.avatar-blog'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['blogEntry' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($blogEntry)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0265d84ee4eb8c684f962572351414db)): ?>
<?php $attributes = $__attributesOriginal0265d84ee4eb8c684f962572351414db; ?>
<?php unset($__attributesOriginal0265d84ee4eb8c684f962572351414db); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0265d84ee4eb8c684f962572351414db)): ?>
<?php $component = $__componentOriginal0265d84ee4eb8c684f962572351414db; ?>
<?php unset($__componentOriginal0265d84ee4eb8c684f962572351414db); ?>
<?php endif; ?>
        <div class="ms-2.5 sm:ms-4">
          <h4 class="font-bold text-neutral-50">
            <?php echo e($blogEntry['data']['author']); ?>

          </h4>
          <p class="text-xs text-neutral-50/[.8]">
            <?php echo e($pubDate); ?>

          </p>
        </div>
      </div>
    </div>
  </div>
  <div class="absolute inset-x-0 bottom-0 z-10">
    <div class="flex h-full flex-col p-4 sm:p-6">
      <h3
        class="text-lg font-bold text-balance text-neutral-50 group-hover:text-neutral-50/[.8] sm:text-3xl"
      >
        <?php echo e($blogEntry['data']['title']); ?>

      </h3>
      <p class="mt-2 text-pretty text-neutral-50/[.8]">
        <?php echo e($blogEntry['data']['description']); ?>

      </p>
    </div>
  </div>
</a>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Desktop\Colorspire\screwfast-1.0.0\resources\views/components/cards/card-blog.blade.php ENDPATH**/ ?>