<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'pricing',
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
    'pricing',
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
  <div class="mx-auto mb-10 max-w-2xl text-center lg:mb-14">
    <h2
      class="text-2xl font-bold tracking-tight text-balance text-neutral-800 md:text-4xl md:leading-tight dark:text-neutral-200"
    >
      <?php echo e($pricing['title']); ?>

    </h2>
    <p class="mt-1 text-pretty text-neutral-600 dark:text-neutral-400">
      <?php echo e($pricing['subTitle']); ?>

    </p>
  </div>
  <div class="flex flex-wrap items-center justify-center gap-4 sm:gap-0">
    <!-- Starter Kit -->
    <div
      class="w-full rounded-xl bg-gray-800 p-6 sm:w-1/2 sm:rounded-r-none sm:p-8 lg:w-1/3"
    >
      <div class="mb-4">
        <h3 class="text-2xl font-bold text-neutral-100 sm:text-3xl">
          <?php echo e($pricing['starterKit']['name']); ?>

        </h3>
        <p class="text-indigo-300"><?php echo e($pricing['starterKit']['description']); ?></p>
      </div>

      <div class="mb-4">
        <span class="text-4xl font-bold text-neutral-200"
          ><?php echo e($pricing['starterKit']['price']); ?></span
        >
        <span class="text-lg font-bold text-neutral-300"
          ><?php echo e($pricing['starterKit']['cents']); ?></span
        >
        <span class="ms-3 text-sm text-indigo-200"
          ><?php echo e($pricing['starterKit']['billingFrequency']); ?></span
        >
      </div>
      <ul class="mb-6 space-y-2 text-neutral-300">
        <?php $__currentLoopData = $pricing['starterKit']['features']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="flex items-center gap-1.5">
            <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'checkCircle']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'checkCircle']); ?>
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
            <span><?php echo e($feature); ?></span>
          </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
      <a
        href="<?php echo e($pricing['starterKit']['purchaseLink']); ?>"
        class="block rounded-lg bg-gray-500 px-8 py-3 text-center text-sm font-bold text-gray-100 ring-indigo-300 outline-hidden transition duration-100 hover:bg-gray-600 focus-visible:ring-3 active:text-gray-300 md:text-base"
      ><?php echo e($pricing['starterKit']['purchaseBtnTitle']); ?></a>
    </div>

    <!-- Professional Toolbox -->
    <div
      class="w-full rounded-xl bg-linear-to-tr from-[#FF512F] to-[#F09819] p-6 shadow-xl sm:w-1/2 sm:p-8"
    >
      <div
        class="mb-4 flex flex-col items-start justify-between gap-4 lg:flex-row"
      >
        <div>
          <h3 class="text-2xl font-bold text-neutral-100 sm:text-3xl">
            <?php echo e($pricing['professionalToolbox']['name']); ?>

          </h3>
          <p class="text-orange-200">
            <?php echo e($pricing['professionalToolbox']['description']); ?>

          </p>
        </div>

        <span
          class="bg-opacity-50 order-first inline-block rounded-full bg-orange-200/60 px-3 py-1 text-center text-xs font-bold tracking-wider text-orange-600 uppercase lg:order-none"
        ><?php echo e($pricing['badge']); ?></span>
      </div>

      <div class="mb-4">
        <span class="text-6xl font-bold text-neutral-100"
          ><?php echo e($pricing['professionalToolbox']['price']); ?></span
        >
        <span class="text-lg font-bold text-orange-100"
          ><?php echo e($pricing['professionalToolbox']['cents']); ?></span
        >
        <span class="ms-3 text-orange-200"
          ><?php echo e($pricing['professionalToolbox']['billingFrequency']); ?></span
        >
      </div>
      <ul class="mb-6 space-y-2 text-orange-100">
        <?php $__currentLoopData = $pricing['professionalToolbox']['features']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="flex items-center gap-1.5">
            <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'checkCircle']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'checkCircle']); ?>
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
            <span><?php echo e($feature); ?></span>
          </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </ul>
      <a
        href="<?php echo e($pricing['professionalToolbox']['purchaseLink']); ?>"
        class="bg-opacity-50 block rounded-lg bg-orange-200/40 px-8 py-3 text-center text-sm font-bold text-neutral-100 ring-orange-300 outline-hidden transition duration-300 hover:bg-orange-300 focus-visible:ring-3 active:bg-orange-400 md:text-base"
      ><?php echo e($pricing['professionalToolbox']['purchaseBtnTitle']); ?></a>
    </div>
  </div>

  <div class="mt-8 flex items-center justify-center gap-x-3 md:mt-12">
    <p class="text-sm text-neutral-600 dark:text-neutral-400">
      <?php echo e($pricing['thirdOption']); ?>

    </p>
    <?php if (isset($component)) { $__componentOriginal5deb6f71b9a2baa14baea84636213375 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5deb6f71b9a2baa14baea84636213375 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.secondary-cta','data' => ['title' => $pricing['btnText'],'url' => '#']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('buttons.secondary-cta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($pricing['btnText']),'url' => '#']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5deb6f71b9a2baa14baea84636213375)): ?>
<?php $attributes = $__attributesOriginal5deb6f71b9a2baa14baea84636213375; ?>
<?php unset($__attributesOriginal5deb6f71b9a2baa14baea84636213375); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5deb6f71b9a2baa14baea84636213375)): ?>
<?php $component = $__componentOriginal5deb6f71b9a2baa14baea84636213375; ?>
<?php unset($__componentOriginal5deb6f71b9a2baa14baea84636213375); ?>
<?php endif; ?>
  </div>
</section>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Desktop\Colorspire\screwfast-1.0.0\resources\views/components/sections/pricing/pricing-section.blade.php ENDPATH**/ ?>