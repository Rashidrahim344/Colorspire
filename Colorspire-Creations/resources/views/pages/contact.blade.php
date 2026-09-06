@php
$isFr = ($locale ?? app()->getLocale()) === 'fr';
$title = $isFr ? "Démarrer un projet | Contact " . ($site['title'] ?? 'ColorSpire Creations') : "Start a Project | Contact " . ($site['title'] ?? 'ColorSpire Creations');
$description = $isFr
  ? "Dites-nous ce dont vous avez besoin, ce que vous essayez d'accomplir et quand vous en avez besoin. Nous utiliserons ces informations pour comprendre votre projet et recommander la meilleure suite."
  : "Tell us what you need, what you are trying to achieve and when you need it. We'll use that information to understand the project and recommend the next step.";
$ogTitle = $title;
@endphp

<x-layouts.app
  :title="$title"
  :metaDescription="$description"
  :ogTitle="$ogTitle"
>
  <x-sections.misc.contact-section />
</x-layouts.app>
