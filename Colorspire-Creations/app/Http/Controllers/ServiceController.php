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
                    'title' => "Fournir des conseils d'experts",
                    'subTitle' => "Se lancer dans un projet de construction peut être accablant. Avec nos services de consultation professionnelle, nous vous guidons à chaque étape, en veillant à ce que vous preniez des décisions éclairées. Que vous soyez un passionné du bricolage ou un entrepreneur qualifié, nos experts sont là pour vous offrir des conseils sur mesure sur la sélection de produits, l'envergure du projet et la conformité aux réglementations locales.",
                    'single' => false,
                    'imgOne' => 'images/blueprints-image.avif',
                    'imgOneAlt' => 'Plans et tablette numérique avec des plans de construction.',
                    'imgTwo' => 'images/person-working.avif',
                    'imgTwoAlt' => 'Personne travaillant au bureau',
                ],
                [
                    'isRightSection' => false,
                    'title' => 'Transformer les conceptions en réalité',
                    'subTitle' => 'Nos artisans qualifiés apportent précision et excellence à chaque projet de construction. Des installations mineures aux travaux structuraux substantiels, ScrewFast offre des services de construction fiables pour concrétiser vos plans. Nous assurons les normes les plus élevées de sécurité et de savoir-faire, en utilisant des outils et des matériaux de haute qualité de notre vaste inventaire.',
                    'img' => 'images/before-after.avif',
                    'imgAlt' => 'Chantier de construction avant et après',
                    'btnExists' => true,
                    'btnTitle' => 'En savoir plus',
                    'btnURL' => '#',
                ],
                [
                    'isRightSection' => true,
                    'title' => 'Naviguer dans les projets avec une supervision professionnelle',
                    'subTitle' => "La gestion de projet efficace est au cœur de toute construction réussie. ScrewFast offre une planification approfondie et des services de gestion solides qui maintiennent votre projet dans les délais et dans le budget. Laissez-nous gérer les complexités de la coordination des flux de travail, de l'allocation des ressources et de la communication avec les parties prenantes pendant que vous vous concentrez sur votre vision.",
                    'single' => false,
                    'imgOne' => 'images/construction-workers.avif',
                    'imgOneAlt' => 'Ouvriers du bâtiment orchestrant un projet',
                    'imgTwo' => 'images/aerial-view.avif',
                    'imgTwoAlt' => "Vue aérienne d'une construction gérée",
                ],
                [
                    'isRightSection' => false,
                    'title' => 'Garantir des performances durables',
                    'subTitle' => "Notre engagement envers votre projet ne s'arrête pas à son achèvement. ScrewFast propose des services de maintenance et de support continus pour assurer la longévité et les performances de votre construction. Des vérifications régulières à l'assistance en cas d'urgence, notre équipe réactive est là pour vous fournir un soutien sans faille.",
                    'img' => 'images/using-tools.avif',
                    'imgAlt' => 'Homme en gilet orange et noir portant un casque blanc tenant un outil électrique jaune et noir',
                ],
                [
                    'isRightSection' => true,
                    'title' => 'Élaboration de stratégies sur mesure pour des défis uniques',
                    'subTitle' => "Pour nos clients d'entreprise de plus grande envergure, ScrewFast propose des solutions personnalisées conçues pour répondre à des défis spécifiques de l'industrie. En comprenant vos besoins uniques, nous concevons des stratégies sur mesure visant à optimiser vos opérations, à améliorer l'efficacité et à faire avancer votre entreprise.",
                    'single' => false,
                    'imgOne' => 'images/progress-building.avif',
                    'imgOneAlt' => 'Structure de bâtiment en cours de construction',
                    'imgTwo' => 'images/under-construction.avif',
                    'imgTwoAlt' => 'Bâtiment marron et gris en construction',
                    'btnExists' => true,
                    'btnTitle' => 'Lire la suite',
                    'btnURL' => '#',
                ],
            ];

            $mainSection = [
                'title' => "Unir l'expertise à votre vision",
                'subTitle' => "Chez ScrewFast, nous sommes fiers de fournir des solutions complètes et un service exceptionnel dans l'industrie du matériel et de la construction. Notre équipe expérimentée est dédiée à soutenir votre projet de sa conception à son achèvement avec une gamme de services spécialisés.",
                'btnTitle' => 'Planifier une consultation',
                'btnURL' => '#',
            ];

            $statsSection = [
                'title' => 'Par les chiffres',
                'subTitle' => 'Notre engagement envers la qualité et la fiabilité est évident dans chaque projet que nous entreprenons. Chez ScrewFast, nous nous engageons à fournir des services de premier plan dans l\'industrie qui garantissent que vos projets de construction sont conçus pour durer.',
                'mainStatTitle' => '96%',
                'mainStatSubTitle' => 'de nos clients évaluent leur expérience avec ScrewFast comme exceptionnelle',
                'stats' => [
                    ['stat' => '99,8%', 'description' => 'taux de réalisation de projets'],
                    ['stat' => '5 000+', 'description' => 'installations réussies'],
                    ['stat' => '85%', 'description' => 'croissance client année après année'],
                ],
            ];
        } else {
            $articles = [
                [
                    'isRightSection' => true,
                    'title' => 'Delivering Expert Guidance',
                    'subTitle' => 'Embarking on a construction project can be overwhelming. With our professional consultation services, we guide you through every stage, ensuring you make informed decisions. Whether you are a DIY enthusiast or a skilled contractor, our experts are on hand to offer tailored advice on product selection, project scope, and compliance with local regulations.',
                    'single' => false,
                    'imgOne' => 'images/blueprints-image.avif',
                    'imgOneAlt' => 'Blueprints and digital tablet with construction plans.',
                    'imgTwo' => 'images/person-working.avif',
                    'imgTwoAlt' => 'Person working in the office',
                ],
                [
                    'isRightSection' => false,
                    'title' => 'Transforming Designs into Reality',
                    'subTitle' => 'Our skilled craftsmen bring precision and excellence to every construction project. From minor installations to substantial structural work, ScrewFast offers reliable construction services to turn your plans into tangible outcomes. We ensure the highest standards of safety and workmanship, utilizing top-quality tools and materials from our extensive inventory.',
                    'img' => 'images/before-after.avif',
                    'imgAlt' => 'Construction site before and after',
                    'btnExists' => true,
                    'btnTitle' => 'Learn More',
                    'btnURL' => '#',
                ],
                [
                    'isRightSection' => true,
                    'title' => 'Navigating Projects with Professional Oversight',
                    'subTitle' => 'Effective project management is at the heart of any successful build. ScrewFast provides thorough planning and robust management services that keep your project on time and within budget. Let us handle the complexities of workflow coordination, resource allocation, and stakeholder communication while you focus on your vision.',
                    'single' => false,
                    'imgOne' => 'images/construction-workers.avif',
                    'imgOneAlt' => 'Construction workers orchestrating a project',
                    'imgTwo' => 'images/aerial-view.avif',
                    'imgTwoAlt' => 'Aerial view of managed construction',
                ],
                [
                    'isRightSection' => false,
                    'title' => 'Ensuring Long-lasting Performance',
                    'subTitle' => "Our commitment to your project doesn't end at completion. ScrewFast offers ongoing maintenance and support services to ensure your construction's longevity and performance. From regular check-ups to emergency assistance, our responsive team is there to provide seamless support.",
                    'img' => 'images/using-tools.avif',
                    'imgAlt' => 'Man in orange and black vest wearing white helmet holding yellow and black power tool',
                ],
                [
                    'isRightSection' => true,
                    'title' => 'Crafting Bespoke Strategies for Unique Challenges',
                    'subTitle' => 'For our larger enterprise clients, ScrewFast offers custom solutions designed to meet specific industry challenges. By understanding your unique needs, we engineer tailored strategies aimed at optimizing your operations, enhancing efficiency, and driving your business forward.',
                    'single' => false,
                    'imgOne' => 'images/progress-building.avif',
                    'imgOneAlt' => 'In progress building structure',
                    'imgTwo' => 'images/under-construction.avif',
                    'imgTwoAlt' => 'Brown and gray building under construction',
                    'btnExists' => true,
                    'btnTitle' => 'Read more',
                    'btnURL' => '#',
                ],
            ];

            $mainSection = [
                'title' => 'Uniting Expertise with Your Vision',
                'subTitle' => 'At ScrewFast, we take pride in providing comprehensive solutions and exceptional service in the hardware and construction industry. Our experienced team is dedicated to supporting your project from inception to completion with a range of specialized services.',
                'btnTitle' => 'Schedule a Consultation',
                'btnURL' => '#',
            ];

            $statsSection = [
                'title' => 'By the Numbers',
                'subTitle' => 'Our commitment to quality and reliability is evident in every project we undertake. At ScrewFast, we are dedicated to delivering industry-leading services that ensure your construction projects are built to last.',
                'mainStatTitle' => '96%',
                'mainStatSubTitle' => 'of our clients rate their experience with ScrewFast as exceptional',
                'stats' => [
                    ['stat' => '99.8%', 'description' => 'project completion rate'],
                    ['stat' => '5,000+', 'description' => 'successful installations'],
                    ['stat' => '85%', 'description' => 'client growth year-over-year'],
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
