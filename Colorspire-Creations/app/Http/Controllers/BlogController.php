<?php

namespace App\Http\Controllers;

use App\Services\ContentService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(Request $request, string $locale = 'en'): View
    {
        app()->setLocale($locale);
        $site = ContentService::getSite($locale);
        $blogPosts = array_values(ContentService::getBlogPosts($locale));
        $insightPosts = array_values(ContentService::getInsights($locale));

        $mostRecentPost = $blogPosts[0] ?? null;
        $otherPosts = array_slice($blogPosts, 1);

        if ($locale === 'fr') {
            $title = 'Idées pour de meilleures marques et de meilleures expériences numériques';
            $subTitle = 'Des analyses pratiques sur le design, le branding, les sites web, la création de contenu, les réseaux sociaux et la croissance numérique.';
            $secondTitle = 'Catégories éditoriales suggérées';
            $secondSubTitle = 'Conseils Design • Branding • Développement Web • Réseaux Sociaux • Création de Contenu • Présence Numérique';
            $metaDescription = 'Des analyses pratiques sur le design, le branding, les sites web et les réseaux sociaux par ColorSpire Creations.';
            $ogTitle = 'Perspectives | ColorSpire Creations';
        } else {
            $title = 'Ideas for Better Brands and Better Digital Experiences';
            $subTitle = 'Practical insights on design, branding, websites, content creation, social media and digital growth.';
            $secondTitle = 'Suggested Editorial Categories';
            $secondSubTitle = 'Design Tips • Branding • Web Development • Social Media • Content Creation • Business & Digital Presence • ColorSpire Projects';
            $metaDescription = 'Practical insights on design, branding, websites, content creation, social media and digital growth from ColorSpire Creations.';
            $ogTitle = 'Insights | ColorSpire Creations';
        }

        return view('pages.blog.index', compact(
            'locale',
            'site',
            'title',
            'subTitle',
            'secondTitle',
            'secondSubTitle',
            'metaDescription',
            'ogTitle',
            'mostRecentPost',
            'otherPosts',
            'insightPosts'
        ));
    }

    public function show(Request $request, string $id, string $locale = 'en'): View
    {
        app()->setLocale($locale);
        $site = ContentService::getSite($locale);
        $post = ContentService::getBlogPost($id, $locale);

        if (!$post) {
            abort(404);
        }

        $allPosts = ContentService::getBlogPosts($locale);
        $relatedPosts = array_values(array_filter($allPosts, fn($p) => $p['id'] !== $id && $p['id'] !== "{$locale}/{$id}"));

        return view('pages.blog.show', compact('locale', 'site', 'post', 'relatedPosts'));
    }
}
