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
            $title = "Votre Passerelle vers l'Excellence en Construction";
            $subTitle = 'Explorez les dernières actualités, astuces et analyses de ScrewFast pour améliorer vos projets de construction. Des mises en avant de produits aux stratégies de gestion de projet, notre blog est votre ressource incontournable pour tout ce qui concerne les outils et la construction.';
            $secondTitle = 'Perspectives';
            $secondSubTitle = "Restez à jour avec les dernières tendances et évolutions de l'industrie de la construction grâce aux analyses de l'équipe d'experts de ScrewFast.";
            $metaDescription = "Restez informé des dernières tendances et évolutions dans le secteur de la construction avec les analyses de l'équipe d'experts de ScrewFast.";
            $ogTitle = "Blog de l'Industrie de la Construction | ScrewFast";
        } else {
            $title = 'Your Gateway to Construction Excellence';
            $subTitle = 'Explore the latest news, tips, and insights from ScrewFast to enhance your construction projects. From product spotlights to project management strategies, our blog is your go-to resource for all things hardware and construction.';
            $secondTitle = 'Insights';
            $secondSubTitle = "Stay up-to-date with the latest trends and developments in the construction industry with insights from ScrewFast's team of industry experts. ";
            $metaDescription = "Stay up-to-date with the latest trends and developments in the construction industry with insights from ScrewFast's team of industry experts.";
            $ogTitle = 'Construction Industry Blog | ScrewFast';
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
