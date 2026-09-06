<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames((['locale' => 'en']));

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

foreach (array_filter((['locale' => 'en']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
    $languages = [
        'en' => 'English',
        'fr' => 'Français',
    ];
?>

<div class="hs-dropdown relative inline-flex">
  <button
    id="hs-dropdown-default"
    type="button"
    aria-label="Change language"
    title="Change language"
    class="hs-dropdown-toggle inline-flex items-center gap-x-2 rounded-lg px-1.5 py-1.5 text-sm font-medium text-neutral-600 ring-zinc-500 outline-hidden transition duration-300 hover:bg-neutral-200 hover:text-orange-400 dark:border-neutral-700 dark:text-neutral-400 dark:ring-zinc-200 dark:hover:bg-neutral-700 dark:hover:text-orange-300 dark:focus:outline-hidden"
  >
    <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'earth']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'earth']); ?>
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
    <svg
      class="hs-dropdown-open:rotate-180 size-4"
      width="24"
      height="24"
      viewBox="0 0 24 24"
      fill="none"
      stroke="currentColor"
      stroke-width="2"
      stroke-linecap="round"
      stroke-linejoin="round"
    >
      <path d="m6 9 6 6 6-6"></path>
    </svg>
  </button>

  <div
    class="hs-dropdown-menu duration hs-dropdown-open:opacity-100 top-[98%]! left-[20%]! mt-2 hidden transform-none! rounded-lg bg-neutral-50 p-2 opacity-0 shadow-md transition-[opacity,margin] before:absolute before:start-0 before:-top-4 before:h-4 before:w-full after:absolute after:start-0 after:-bottom-4 after:h-4 after:w-full md:top-[80%]! md:left-[90%]! dark:divide-neutral-700 dark:border dark:border-neutral-700 dark:bg-neutral-800"
    aria-labelledby="hs-dropdown-hover-event"
  >
    <?php $__currentLoopData = $languages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lang => $label): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <a
        class="flex items-center gap-x-3.5 rounded-lg px-3 py-2 text-sm text-neutral-800 hover:bg-neutral-100 focus:bg-neutral-100 focus:outline-hidden dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 <?php echo e($locale === $lang ? 'font-bold text-orange-400' : ''); ?>"
        href="<?php echo e($lang === 'en' ? '/' : '/fr'); ?>"
        data-lang="<?php echo e($lang); ?>"
      >
        <?php echo e($label); ?>

      </a>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
</div>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Documents\GitHub\Colorspire\Colorspire-Creations\resources\views/components/language-picker.blade.php ENDPATH**/ ?>