<?php

namespace App\Http\Controllers;

use App\Services\ContentService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(Request $request, string $locale = 'en'): View
    {
        app()->setLocale($locale);
        $site = ContentService::getSite($locale);
        $partners = ContentService::getPartners();
        $features = ContentService::getFeatures($locale);
        $faqs = ContentService::getFaqs($locale);
        $pricing = ContentService::getPricing($locale);

        $avatars = [
            'https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80',
            'https://images.unsplash.com/photo-1531927557220-a9e23c1e4794?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80',
            'https://images.unsplash.com/photo-1541101767792-f9b2b1c4f127?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&&auto=format&fit=facearea&facepad=3&w=300&h=300&q=80',
            'https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=300&h=300&q=80',
        ];

        if ($locale === 'fr') {
            $testimonials = [
                [
                    'content' => '[TÉMOIGNAGE CLIENT VÉRIFIÉ — 20–35 MOTS]',
                    'author' => '[NOM DU CLIENT]',
                    'role' => '[RÔLE] • [ORGANISATION]',
                    'avatarSrc' => 'https://images.unsplash.com/photo-1593104547489-5cfb3839a3b5?q=80&w=1453&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80',
                ],
            ];
            $statistics = [
                ['count' => '[VERIFIÉ]', 'description' => '[PROJETS RÉALISÉS]'],
                ['count' => '[VERIFIÉ]', 'description' => '[CLIENTS ACCOMPAGNÉS]'],
                ['count' => '[VERIFIÉ]', 'description' => '[MARQUES DÉVELOPPÉES]'],
                ['count' => '[VERIFIÉ]', 'description' => '[SITES WEB CONÇUS]'],
            ];
        } else {
            $testimonials = [
                [
                    'content' => '[VERIFIED CLIENT TESTIMONIAL — 20–35 WORDS]',
                    'author' => '[CLIENT NAME]',
                    'role' => '[ROLE] • [ORGANIZATION]',
                    'avatarSrc' => 'https://images.unsplash.com/photo-1593104547489-5cfb3839a3b5?q=80&w=1453&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80',
                ],
            ];
            $statistics = [
                ['count' => '[VERIFIED]', 'description' => '[PROJECTS COMPLETED]'],
                ['count' => '[VERIFIED]', 'description' => '[CLIENTS SERVED]'],
                ['count' => '[VERIFIED]', 'description' => '[BRANDS DEVELOPED]'],
                ['count' => '[VERIFIED]', 'description' => '[WEBSITES BUILT]'],
            ];
        }

        return view('pages.home', compact(
            'locale',
            'site',
            'partners',
            'features',
            'faqs',
            'pricing',
            'avatars',
            'testimonials',
            'statistics'
        ));
    }
}
