<?php
$isFr = app()->getLocale() === 'fr';

$title = $isFr ? 'Parlons de ce que vous construisez' : "Let's Talk About What You're Building";
$subTitle = $isFr
  ? "Dites-nous ce dont vous avez besoin, ce que vous essayez d'accomplir et quand vous en avez besoin. Nous utiliserons ces informations pour comprendre le projet et recommander la prochaine étape."
  : "Tell us what you need, what you are trying to achieve and when you need it. We'll use that information to understand the project and recommend the next step.";
$formTitle = $isFr ? 'Formulaire de demande de projet' : 'Project Inquiry Form';
$formSubTitle = $isFr
  ? "Merci de nous contacter. Votre demande de projet a été reçue. Nous examinerons les détails et vous répondrons via les coordonnées fournies."
  : "Thanks for reaching out. Your project inquiry has been received. We'll review the details and get back to you through the contact information you provided.";
$fullName = $isFr ? 'Nom complet' : 'Full Name';
$organization = $isFr ? 'Organisation / Entreprise' : 'Organization (Optional)';
$details = $isFr ? 'Brief du projet (objectifs, livrables, délais)' : 'Project Brief (goals, deliverables, timeline)';
$sendBtn = $isFr ? 'Envoyer la demande de projet' : 'Send Project Inquiry';

$phoneHeading = $isFr ? 'Téléphone & WhatsApp' : 'Phone & WhatsApp';
$phoneContent = $isFr ? 'Contactez-nous directement pour toute demande ou échange rapide :' : 'Reach out directly for inquiries or quick discussions:';
$whatsappLabel = 'WhatsApp';
$whatsappNumber = '+260 763 505 811';
$whatsappUrl = 'https://wa.me/260763505811';
$callsLabel = $isFr ? 'Appels' : 'Calls';
$callNumber = '+260 777 371 736';
$callUrl = 'tel:+260777371736';

$emailHeading = $isFr ? 'Contactez-nous par e-mail' : 'Contact Us by Email';
$emailContent = $isFr ? 'Vous préférez échanger par e-mail direct ? Écrivez-nous à' : 'Prefer direct written communication? Drop us an email at';
$emailAddress = 'colorspirecreations@gmail.com';

$serviceLabel = $isFr ? 'Service souhaité' : 'Service Needed';
$servicePlaceholder = $isFr ? 'Sélectionnez un service...' : 'Select a Service...';
$servicesList = $isFr ? [
    'Design graphique' => 'Design graphique',
    'Branding & Identité' => 'Branding & Identité de marque',
    'Site Web & Développement' => 'Conception & Dév. Web',
    'Création de contenu' => 'Création de contenu',
    'Gestion des réseaux sociaux' => 'Gestion des réseaux sociaux',
    'Marketing digital' => 'Marketing digital',
    'Photographie & Vidéo' => 'Photographie & Vidéo',
    'Autre / Projet complet' => 'Autre / Projet complet',
] : [
    'Graphic Design' => 'Graphic Design',
    'Branding & Identity' => 'Branding & Identity',
    'Website Design & Dev' => 'Website Design & Development',
    'Content Creation' => 'Content Creation',
    'Social Media Management' => 'Social Media Management',
    'Digital Marketing' => 'Digital Marketing',
    'Photography & Video' => 'Photography & Video',
    'Other / Comprehensive' => 'Other / Comprehensive Project',
];

$budgetLabel = $isFr ? 'Budget estimé' : 'Estimated Budget';
$budgetPlaceholder = $isFr ? 'Fourchette budgétaire...' : 'Select Budget Range...';
$budgetList = $isFr ? [
    'Moins de $250' => 'Moins de K250',
    '$250 - $500' => 'K250 – K500',
    '$500 - $1,000' => 'K500 – K1 000',
    '$1,000 - $2,500' => 'K1,000 – K2,500',
    '$2,500+' => 'Plus de K2,500',
    'Flexible' => 'Flexible / À discuter',
] : [
    'Under $250' => 'Under K250',
    '$250 - $500' => 'K250 – K500',
    '$500 - $1,000' => 'K500 – K1 000',
    '$1,000 - $2,500' => 'K1,000 – K2,500',
    '$2,500+' => 'K2,500+',
    'Flexible' => 'Flexible / Discuss Later',
];

