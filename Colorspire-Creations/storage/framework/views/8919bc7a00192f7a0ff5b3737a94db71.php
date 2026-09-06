<?php
$locale = app()->getLocale();
$nav = \App\Services\ContentService::getNavigation($locale);
$site = \App\Services\ContentService::getSite();
$sectionThreeTitle = $locale === 'fr' ? 'Rester à jour' : 'Stay up to date';
$sectionThreeContent = $locale === 'fr'
    ? 'Restez informé des derniers outils et des offres exclusives.'
    : 'Stay updated with the latest tools and exclusive deals.';
$crafted = $locale === 'fr' ? 'Fabriqué par' : 'Crafted by';
?>

<footer class="w-full bg-neutral-300 dark:bg-neutral-900">
  <div
    class="mx-auto w-full max-w-[85rem] px-4 py-10 sm:px-6 lg:px-16 lg:pt-20 2xl:max-w-(--breakpoint-2xl)"
  >
    <div class="grid grid-cols-2 gap-6 md:grid-cols-4 lg:grid-cols-5">
      <div class="col-span-full lg:col-span-1">
        <?php if (isset($component)) { $__componentOriginal8741a05e11b0c77d19ec61b6b35b26b3 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8741a05e11b0c77d19ec61b6b35b26b3 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.brand-logo','data' => ['class' => 'h-auto w-52']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('brand-logo'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'h-auto w-52']); ?>
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
      </div>
      <?php $__currentLoopData = $nav['footerLinks']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-span-1">
          <h3 class="font-bold text-neutral-800 dark:text-neutral-200">
            <?php echo e($section['section']); ?>

          </h3>
          <ul class="mt-3 grid space-y-3">
            <?php $__currentLoopData = $section['links']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $link): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li>
                <a
                  href="<?php echo e($link['url']); ?>"
                  class="inline-flex gap-x-2 rounded-lg text-neutral-600 ring-zinc-500 outline-hidden transition duration-300 hover:text-neutral-500 focus-visible:ring-3 dark:text-neutral-400 dark:ring-zinc-200 dark:hover:text-neutral-300 dark:focus:outline-hidden"
                >
                  <?php echo e($link['name']); ?>

                </a>
                <?php if($section['section'] === 'Company' && $index === 2): ?>
                  <span class="ms-1 inline rounded-lg bg-orange-500 px-2 py-1 text-xs font-bold text-neutral-50">
                    We're hiring!
                  </span>
                <?php endif; ?>
              </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      <div class="col-span-2">
        <h3 class="font-bold text-neutral-800 dark:text-neutral-200">
          <?php echo e($sectionThreeTitle); ?>

        </h3>

        <form>
          <?php if (isset($component)) { $__componentOriginal9fe880672e25a239485c38838045f655 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9fe880672e25a239485c38838045f655 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input.email-footer-input','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input.email-footer-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9fe880672e25a239485c38838045f655)): ?>
