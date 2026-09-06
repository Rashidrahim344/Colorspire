<?php
$metaDescription = $locale === 'fr'
  ? "Unissant l'expertise à votre vision, ScrewFast fournit un service exceptionnel et des solutions complètes dans le secteur du matériel et de la construction, de la consultation à l'achèvement du projet."
  : 'Uniting expertise with your vision, ScrewFast provides exceptional service and comprehensive solutions in the hardware and construction industry, from consultation to project completion.';
$ogTitle = $locale === 'fr'
  ? "Services de Consultation d'Experts | ScrewFast"
  : 'Expert Consultation Services | ScrewFast';
$title = "Services | {$site['title']}";
?>

<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => ['title' => $title,'customDescription' => $metaDescription,'customOgTitle' => $ogTitle,'lang' => $locale]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($title),'customDescription' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($metaDescription),'customOgTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ogTitle),'lang' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($locale)]); ?>
  <?php if (isset($component)) { $__componentOriginal98b77bcab49f773ce2b759d0606ec0cd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal98b77bcab49f773ce2b759d0606ec0cd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.blocks.main-section','data' => ['title' => $mainSection['title'],'subTitle' => $mainSection['subTitle'],'btnExists' => true,'btnTitle' => $mainSection['btnTitle'],'btnURL' => $mainSection['btnURL']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('blocks.main-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($mainSection['title']),'subTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($mainSection['subTitle']),'btnExists' => true,'btnTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($mainSection['btnTitle']),'btnURL' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($mainSection['btnURL'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal98b77bcab49f773ce2b759d0606ec0cd)): ?>
<?php $attributes = $__attributesOriginal98b77bcab49f773ce2b759d0606ec0cd; ?>
<?php unset($__attributesOriginal98b77bcab49f773ce2b759d0606ec0cd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal98b77bcab49f773ce2b759d0606ec0cd)): ?>
<?php $component = $__componentOriginal98b77bcab49f773ce2b759d0606ec0cd; ?>
<?php unset($__componentOriginal98b77bcab49f773ce2b759d0606ec0cd); ?>
<?php endif; ?>

  <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php if($article['isRightSection']): ?>
      <?php if (isset($component)) { $__componentOriginalc74ffc641db1bb5075884d4335e4ba1e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc74ffc641db1bb5075884d4335e4ba1e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.blocks.right-section','data' => ['title' => $article['title'],'subTitle' => $article['subTitle'],'single' => $article['single'] ?? false,'imgOne' => $article['imgOne'],'imgOneAlt' => $article['imgOneAlt'],'imgTwo' => $article['imgTwo'] ?? null,'imgTwoAlt' => $article['imgTwoAlt'] ?? '','btnExists' => $article['btnExists'] ?? false,'btnTitle' => $article['btnTitle'] ?? '','btnURL' => $article['btnURL'] ?? '#']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('blocks.right-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article['title']),'subTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article['subTitle']),'single' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article['single'] ?? false),'imgOne' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article['imgOne']),'imgOneAlt' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article['imgOneAlt']),'imgTwo' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article['imgTwo'] ?? null),'imgTwoAlt' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article['imgTwoAlt'] ?? ''),'btnExists' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article['btnExists'] ?? false),'btnTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article['btnTitle'] ?? ''),'btnURL' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article['btnURL'] ?? '#')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc74ffc641db1bb5075884d4335e4ba1e)): ?>
<?php $attributes = $__attributesOriginalc74ffc641db1bb5075884d4335e4ba1e; ?>
<?php unset($__attributesOriginalc74ffc641db1bb5075884d4335e4ba1e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc74ffc641db1bb5075884d4335e4ba1e)): ?>
<?php $component = $__componentOriginalc74ffc641db1bb5075884d4335e4ba1e; ?>
<?php unset($__componentOriginalc74ffc641db1bb5075884d4335e4ba1e); ?>
<?php endif; ?>
    <?php else: ?>
      <?php if (isset($component)) { $__componentOriginal9f46fd2bba4da4c1de71ad4158ab94b1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9f46fd2bba4da4c1de71ad4158ab94b1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.blocks.left-section','data' => ['title' => $article['title'],'subTitle' => $article['subTitle'],'img' => $article['img'],'imgAlt' => $article['imgAlt'],'btnExists' => $article['btnExists'] ?? false,'btnTitle' => $article['btnTitle'] ?? '','btnURL' => $article['btnURL'] ?? '#']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('blocks.left-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article['title']),'subTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article['subTitle']),'img' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article['img']),'imgAlt' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article['imgAlt']),'btnExists' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article['btnExists'] ?? false),'btnTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article['btnTitle'] ?? ''),'btnURL' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($article['btnURL'] ?? '#')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9f46fd2bba4da4c1de71ad4158ab94b1)): ?>
<?php $attributes = $__attributesOriginal9f46fd2bba4da4c1de71ad4158ab94b1; ?>
<?php unset($__attributesOriginal9f46fd2bba4da4c1de71ad4158ab94b1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9f46fd2bba4da4c1de71ad4158ab94b1)): ?>
<?php $component = $__componentOriginal9f46fd2bba4da4c1de71ad4158ab94b1; ?>
<?php unset($__componentOriginal9f46fd2bba4da4c1de71ad4158ab94b1); ?>
<?php endif; ?>
    <?php endif; ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <?php if (isset($component)) { $__componentOriginalad1ecdc92a9d875d3cb33618a844ef23 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalad1ecdc92a9d875d3cb33618a844ef23 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.features.features-stats','data' => ['title' => $statsSection['title'],'subTitle' => $statsSection['subTitle'],'mainStatTitle' => $statsSection['mainStatTitle'],'mainStatSubTitle' => $statsSection['mainStatSubTitle'],'stats' => $statsSection['stats']]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.features.features-stats'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($statsSection['title']),'subTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($statsSection['subTitle']),'mainStatTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($statsSection['mainStatTitle']),'mainStatSubTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($statsSection['mainStatSubTitle']),'stats' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($statsSection['stats'])]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalad1ecdc92a9d875d3cb33618a844ef23)): ?>
<?php $attributes = $__attributesOriginalad1ecdc92a9d875d3cb33618a844ef23; ?>
<?php unset($__attributesOriginalad1ecdc92a9d875d3cb33618a844ef23); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalad1ecdc92a9d875d3cb33618a844ef23)): ?>
<?php $component = $__componentOriginalad1ecdc92a9d875d3cb33618a844ef23; ?>
<?php unset($__componentOriginalad1ecdc92a9d875d3cb33618a844ef23); ?>
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
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Desktop\Colorspire\screwfast-1.0.0\resources\views/pages/services.blade.php ENDPATH**/ ?>