<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title',
    'subTitle' => null,
    'url' => null,
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
    'url' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
$btnTitle = app()->getLocale() === 'fr' ? 'Continuer avec Github' : 'Continue with Github';
?>

<section
  class="relative mx-auto max-w-[85rem] px-4 pt-10 pb-24 sm:px-6 lg:px-8"
>
  <div
    class="absolute top-[55%] left-0 scale-90 md:top-[20%] xl:top-[25%] xl:left-[10%]"
  >
    <svg
      width="64"
      height="64"
      fill="none"
      stroke-width="1.5"
      color="#ea580c"
      viewBox="0 0 24 24"
    >
      <path
        fill="#ea580c"
        stroke="#ea580c"
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M12 23a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM3 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM3 18a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"
      ></path>
      <path
        stroke="#ea580c"
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M21 7.353v9.294a.6.6 0 0 1-.309.525l-8.4 4.666a.6.6 0 0 1-.582 0l-8.4-4.666A.6.6 0 0 1 3 16.647V7.353a.6.6 0 0 1 .309-.524l8.4-4.667a.6.6 0 0 1 .582 0l8.4 4.667a.6.6 0 0 1 .309.524Z"
      ></path>
      <path
        stroke="#ea580c"
        stroke-linecap="round"
        stroke-linejoin="round"
        d="m3.528 7.294 8.18 4.544a.6.6 0 0 0 .583 0l8.209-4.56M12 21v-9"
      ></path>
    </svg>
  </div>
  <div class="absolute top-0 left-[85%] scale-75">
    <svg
      width="64"
      height="64"
      fill="none"
      stroke-width="1.5"
      color="#fbbf24"
      viewBox="0 0 24 24"
    >
      <path
        stroke="#fbbf24"
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10Z"
      ></path>
      <path
        fill="#fbbf24"
        stroke="#fbbf24"
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M5 6a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"></path>
      <path
        stroke="#fbbf24"
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M5 10.5V9M5 15v-1.5"></path>
      <path
        fill="#fbbf24"
        stroke="#fbbf24"
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M5 20a1 1 0 1 0 0-2 1 1 0 0 0 0 2ZM19 20a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z"
      ></path>
      <path
        stroke="#fbbf24"
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M10.5 19H9M15 19h-1.5"></path>
    </svg>
  </div>
  <div
    class="absolute bottom-[5%] left-[60%] scale-[.6] xl:bottom-[15%] xl:left-[35%]"
  >
    <svg
      width="64"
      height="64"
      fill="none"
      stroke-width="1.5"
      color="#a3a3a3"
      viewBox="0 0 24 24"
    >
      <path
        stroke="#a3a3a3"
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M5.164 17c.29-1.049.67-2.052 1.132-3M11.5 7.794A16.838 16.838 0 0 1 14 6.296M4.5 22a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5Z"
      ></path>
      <path
        stroke="#a3a3a3"
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M9.5 12a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5ZM19.5 7a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5Z"
      ></path>
    </svg>
  </div>
  <div class="mx-auto mt-5 max-w-xl text-center">
    <h2
      class="block text-4xl leading-tight font-bold tracking-tight text-balance text-neutral-800 md:text-5xl lg:text-6xl dark:text-neutral-200"
    >
      <?php echo e($title); ?>

    </h2>
  </div>
  <div class="mx-auto mt-5 max-w-3xl text-center">
    <?php if($subTitle): ?>
      <p class="text-lg text-pretty text-neutral-600 dark:text-neutral-400">
        <?php echo e($subTitle); ?>

      </p>
    <?php endif; ?>
  </div>
  <?php if($url): ?>
    <div class="mt-8 flex justify-center gap-3">
      <?php if (isset($component)) { $__componentOriginalc4adad1ab65ad015359bdff523b3b9c0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc4adad1ab65ad015359bdff523b3b9c0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.github-btn','data' => ['url' => $url,'title' => $btnTitle]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('buttons.github-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($url),'title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($btnTitle)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc4adad1ab65ad015359bdff523b3b9c0)): ?>
<?php $attributes = $__attributesOriginalc4adad1ab65ad015359bdff523b3b9c0; ?>
<?php unset($__attributesOriginalc4adad1ab65ad015359bdff523b3b9c0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc4adad1ab65ad015359bdff523b3b9c0)): ?>
<?php $component = $__componentOriginalc4adad1ab65ad015359bdff523b3b9c0; ?>
<?php unset($__componentOriginalc4adad1ab65ad015359bdff523b3b9c0); ?>
<?php endif; ?>
    </div>
  <?php endif; ?>
</section>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Documents\GitHub\Colorspire\Colorspire-Creations\resources\views/components/sections/landing/hero-section-alt.blade.php ENDPATH**/ ?>