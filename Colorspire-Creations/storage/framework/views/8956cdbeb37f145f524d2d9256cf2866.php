<?php
$isFr = app()->getLocale() === 'fr';

$title = $isFr ? 'Contactez-nous' : 'Contact us';
$subTitle = $isFr
  ? "Vous avez des questions ou souhaitez discuter d'un projet ? Contactez-nous et laissons-nous élaborer la solution parfaite avec nos outils et services."
  : "Have questions or want to discuss a project? Reach out, and let's craft the perfect solution with our tools and services.";
$formTitle = $isFr ? 'Remplissez le formulaire ci-dessous' : 'Fill in the form below';
$formSubTitle = $isFr
  ? 'Nous vous répondrons dans un délai de 1 à 2 jours ouvrables.'
  : "We'll get back to you in 1-2 business days.";
$firstName = $isFr ? 'Prénom' : 'First Name';
$lastName = $isFr ? 'Nom' : 'Last Name';
$details = $isFr ? 'Détails' : 'Details';
$sendBtn = $isFr ? 'Envoyer un message' : 'Send Message';

$kbHeading = $isFr ? 'Base de connaissances' : 'Knowledgebase';
$kbContent = $isFr ? 'Parcourez tous nos articles de base de connaissances.' : 'Browse through all of our knowledgebase articles.';
$kbLink = $isFr ? 'Visiter les guides et tutoriels' : 'Visit guides & tutorials';

$faqHeading = 'FAQ';
$faqContent = $isFr ? 'Explorez notre FAQ pour des réponses rapides et claires aux questions courantes.' : 'Explore our FAQ for quick, clear answers to common queries.';
$faqLink = $isFr ? 'Visiter la FAQ' : 'Visit FAQ';

$officeHeading = $isFr ? 'Visitez notre bureau' : 'Visit our office';
$officeBrand = $isFr ? 'ScrewFast UK' : 'UK ScrewFast';

$emailHeading = $isFr ? 'Contactez-nous par e-mail' : 'Contact us by email';
$emailContent = $isFr ? 'Préférez-vous le texte écrit ? Envoyez-nous un e-mail à' : 'Prefer the written word? Drop us an email at';
?>

<section class="mx-auto max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14">
  <div class="mx-auto max-w-2xl lg:max-w-5xl">
    <div class="text-center">
      <h1
        class="text-2xl font-bold tracking-tight text-balance text-neutral-800 md:text-4xl md:leading-tight dark:text-neutral-200"
      >
        <?php echo e($title); ?>

      </h1>
      <p class="mt-1 text-pretty text-neutral-600 dark:text-neutral-400">
        <?php echo e($subTitle); ?>

      </p>
    </div>

    <div class="mt-12 grid items-center gap-6 lg:grid-cols-2 lg:gap-16">
      <div class="flex flex-col rounded-xl p-4 sm:p-6 lg:p-8">
        <h2
          class="mb-8 text-xl font-bold text-neutral-700 dark:text-neutral-300"
        >
          <?php echo e($formTitle); ?>

        </h2>
        <form>
          <div class="grid gap-4">
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
              <?php if (isset($component)) { $__componentOriginalbccf2fd688a3015189e9dc164e2e1097 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbccf2fd688a3015189e9dc164e2e1097 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input.text-input','data' => ['id' => 'hs-firstname-contacts','label' => $firstName,'name' => 'hs-firstname-contacts']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'hs-firstname-contacts','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($firstName),'name' => 'hs-firstname-contacts']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbccf2fd688a3015189e9dc164e2e1097)): ?>
<?php $attributes = $__attributesOriginalbccf2fd688a3015189e9dc164e2e1097; ?>
<?php unset($__attributesOriginalbccf2fd688a3015189e9dc164e2e1097); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbccf2fd688a3015189e9dc164e2e1097)): ?>
<?php $component = $__componentOriginalbccf2fd688a3015189e9dc164e2e1097; ?>
<?php unset($__componentOriginalbccf2fd688a3015189e9dc164e2e1097); ?>
<?php endif; ?>
              <?php if (isset($component)) { $__componentOriginalbccf2fd688a3015189e9dc164e2e1097 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbccf2fd688a3015189e9dc164e2e1097 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input.text-input','data' => ['id' => 'hs-lastname-contacts','label' => $lastName,'name' => 'hs-lastname-contacts']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'hs-lastname-contacts','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($lastName),'name' => 'hs-lastname-contacts']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbccf2fd688a3015189e9dc164e2e1097)): ?>