<?php $attributes = $__attributesOriginal9fe880672e25a239485c38838045f655; ?>
<?php unset($__attributesOriginal9fe880672e25a239485c38838045f655); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9fe880672e25a239485c38838045f655)): ?>
<?php $component = $__componentOriginal9fe880672e25a239485c38838045f655; ?>
<?php unset($__componentOriginal9fe880672e25a239485c38838045f655); ?>
<?php endif; ?>
          <p class="mt-3 text-sm text-neutral-600 dark:text-neutral-400">
            <?php echo e($sectionThreeContent); ?>

          </p>
        </form>
      </div>
    </div>

    <div
      class="mt-9 grid gap-y-2 sm:mt-12 sm:flex sm:items-center sm:justify-between sm:gap-y-0"
    >
      <div class="flex items-center justify-between">
        <p class="text-sm text-neutral-600 dark:text-neutral-400">
          © <span id="current-year"><?php echo e(date('Y')); ?></span>
          <?php echo e($site['title']); ?>. <?php echo e($crafted); ?>

          <a
            class="rounded-lg font-medium underline underline-offset-2 ring-zinc-500 outline-hidden transition duration-300 hover:text-neutral-700 hover:decoration-dashed focus:outline-hidden focus-visible:ring-3 dark:ring-zinc-200 dark:hover:text-neutral-300"
            href="https://github.com/mearashadowfax"
            rel="noopener noreferrer">Gulamov</a> • Distributed by <a class="rounded-lg font-medium ring-zinc-500 outline-hidden transition duration-300 hover:text-neutral-700 hover:decoration-dashed focus:outline-hidden focus-visible:ring-3 dark:ring-zinc-200 dark:hover:text-neutral-300 underline" href="https://themewagon.com" target="_blank">ThemeWagon</a>
          .
        </p>
      </div>

      <div>
        <?php if (isset($component)) { $__componentOriginala3b57757b0ad39e15ae0019990e3531e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala3b57757b0ad39e15ae0019990e3531e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.links.footer-social-link','data' => ['url' => $nav['socialLinks']['facebook']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('links.footer-social-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($nav['socialLinks']['facebook'])]); ?>
          <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'facebookFooter']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'facebookFooter']); ?>
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
<?php if (isset($__attributesOriginala3b57757b0ad39e15ae0019990e3531e)): ?>
<?php $attributes = $__attributesOriginala3b57757b0ad39e15ae0019990e3531e; ?>
<?php unset($__attributesOriginala3b57757b0ad39e15ae0019990e3531e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala3b57757b0ad39e15ae0019990e3531e)): ?>
<?php $component = $__componentOriginala3b57757b0ad39e15ae0019990e3531e; ?>
<?php unset($__componentOriginala3b57757b0ad39e15ae0019990e3531e); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginala3b57757b0ad39e15ae0019990e3531e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala3b57757b0ad39e15ae0019990e3531e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.links.footer-social-link','data' => ['url' => $nav['socialLinks']['x']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('links.footer-social-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($nav['socialLinks']['x'])]); ?>
          <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'xFooter']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'xFooter']); ?>
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
<?php if (isset($__attributesOriginala3b57757b0ad39e15ae0019990e3531e)): ?>
<?php $attributes = $__attributesOriginala3b57757b0ad39e15ae0019990e3531e; ?>
<?php unset($__attributesOriginala3b57757b0ad39e15ae0019990e3531e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala3b57757b0ad39e15ae0019990e3531e)): ?>
<?php $component = $__componentOriginala3b57757b0ad39e15ae0019990e3531e; ?>
<?php unset($__componentOriginala3b57757b0ad39e15ae0019990e3531e); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginala3b57757b0ad39e15ae0019990e3531e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala3b57757b0ad39e15ae0019990e3531e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.links.footer-social-link','data' => ['url' => $nav['socialLinks']['github']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('links.footer-social-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($nav['socialLinks']['github'])]); ?>
          <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'githubFooter']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'githubFooter']); ?>
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
<?php if (isset($__attributesOriginala3b57757b0ad39e15ae0019990e3531e)): ?>
<?php $attributes = $__attributesOriginala3b57757b0ad39e15ae0019990e3531e; ?>
<?php unset($__attributesOriginala3b57757b0ad39e15ae0019990e3531e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala3b57757b0ad39e15ae0019990e3531e)): ?>
<?php $component = $__componentOriginala3b57757b0ad39e15ae0019990e3531e; ?>
<?php unset($__componentOriginala3b57757b0ad39e15ae0019990e3531e); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginala3b57757b0ad39e15ae0019990e3531e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala3b57757b0ad39e15ae0019990e3531e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.links.footer-social-link','data' => ['url' => $nav['socialLinks']['google']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('links.footer-social-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($nav['socialLinks']['google'])]); ?>
          <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'googleFooter']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'googleFooter']); ?>
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
<?php if (isset($__attributesOriginala3b57757b0ad39e15ae0019990e3531e)): ?>
<?php $attributes = $__attributesOriginala3b57757b0ad39e15ae0019990e3531e; ?>
<?php unset($__attributesOriginala3b57757b0ad39e15ae0019990e3531e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala3b57757b0ad39e15ae0019990e3531e)): ?>
<?php $component = $__componentOriginala3b57757b0ad39e15ae0019990e3531e; ?>
<?php unset($__componentOriginala3b57757b0ad39e15ae0019990e3531e); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginala3b57757b0ad39e15ae0019990e3531e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala3b57757b0ad39e15ae0019990e3531e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.links.footer-social-link','data' => ['url' => $nav['socialLinks']['slack']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('links.footer-social-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($nav['socialLinks']['slack'])]); ?>
          <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'slackFooter']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'slackFooter']); ?>
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
<?php if (isset($__attributesOriginala3b57757b0ad39e15ae0019990e3531e)): ?>
<?php $attributes = $__attributesOriginala3b57757b0ad39e15ae0019990e3531e; ?>
<?php unset($__attributesOriginala3b57757b0ad39e15ae0019990e3531e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala3b57757b0ad39e15ae0019990e3531e)): ?>
<?php $component = $__componentOriginala3b57757b0ad39e15ae0019990e3531e; ?>
<?php unset($__componentOriginala3b57757b0ad39e15ae0019990e3531e); ?>
<?php endif; ?>
      </div>
    </div>
  </div>
</footer>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Desktop\Colorspire\screwfast-1.0.0\resources\views/components/footer.blade.php ENDPATH**/ ?>