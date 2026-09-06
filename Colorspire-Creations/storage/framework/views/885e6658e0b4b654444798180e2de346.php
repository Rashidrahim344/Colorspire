<?php
$metaDescription = $post['data']['contents'][0] ?? "Read {$post['data']['title']} on ScrewFast's blog";
$ogTitle = "{$post['data']['title']} | Blog | {$site['title']}";
$pageTitle = "{$post['data']['title']} | {$site['title']}";
$pubDate = \Carbon\Carbon::parse($post['data']['pubDate'])->format('M d, Y');
$cardImg = str_starts_with($post['data']['cardImage'], 'http')
    ? $post['data']['cardImage']
    : asset($post['data']['cardImage']);
$isFr = $locale === 'fr';
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
  <section class="mx-auto max-w-3xl px-4 pt-6 pb-12 sm:px-6 lg:px-8 lg:pt-10">
    <div class="max-w-2xl">
      <div class="mb-6 flex items-center justify-between">
        <div class="flex w-full gap-x-5 sm:items-center sm:gap-x-3">
          <?php if (isset($component)) { $__componentOriginalb3c130db0ab308b711f6ea307c99f5d1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb3c130db0ab308b711f6ea307c99f5d1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.avatars.avatar-blog-large','data' => ['blogEntry' => $post]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('avatars.avatar-blog-large'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['blogEntry' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb3c130db0ab308b711f6ea307c99f5d1)): ?>
<?php $attributes = $__attributesOriginalb3c130db0ab308b711f6ea307c99f5d1; ?>
<?php unset($__attributesOriginalb3c130db0ab308b711f6ea307c99f5d1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb3c130db0ab308b711f6ea307c99f5d1)): ?>
<?php $component = $__componentOriginalb3c130db0ab308b711f6ea307c99f5d1; ?>
<?php unset($__componentOriginalb3c130db0ab308b711f6ea307c99f5d1); ?>
<?php endif; ?>
          <div class="grow">
            <div class="flex items-center justify-between gap-x-2">
              <div>
                <span class="font-bold text-neutral-700 dark:text-neutral-300">
                  <?php echo e($post['data']['author']); ?>

                </span>
                <ul class="text-xs text-neutral-500">
                  <li
                    class="relative inline-block pe-6 before:absolute before:end-2 before:top-1/2 before:size-1 before:-translate-y-1/2 before:rounded-full before:bg-neutral-300 last:pe-0 last-of-type:before:hidden dark:text-neutral-400 dark:before:bg-neutral-600"
                  >
                    <?php echo e($pubDate); ?>

                  </li>
                  <li
                    class="relative inline-block pe-6 before:absolute before:end-2 before:top-1/2 before:size-1 before:-translate-y-1/2 before:rounded-full before:bg-neutral-300 last:pe-0 last-of-type:before:hidden dark:text-neutral-400 dark:before:bg-neutral-600"
                  >
                    <?php echo e($post['data']['readTime']); ?> <?php echo e($isFr ? 'min de lecture' : 'min read'); ?>

                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

      <h2
        class="mb-3 text-2xl font-bold text-neutral-800 md:text-3xl dark:text-neutral-200"
      >
        <?php echo e($post['data']['title']); ?>

      </h2>

      <div class="mb-5 space-y-5 md:mb-8 md:space-y-8">
        <?php $__currentLoopData = $post['data']['contents']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($index === 1): ?>
            <p class="text-lg text-pretty text-neutral-700 dark:text-neutral-300">
              <?php echo e($content); ?>

            </p>
            <img
              class="w-full rounded-xl object-cover"
              src="<?php echo e($cardImg); ?>"
              alt="<?php echo e($post['data']['cardImageAlt']); ?>"
              draggable="false"
            />
          <?php else: ?>
            <p class="text-lg text-pretty text-neutral-700 dark:text-neutral-300">
              <?php echo e($content); ?>

            </p>
          <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>

      <div
        class="mx-auto grid max-w-(--breakpoint-lg) gap-y-5 sm:flex sm:items-center sm:justify-between sm:gap-y-0"
      >
        <div
          class="flex flex-wrap gap-x-2 gap-y-1 sm:flex-nowrap sm:items-center sm:gap-y-0"
        >
          <?php $__currentLoopData = $post['data']['tags'] ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <span class="inline-flex items-center gap-x-1.5 rounded-lg bg-neutral-400/30 px-3 py-1.5 text-xs font-medium text-neutral-700 outline-hidden focus:outline-hidden focus-visible:ring-3 focus-visible:outline-hidden dark:bg-neutral-700/60 dark:text-neutral-300">
              <?php echo e(ucfirst($tag)); ?>

            </span>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

        <div class="flex items-center justify-end gap-x-1.5">
          <?php if (isset($component)) { $__componentOriginalbd68dc76b42e9cec3151878b00a0cf58 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbd68dc76b42e9cec3151878b00a0cf58 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.bookmark','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('buttons.bookmark'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbd68dc76b42e9cec3151878b00a0cf58)): ?>
