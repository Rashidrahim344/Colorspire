<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title' => '',
    'tabs' => [],
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
    'tabs' => [],
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
  <div class="relative p-6 md:p-16">
    <div
      class="relative z-10 lg:grid lg:grid-cols-12 lg:items-center lg:gap-16"
    >
      <div class="mb-10 lg:order-2 lg:col-span-6 lg:col-start-8 lg:mb-0">
        <h2
          class="text-2xl font-bold text-neutral-800 sm:text-3xl dark:text-neutral-200"
        >
          <?php echo $title; ?>

        </h2>
        <nav class="mt-5 grid gap-4 md:mt-10" aria-label="Tabs" role="tablist">
          <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if (isset($component)) { $__componentOriginal92e621bfeb8bbfb9a7feb2b95f63bb99 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal92e621bfeb8bbfb9a7feb2b95f63bb99 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.blocks.tab-nav','data' => ['id' => 'tabs-with-card-item-' . ($index + 1),'dataTab' => '#tabs-with-card-' . ($index + 1),'aria' => 'tabs-with-card-' . ($index + 1),'heading' => $tab['heading'],'content' => $tab['content'],'first' => $tab['first'] ?? ($index === 0)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('blocks.tab-nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('tabs-with-card-item-' . ($index + 1)),'dataTab' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('#tabs-with-card-' . ($index + 1)),'aria' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('tabs-with-card-' . ($index + 1)),'heading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tab['heading']),'content' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tab['content']),'first' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tab['first'] ?? ($index === 0))]); ?>
              <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => $tab['svg']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tab['svg'])]); ?>
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
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal92e621bfeb8bbfb9a7feb2b95f63bb99)): ?>
<?php $attributes = $__attributesOriginal92e621bfeb8bbfb9a7feb2b95f63bb99; ?>
<?php unset($__attributesOriginal92e621bfeb8bbfb9a7feb2b95f63bb99); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal92e621bfeb8bbfb9a7feb2b95f63bb99)): ?>
<?php $component = $__componentOriginal92e621bfeb8bbfb9a7feb2b95f63bb99; ?>
<?php unset($__componentOriginal92e621bfeb8bbfb9a7feb2b95f63bb99); ?>
<?php endif; ?>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </nav>
      </div>

      <div class="lg:col-span-6">
        <div class="relative">
          <div>
            <?php $__currentLoopData = $tabs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if (isset($component)) { $__componentOriginal5bcd210b00ad5e6b4659ebbc5916b67b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5bcd210b00ad5e6b4659ebbc5916b67b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.blocks.tab-content','data' => ['id' => 'tabs-with-card-' . ($index + 1),'aria' => 'tabs-with-card-item-' . ($index + 1),'src' => $tab['src'],'alt' => $tab['alt'],'first' => $tab['first'] ?? ($index === 0),'second' => $tab['second'] ?? false]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('blocks.tab-content'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('tabs-with-card-' . ($index + 1)),'aria' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('tabs-with-card-item-' . ($index + 1)),'src' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tab['src']),'alt' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tab['alt']),'first' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tab['first'] ?? ($index === 0)),'second' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tab['second'] ?? false)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5bcd210b00ad5e6b4659ebbc5916b67b)): ?>
<?php $attributes = $__attributesOriginal5bcd210b00ad5e6b4659ebbc5916b67b; ?>
<?php unset($__attributesOriginal5bcd210b00ad5e6b4659ebbc5916b67b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5bcd210b00ad5e6b4659ebbc5916b67b)): ?>
<?php $component = $__componentOriginal5bcd210b00ad5e6b4659ebbc5916b67b; ?>
<?php unset($__componentOriginal5bcd210b00ad5e6b4659ebbc5916b67b); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </div>
    </div>

    <div class="absolute inset-0 grid h-full w-full grid-cols-12">
      <div
        class="col-span-full h-5/6 w-full rounded-xl bg-neutral-100 sm:h-3/4 lg:col-span-7 lg:col-start-6 lg:h-full dark:bg-white/[.075]"
      >
      </div>
    </div>
  </div>
</section>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Documents\GitHub\Colorspire\Colorspire-Creations\resources\views/components/sections/features/features-navs.blade.php ENDPATH**/ ?>