$hoursHeading = $isFr ? 'Heures d\'ouverture' : 'Business Hours';
$hoursContent = $isFr ? 'Nous sommes disponibles pour vous accompagner aux horaires suivants :' : 'We are available to assist you during the following hours:';
$weekdayLabel = $isFr ? 'Lundi - Vendredi' : 'Monday - Friday';
$weekdayHours = '7:00 AM - 7:30 PM';
$saturdayLabel = $isFr ? 'Samedi' : 'Saturday';
$saturdayHours = '8:00 AM - 1:00 PM';

$officeHeading = $isFr ? 'Notre Studio' : 'Our Studio';
$officeBrand = 'ColorSpire Creations';
$officeAddress = $isFr ? 'Livingstone, Zambie — Clients locaux, régionaux et internationaux' : 'Mosi - Oa - Tunya Road, Livingstone 10101';
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
        <form id="project-inquiry-form">
          <div class="grid gap-4">
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
              <?php if (isset($component)) { $__componentOriginalbccf2fd688a3015189e9dc164e2e1097 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbccf2fd688a3015189e9dc164e2e1097 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input.text-input','data' => ['id' => 'hs-firstname-contacts','label' => $fullName,'name' => 'hs-firstname-contacts','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'hs-firstname-contacts','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($fullName),'name' => 'hs-firstname-contacts','required' => true]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input.text-input','data' => ['id' => 'hs-lastname-contacts','label' => $organization,'name' => 'hs-lastname-contacts']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input.text-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'hs-lastname-contacts','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($organization),'name' => 'hs-lastname-contacts']); ?>
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
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
              <?php if (isset($component)) { $__componentOriginal16625b4c119860cc10bdc2e4c9c2b7a2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal16625b4c119860cc10bdc2e4c9c2b7a2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input.select-input','data' => ['id' => 'hs-service-contacts','name' => 'hs-service-contacts','label' => $serviceLabel,'placeholder' => $servicePlaceholder,'options' => $servicesList]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input.select-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'hs-service-contacts','name' => 'hs-service-contacts','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($serviceLabel),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($servicePlaceholder),'options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($servicesList)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal16625b4c119860cc10bdc2e4c9c2b7a2)): ?>
<?php $attributes = $__attributesOriginal16625b4c119860cc10bdc2e4c9c2b7a2; ?>
<?php unset($__attributesOriginal16625b4c119860cc10bdc2e4c9c2b7a2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16625b4c119860cc10bdc2e4c9c2b7a2)): ?>
<?php $component = $__componentOriginal16625b4c119860cc10bdc2e4c9c2b7a2; ?>
<?php unset($__componentOriginal16625b4c119860cc10bdc2e4c9c2b7a2); ?>
<?php endif; ?>
              <?php if (isset($component)) { $__componentOriginal16625b4c119860cc10bdc2e4c9c2b7a2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal16625b4c119860cc10bdc2e4c9c2b7a2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input.select-input','data' => ['id' => 'hs-budget-contacts','name' => 'hs-budget-contacts','label' => $budgetLabel,'placeholder' => $budgetPlaceholder,'options' => $budgetList]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input.select-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'hs-budget-contacts','name' => 'hs-budget-contacts','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($budgetLabel),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($budgetPlaceholder),'options' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($budgetList)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal16625b4c119860cc10bdc2e4c9c2b7a2)): ?>
