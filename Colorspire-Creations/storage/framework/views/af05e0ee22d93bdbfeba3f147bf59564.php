<?php
$isFr = request()->segment(1) === 'fr' || app()->getLocale() === 'fr';
$pageTitle = $isFr ? 'Page Non Trouvée | ScrewFast' : 'Page Not Found | ScrewFast';
$subTitle = $isFr ? "Oops, ce n'est pas l'outil que vous recherchiez!" : "Oops, this isn't the tool you were looking for!";
$content = $isFr ? "Ne laissez pas ce contretemps vous ralentir. Revenons à la construction de votre chef-d'œuvre." : "Don't let this hiccup slow you down. Let's get you back to building your masterpiece.";
$btnTitle = $isFr ? 'Retournez' : 'Go Back';
?>

<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => ['title' => $pageTitle]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($pageTitle)]); ?>
  <section class="grid h-svh place-content-center">
    <div class="mx-auto max-w-(--breakpoint-xl) px-4 py-8 lg:px-6 lg:py-16">
      <div class="mx-auto max-w-(--breakpoint-sm) text-center">
        <h1
          class="text-dark mb-4 text-7xl font-extrabold text-yellow-500 lg:text-9xl dark:text-yellow-400"
        >
          404
        </h1>
        <p
          id="subtitle"
          class="mb-4 text-3xl font-bold tracking-tight text-balance text-neutral-700 md:text-4xl dark:text-neutral-300"
        >
          <?php echo e($subTitle); ?>

        </p>
        <p
          id="content"
          class="mb-4 text-lg text-pretty text-neutral-600 dark:text-neutral-400"
        >
          <?php echo e($content); ?>

        </p>
        <?php if (isset($component)) { $__componentOriginal3e96174ec03a739e4249fc5073dd6f84 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal3e96174ec03a739e4249fc5073dd6f84 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.btn404','data' => ['title' => $btnTitle,'id' => 'go-back']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('buttons.btn404'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($btnTitle),'id' => 'go-back']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal3e96174ec03a739e4249fc5073dd6f84)): ?>
<?php $attributes = $__attributesOriginal3e96174ec03a739e4249fc5073dd6f84; ?>
<?php unset($__attributesOriginal3e96174ec03a739e4249fc5073dd6f84); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal3e96174ec03a739e4249fc5073dd6f84)): ?>
<?php $component = $__componentOriginal3e96174ec03a739e4249fc5073dd6f84; ?>
<?php unset($__componentOriginal3e96174ec03a739e4249fc5073dd6f84); ?>
<?php endif; ?>
      </div>
    </div>
  </section>

  <?php $__env->startPush('scripts'); ?>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const goBackButton = document.getElementById('go-back');
      if (goBackButton) {
        goBackButton.addEventListener('click', () => {
          window.history.back();
        });
      }
    });
  </script>
  <?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $attributes = $__attributesOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__attributesOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $component = $__componentOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__componentOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Desktop\Colorspire\screwfast-1.0.0\resources\views/errors/404.blade.php ENDPATH**/ ?>