<?php $attributes = $__attributesOriginalbd68dc76b42e9cec3151878b00a0cf58; ?>
<?php unset($__attributesOriginalbd68dc76b42e9cec3151878b00a0cf58); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd68dc76b42e9cec3151878b00a0cf58)): ?>
<?php $component = $__componentOriginalbd68dc76b42e9cec3151878b00a0cf58; ?>
<?php unset($__componentOriginalbd68dc76b42e9cec3151878b00a0cf58); ?>
<?php endif; ?>
          <div
            class="mx-3 block h-4 border-e border-neutral-400 dark:border-neutral-500"
          >
          </div>
          <div class="inline-flex">
            <?php if (isset($component)) { $__componentOriginal1b807f9253bde2b286bc3b8a885643fa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1b807f9253bde2b286bc3b8a885643fa = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.social-share','data' => ['pageTitle' => $post['data']['title']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('buttons.social-share'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['pageTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post['data']['title'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1b807f9253bde2b286bc3b8a885643fa)): ?>
<?php $attributes = $__attributesOriginal1b807f9253bde2b286bc3b8a885643fa; ?>
<?php unset($__attributesOriginal1b807f9253bde2b286bc3b8a885643fa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1b807f9253bde2b286bc3b8a885643fa)): ?>
<?php $component = $__componentOriginal1b807f9253bde2b286bc3b8a885643fa; ?>
<?php unset($__componentOriginal1b807f9253bde2b286bc3b8a885643fa); ?>
<?php endif; ?>
          </div>
        </div>
      </div>
    </div>

    <?php if (isset($component)) { $__componentOriginal751c29da597e7676c2365c7234651c5a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal751c29da597e7676c2365c7234651c5a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.feedback.post-feedback','data' => ['title' => $isFr ? 'Cet article vous a-t-il été utile ?' : 'Was this post helpful?','firstChoice' => $isFr ? 'Oui' : 'Yes','secondChoice' => $isFr ? 'Non' : 'No']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('feedback.post-feedback'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isFr ? 'Cet article vous a-t-il été utile ?' : 'Was this post helpful?'),'firstChoice' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isFr ? 'Oui' : 'Yes'),'secondChoice' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($isFr ? 'Non' : 'No')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal751c29da597e7676c2365c7234651c5a)): ?>
<?php $attributes = $__attributesOriginal751c29da597e7676c2365c7234651c5a; ?>
<?php unset($__attributesOriginal751c29da597e7676c2365c7234651c5a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal751c29da597e7676c2365c7234651c5a)): ?>
<?php $component = $__componentOriginal751c29da597e7676c2365c7234651c5a; ?>
<?php unset($__componentOriginal751c29da597e7676c2365c7234651c5a); ?>
<?php endif; ?>
  </section>

  <?php if(!empty($relatedPosts)): ?>
    <section class="mx-auto max-w-3xl px-4 py-10 sm:px-6 lg:px-8 lg:py-14">
      <div class="mb-10 max-w-2xl">
        <h2
          class="text-2xl font-bold text-balance text-neutral-800 md:text-4xl md:leading-tight dark:text-neutral-200"
        >
          <?php echo e($isFr ? 'Articles connexes' : 'Related articles'); ?>

        </h2>
      </div>

      <div class="grid grid-cols-2 gap-6">
        <?php $__currentLoopData = $relatedPosts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $entry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if (isset($component)) { $__componentOriginal8823b372ec66fa74a1d8fcea4e9ef851 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8823b372ec66fa74a1d8fcea4e9ef851 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.cards.card-related','data' => ['blogEntry' => $entry,'recentBlogLocale' => $locale]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('cards.card-related'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['blogEntry' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($entry),'recentBlogLocale' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($locale)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8823b372ec66fa74a1d8fcea4e9ef851)): ?>
<?php $attributes = $__attributesOriginal8823b372ec66fa74a1d8fcea4e9ef851; ?>
<?php unset($__attributesOriginal8823b372ec66fa74a1d8fcea4e9ef851); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8823b372ec66fa74a1d8fcea4e9ef851)): ?>
<?php $component = $__componentOriginal8823b372ec66fa74a1d8fcea4e9ef851; ?>
<?php unset($__componentOriginal8823b372ec66fa74a1d8fcea4e9ef851); ?>
<?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </section>
  <?php endif; ?>
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
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Documents\GitHub\Colorspire\Colorspire-Creations\resources\views/pages/blog/show.blade.php ENDPATH**/ ?>