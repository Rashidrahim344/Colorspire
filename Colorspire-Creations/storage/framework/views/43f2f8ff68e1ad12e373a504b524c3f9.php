<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'insightEntry',
    'insightLocale' => '',
    'label' => app()->getLocale() === 'fr' ? 'Lire plus' : 'Read more',
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
    'insightEntry',
    'insightLocale' => '',
    'label' => app()->getLocale() === 'fr' ? 'Lire plus' : 'Read more',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
$insightId = preg_replace('/^(en|fr)\//', '', $insightEntry['id']);
$href = ($insightLocale && $insightLocale !== 'en')
    ? "/{$insightLocale}/insights/{$insightId}/"
    : "/insights/{$insightId}/";
$cardImg = str_starts_with($insightEntry['data']['cardImage'], 'http')
    ? $insightEntry['data']['cardImage']
    : asset($insightEntry['data']['cardImage']);
?>

<a
  class="group rounded-xl ring-zinc-500 outline-hidden transition duration-300 focus-visible:ring-3 dark:ring-zinc-200 dark:focus:outline-hidden"
  href="<?php echo e($href); ?>"
>
  <div class="relative overflow-hidden rounded-xl pt-[50%] sm:pt-[70%]">
    <img
      class="absolute start-0 top-0 size-full rounded-xl object-cover transition duration-500 ease-in-out group-hover:scale-105"
      src="<?php echo e($cardImg); ?>"
      alt="<?php echo e($insightEntry['data']['cardImageAlt']); ?>"
      draggable="false"
    />
  </div>
  <div class="mt-7">
    <h3
      class="text-xl font-bold text-neutral-800 group-hover:text-neutral-600 dark:text-neutral-200 dark:group-hover:text-neutral-400"
    >
      <?php echo e($insightEntry['data']['title']); ?>

    </h3>
    <p class="mt-3 text-neutral-600 dark:text-neutral-400">
      <?php echo e($insightEntry['data']['description']); ?>

    </p>
    <p
      class="mt-5 inline-flex items-center gap-x-1 font-medium text-orange-400 decoration-2 group-hover:underline dark:text-orange-300"
    >
      <?php echo e($label); ?>

      <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'arrowRightStatic']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'arrowRightStatic']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $attributes = $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__attributesOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc)): ?>
<?php $component = $__componentOriginalce262628e3a8d44dc38fd1f3965181bc; ?>
<?php unset($__componentOriginalce262628e3a8d44dc38fd1f3965181bc); ?>
<?php endif; ?>
    </p>
  </div>
</a>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Desktop\Colorspire\screwfast-1.0.0\resources\views/components/cards/card-insight.blade.php ENDPATH**/ ?>