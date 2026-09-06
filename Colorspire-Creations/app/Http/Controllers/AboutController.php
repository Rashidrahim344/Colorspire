<?php

namespace App\Http\Controllers;

use App\Services\ContentService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutController extends Controller
{
    public function index(Request $request, string $locale = 'en'): View
    {
        app()->setLocale($locale);
        $site = ContentService::getSite($locale);

        if ($locale === 'fr') {
            $pageTitle = "À Propos | {$site['title']}";
            $title = 'Réflexion créative. Solutions numériques pratiques.';
            $lead = 'ColorSpire Creations est un studio de solutions créatives et numériques basé en Zambie, aidant les marques à communiquer clairement, à bâtir des identités professionnelles et à créer de meilleures expériences numériques.';
            $storyTitle = 'Notre Histoire';
            $storyContent = 'ColorSpire est née d\'une pratique créative de terrain axée sur le design graphique, le contenu et le numérique. Le studio évolue aujourd\'hui vers un partenaire créatif et numérique global pour les entreprises et organisations qui exigent une communication forte, un branding cohérent et des expériences numériques fiables.';
            $beliefsTitle = 'Ce en quoi nous croyons';
            $beliefs = [
                'Un bon design doit communiquer, pas confondre.',
                'Une marque forte exige de la cohérence sur chaque point de contact.',
                'Un site web doit aider les gens à comprendre, faire confiance et agir.',
                'Le travail créatif doit être suffisamment pratique pour être utilisé et suffisamment marquant pour rester en mémoire.',
                'Les entreprises locales méritent des expériences numériques professionnelles conçues pour rivaliser au-delà de leur marché immédiat.',
            ];
            $visionTitle = 'Vision';
            $visionContent = 'Faire de ColorSpire un studio créatif et numérique de référence depuis la Zambie, au service de marques ambitieuses localement, régionalement et internationalement.';
            $missionTitle = 'Mission';
            $missionContent = 'Combiner design, contenu, branding et technologie pour aider nos clients à mieux communiquer, à se présenter avec professionnalisme et à créer des expériences numériques riches de sens.';
            $metaDescription = 'Découvrez ColorSpire Creations, studio créatif et numérique en Zambie : notre histoire, nos valeurs, notre vision et notre mission.';
            $ogTitle = "À Propos | {$site['title']}";
        } else {
            $pageTitle = "About {$site['title']}";
            $title = 'Creative Thinking. Practical Digital Solutions.';
            $lead = 'ColorSpire Creations is a Zambia-based creative and digital solutions studio helping brands communicate clearly, build professional identities and create better digital experiences.';
            $storyTitle = 'Our Story';
            $storyContent = 'ColorSpire grew from a hands-on creative practice focused on graphic design, content and digital work. The studio is evolving into a broader creative and digital partner for businesses and organizations that need strong communication, consistent branding and reliable digital experiences.';
            $beliefsTitle = 'What We Believe';
            $beliefs = [
                'Good design should communicate, not confuse.',
                'A strong brand needs consistency across every touchpoint.',
                'A website should help people understand, trust and act.',
                'Creative work should be practical enough to use and strong enough to remember.',
                'Local businesses deserve professional digital experiences built to compete beyond their immediate market.',
            ];
            $visionTitle = 'Vision';
            $visionContent = 'To grow ColorSpire into a trusted creative and digital studio from Zambia serving ambitious brands locally, regionally and internationally.';
            $missionTitle = 'Mission';
            $missionContent = 'To combine design, content, branding and technology to help clients communicate better, present themselves professionally and create meaningful digital experiences.';
            $metaDescription = 'Learn about ColorSpire Creations, a Zambia-based creative and digital solutions studio: our story, core beliefs, vision, and mission.';
            $ogTitle = "About {$site['title']}";
        }

        return view('pages.about', compact(
            'locale',
            'site',
            'pageTitle',
            'title',
            'lead',
            'storyTitle',
            'storyContent',
            'beliefsTitle',
            'beliefs',
            'visionTitle',
            'visionContent',
            'missionTitle',
            'missionContent',
            'metaDescription',
            'ogTitle'
        ));
    }
}
