<?php

namespace App\Http\Controllers;

use App\Services\ContentService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HubController extends Controller
{
    public function index(Request $request, string $locale = 'en'): View
    {
        app()->setLocale($locale);
        $site = ContentService::getSite($locale);

        if ($locale === 'fr') {
            $pageTitle = "Le Hub | {$site['title']}";
            $title = 'Le Hub ColorSpire';
            $subTitle = 'Un espace central reliant les marques, initiatives, projets et partenaires qui composent l\'écosystème étendu de ColorSpire.';
            $intro = 'ColorSpire est bien plus qu\'une simple ligne de services. Le Hub réunit les initiatives connexes, marques filles, collaborations et projets sélectionnés au sein d\'un même écosystème numérique connecté.';
            $categories = [
                ['name' => 'MARQUES FILLES', 'description' => 'Marques ou initiatives dédiées opérant au sein ou aux côtés de l\'écosystème ColorSpire.'],
                ['name' => 'INITIATIVES', 'description' => 'Programmes, communautés ou projets créés pour répondre à un besoin spécifique ou servir un public précis.'],
                ['name' => 'PARTENAIRES', 'description' => 'Organisations, entreprises ou collaborateurs vérifiés travaillant avec ColorSpire.'],
                ['name' => 'PROJETS', 'description' => 'Grands projets internes ou collaboratifs méritant une mise en avant distincte du portfolio client.'],
            ];
            $hubCards = [
                [
                    'name' => '[NOM DE L\'ENTITÉ]',
                    'category' => 'MARQUE FILLE [ESPACE RÉSERVÉ]',
                    'description' => 'Entité de marque dédiée au sein de l\'écosystème ColorSpire. Les données seront publiées après confirmation vérifiée. [ESPACE RÉSERVÉ]',
                    'linkLabel' => 'Voir [ENTITÉ]',
                    'destination' => '#!',
                ],
                [
                    'name' => '[NOM DE L\'INITIATIVE]',
                    'category' => 'INITIATIVE [ESPACE RÉSERVÉ]',
                    'description' => 'Programme ou initiative communautaire conçu pour stimuler l\'impact créatif et l\'inclusion numérique. [ESPACE RÉSERVÉ]',
                    'linkLabel' => 'Découvrir l\'initiative',
                    'destination' => '#!',
                ],
                [
                    'name' => '[PARTENAIRE VÉRIFIÉ]',
                    'category' => 'PARTENAIRE [VÉRIFIÉ]',
                    'description' => 'Organisation ou collaborateur travaillant en partenariat stratégique avec ColorSpire. [ESPACE RÉSERVÉ]',
                    'linkLabel' => 'Voir le partenaire',
                    'destination' => '#!',
                ],
                [
                    'name' => '[PROJET ÉCOSYSTÈME]',
                    'category' => 'PROJET [ESPACE RÉSERVÉ]',
                    'description' => 'Projet d\'envergure collaboratif ou interne valorisant la technologie et le design. [ESPACE RÉSERVÉ]',
                    'linkLabel' => 'Explorer le projet',
                    'destination' => '#!',
                ],
            ];
            $notice = 'Important : Les partenaires et marques filles ne sont publiés qu\'après confirmation des données vérifiées de l\'écosystème ColorSpire. [ESPACE RÉSERVÉ]';
            $metaDescription = 'Découvrez le Hub ColorSpire : marques associées, initiatives, partenaires et projets de l\'écosystème ColorSpire Creations.';
            $ogTitle = "Le Hub | {$site['title']}";
        } else {
            $pageTitle = "The Hub | {$site['title']}";
            $title = 'The ColorSpire Hub';
            $subTitle = 'A central space connecting the brands, initiatives, projects and partners that form part of the wider ColorSpire ecosystem.';
            $intro = 'ColorSpire is more than a single service line. The Hub brings related initiatives, child brands, collaborations and selected projects into one connected digital ecosystem.';
            $categories = [
                ['name' => 'CHILD BRANDS', 'description' => 'Dedicated brands or ventures operating under or alongside the ColorSpire ecosystem.'],
                ['name' => 'INITIATIVES', 'description' => 'Programs, communities or projects created to solve a specific problem or serve a specific audience.'],
                ['name' => 'PARTNERS', 'description' => 'Verified organizations, businesses or collaborators working with ColorSpire.'],
                ['name' => 'PROJECTS', 'description' => 'Major internal or collaborative projects worth showcasing separately from client portfolio work.'],
            ];
            $hubCards = [
                [
                    'name' => '[ENTITY NAME]',
                    'category' => 'CHILD BRAND [PLACEHOLDER]',
                    'description' => 'Dedicated brand entity within the ColorSpire ecosystem. Information will be populated with confirmed data before launch. [PLACEHOLDER]',
                    'linkLabel' => 'View [ENTITY]',
                    'destination' => '#!',
                ],
                [
                    'name' => '[INITIATIVE NAME]',
                    'category' => 'INITIATIVE [PLACEHOLDER]',
                    'description' => 'Community program or targeted initiative created to drive creative impact and digital solutions for specific audiences. [PLACEHOLDER]',
                    'linkLabel' => 'Explore Initiative',
                    'destination' => '#!',
                ],
                [
                    'name' => '[VERIFIED PARTNER]',
                    'category' => 'PARTNER [VERIFIED]',
                    'description' => 'Strategic collaborator or verified enterprise partner working alongside ColorSpire on digital solutions. [PLACEHOLDER]',
                    'linkLabel' => 'View Partner',
                    'destination' => '#!',
                ],
                [
                    'name' => '[ECOSYSTEM PROJECT]',
                    'category' => 'PROJECT [PLACEHOLDER]',
                    'description' => 'Major internal or collaborative project showcasing technology, design systems, and digital innovation. [PLACEHOLDER]',
                    'linkLabel' => 'Explore Project',
                    'destination' => '#!',
                ],
            ];
            $notice = 'Important: Populate this page only from verified ColorSpire ecosystem data. [PLACEHOLDER]';
            $metaDescription = 'Explore The ColorSpire Hub: a central space connecting brands, initiatives, projects, and partners in the ColorSpire ecosystem.';
            $ogTitle = "The Hub | {$site['title']}";
        }

        return view('pages.hub', compact(
            'locale',
            'site',
            'pageTitle',
            'title',
            'subTitle',
            'intro',
            'categories',
            'hubCards',
            'notice',
            'metaDescription',
            'ogTitle'
        ));
    }
}
