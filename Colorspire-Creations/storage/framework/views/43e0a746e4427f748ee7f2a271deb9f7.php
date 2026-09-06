<?php
$isFr = ($locale ?? app()->getLocale()) === 'fr';
$title = $isFr ? "Démarrer un projet | Contact " . ($site['title'] ?? 'ColorSpire Creations') : "Start a Project | Contact " . ($site['title'] ?? 'ColorSpire Creations');
$description = $isFr
  ? "Dites-nous ce dont vous avez besoin, ce que vous essayez d'accomplir et quand vous en avez besoin. Nous utiliserons ces informations pour comprendre votre projet et recommander la meilleure suite."
  : "Tell us what you need, what you are trying to achieve and when you need it. We'll use that information to understand the project and recommend the next step.";
$ogTitle = $title;
?>

<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => ['title' => $title,'metaDescription' => $description,'ogTitle' => $ogTitle]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($title),'metaDescription' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($description),'ogTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ogTitle)]); ?>
  <?php if (isset($component)) { $__componentOriginaleb498deeb378bd09cc1d93d5a2e9a93c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaleb498deeb378bd09cc1d93d5a2e9a93c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sections.misc.contact-section','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('sections.misc.contact-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaleb498deeb378bd09cc1d93d5a2e9a93c)): ?>
<?php $attributes = $__attributesOriginaleb498deeb378bd09cc1d93d5a2e9a93c; ?>
<?php unset($__attributesOriginaleb498deeb378bd09cc1d93d5a2e9a93c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaleb498deeb378bd09cc1d93d5a2e9a93c)): ?>
<?php $component = $__componentOriginaleb498deeb378bd09cc1d93d5a2e9a93c; ?>
<?php unset($__componentOriginaleb498deeb378bd09cc1d93d5a2e9a93c); ?>
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
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Documents\GitHub\Colorspire\Colorspire-Creations\resources\views/pages/contact.blade.php ENDPATH**/ ?>