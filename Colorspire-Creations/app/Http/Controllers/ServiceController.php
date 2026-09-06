<?php

namespace App\Http\Controllers;

use App\Services\ContentService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function index(Request $request, string $locale = 'en'): View
    {
        app()->setLocale($locale);
        $site = ContentService::getSite($locale);

        if ($locale === 'fr') {
            $articles = [
                [
                    'isRightSection' => true,
                    'title' => 'Design Graphique',
                    'subTitle' => 'Nous créons des supports visuels professionnels qui communiquent avec clarté et renforcent votre présence de marque au quotidien. Livrables : Visuels pour réseaux sociaux • Affiches & flyers • Brochures • Bannières rétractables • Documents commerciaux • Actifs de campagne numérique.',
                    'single' => false,
                    'imgOne' => 'images/blueprints-image.avif',
                    'imgOneAlt' => 'Supports visuels et design graphique',
                    'imgTwo' => 'images/person-working.avif',
                    'imgTwoAlt' => 'Création graphique professionnelle',
                    'btnExists' => true,
                    'btnTitle' => 'Demander un design graphique',
                    'btnURL' => '/fr/contact',
                ],
                [
                    'isRightSection' => false,
                    'title' => 'Branding & Identité de Marque',
                    'subTitle' => 'Nous aidons les entreprises à bâtir une identité visuelle reconnaissable pouvant être déclinée de façon cohérente sur les supports imprimés, numériques et sociaux. Livrables : Direction du logo • Systèmes d\'identité de marque • Systèmes de couleurs & typographies • Guide de marque • Concepts d\'application.',
                    'img' => 'images/before-after.avif',
                    'imgAlt' => 'Identité de marque et charte visuelle',
                    'btnExists' => true,
                    'btnTitle' => 'Construire ma marque',
                    'btnURL' => '/fr/contact',
                ],
                [
                    'isRightSection' => true,
                    'title' => 'Conception & Développement Web',
                    'subTitle' => 'Nous concevons et développons des sites web réactifs qui présentent votre activité avec professionnalisme et rendent l\'action suivante limpide pour les visiteurs. Livrables : Stratégie de site web • Design UI • Développement réactif • Sites multi-pages • Développements Laravel • Structure de contenu • Support au déploiement.',
                    'single' => false,
                    'imgOne' => 'images/construction-workers.avif',
                    'imgOneAlt' => 'Développement web moderne',
                    'imgTwo' => 'images/aerial-view.avif',
                    'imgTwoAlt' => 'Architecture de site web responsive',
                    'btnExists' => true,
                    'btnTitle' => 'Démarrer un projet de site web',
                    'btnURL' => '/fr/contact',
                ],
                [
                    'isRightSection' => false,
                    'title' => 'Création de Contenu',
                    'subTitle' => 'Nous créons du contenu visuel qui permet aux marques de communiquer régulièrement sans perdre en cohérence. Livrables : Contenu réseaux sociaux • Visuels de campagne • Concepts de contenu • Direction créative • Formats visuels courts.',
                    'img' => 'images/using-tools.avif',
                    'imgAlt' => 'Création de contenu visuel',
                    'btnExists' => true,
                    'btnTitle' => 'Planifier mon contenu',
                    'btnURL' => '/fr/contact',
                ],
                [
                    'isRightSection' => true,
                    'title' => 'Gestion des Réseaux Sociaux',
                    'subTitle' => 'Nous vous aidons à maintenir une présence en ligne cohérente grâce à un contenu planifié, la gestion de page et des actifs créatifs prêts à publier. Livrables : Calendriers de contenu • Design de publications • Support de diffusion • Gestion de page • Ajustements axés sur la performance.',
                    'single' => false,
                    'imgOne' => 'images/progress-building.avif',
                    'imgOneAlt' => 'Planification et gestion des réseaux sociaux',
                    'imgTwo' => 'images/under-construction.avif',
                    'imgTwoAlt' => 'Stratégie de publication sociale',
                    'btnExists' => true,
                    'btnTitle' => 'Gérer mes réseaux',
                    'btnURL' => '/fr/contact',
                ],
                [
                    'isRightSection' => false,
                    'title' => 'Marketing Numérique',
                    'subTitle' => 'Nous développons des actifs marketing créatifs et des campagnes numériques pratiques conçus autour d\'objectifs de notoriété, d\'engagement et de conversion. Livrables : Concepts de campagne • Créations publicitaires • Support de rédaction • Actifs pour landing page • Direction de contenu.',
                    'img' => 'images/features-image.avif',
                    'imgAlt' => 'Campagnes de marketing numérique',
                    'btnExists' => true,
                    'btnTitle' => 'Planifier une campagne',
                    'btnURL' => '/fr/contact',
                ],
                [
                    'isRightSection' => true,
                    'title' => 'Photographie & Montage Vidéo',
                    'subTitle' => 'Nous accompagnons les marques par le storytelling visuel pour les produits, services, événements et campagnes numériques. Livrables : Support photo • Sélection/retouche photo • Montage vidéo • Clips pour réseaux sociaux • Visuels de campagne.',
                    'single' => true,
                    'imgOne' => 'images/automated-tools.avif',
                    'imgOneAlt' => 'Photographie et montage vidéo',
                    'btnExists' => true,
                    'btnTitle' => 'Échanger sur le contenu visuel',
                    'btnURL' => '/fr/contact',
                ],
            ];

            $mainSection = [
                'title' => 'Services créatifs conçus autour de vos objectifs',
                'subTitle' => 'D\'un simple livrable visuel à une présence numérique complète, ColorSpire allie créativité, cohérence et exécution pratique.',
                'btnTitle' => 'Lancer un projet',
                'btnURL' => '/fr/contact',
            ];

            $statsSection = [
                'title' => 'Construit autour de résultats créatifs concrets',
                'subTitle' => 'Du design visuel aux expériences numériques, ColorSpire réunit stratégie, créativité et exécution.',
                'mainStatTitle' => '[VERIFIÉ]',
                'mainStatSubTitle' => 'Satisfaction client et réussite de projets sur l\'ensemble des livrables',
                'stats' => [
                    ['stat' => '[VERIFIÉ]', 'description' => '[PROJETS RÉALISÉS]'],
                    ['stat' => '[VERIFIÉ]', 'description' => '[CLIENTS ACCOMPAGNÉS]'],
                    ['stat' => '[VERIFIÉ]', 'description' => '[MARQUES DÉVELOPPÉES]'],
                ],
            ];
        } else {
            $articles = [
                [
                    'isRightSection' => true,
                    'title' => 'Graphic Design',
                    'subTitle' => 'We create professional visual materials that communicate clearly and strengthen your day-to-day brand presence. Deliverables: Social media graphics • Posters & flyers • Brochures • Pull-up banners • Business materials • Digital campaign assets.',
                    'single' => false,
                    'imgOne' => 'images/blueprints-image.avif',
                    'imgOneAlt' => 'Graphic design materials and business branding assets',
                    'imgTwo' => 'images/person-working.avif',
                    'imgTwoAlt' => 'Designer producing campaign materials',
                    'btnExists' => true,
                    'btnTitle' => 'Request Graphic Design',
                    'btnURL' => '/contact',
                ],
                [
                    'isRightSection' => false,
                    'title' => 'Branding & Brand Identity',
                    'subTitle' => 'We help businesses build a recognizable visual identity that can be used consistently across print, digital and social touchpoints. Deliverables: Logo direction • Brand identity systems • Color & typography systems • Brand guidelines • Brand application concepts.',
                    'img' => 'images/before-after.avif',
                    'imgAlt' => 'Brand identity guidelines and visual identity system',
                    'btnExists' => true,
                    'btnTitle' => 'Build My Brand',
                    'btnURL' => '/contact',
                ],
                [
                    'isRightSection' => true,
                    'title' => 'Website Design & Development',
                    'subTitle' => 'We design and develop responsive websites that present your business professionally and make the next step clear to visitors. Deliverables: Website strategy • UI design • Responsive development • Multi-page websites • Laravel builds • Content structure • Deployment support.',
                    'single' => false,
                    'imgOne' => 'images/construction-workers.avif',
                    'imgOneAlt' => 'Web development team crafting responsive platforms',
                    'imgTwo' => 'images/aerial-view.avif',
                    'imgTwoAlt' => 'Information architecture and UI design workflow',
                    'btnExists' => true,
                    'btnTitle' => 'Start a Website Project',
                    'btnURL' => '/contact',
                ],
                [
                    'isRightSection' => false,
                    'title' => 'Content Creation',
                    'subTitle' => 'We create visual content that helps brands communicate regularly without losing consistency. Deliverables: Social media content • Campaign visuals • Content concepts • Creative direction • Short-form visual assets.',
                    'img' => 'images/using-tools.avif',
                    'imgAlt' => 'Content creation and digital visual production',
                    'btnExists' => true,
                    'btnTitle' => 'Plan My Content',
                    'btnURL' => '/contact',
                ],
                [
                    'isRightSection' => true,
                    'title' => 'Social Media Management',
                    'subTitle' => 'We help maintain a consistent online presence through planned content, page handling and platform-ready creative assets. Deliverables: Content calendars • Post design • Publishing support • Page handling • Performance-focused adjustments.',
                    'single' => false,
                    'imgOne' => 'images/progress-building.avif',
                    'imgOneAlt' => 'Social media strategy and post scheduling',
                    'imgTwo' => 'images/under-construction.avif',
                    'imgTwoAlt' => 'Social media analytics and creative planning',
                    'btnExists' => true,
                    'btnTitle' => 'Manage My Socials',
                    'btnURL' => '/contact',
                ],
                [
                    'isRightSection' => false,
                    'title' => 'Digital Marketing',
                    'subTitle' => 'We develop creative marketing assets and practical digital campaigns designed around awareness, engagement and conversion goals. Deliverables: Campaign concepts • Ad creatives • Messaging support • Landing page assets • Content direction.',
                    'img' => 'images/features-image.avif',
                    'imgAlt' => 'Digital marketing campaigns and advertising creatives',
                    'btnExists' => true,
                    'btnTitle' => 'Plan a Campaign',
                    'btnURL' => '/contact',
                ],
                [
                    'isRightSection' => true,
                    'title' => 'Photography & Video Editing',
                    'subTitle' => 'We support brands with visual storytelling for products, services, events and digital campaigns. Deliverables: Photography support • Photo selection/editing • Video editing • Social-ready clips • Campaign visuals.',
                    'single' => true,
                    'imgOne' => 'images/automated-tools.avif',
                    'imgOneAlt' => 'Visual storytelling, photography, and video editing',
                    'btnExists' => true,
                    'btnTitle' => 'Discuss Visual Content',
                    'btnURL' => '/contact',
                ],
            ];

            $mainSection = [
                'title' => 'Creative Services Built Around Your Goals',
                'subTitle' => 'From a single visual asset to a complete digital presence, ColorSpire combines creativity, consistency and practical execution.',
                'btnTitle' => 'Start a Project',
                'btnURL' => '/contact',
            ];

            $statsSection = [
                'title' => 'Built Around Real Creative Outcomes',
                'subTitle' => 'From visual design to digital experiences, ColorSpire brings strategy, creativity and execution together.',
                'mainStatTitle' => '[VERIFIED]',
                'mainStatSubTitle' => 'Client satisfaction and project success across creative deliverables',
                'stats' => [
                    ['stat' => '[VERIFIED]', 'description' => '[PROJECTS COMPLETED]'],
                    ['stat' => '[VERIFIED]', 'description' => '[CLIENTS SERVED]'],
                    ['stat' => '[VERIFIED]', 'description' => '[BRANDS DEVELOPED]'],
                ],
            ];
        }

        return view('pages.services', compact(
            'locale',
            'site',
            'articles',
            'mainSection',
            'statsSection'
        ));
    }
}
