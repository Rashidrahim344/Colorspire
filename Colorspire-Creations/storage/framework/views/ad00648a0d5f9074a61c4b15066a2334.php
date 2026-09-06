<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title',
    'faqs',
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
    'faqs',
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
  <div class="grid gap-10 md:grid-cols-5">
    <div class="md:col-span-2">
      <div class="max-w-xs">
        <h2
          class="text-2xl font-bold text-neutral-800 md:text-4xl md:leading-tight dark:text-neutral-200"
        >
          <?php echo $title; ?>

        </h2>
        <?php if(!empty($faqs['subTitle'])): ?>
          <p class="mt-1 hidden text-neutral-600 md:block dark:text-neutral-400">
            <?php echo e($faqs['subTitle']); ?>

          </p>
        <?php endif; ?>
      </div>
    </div>
    <div class="md:col-span-3">
      <div
        class="hs-accordion-group divide-y divide-neutral-200 dark:divide-neutral-700"
      >
        <?php $__currentLoopData = $faqs['faqs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $i => $question): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php
            $id = 'hs-basic-with-title-and-arrow-stretched-heading-' . ($i + 1);
            $collapseId = 'hs-basic-with-title-and-arrow-stretched-collapse' . ($i + 1);
          ?>
          <?php if (isset($component)) { $__componentOriginal5cae757552a6a65974cf63292893ee6e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5cae757552a6a65974cf63292893ee6e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.blocks.accordion-item','data' => ['question' => $question['question'],'answer' => $question['answer'],'id' => $id,'collapseId' => $collapseId,'first' => $i === 0]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('blocks.accordion-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['question' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($question['question']),'answer' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($question['answer']),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($id),'collapseId' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($collapseId),'first' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($i === 0)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5cae757552a6a65974cf63292893ee6e)): ?>
<?php $attributes = $__attributesOriginal5cae757552a6a65974cf63292893ee6e; ?>
<?php unset($__attributesOriginal5cae757552a6a65974cf63292893ee6e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5cae757552a6a65974cf63292893ee6e)): ?>
<?php $component = $__componentOriginal5cae757552a6a65974cf63292893ee6e; ?>
<?php unset($__componentOriginal5cae757552a6a65974cf63292893ee6e); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>
</section>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Documents\GitHub\Colorspire\Colorspire-Creations\resources\views/components/sections/misc/faq.blade.php ENDPATH**/ ?>