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
?>

<div class="grid gap-8 sm:grid-cols-2 sm:items-center">
  <div class="sm:order-2">
    <div class="relative rounded-lg pt-[50%] sm:pt-[100%]">
      <img
        class="absolute start-0 top-0 size-full rounded-xl object-cover"
        src="<?php echo e($cardImg); ?>"
        alt="<?php echo e($blogEntry['data']['cardImageAlt']); ?>"
        draggable="false"
        loading="eager"
      />
    </div>
  </div>
  <div class="sm:order-1">
    <h2
      class="text-2xl font-bold tracking-tight text-balance text-neutral-800 md:text-3xl lg:text-4xl lg:leading-tight xl:text-5xl xl:leading-tight dark:text-neutral-200"
    >
      <a
        class="ring-zinc-500 outline-hidden transition duration-300 hover:text-orange-400 focus-visible:ring-3 dark:text-neutral-300 dark:ring-zinc-200 dark:hover:text-neutral-50 dark:focus:outline-hidden"
        href="<?php echo e($href); ?>"
      >
        <?php echo e($blogEntry['data']['description']); ?>

      </a>
    </h2>
    <div class="mt-6 flex items-center sm:mt-10">
      <?php if (isset($component)) { $__componentOriginalb3c130db0ab308b711f6ea307c99f5d1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb3c130db0ab308b711f6ea307c99f5d1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.avatars.avatar-blog-large','data' => ['blogEntry' => $blogEntry]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('avatars.avatar-blog-large'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['blogEntry' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($blogEntry)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb3c130db0ab308b711f6ea307c99f5d1)): ?>
<?php $attributes = $__attributesOriginalb3c130db0ab308b711f6ea307c99f5d1; ?>
<?php unset($__attributesOriginalb3c130db0ab308b711f6ea307c99f5d1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb3c130db0ab308b711f6ea307c99f5d1)): ?>
<?php $component = $__componentOriginalb3c130db0ab308b711f6ea307c99f5d1; ?>
<?php unset($__componentOriginalb3c130db0ab308b711f6ea307c99f5d1); ?>
<?php endif; ?>
      <div class="ms-3 sm:ms-4">
        <p class="font-bold text-neutral-800 sm:mb-1 dark:text-neutral-200">
          <?php echo e($blogEntry['data']['author']); ?>

        </p>
        <p class="text-xs text-neutral-500">
          <?php echo e($blogEntry['data']['role'] ?? ''); ?>

        </p>
      </div>
    </div>
    <div class="mt-5">
      <?php if (isset($component)) { $__componentOriginalc195594364a586cb1e89cd7db6efa1e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc195594364a586cb1e89cd7db6efa1e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.primary-cta','data' => ['url' => $href,'title' => 'Read More']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('buttons.primary-cta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($href),'title' => 'Read More']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc195594364a586cb1e89cd7db6efa1e4)): ?>
<?php $attributes = $__attributesOriginalc195594364a586cb1e89cd7db6efa1e4; ?>
<?php unset($__attributesOriginalc195594364a586cb1e89cd7db6efa1e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc195594364a586cb1e89cd7db6efa1e4)): ?>
<?php $component = $__componentOriginalc195594364a586cb1e89cd7db6efa1e4; ?>
<?php unset($__componentOriginalc195594364a586cb1e89cd7db6efa1e4); ?>
<?php endif; ?>
    </div>
  </div>
</div>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Desktop\Colorspire\screwfast-1.0.0\resources\views/components/cards/card-blog-recent.blade.php ENDPATH**/ ?>