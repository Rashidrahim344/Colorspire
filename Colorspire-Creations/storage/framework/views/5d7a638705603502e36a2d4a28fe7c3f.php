<?php
$metaDescription = $product['data']['description'];
$ogTitle = "{$product['data']['title']} | Hardware Tools | {$site['title']}";
$pageTitle = "{$product['data']['title']} | {$site['title']}";

$imgMain = str_starts_with($product['data']['main']['imgMain'], 'http')
    ? $product['data']['main']['imgMain']
    : asset($product['data']['main']['imgMain']);
?>

<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => ['title' => $pageTitle,'customDescription' => $metaDescription,'customOgTitle' => $ogTitle,'lang' => $locale]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($pageTitle),'customDescription' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($metaDescription),'customOgTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ogTitle),'lang' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($locale)]); ?>
  <div id="overlay" class="fixed inset-0 bg-neutral-200 dark:bg-neutral-800"></div>

  <section
    class="mx-auto flex max-w-[85rem] flex-col px-4 py-10 sm:px-6 lg:px-8 lg:py-14 2xl:max-w-full"
  >
    <div>
      <p
        id="fadeText"
        class="mb-8 max-w-prose font-light text-pretty text-neutral-700 sm:text-xl dark:text-neutral-300"
      >
        <?php echo e($product['data']['main']['content']); ?>

      </p>
    </div>
    <div
      class="flex flex-col items-center justify-between space-y-4 sm:flex-row sm:space-y-0"
    >
      <div id="fadeInUp">
        <h1
          class="block text-4xl font-bold tracking-tighter text-neutral-800 sm:text-5xl md:text-6xl lg:text-7xl dark:text-neutral-200"
        >
          <?php echo e($product['data']['title']); ?>

        </h1>
        <p class="text-lg text-neutral-600 dark:text-neutral-400">
          <?php echo e($product['data']['description']); ?>

        </p>
      </div>
      <div>
        <img
          id="fadeInMoveRight"
          src="<?php echo e($imgMain); ?>"
          class="w-[600px]"
          alt="<?php echo e($product['data']['main']['imgAlt']); ?>"
          loading="eager"
        />
      </div>
    </div>
  </section>

  <div class="mx-auto max-w-[85rem] px-4 pt-10 sm:px-6 lg:px-8 lg:pt-14">
    <nav
      class="mx-auto grid max-w-6xl gap-y-px sm:flex sm:gap-x-4 sm:gap-y-0"
      aria-label="Tabs"
      role="tablist"
    >
      <?php $__currentLoopData = $product['data']['tabs']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $tab): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (isset($component)) { $__componentOriginala84cc0fab44d75b537da29f3cbabdca5 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala84cc0fab44d75b537da29f3cbabdca5 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.product-tab-btn','data' => ['title' => $tab['title'],'id' => $tab['id'],'dataTab' => $tab['dataTab'],'first' => $index === 0]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('buttons.product-tab-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tab['title']),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tab['id']),'dataTab' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($tab['dataTab']),'first' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($index === 0)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala84cc0fab44d75b537da29f3cbabdca5)): ?>