<?php $attributes = $__attributesOriginalbccf2fd688a3015189e9dc164e2e1097; ?>
<?php unset($__attributesOriginalbccf2fd688a3015189e9dc164e2e1097); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbccf2fd688a3015189e9dc164e2e1097)): ?>
<?php $component = $__componentOriginalbccf2fd688a3015189e9dc164e2e1097; ?>
<?php unset($__componentOriginalbccf2fd688a3015189e9dc164e2e1097); ?>
<?php endif; ?>
            </div>
            <?php if (isset($component)) { $__componentOriginalbd126382f02ed5fe06e469a94b4ac1ed = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbd126382f02ed5fe06e469a94b4ac1ed = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input.email-contact-input','data' => ['id' => 'hs-email-contacts']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input.email-contact-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'hs-email-contacts']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbd126382f02ed5fe06e469a94b4ac1ed)): ?>
<?php $attributes = $__attributesOriginalbd126382f02ed5fe06e469a94b4ac1ed; ?>
<?php unset($__attributesOriginalbd126382f02ed5fe06e469a94b4ac1ed); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbd126382f02ed5fe06e469a94b4ac1ed)): ?>
<?php $component = $__componentOriginalbd126382f02ed5fe06e469a94b4ac1ed; ?>
<?php unset($__componentOriginalbd126382f02ed5fe06e469a94b4ac1ed); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal44d623ec79b54d29d78e5c5370025e09 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal44d623ec79b54d29d78e5c5370025e09 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input.phone-input','data' => ['id' => 'hs-phone-number']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input.phone-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'hs-phone-number']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal44d623ec79b54d29d78e5c5370025e09)): ?>
<?php $attributes = $__attributesOriginal44d623ec79b54d29d78e5c5370025e09; ?>
<?php unset($__attributesOriginal44d623ec79b54d29d78e5c5370025e09); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal44d623ec79b54d29d78e5c5370025e09)): ?>
<?php $component = $__componentOriginal44d623ec79b54d29d78e5c5370025e09; ?>
<?php unset($__componentOriginal44d623ec79b54d29d78e5c5370025e09); ?>
<?php endif; ?>
            <?php if (isset($component)) { $__componentOriginal013459786e7757c294456db16da833f1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal013459786e7757c294456db16da833f1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input.text-area-input','data' => ['id' => 'hs-about-contacts','label' => $details,'name' => 'hs-about-contacts']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input.text-area-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'hs-about-contacts','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($details),'name' => 'hs-about-contacts']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal013459786e7757c294456db16da833f1)): ?>
