<?php

namespace App\Http\Controllers;

use App\Services\ContentService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(Request $request, string $locale = 'en'): View
    {
        app()->setLocale($locale);
        $site = ContentService::getSite($locale);
        $products = array_values(ContentService::getProducts($locale));

        if ($locale === 'fr') {
            $title = 'Nos Réalisations';
            $subTitle = 'Explorez une sélection de travaux créatifs et numériques en branding, design graphique, contenu et développement web.';
            $benefits = [
                'Identités visuelles fortes et cohérentes.',
                'Sites web modernes, responsifs et performants.',
                'Contenus percutants conçus pour marquer les esprits.',
            ];
            $whyTitle = 'Pourquoi choisir ColorSpire Creations ?';
            $whySubTitle = 'Nous combinons design, contenu et technologie pour vous aider à communiquer clairement, afficher votre professionnalisme et développer des points de contact numériques plus solides.';
            $testimonialsTitle = 'Un travail créatif qui fait avancer vos projets';
            $testimonials = [
                [
                    'content' => '« [TÉMOIGNAGE CLIENT VÉRIFIÉ — 20–35 MOTS] »',
                    'author' => '[NOM DU CLIENT]',
                    'role' => '[RÔLE] • [ORGANISATION]',
                    'avatarSrc' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80',
                    'avatarAlt' => 'Client ColorSpire',
                ],
                [
                    'content' => '« [TÉMOIGNAGE CLIENT VÉRIFIÉ — 20–35 MOTS] »',
                    'author' => '[NOM DU CLIENT]',
                    'role' => '[RÔLE] • [ORGANISATION]',
                    'avatarSrc' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=1376&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80',
                    'avatarAlt' => 'Client ColorSpire',
                ],
                [
                    'content' => '« [TÉMOIGNAGE CLIENT VÉRIFIÉ — 20–35 MOTS] »',
                    'author' => '[NOM DU CLIENT]',
                    'role' => '[RÔLE] • [ORGANISATION]',
                    'avatarSrc' => 'https://images.unsplash.com/photo-1474176857210-7287d38d27c6?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80',
                    'avatarAlt' => 'Client ColorSpire',
                ],
            ];
            $customerStoriesBtn = 'Études de cas';
        } else {
            $title = 'Our Work';
            $subTitle = 'Explore selected creative and digital work across branding, graphic design, content and web development.';
            $benefits = [
                'Strategic visual identities and consistent brand systems.',
                'Responsive websites built around clarity, trust and action.',
                'Purposeful content that helps brands stay visible and relevant.',
            ];
            $whyTitle = 'Why Choose ColorSpire Creations?';
            $whySubTitle = 'We combine design, content and technology to help you communicate clearly, look professional and build stronger digital touchpoints.';
            $testimonialsTitle = 'Creative Work That Moves Projects Forward';
            $testimonials = [
                [
                    'content' => '"[VERIFIED CLIENT TESTIMONIAL — 20–35 WORDS]"',
                    'author' => '[CLIENT NAME]',
                    'role' => '[ROLE] • [ORGANISATION]',
                    'avatarSrc' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80',
                    'avatarAlt' => 'ColorSpire Client',
                ],
                [
                    'content' => '"[VERIFIED CLIENT TESTIMONIAL — 20–35 WORDS]"',
                    'author' => '[CLIENT NAME]',
                    'role' => '[ROLE] • [ORGANISATION]',
                    'avatarSrc' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=1376&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80',
                    'avatarAlt' => 'ColorSpire Client',
                ],
                [
                    'content' => '"[VERIFIED CLIENT TESTIMONIAL — 20–35 WORDS]"',
                    'author' => '[CLIENT NAME]',
                    'role' => '[ROLE] • [ORGANISATION]',
                    'avatarSrc' => 'https://images.unsplash.com/photo-1474176857210-7287d38d27c6?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80',
                    'avatarAlt' => 'ColorSpire Client',
                ],
            ];
            $customerStoriesBtn = 'Discuss a Similar Project';
        }

        return view('pages.products.index', compact(
            'locale',
            'site',
            'products',
            'title',
            'subTitle',
            'whyTitle',
            'whySubTitle',
            'benefits',
            'testimonialsTitle',
            'testimonials',
            'customerStoriesBtn'
        ));
    }

    public function show(Request $request, string $id, string $locale = 'en'): View
    {
        app()->setLocale($locale);
        $site = ContentService::getSite($locale);
        $product = ContentService::getProduct($id, $locale);

        if (!$product) {
            abort(404);
        }

        return view('pages.products.show', compact('locale', 'site', 'product'));
    }
}
