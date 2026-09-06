<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title',
    'subTitle' => null,
    'benefits' => [],
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
    'title',
    'subTitle' => null,
    'benefits' => [],
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<section
  class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 2xl:max-w-full"
>
  <div class="lg:grid lg:grid-cols-12 lg:items-center lg:gap-16">
    <div class="lg:col-span-7">
      <img class="rounded-xl" src="<?php echo e(asset('images/features-image.avif')); ?>" alt="Mockup of floating boxes" />
    </div>
    <div class="mt-5 sm:mt-10 lg:col-span-5 lg:mt-0">
      <div class="space-y-6 sm:space-y-8">
        <div class="space-y-2 md:space-y-4">
          <h2
            class="text-3xl font-bold text-balance text-neutral-800 lg:text-4xl dark:text-neutral-200"
          >
            <?php echo e($title); ?>

          </h2>
          <?php if($subTitle): ?>
            <p class="text-pretty text-neutral-600 dark:text-neutral-400">
              <?php echo e($subTitle); ?>

            </p>
          <?php endif; ?>
        </div>
        <?php if(!empty($benefits)): ?>
          <ul class="space-y-2 sm:space-y-4">
            <?php $__currentLoopData = $benefits; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li class="flex space-x-3">
                <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="mt-0.5 h-6 w-6 text-orange-400 dark:text-orange-300 flex-none"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg>
                <span class="text-base font-medium text-pretty text-neutral-600 dark:text-neutral-400">
                  <?php echo e($item); ?>

                </span>
              </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Desktop\Colorspire\screwfast-1.0.0\resources\views/components/sections/features/features-stats-alt.blade.php ENDPATH**/ ?>