<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title',
    'subTitle' => null,
    'testimonials' => [],
    'statistics' => [],
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
    'testimonials' => [],
    'statistics' => [],
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
  <div
    class="lg:grid lg:grid-cols-12 lg:items-center lg:justify-between lg:gap-16"
  >
    <div class="lg:col-span-5 lg:col-start-1">
      <div class="mb-8">
        <h2
          class="mb-2 text-3xl font-bold text-neutral-800 lg:text-4xl dark:text-neutral-200"
        >
          <?php echo e($title); ?>

        </h2>
        <?php if($subTitle): ?>
          <p class="text-neutral-600 dark:text-neutral-400"><?php echo e($subTitle); ?></p>
        <?php endif; ?>
      </div>

      <?php if(!empty($testimonials)): ?>
        <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if (isset($component)) { $__componentOriginalbe597145a76b59f2373d96c1403d75cd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbe597145a76b59f2373d96c1403d75cd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.testimonials.testimonial-item','data' => ['content' => $testimonial['content'],'author' => $testimonial['author'],'role' => $testimonial['role'],'avatarSrc' => $testimonial['avatarSrc']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.testimonials.testimonial-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['content' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($testimonial['content']),'author' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($testimonial['author']),'role' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($testimonial['role']),'avatarSrc' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($testimonial['avatarSrc'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbe597145a76b59f2373d96c1403d75cd)): ?>
<?php $attributes = $__attributesOriginalbe597145a76b59f2373d96c1403d75cd; ?>
<?php unset($__attributesOriginalbe597145a76b59f2373d96c1403d75cd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbe597145a76b59f2373d96c1403d75cd)): ?>
<?php $component = $__componentOriginalbe597145a76b59f2373d96c1403d75cd; ?>
<?php unset($__componentOriginalbe597145a76b59f2373d96c1403d75cd); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
    </div>
    <?php if(!empty($statistics)): ?>
      <div class="mt-10 lg:col-span-6 lg:col-end-13 lg:mt-0">
        <div class="space-y-6 sm:space-y-8">
          <ul class="grid grid-cols-2 divide-x-2 divide-y-2 divide-neutral-300 overflow-hidden dark:divide-neutral-700">
            <?php $__currentLoopData = $statistics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if (isset($component)) { $__componentOriginal44072ab828146647118ae0514e17d162 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal44072ab828146647118ae0514e17d162 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.blocks.stats-grid','data' => ['count' => $stat['count'],'description' => $stat['description'],'index' => $index]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('blocks.stats-grid'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['count' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($stat['count']),'description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($stat['description']),'index' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($index)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal44072ab828146647118ae0514e17d162)): ?>
<?php $attributes = $__attributesOriginal44072ab828146647118ae0514e17d162; ?>
<?php unset($__attributesOriginal44072ab828146647118ae0514e17d162); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal44072ab828146647118ae0514e17d162)): ?>
<?php $component = $__componentOriginal44072ab828146647118ae0514e17d162; ?>
<?php unset($__componentOriginal44072ab828146647118ae0514e17d162); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Desktop\Colorspire\screwfast-1.0.0\resources\views/components/sections/testimonials/testimonials-section.blade.php ENDPATH**/ ?>