<?php $attributes = $__attributesOriginal16625b4c119860cc10bdc2e4c9c2b7a2; ?>
<?php unset($__attributesOriginal16625b4c119860cc10bdc2e4c9c2b7a2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal16625b4c119860cc10bdc2e4c9c2b7a2)): ?>
<?php $component = $__componentOriginal16625b4c119860cc10bdc2e4c9c2b7a2; ?>
<?php unset($__componentOriginal16625b4c119860cc10bdc2e4c9c2b7a2); ?>
<?php endif; ?>
            </div>
            <?php if (isset($component)) { $__componentOriginal013459786e7757c294456db16da833f1 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal013459786e7757c294456db16da833f1 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.forms.input.text-area-input','data' => ['id' => 'hs-about-contacts','label' => $details,'name' => 'hs-about-contacts','required' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('forms.input.text-area-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['id' => 'hs-about-contacts','label' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($details),'name' => 'hs-about-contacts','required' => true]); ?>
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
        </form>
      </div>

      <div class="divide-y divide-neutral-300 dark:divide-neutral-700">
        <?php if (isset($component)) { $__componentOriginalc207c4529e6d57623109e95156d6c66b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc207c4529e6d57623109e95156d6c66b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.blocks.contact-icon-block','data' => ['heading' => $phoneHeading,'content' => $phoneContent]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('blocks.contact-icon-block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($phoneHeading),'content' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($phoneContent)]); ?>
          <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'phone']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'phone']); ?>
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
           <?php $__env->slot('extra', null, []); ?> 
            <div class="mt-2 space-y-1.5 text-sm">
              <div class="flex items-center gap-x-2">
                <span class="font-medium text-neutral-700 dark:text-neutral-300"><?php echo e($whatsappLabel); ?>:</span>
                <a
                  class="group inline-flex items-center gap-x-1.5 font-medium text-zinc-600 transition duration-300 hover:text-zinc-800 dark:text-zinc-400 dark:hover:text-zinc-200"
                  href="<?php echo e($whatsappUrl); ?>"
                  target="_blank"
                  rel="noopener noreferrer"
                >
                  <span><?php echo e($whatsappNumber); ?></span>
                  <svg class="h-3.5 w-3.5 shrink-0 transition ease-in-out group-hover:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                  </svg>
                </a>
              </div>
              <div class="flex items-center gap-x-2">
                <span class="font-medium text-neutral-700 dark:text-neutral-300"><?php echo e($callsLabel); ?>:</span>
                <a
                  class="group inline-flex items-center gap-x-1.5 font-medium text-zinc-600 transition duration-300 hover:text-zinc-800 dark:text-zinc-400 dark:hover:text-zinc-200"
                  href="<?php echo e($callUrl); ?>"
                >
                  <span><?php echo e($callNumber); ?></span>
                  <svg class="h-3.5 w-3.5 shrink-0 transition ease-in-out group-hover:translate-x-0.5" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                  </svg>
                </a>
              </div>
            </div>
           <?php $__env->endSlot(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.blocks.contact-icon-block','data' => ['heading' => $emailHeading,'content' => $emailContent,'isLinkVisible' => true,'linkTitle' => $emailAddress,'linkURL' => 'mailto:' . $emailAddress]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('blocks.contact-icon-block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($emailHeading),'content' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($emailContent),'isLinkVisible' => true,'linkTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($emailAddress),'linkURL' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('mailto:' . $emailAddress)]); ?><?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
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

        <?php if (isset($component)) { $__componentOriginalc207c4529e6d57623109e95156d6c66b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc207c4529e6d57623109e95156d6c66b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.blocks.contact-icon-block','data' => ['heading' => $hoursHeading,'content' => $hoursContent]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('blocks.contact-icon-block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($hoursHeading),'content' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($hoursContent)]); ?>
          <?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalce262628e3a8d44dc38fd1f3965181bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.icon','data' => ['name' => 'clock']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['name' => 'clock']); ?>
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
           <?php $__env->slot('extra', null, []); ?> 
            <div class="mt-2 space-y-1.5 text-sm">
              <div class="flex items-center gap-x-2">
                <span class="font-medium text-neutral-700 dark:text-neutral-300"><?php echo e($weekdayLabel); ?>:</span>
                <span class="text-neutral-600 dark:text-neutral-400"><?php echo e($weekdayHours); ?></span>
              </div>
              <div class="flex items-center gap-x-2">
                <span class="font-medium text-neutral-700 dark:text-neutral-300"><?php echo e($saturdayLabel); ?>:</span>
                <span class="text-neutral-600 dark:text-neutral-400"><?php echo e($saturdayHours); ?></span>
              </div>
            </div>
           <?php $__env->endSlot(); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.blocks.contact-icon-block','data' => ['heading' => $officeHeading,'content' => $officeBrand,'isAddressVisible' => true,'addressContent' => $officeAddress]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('blocks.contact-icon-block'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['heading' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($officeHeading),'content' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($officeBrand),'isAddressVisible' => true,'addressContent' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($officeAddress)]); ?><?php if (isset($component)) { $__componentOriginalce262628e3a8d44dc38fd1f3965181bc = $component; } ?>
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
      </div>
    </div>
  </div>
</section>

<!-- Submission Success Pop-up Modal -->
<div
  id="inquiry-success-modal"
  class="fixed inset-0 z-50 flex items-center justify-center p-4 transition-all duration-300 opacity-0 pointer-events-none"
  role="dialog"
  aria-modal="true"
  aria-labelledby="success-modal-text"
