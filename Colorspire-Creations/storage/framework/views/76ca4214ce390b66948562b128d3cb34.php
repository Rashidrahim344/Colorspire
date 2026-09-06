<?php
$locale = app()->getLocale();
$nav = \App\Services\ContentService::getNavigation($locale);
$homeUrl = $locale === 'fr' ? '/fr' : '/';
?>

<header
  class="sticky inset-x-0 top-4 z-50 flex w-full flex-wrap text-sm md:flex-nowrap md:justify-start"
>
  <nav
    class="relative mx-2 w-full rounded-[36px] border border-yellow-100/40 bg-yellow-50/60 px-4 py-3 backdrop-blur-md md:flex md:items-center md:justify-between md:px-6 md:py-0 lg:px-8 xl:mx-auto dark:border-neutral-700/40 dark:bg-neutral-800/80 dark:backdrop-blur-md"
    aria-label="Global"
  >
    <div class="flex items-center justify-between">
      <a
        class="flex-none rounded-lg text-xl font-bold ring-zinc-500 outline-hidden focus-visible:ring-3 dark:ring-zinc-200 dark:focus:outline-hidden"
        href="<?php echo e($homeUrl); ?>"
        aria-label="Brand"
      >
        <?php if (isset($component)) { $__componentOriginal8741a05e11b0c77d19ec61b6b35b26b3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8741a05e11b0c77d19ec61b6b35b26b3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.brand-logo','data' => ['class' => 'h-auto w-40']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('brand-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-auto w-40']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8741a05e11b0c77d19ec61b6b35b26b3)): ?>
<?php $attributes = $__attributesOriginal8741a05e11b0c77d19ec61b6b35b26b3; ?>
<?php unset($__attributesOriginal8741a05e11b0c77d19ec61b6b35b26b3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8741a05e11b0c77d19ec61b6b35b26b3)): ?>
<?php $component = $__componentOriginal8741a05e11b0c77d19ec61b6b35b26b3; ?>
<?php unset($__componentOriginal8741a05e11b0c77d19ec61b6b35b26b3); ?>
<?php endif; ?>
      </a>
      <div class="mr-5 ml-auto md:hidden">
        <button
          type="button"
          class="hs-collapse-toggle flex h-8 w-8 items-center justify-center rounded-full text-sm font-bold text-neutral-600 transition duration-300 hover:bg-neutral-200 disabled:pointer-events-none disabled:opacity-50 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:focus:outline-hidden"
          data-hs-collapse="#navbar-collapse-with-animation"
          aria-controls="navbar-collapse-with-animation"
          aria-label="Toggle navigation"
        >
          <svg
            class="hs-collapse-open:hidden h-[1.25rem] w-[1.25rem] shrink-0"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <line x1="3" x2="21" y1="6" y2="6"></line>
            <line x1="3" x2="21" y1="12" y2="12"></line>
            <line x1="3" x2="21" y1="18" y2="18"></line>
          </svg>
          <svg
            class="hs-collapse-open:block hidden h-[1.25rem] w-[1.25rem] shrink-0"
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
          >
            <path d="M18 6 6 18"></path>
            <path d="m6 6 12 12"></path>
          </svg>
        </button>
      </div>
      <span class="inline-block md:hidden">
        <?php if (isset($component)) { $__componentOriginal0a51a9e3cb2aa0da1f441cd3fde95ac5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0a51a9e3cb2aa0da1f441cd3fde95ac5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.theme-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('theme-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0a51a9e3cb2aa0da1f441cd3fde95ac5)): ?>
<?php $attributes = $__attributesOriginal0a51a9e3cb2aa0da1f441cd3fde95ac5; ?>
<?php unset($__attributesOriginal0a51a9e3cb2aa0da1f441cd3fde95ac5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0a51a9e3cb2aa0da1f441cd3fde95ac5)): ?>
<?php $component = $__componentOriginal0a51a9e3cb2aa0da1f441cd3fde95ac5; ?>
<?php unset($__componentOriginal0a51a9e3cb2aa0da1f441cd3fde95ac5); ?>
<?php endif; ?>
      </span>
    </div>
    <div
      id="navbar-collapse-with-animation"
      class="hs-collapse hidden grow basis-full overflow-hidden transition-all duration-300 md:block"
    >
      <div
        class="mt-5 flex flex-col gap-x-0 gap-y-4 md:mt-0 md:flex-row md:items-center md:justify-end md:gap-x-4 md:gap-y-0 md:ps-7 lg:gap-x-7"
      >
        <?php $__currentLoopData = $nav['navBarLinks']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if (isset($component)) { $__componentOriginalc282dca0e2eb3a5c5316fa11b35a8c6f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc282dca0e2eb3a5c5316fa11b35a8c6f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.links.nav-link','data' => ['url' => $link['url'],'name' => $link['name']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('links.nav-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($link['url']),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($link['name'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc282dca0e2eb3a5c5316fa11b35a8c6f)): ?>
<?php $attributes = $__attributesOriginalc282dca0e2eb3a5c5316fa11b35a8c6f; ?>
<?php unset($__attributesOriginalc282dca0e2eb3a5c5316fa11b35a8c6f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc282dca0e2eb3a5c5316fa11b35a8c6f)): ?>
<?php $component = $__componentOriginalc282dca0e2eb3a5c5316fa11b35a8c6f; ?>
<?php unset($__componentOriginalc282dca0e2eb3a5c5316fa11b35a8c6f); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php if (isset($component)) { $__componentOriginal36c20a77bba8e86771a76a9b6c5ea9a3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal36c20a77bba8e86771a76a9b6c5ea9a3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.login-btn','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('buttons.login-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal36c20a77bba8e86771a76a9b6c5ea9a3)): ?>
<?php $attributes = $__attributesOriginal36c20a77bba8e86771a76a9b6c5ea9a3; ?>
<?php unset($__attributesOriginal36c20a77bba8e86771a76a9b6c5ea9a3); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal36c20a77bba8e86771a76a9b6c5ea9a3)): ?>
<?php $component = $__componentOriginal36c20a77bba8e86771a76a9b6c5ea9a3; ?>
<?php unset($__componentOriginal36c20a77bba8e86771a76a9b6c5ea9a3); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginalc2ef5557d983887f2650fd998e61338a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc2ef5557d983887f2650fd998e61338a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.login-modal','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.login-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc2ef5557d983887f2650fd998e61338a)): ?>
<?php $attributes = $__attributesOriginalc2ef5557d983887f2650fd998e61338a; ?>
<?php unset($__attributesOriginalc2ef5557d983887f2650fd998e61338a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc2ef5557d983887f2650fd998e61338a)): ?>
<?php $component = $__componentOriginalc2ef5557d983887f2650fd998e61338a; ?>
<?php unset($__componentOriginalc2ef5557d983887f2650fd998e61338a); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal97bd9bcca9e48742865350bd56734687 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal97bd9bcca9e48742865350bd56734687 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.register-modal','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.register-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal97bd9bcca9e48742865350bd56734687)): ?>
<?php $attributes = $__attributesOriginal97bd9bcca9e48742865350bd56734687; ?>
<?php unset($__attributesOriginal97bd9bcca9e48742865350bd56734687); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal97bd9bcca9e48742865350bd56734687)): ?>
<?php $component = $__componentOriginal97bd9bcca9e48742865350bd56734687; ?>
<?php unset($__componentOriginal97bd9bcca9e48742865350bd56734687); ?>
<?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal66db51320f8a8b72c0bbed610b8a963c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal66db51320f8a8b72c0bbed610b8a963c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.recover-modal','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.recover-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal66db51320f8a8b72c0bbed610b8a963c)): ?>
<?php $attributes = $__attributesOriginal66db51320f8a8b72c0bbed610b8a963c; ?>
<?php unset($__attributesOriginal66db51320f8a8b72c0bbed610b8a963c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal66db51320f8a8b72c0bbed610b8a963c)): ?>
<?php $component = $__componentOriginal66db51320f8a8b72c0bbed610b8a963c; ?>
<?php unset($__componentOriginal66db51320f8a8b72c0bbed610b8a963c); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginal9a51d0a89a46dde14c3150b290e44ced = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9a51d0a89a46dde14c3150b290e44ced = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.language-picker','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('language-picker'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9a51d0a89a46dde14c3150b290e44ced)): ?>
<?php $attributes = $__attributesOriginal9a51d0a89a46dde14c3150b290e44ced; ?>
<?php unset($__attributesOriginal9a51d0a89a46dde14c3150b290e44ced); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9a51d0a89a46dde14c3150b290e44ced)): ?>
<?php $component = $__componentOriginal9a51d0a89a46dde14c3150b290e44ced; ?>
<?php unset($__componentOriginal9a51d0a89a46dde14c3150b290e44ced); ?>
<?php endif; ?>
        <span class="hidden md:inline-block">
          <?php if (isset($component)) { $__componentOriginal0a51a9e3cb2aa0da1f441cd3fde95ac5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0a51a9e3cb2aa0da1f441cd3fde95ac5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.theme-icon','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('theme-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0a51a9e3cb2aa0da1f441cd3fde95ac5)): ?>
<?php $attributes = $__attributesOriginal0a51a9e3cb2aa0da1f441cd3fde95ac5; ?>
<?php unset($__attributesOriginal0a51a9e3cb2aa0da1f441cd3fde95ac5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0a51a9e3cb2aa0da1f441cd3fde95ac5)): ?>
<?php $component = $__componentOriginal0a51a9e3cb2aa0da1f441cd3fde95ac5; ?>
<?php unset($__componentOriginal0a51a9e3cb2aa0da1f441cd3fde95ac5); ?>
<?php endif; ?>
        </span>
      </div>
    </div>
  </nav>
</header>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Documents\GitHub\Colorspire\Colorspire-Creations\resources\views/components/navbar.blade.php ENDPATH**/ ?>