<?php $attributes = $__attributesOriginal013459786e7757c294456db16da833f1; ?>
<?php unset($__attributesOriginal013459786e7757c294456db16da833f1); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal013459786e7757c294456db16da833f1)): ?>
<?php $component = $__componentOriginal013459786e7757c294456db16da833f1; ?>
<?php unset($__componentOriginal013459786e7757c294456db16da833f1); ?>
<?php endif; ?>
          </div>

          <div class="mt-4 grid">
            <?php if (isset($component)) { $__componentOriginal012ac87bb15101ca0cbd6cfbb4e84233 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal012ac87bb15101ca0cbd6cfbb4e84233 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.buttons.auth-btn','data' => ['title' => $sendBtn]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('buttons.auth-btn'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($sendBtn)]); ?>
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

          <div class="mt-3 text-center">
            <p class="text-sm text-neutral-600 dark:text-neutral-400">
              <?php echo e($formSubTitle); ?>

            </p>
          </div>
        </form>
      </div>

      <div class="divide-y divide-neutral-300 dark:divide-neutral-700">
        <?php if (isset($component)) { $__componentOriginalc207c4529e6d57623109e95156d6c66b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc207c4529e6d57623109e95156d6c66b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.blocks.contact-icon-block','data' => ['heading' => $kbHeading,'content' => $kbContent,'isLinkVisible' => true,'linkTitle' => $kbLink,'linkURL' => '#','isArrowVisible' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('blocks.contact-icon-block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($kbHeading),'content' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($kbContent),'isLinkVisible' => true,'linkTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($kbLink),'linkURL' => '#','isArrowVisible' => true]); ?><?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'question']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'question']); ?>
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
<?php if (isset($__attributesOriginalc207c4529e6d57623109e95156d6c66b)): ?>
<?php $attributes = $__attributesOriginalc207c4529e6d57623109e95156d6c66b; ?>
<?php unset($__attributesOriginalc207c4529e6d57623109e95156d6c66b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc207c4529e6d57623109e95156d6c66b)): ?>
<?php $component = $__componentOriginalc207c4529e6d57623109e95156d6c66b; ?>
<?php unset($__componentOriginalc207c4529e6d57623109e95156d6c66b); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalc207c4529e6d57623109e95156d6c66b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc207c4529e6d57623109e95156d6c66b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.blocks.contact-icon-block','data' => ['heading' => $faqHeading,'content' => $faqContent,'isLinkVisible' => true,'linkTitle' => $faqLink,'linkURL' => '#','isArrowVisible' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('blocks.contact-icon-block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($faqHeading),'content' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($faqContent),'isLinkVisible' => true,'linkTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($faqLink),'linkURL' => '#','isArrowVisible' => true]); ?><?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'chatBubble']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'chatBubble']); ?>
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
<?php if (isset($__attributesOriginalc207c4529e6d57623109e95156d6c66b)): ?>
<?php $attributes = $__attributesOriginalc207c4529e6d57623109e95156d6c66b; ?>
<?php unset($__attributesOriginalc207c4529e6d57623109e95156d6c66b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc207c4529e6d57623109e95156d6c66b)): ?>
<?php $component = $__componentOriginalc207c4529e6d57623109e95156d6c66b; ?>
<?php unset($__componentOriginalc207c4529e6d57623109e95156d6c66b); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalc207c4529e6d57623109e95156d6c66b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc207c4529e6d57623109e95156d6c66b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.blocks.contact-icon-block','data' => ['heading' => $officeHeading,'content' => $officeBrand,'isAddressVisible' => true,'addressContent' => '72 Union Terrace, E10 4PE London']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('blocks.contact-icon-block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($officeHeading),'content' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($officeBrand),'isAddressVisible' => true,'addressContent' => '72 Union Terrace, E10 4PE London']); ?><?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'mapPin']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'mapPin']); ?>
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
<?php if (isset($__attributesOriginalc207c4529e6d57623109e95156d6c66b)): ?>
<?php $attributes = $__attributesOriginalc207c4529e6d57623109e95156d6c66b; ?>
<?php unset($__attributesOriginalc207c4529e6d57623109e95156d6c66b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc207c4529e6d57623109e95156d6c66b)): ?>
<?php $component = $__componentOriginalc207c4529e6d57623109e95156d6c66b; ?>
<?php unset($__componentOriginalc207c4529e6d57623109e95156d6c66b); ?>
<?php endif; ?>

        <?php if (isset($component)) { $__componentOriginalc207c4529e6d57623109e95156d6c66b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc207c4529e6d57623109e95156d6c66b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.blocks.contact-icon-block','data' => ['heading' => $emailHeading,'content' => $emailContent,'isLinkVisible' => true,'linkTitle' => 'support@screwfast.uk','linkURL' => '#']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('blocks.contact-icon-block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($emailHeading),'content' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($emailContent),'isLinkVisible' => true,'linkTitle' => 'support@screwfast.uk','linkURL' => '#']); ?><?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'envelopeOpen']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'envelopeOpen']); ?>
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
<?php if (isset($__attributesOriginalc207c4529e6d57623109e95156d6c66b)): ?>
<?php $attributes = $__attributesOriginalc207c4529e6d57623109e95156d6c66b; ?>
<?php unset($__attributesOriginalc207c4529e6d57623109e95156d6c66b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc207c4529e6d57623109e95156d6c66b)): ?>
<?php $component = $__componentOriginalc207c4529e6d57623109e95156d6c66b; ?>
<?php unset($__componentOriginalc207c4529e6d57623109e95156d6c66b); ?>
<?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Desktop\Colorspire\screwfast-1.0.0\resources\views/components/sections/misc/contact-section.blade.php ENDPATH**/ ?>