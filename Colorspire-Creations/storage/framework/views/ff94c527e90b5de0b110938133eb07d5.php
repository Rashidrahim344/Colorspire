<?php
$config = [
  'id' => 'hs-toggle-between-modals-recover-modal',
  'title' => 'Forgot password?',
  'subTitle' => 'Remember your password?',
  'loginBtn' => 'Sign in here',
  'loginBtnDataHS' => '#hs-toggle-between-modals-login-modal',
];
?>

<div
  id="<?php echo e($config['id']); ?>"
  class="hs-overlay hs-overlay-backdrop-open:bg-neutral-900/90 absolute start-0 top-0 z-50 hidden h-full w-full"
>
  <div
    class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 m-3 mt-0 opacity-0 transition-all ease-out sm:mx-auto sm:w-full sm:max-w-lg"
  >
    <div class="mx-auto w-full max-w-md p-6">
      <div
        class="mt-7 rounded-xl border border-neutral-200 bg-neutral-100 shadow-xs dark:border-neutral-700 dark:bg-neutral-800"
      >
        <div class="p-4 sm:p-7">
          <div class="text-center">
            <div
              class="block text-2xl font-bold text-neutral-800 dark:text-neutral-200"
              role="heading"
              aria-level="1"
              aria-label="<?php echo e($config['title']); ?>"
            >
              <?php echo e($config['title']); ?>

            </div>
            <p class="mt-2 text-sm text-neutral-600 dark:text-neutral-400">
              <?php echo e($config['subTitle']); ?>

              <button
                class="rounded-lg p-1 font-medium text-orange-400 decoration-2 ring-zinc-500 outline-hidden hover:underline focus-visible:ring-3 dark:text-orange-400 dark:ring-zinc-200 dark:focus:outline-hidden"
                data-hs-overlay="<?php echo e($config['loginBtnDataHS']); ?>"
              >
                <?php echo e($config['loginBtn']); ?>

              </button>
            </p>
          </div>

          <div class="mt-5">
            <form>
              <div class="grid gap-y-4">
                <?php if (isset($component)) { $__componentOriginal94a2a378a02fb74db5998bb5fde6d36b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal94a2a378a02fb74db5998bb5fde6d36b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input.email-input','data' => ['id' => 'recover-email','errorId' => 'recover-email-error']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input.email-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'recover-email','errorId' => 'recover-email-error']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal94a2a378a02fb74db5998bb5fde6d36b)): ?>
<?php $attributes = $__attributesOriginal94a2a378a02fb74db5998bb5fde6d36b; ?>
<?php unset($__attributesOriginal94a2a378a02fb74db5998bb5fde6d36b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal94a2a378a02fb74db5998bb5fde6d36b)): ?>
<?php $component = $__componentOriginal94a2a378a02fb74db5998bb5fde6d36b; ?>
<?php unset($__componentOriginal94a2a378a02fb74db5998bb5fde6d36b); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal012ac87bb15101ca0cbd6cfbb4e84233 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal012ac87bb15101ca0cbd6cfbb4e84233 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.auth-btn','data' => ['title' => 'Reset password']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('buttons.auth-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Reset password']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal012ac87bb15101ca0cbd6cfbb4e84233)): ?>
<?php $attributes = $__attributesOriginal012ac87bb15101ca0cbd6cfbb4e84233; ?>
<?php unset($__attributesOriginal012ac87bb15101ca0cbd6cfbb4e84233); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal012ac87bb15101ca0cbd6cfbb4e84233)): ?>
<?php $component = $__componentOriginal012ac87bb15101ca0cbd6cfbb4e84233; ?>
<?php unset($__componentOriginal012ac87bb15101ca0cbd6cfbb4e84233); ?>
<?php endif; ?>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Documents\GitHub\Colorspire\Colorspire-Creations\resources\views/components/forms/recover-modal.blade.php ENDPATH**/ ?>