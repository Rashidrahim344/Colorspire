@php
$isFr = ($locale ?? app()->getLocale()) === 'fr';
$title = $isFr ? "Nous Contacter | " . ($site['title'] ?? 'ScrewFast') : "Contact | " . ($site['title'] ?? 'ScrewFast');
$description = $isFr
  ? "Vous avez des questions ou souhaitez discuter d'un projet ? Contactez-nous et élaborons ensemble la solution parfaite avec nos outils et services."
  : "Have questions or want to discuss a project? Reach out, and let's craft the perfect solution with our tools and services.";
$ogTitle = $isFr ? 'Nous Contacter | ScrewFast' : 'Contact Us | ScrewFast';
@endphp

<x-layouts.app
  :title="$title"
  :metaDescription="$description"
  :ogTitle="$ogTitle"
>
  <x-sections.misc.contact-section />
</x-layouts.app>