<?php $attributes = $__attributesOriginala84cc0fab44d75b537da29f3cbabdca5; ?>
<?php unset($__attributesOriginala84cc0fab44d75b537da29f3cbabdca5); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala84cc0fab44d75b537da29f3cbabdca5)): ?>
<?php $component = $__componentOriginala84cc0fab44d75b537da29f3cbabdca5; ?>
<?php unset($__componentOriginala84cc0fab44d75b537da29f3cbabdca5); ?>
<?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </nav>

    <div class="mt-12 md:mt-16">
      <div id="tabs-with-card-1" role="tabpanel">
        <div class="mx-auto max-w-[85rem] px-4 pb-10 sm:px-6 lg:px-8 lg:pb-14">
          <div class="grid gap-12 md:grid-cols-2">
            <div class="lg:w-3/4">
              <h2
                class="text-3xl font-bold tracking-tight text-balance text-neutral-800 md:leading-tight lg:text-4xl dark:text-neutral-200"
              >
                <?php echo e($product['data']['longDescription']['title']); ?>

              </h2>
              <p class="mt-3 text-pretty text-neutral-600 dark:text-neutral-400">
                <?php echo e($product['data']['longDescription']['subTitle']); ?>

              </p>
              <p class="mt-5">
                <?php if (isset($component)) { $__componentOriginalc195594364a586cb1e89cd7db6efa1e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc195594364a586cb1e89cd7db6efa1e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.primary-cta','data' => ['title' => $product['data']['longDescription']['btnTitle'],'url' => $product['data']['longDescription']['btnURL']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('buttons.primary-cta'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product['data']['longDescription']['btnTitle']),'url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($product['data']['longDescription']['btnURL'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc195594364a586cb1e89cd7db6efa1e4)): ?>
<?php $attributes = $__attributesOriginalc195594364a586cb1e89cd7db6efa1e4; ?>
<?php unset($__attributesOriginalc195594364a586cb1e89cd7db6efa1e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc195594364a586cb1e89cd7db6efa1e4)): ?>
<?php $component = $__componentOriginalc195594364a586cb1e89cd7db6efa1e4; ?>
<?php unset($__componentOriginalc195594364a586cb1e89cd7db6efa1e4); ?>
<?php endif; ?>
              </p>
            </div>

            <div class="space-y-6 lg:space-y-10">
              <?php $__currentLoopData = $product['data']['descriptionList']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="flex">
                  <div>
                    <h3 class="text-base font-bold text-neutral-800 sm:text-lg dark:text-neutral-200">
                      <?php echo e($list['title']); ?>

                    </h3>
                    <p class="mt-1 text-neutral-600 dark:text-neutral-400">
                      <?php echo e($list['subTitle']); ?>

                    </p>
                  </div>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
        </div>
      </div>

      <div id="tabs-with-card-2" class="hidden" role="tabpanel">
        <div class="mx-auto max-w-[85rem] px-4 pb-10 sm:px-6 lg:px-8 lg:pb-14">
          <div class="grid w-full grid-cols-1 gap-x-16 md:grid-cols-2">
            <div class="max-w-md space-y-6">
              <?php $__currentLoopData = $product['data']['specificationsLeft']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div>
                  <h3 class="block font-bold text-neutral-800 dark:text-neutral-200">
                    <?php echo e($spec['title']); ?>

                  </h3>
                  <p class="text-neutral-600 dark:text-neutral-400">
                    <?php echo e($spec['subTitle']); ?>

                  </p>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php if(!empty($product['data']['specificationsRight'])): ?>
              <div class="mt-6 max-w-md space-y-6 md:mt-0 md:ml-auto">
                <?php $__currentLoopData = $product['data']['specificationsRight']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $spec): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div>
                    <h3 class="block font-bold text-neutral-800 dark:text-neutral-200">
                      <?php echo e($spec['title']); ?>

                    </h3>
                    <p class="text-neutral-600 dark:text-neutral-400">
                      <?php echo e($spec['subTitle']); ?>

                    </p>
                  </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            <?php elseif(!empty($product['data']['tableData'])): ?>
              <div class="mt-6 space-y-6 md:mt-0 md:ml-auto">
                <div class="flex flex-col">
                  <div class="-m-1.5 overflow-x-auto">
                    <div class="inline-block min-w-full p-1.5 align-middle">
                      <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-neutral-300 dark:divide-neutral-700">
                          <thead>
                            <tr>
                              <?php $__currentLoopData = $product['data']['tableData'][0]['feature'] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $header): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <th
                                  scope="col"
                                  class="px-6 py-3 text-start text-xs font-medium text-neutral-500 uppercase dark:text-neutral-500"
                                >
                                  <?php echo e($header); ?>

                                </th>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tr>
                          </thead>
                          <tbody class="divide-y divide-neutral-300 dark:divide-neutral-700">
                            <?php $__currentLoopData = $product['data']['tableData']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php $__currentLoopData = $row['description']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rowData): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                  <?php $__currentLoopData = $rowData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cellValue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <td class="px-6 py-4 text-sm font-medium whitespace-nowrap text-neutral-600 dark:text-neutral-400">
                                      <?php echo e($cellValue); ?>

                                    </td>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>

      <div id="tabs-with-card-3" class="hidden" role="tabpanel">
        <div class="mx-auto mb-20 flex w-full md:mb-28 2xl:w-4/5">
          <div
            class="relative top-12 left-12 z-10 overflow-hidden rounded-xl shadow-lg md:top-16 md:left-12 md:-ml-12 lg:ml-0"
          >
            <?php if(!empty($product['data']['blueprints']['first'])): ?>
              <img
                src="<?php echo e(asset($product['data']['blueprints']['first'])); ?>"
                class="h-full w-full object-cover object-center"
                alt="Blueprint Illustration"
              />
            <?php endif; ?>
          </div>

          <div class="relative right-12 overflow-hidden rounded-xl shadow-xl">
            <?php if(!empty($product['data']['blueprints']['second'])): ?>
              <img
                src="<?php echo e(asset($product['data']['blueprints']['second'])); ?>"
                class="h-full w-full object-cover object-center"
                alt="Blueprint Illustration"
              />
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      if (typeof window.gsap !== 'undefined') {
        const gsap = window.gsap;
        gsap.set('#fadeText', { autoAlpha: 0, y: 50, willChange: 'transform, opacity' });
        gsap.set('#fadeInUp', { autoAlpha: 0, y: 50, willChange: 'transform, opacity' });
        gsap.set('#fadeInMoveRight', { autoAlpha: 0, x: 300, willChange: 'transform, opacity' });

        let timeline = gsap.timeline({ defaults: { overwrite: 'auto' } });
        timeline.to('#fadeText', { duration: 1.5, autoAlpha: 1, y: 0, delay: 0.5, ease: 'power2.out' });
        timeline.to('#fadeInUp', { duration: 1.5, autoAlpha: 1, y: 0, ease: 'power2.out' }, '-=1.2');
        timeline.to('#fadeInMoveRight', { duration: 1.5, autoAlpha: 1, x: 0, ease: 'power2.inOut' }, '-=1.4');
        timeline.to('#overlay', { duration: 1, autoAlpha: 0, delay: 0.2 });
      } else {
        const overlay = document.getElementById('overlay');
        if (overlay) overlay.style.display = 'none';
      }

      function setButtonInactive(btn, activeButton) {
        if (btn !== activeButton) {
          btn.classList.remove('active', 'bg-neutral-100', 'hover:border-transparent', 'dark:bg-white/[.05]');
          const tabId = btn.getAttribute('data-target');
          if (tabId) {
            const contentElement = document.querySelector(tabId);
            if (contentElement) contentElement.classList.add('hidden');
          }
          changeHeadingStyle(btn, ['text-neutral-800', 'dark:text-neutral-200'], ['text-orange-400', 'dark:text-orange-300']);
        }
      }

      function activateButton(button) {
        button.classList.add('active', 'bg-neutral-100', 'hover:border-transparent', 'dark:bg-white/[.05]');
        const tabId = button.getAttribute('data-target');
        if (tabId) {
          const contentElementToShow = document.querySelector(tabId);
          if (contentElementToShow) contentElementToShow.classList.remove('hidden');
        }
        changeHeadingStyle(button, ['text-orange-400', 'dark:text-orange-300'], ['text-neutral-800', 'dark:text-neutral-200']);
      }

      function changeHeadingStyle(button, addClasses, removeClasses) {
        let heading = button.querySelector('span');
        if (heading) {
          heading.classList.remove(...removeClasses);
          heading.classList.add(...addClasses);
        }
      }

      const tabButtons = document.querySelectorAll('[data-target]');
      if (tabButtons.length > 0) {
        changeHeadingStyle(tabButtons[0], ['text-orange-400', 'dark:text-orange-300'], []);
      }

      tabButtons.forEach(button => {
        button.addEventListener('click', () => {
          tabButtons.forEach(btn => setButtonInactive(btn, button));
          activateButton(button);
        });
      });
    });
  </script>
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
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Desktop\Colorspire\screwfast-1.0.0\resources\views/pages/products/show.blade.php ENDPATH**/ ?>