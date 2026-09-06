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
                    'content' => "ScrewFast a considérablement augmenté l'efficacité de notre projet. La configuration a été instantanée et leurs temps de réponse rapides sont phénoménaux. Vraiment un changement de jeu dans le support matériel et de construction !",
                    'author' => 'Samantha Ruiz',
                    'role' => 'Directrice des opérations | ConstructIt Inc.',
                    'avatarSrc' => 'https://images.unsplash.com/photo-1593104547489-5cfb3839a3b5?q=80&w=1453&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80',
                ],
            ];
            $statistics = [
                ['count' => '70k+', 'description' => 'clients équipés — des bricoleurs aux grandes entreprises de construction'],
                ['count' => '35%', 'description' => "hausse de l'efficacité des projets avec les outils et services de ScrewFast"],
                ['count' => '15,3%', 'description' => 'réduction des coûts de maintenance rapportée par des clients à long terme'],
                ['count' => '2x', 'description' => 'assemblage plus rapide grâce à des solutions de fixation innovantes'],
            ];
        } else {
            $testimonials = [
                [
                    'content' => 'ScrewFast dramatically boosted our project efficiency. Setup was instant, and their rapid response times are phenomenal. Truly a game-changer in hardware and construction support!',
                    'author' => 'Samantha Ruiz',
                    'role' => 'Chief Operating Officer | ConstructIt Inc.',
                    'avatarSrc' => 'https://images.unsplash.com/photo-1593104547489-5cfb3839a3b5?q=80&w=1453&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80',
                ],
            ];
            $statistics = [
                ['count' => '70k+', 'description' => 'customers equipped — from DIY to major construction firms'],
                ['count' => '35%', 'description' => 'uptick in project efficiency with ScrewFast tools and services'],
                ['count' => '15.3%', 'description' => 'reduction in maintenance costs reported by long-term clients'],
                ['count' => '2x', 'description' => 'quicker assembly using innovative fastening solutions'],
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