>
  <!-- 20% Blurred Background Backdrop -->
  <div
    id="inquiry-modal-backdrop"
    class="fixed inset-0 bg-neutral-900/20 backdrop-blur-[4px] transition-opacity duration-300"
  ></div>

  <!-- Pop-up Message Card -->
  <div
    id="inquiry-modal-card"
    class="relative w-full max-w-md transform rounded-2xl bg-white p-6 sm:p-8 text-center shadow-2xl transition-all duration-300 scale-95 dark:bg-neutral-800 border border-neutral-200 dark:border-neutral-700"
  >
    <!-- Cancel / Close Button in Top-Right Corner -->
    <button
      type="button"
      id="inquiry-modal-close-btn"
      class="absolute top-3.5 right-3.5 inline-flex h-8 w-8 items-center justify-center rounded-full text-neutral-400 hover:bg-neutral-100 hover:text-neutral-600 focus:outline-hidden dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-200 transition duration-200"
      aria-label="Close"
    >
      <svg class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
      </svg>
    </button>

    <!-- Green Check Mark in a Circle -->
    <div class="mx-auto flex h-16 w-16 items-center justify-center rounded-full bg-emerald-100 text-emerald-600 dark:bg-emerald-950/70 dark:text-emerald-400 ring-8 ring-emerald-50 dark:ring-emerald-900/20">
      <svg class="h-9 w-9" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
      </svg>
    </div>

    <!-- Bold & Green Text -->
    <p
      id="success-modal-text"
      class="mt-5 text-base sm:text-lg font-bold text-emerald-600 dark:text-emerald-400 leading-relaxed"
    >
      <?php echo e($formSubTitle); ?>

    </p>
  </div>
</div>

<script>
  (function () {
    const contactForm = document.getElementById('project-inquiry-form');
    const modal = document.getElementById('inquiry-success-modal');
    const modalCard = document.getElementById('inquiry-modal-card');
    const backdrop = document.getElementById('inquiry-modal-backdrop');
    const closeBtn = document.getElementById('inquiry-modal-close-btn');
    let autoCloseTimer = null;

    function showModal() {
      if (!modal) return;
      modal.classList.remove('opacity-0', 'pointer-events-none');
      modal.classList.add('opacity-100');
      if (modalCard) {
        modalCard.classList.remove('scale-95');
        modalCard.classList.add('scale-100');
      }

      clearTimeout(autoCloseTimer);
      autoCloseTimer = setTimeout(function () {
        hideModal();
      }, 5000);
    }

    function hideModal() {
      if (!modal) return;
      clearTimeout(autoCloseTimer);
      modal.classList.remove('opacity-100');
      modal.classList.add('opacity-0', 'pointer-events-none');
      if (modalCard) {
        modalCard.classList.remove('scale-100');
        modalCard.classList.add('scale-95');
      }
    }

    if (closeBtn) {
      closeBtn.addEventListener('click', hideModal);
    }
    if (backdrop) {
      backdrop.addEventListener('click', hideModal);
    }
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') hideModal();
    });

    if (!contactForm) return;

    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();

      const fullName = (document.getElementById('hs-firstname-contacts')?.value || '').trim();
      const organization = (document.getElementById('hs-lastname-contacts')?.value || '').trim();
      const email = (document.getElementById('hs-email-contacts')?.value || '').trim();
      const phone = (document.getElementById('hs-phone-number')?.value || '').trim();
      const service = (document.getElementById('hs-service-contacts')?.value || '').trim();
      const budget = (document.getElementById('hs-budget-contacts')?.value || '').trim();
      const details = (document.getElementById('hs-about-contacts')?.value || '').trim();

      const lines = [
        '*New Project Inquiry - ColorSpire Creations*',
        '',
        `*Name:* ${fullName || 'Not provided'}`,
      ];

      if (organization) {
        lines.push(`*Organization:* ${organization}`);
      }
      if (email) {
        lines.push(`*Email:* ${email}`);
      }
      if (phone) {
        lines.push(`*Phone:* ${phone}`);
      }
      if (service) {
        lines.push(`*Service:* ${service}`);
      }
      if (budget) {
        lines.push(`*Budget:* ${budget}`);
      }
      if (details) {
        lines.push('', '*Project Details:*', details);
      }

      const text = lines.join('\n');
      const waUrl = 'https://wa.me/260763505811?text=' + encodeURIComponent(text);

      showModal();

      const win = window.open(waUrl, '_blank');
      if (!win || win.closed || typeof win.closed === 'undefined') {
        window.location.href = waUrl;
      }
    });
  })();
</script>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Documents\GitHub\Colorspire\Colorspire-Creations\resources\views/components/sections/misc/contact-section.blade.php ENDPATH**/ ?>