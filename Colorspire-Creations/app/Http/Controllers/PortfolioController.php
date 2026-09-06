<?php

namespace App\Http\Controllers;

use App\Services\ContentService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function index(Request $request, string $locale = 'en'): View
    {
        app()->setLocale($locale);
        $site = ContentService::getSite($locale);
        $projects = array_values(ContentService::getProducts($locale));

        if ($locale === 'fr') {
            $pageTitle = "Nos Réalisations | {$site['title']}";
            $title = 'Le travail qui parle avant vous';
            $subTitle = 'Explorez une sélection de travaux créatifs et numériques en branding, design graphique, contenu et développement web.';
            $filters = ['Tous', 'Branding', 'Design Graphique', 'Web', 'Contenu Social', 'Campagnes', 'Autre'];
            $metaDescription = 'Explorez les réalisations créatives et numériques de ColorSpire Creations en branding, web, design et stratégie de contenu.';
            $ogTitle = "Nos Réalisations | {$site['title']}";
        } else {
            $pageTitle = "Our Work | {$site['title']}";
            $title = 'Work That Speaks Before You Do';
            $subTitle = 'Explore selected creative and digital work across branding, graphic design, content and web development.';
            $filters = ['All', 'Branding', 'Graphic Design', 'Web', 'Social Content', 'Campaigns', 'Other'];
            $metaDescription = 'Explore selected creative and digital work from ColorSpire Creations across branding, graphic design, content, and web development.';
            $ogTitle = "Our Work | {$site['title']}";
        }

        return view('pages.portfolio', compact(
            'locale',
            'site',
            'projects',
            'pageTitle',
            'title',
            'subTitle',
            'filters',
            'metaDescription',
            'ogTitle'
        ));
    }
}
