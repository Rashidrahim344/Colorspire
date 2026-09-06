<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'pageTitle' => '',
    'title' => app()->getLocale() === 'fr' ? 'Partager' : 'Share',
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
    'pageTitle' => '',
    'title' => app()->getLocale() === 'fr' ? 'Partager' : 'Share',
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
$socialPlatforms = [
  [
    'name' => 'Facebook',
    'url' => '#!',
    'svg' => 'facebook',
  ],
  [
    'name' => 'X',
    'url' => '#!',
    'svg' => 'x',
  ],
  [
    'name' => 'LinkedIn',
    'url' => '#!',
    'svg' => 'linkedIn',
  ],
];
?>

<div
  class="hs-dropdown relative inline-flex [--auto-close:inside] [--placement:top-left]"
>
  <button
    id="hs-dropup"
    type="button"
    class="hs-dropdown-toggle inline-flex items-center gap-x-2 rounded-lg px-4 py-3 text-sm font-medium text-neutral-600 ring-zinc-500 outline-hidden transition duration-300 hover:bg-neutral-100 hover:text-neutral-700 focus-visible:ring-3 dark:text-neutral-400 dark:ring-zinc-200 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:outline-hidden"
  >
    <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'share']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'share']); ?>
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
    <?php echo e($title); ?>

  </button>

  <div
    class="hs-dropdown-menu duration hs-dropdown-open:opacity-100 z-10 hidden w-72 divide-y divide-neutral-200 rounded-lg bg-neutral-50 p-2 opacity-0 shadow-md transition-[opacity,margin] dark:divide-neutral-700 dark:border dark:border-neutral-700 dark:bg-neutral-800"
    aria-labelledby="hs-dropup"
  >
    <div class="py-2 first:pt-0 last:pb-0">
      <?php $__currentLoopData = $socialPlatforms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $platform): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <a
          class="flex items-center gap-x-3.5 rounded-lg px-3 py-2 text-sm text-neutral-700 hover:bg-neutral-200 focus:bg-neutral-100 focus:outline-hidden dark:text-neutral-300 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
          href="<?php echo e($platform['url']); ?>"
          rel="noopener noreferrer"
          aria-label="Share on <?php echo e($platform['name']); ?>"
        >
          <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => $platform['svg']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($platform['svg'])]); ?>
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
          Share on <?php echo e($platform['name']); ?>

        </a>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <div class="py-2 first:pt-0 last:pb-0">
      <button
        type="button"
        class="js-clipboard hover:text-dark focus-visible:ring-secondary group inline-flex w-full items-center gap-x-3.5 rounded-lg px-3 py-2 text-sm text-neutral-700 hover:bg-neutral-200 focus:bg-neutral-100 focus:outline-hidden focus-visible:ring-1 focus-visible:outline-hidden dark:text-neutral-300 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
        data-clipboard-success-text="Copied"
      >
        <svg
          class="js-clipboard-default h-4 w-4 transition group-hover:rotate-6"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        >
          <rect width="8" height="4" x="8" y="2" rx="1" ry="1"></rect>
          <path
            d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"
          ></path>
        </svg>

        <svg
          class="js-clipboard-success hidden h-4 w-4 text-neutral-700 dark:text-neutral-300"
          width="24"
          height="24"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
        >
          <polyline points="20 6 9 17 4 12"></polyline>
        </svg>
        <span class="js-clipboard-success-text">Copy link</span>
      </button>
    </div>
  </div>
</div>

<script>
  (function () {
    window.addEventListener('DOMContentLoaded', () => {
      const clipboards = document.querySelectorAll('.js-clipboard');
      clipboards.forEach(el => {
        el.addEventListener('click', () => {
          navigator.clipboard.writeText(window.location.href).then(() => {
            const defaultElement = el.querySelector('.js-clipboard-default');
            const successElement = el.querySelector('.js-clipboard-success');
            const successTextElement = el.querySelector('.js-clipboard-success-text');
            const successText = el.dataset.clipboardSuccessText || 'Copied';
            const oldSuccessText = successTextElement ? successTextElement.textContent : '';

            if (successTextElement) {
              successTextElement.textContent = successText;
            }
            if (defaultElement && successElement) {
              defaultElement.style.display = 'none';
              successElement.classList.remove('hidden');
              successElement.style.display = 'block';
            }

            setTimeout(() => {
              if (successTextElement && oldSuccessText !== '') {
                successTextElement.textContent = oldSuccessText;
              }
              if (defaultElement && successElement) {
                successElement.style.display = 'none';
                successElement.classList.add('hidden');
                defaultElement.style.display = '';
              }
            }, 800);
          });
        });
      });
    });
  })();
</script>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Desktop\Colorspire\screwfast-1.0.0\resources\views/components/buttons/social-share.blade.php ENDPATH**/ ?>