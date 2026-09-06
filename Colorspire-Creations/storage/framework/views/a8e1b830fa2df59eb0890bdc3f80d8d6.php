<?php
$config = [
  'id' => 'hs-toggle-between-modals-login-modal',
  'title' => 'Sign in',
  'subTitle' => "Don't have an account yet?",
  'registerBtn' => 'Sign up here',
  'registerBtnDataHS' => '#hs-toggle-between-modals-register-modal',
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
                data-hs-overlay="<?php echo e($config['registerBtnDataHS']); ?>"
              >
                <?php echo e($config['registerBtn']); ?>

              </button>
            </p>
          </div>
          <div class="mt-5">
            <?php if (isset($component)) { $__componentOriginal35aa736bf39744f42aaadec9086f3e8f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal35aa736bf39744f42aaadec9086f3e8f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.google-btn','data' => ['title' => 'Sign in with Google']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('buttons.google-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Sign in with Google']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal35aa736bf39744f42aaadec9086f3e8f)): ?>
<?php $attributes = $__attributesOriginal35aa736bf39744f42aaadec9086f3e8f; ?>
<?php unset($__attributesOriginal35aa736bf39744f42aaadec9086f3e8f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal35aa736bf39744f42aaadec9086f3e8f)): ?>
<?php $component = $__componentOriginal35aa736bf39744f42aaadec9086f3e8f; ?>
<?php unset($__componentOriginal35aa736bf39744f42aaadec9086f3e8f); ?>
<?php endif; ?>

            <div
              class="flex items-center py-3 text-xs text-neutral-400 uppercase before:me-6 before:flex-[1_1_0%] before:border-t before:border-neutral-200 after:ms-6 after:flex-[1_1_0%] after:border-t after:border-neutral-200 dark:text-neutral-500 dark:before:border-neutral-600 dark:after:border-neutral-600"
            >
              Or
            </div>
            <form>
              <div class="grid gap-y-4">
                <?php if (isset($component)) { $__componentOriginal94a2a378a02fb74db5998bb5fde6d36b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal94a2a378a02fb74db5998bb5fde6d36b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input.email-input','data' => ['id' => 'login-email','errorId' => 'login-email-error']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input.email-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'login-email','errorId' => 'login-email-error']); ?>
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
                <?php if (isset($component)) { $__componentOriginal3cf61a478629d8414c282597d08b793b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3cf61a478629d8414c282597d08b793b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input.password-input','data' => ['forgot' => true,'id' => 'password','errorId' => 'login-password-error','content' => '8+ characters required']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input.password-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['forgot' => true,'id' => 'password','errorId' => 'login-password-error','content' => '8+ characters required']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3cf61a478629d8414c282597d08b793b)): ?>
<?php $attributes = $__attributesOriginal3cf61a478629d8414c282597d08b793b; ?>
<?php unset($__attributesOriginal3cf61a478629d8414c282597d08b793b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3cf61a478629d8414c282597d08b793b)): ?>
<?php $component = $__componentOriginal3cf61a478629d8414c282597d08b793b; ?>
<?php unset($__componentOriginal3cf61a478629d8414c282597d08b793b); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal0985ab89d79b9dadefcecdd7e2b77e35 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0985ab89d79b9dadefcecdd7e2b77e35 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input.checkbox','data' => ['id' => 'remember-me']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input.checkbox'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'remember-me']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0985ab89d79b9dadefcecdd7e2b77e35)): ?>
<?php $attributes = $__attributesOriginal0985ab89d79b9dadefcecdd7e2b77e35; ?>
<?php unset($__attributesOriginal0985ab89d79b9dadefcecdd7e2b77e35); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0985ab89d79b9dadefcecdd7e2b77e35)): ?>
<?php $component = $__componentOriginal0985ab89d79b9dadefcecdd7e2b77e35; ?>
<?php unset($__componentOriginal0985ab89d79b9dadefcecdd7e2b77e35); ?>
<?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal012ac87bb15101ca0cbd6cfbb4e84233 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal012ac87bb15101ca0cbd6cfbb4e84233 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.auth-btn','data' => ['title' => 'Sign in']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('buttons.auth-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Sign in']); ?>
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
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Desktop\Colorspire\screwfast-1.0.0\resources\views/components/forms/login-modal.blade.php ENDPATH**/ ?>