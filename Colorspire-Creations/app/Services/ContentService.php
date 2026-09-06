<?php

namespace App\Services;

use Illuminate\Support\Str;

class ContentService
{
    /**
     * Get Site configuration.
     */
    public static function getSite(string $locale = 'en'): array
    {
        return [
            'title' => 'ColorSpire Creations',
            'tagline' => $locale === 'fr' 
                ? 'Concevoir l\'influence visuelle — Bâtir pour inspirer.' 
                : 'Designing Visual Influence — Built to Inspire.',
            'description' => $locale === 'fr' 
                ? 'ColorSpire Creations est un studio zambien de solutions créatives et numériques aidant les entreprises, organisations et particuliers à bâtir des marques fortes et des expériences numériques percutantes grâce au design, au contenu, à l\'image de marque et à la technologie.'
                : 'ColorSpire Creations is a Zambia-based creative and digital solutions studio helping businesses, organizations and individuals build stronger brands and meaningful digital experiences through design, content, branding and technology.',
            'description_short' => $locale === 'fr'
                ? 'ColorSpire Creations est un studio zambien de solutions créatives et numériques aidant à bâtir des marques fortes et des expériences numériques percutantes.'
                : 'ColorSpire Creations is a Zambia-based creative and digital solutions studio helping build stronger brands and digital experiences.',
            'url' => '#!',
            'author' => 'ColorSpire Creations',
        ];
    }

    /**
     * Get SEO configuration.
     */
    public static function getSeo(string $locale = 'en'): array
    {
        $site = self::getSite($locale);

        return [
            'title' => $site['title'],
            'description' => $site['description'],
            'structuredData' => [
                '@context' => '#!',
                '@type' => '#!',
                'inLanguage' => $locale === 'fr' ? 'fr-FR' : 'en-US',
                '@id' => '#!',
                'url' => '#!',
                'name' => '#!',
                'description' => $site['description'],
                'isPartOf' => [
                    '@type' => 'WebSite',
                    'url' => $site['url'],
                    'name' => $site['title'],
                    'description' => $site['description'],
                ],
            ],
        ];
    }

    /**
     * Get Open Graph configuration.
     */
    public static function getOg(string $locale = 'en'): array
    {
        $site = self::getSite($locale);

        return [
            'locale' => $locale === 'fr' ? 'fr_FR' : 'en_US',
            'type' => 'website',
            'url' => $site['url'],
            'title' => "{$site['title']} : : Creative & Digital Solutions Studio",
            'description' => "ColorSpire Creations helps businesses, organizations and ambitious individuals turn ideas into strong visual identities, compelling content and digital experiences that are built to make an impact.",
            'image' => '/images/social.png',
        ];
    }

    /**
     * Get Navigation Links.
     */
    public static function getNavigation(string $locale = 'en'): array
    {
        $navBarLinks = ($locale === 'fr') ? [
            ['name' => 'Accueil', 'url' => '/fr'],
            ['name' => 'Services', 'url' => '/fr/services'],
            ['name' => 'Portfolio', 'url' => '/fr/portfolio'],
            ['name' => 'Le Hub', 'url' => '/fr/hub'],
            ['name' => 'À Propos', 'url' => '/fr/about'],
            ['name' => 'Blog', 'url' => '/fr/blog'],
            ['name' => 'Contact', 'url' => '/fr/contact'],
        ] : [
            ['name' => 'Home', 'url' => '/'],
            ['name' => 'Services', 'url' => '/services'],
            ['name' => 'Portfolio', 'url' => '/portfolio'],
            ['name' => 'The Hub', 'url' => '/hub'],
            ['name' => 'About', 'url' => '/about'],
            ['name' => 'Blog', 'url' => '/blog'],
            ['name' => 'Contact', 'url' => '/contact'],
        ];

        return [
            'navBarLinks' => $navBarLinks,
            'footerLinks' => self::getFooterLinks($locale),
            'socialLinks' => self::getSocialLinks(),
        ];
    }

    /**
     * Get Footer Links.
     */
    public static function getFooterLinks(string $locale = 'en'): array
    {
        if ($locale === 'fr') {
            return [
                [
                    'section' => 'Explorer',
                    'links' => [
                        ['name' => 'Services', 'url' => '/fr/services'],
                        ['name' => 'Portfolio', 'url' => '/fr/portfolio'],
                        ['name' => 'Le Hub', 'url' => '/fr/hub'],
                        ['name' => 'Blog', 'url' => '/fr/blog'],
                    ],
                ],
                [
                    'section' => 'Société',
                    'links' => [
                        ['name' => 'À propos de nous', 'url' => '/fr/about'],
                        ['name' => 'Contact', 'url' => '/fr/contact'],
                        ['name' => 'Politique de confidentialité [ADD]', 'url' => '#'],
                        ['name' => 'Conditions d\'utilisation [ADD]', 'url' => '#'],
                    ],
                ],
                [
                    'section' => 'Services',
                    'links' => [
                        ['name' => 'Design Graphique', 'url' => '/fr/services'],
                        ['name' => 'Branding', 'url' => '/fr/services'],
                        ['name' => 'Développement Web', 'url' => '/fr/services'],
                        ['name' => 'Création de contenu & Réseaux sociaux', 'url' => '/fr/services'],
                    ],
                ],
            ];
        }

        return [
            [
                'section' => 'Explore',
                'links' => [
                    ['name' => 'Services', 'url' => '/services'],
                    ['name' => 'Portfolio', 'url' => '/portfolio'],
                    ['name' => 'The Hub', 'url' => '/hub'],
                    ['name' => 'Blog', 'url' => '/blog'],
                ],
            ],
            [
                'section' => 'Company',
                'links' => [
                    ['name' => 'About us', 'url' => '/about'],
                    ['name' => 'Contact', 'url' => '/contact'],
                    ['name' => 'Privacy Policy [ADD]', 'url' => '#'],
                    ['name' => 'Terms [ADD]', 'url' => '#'],
                ],
            ],
            [
                'section' => 'Services',
                'links' => [
                    ['name' => 'Graphic Design', 'url' => '/services'],
                    ['name' => 'Branding', 'url' => '/services'],
                    ['name' => 'Web Development', 'url' => '/services'],
                    ['name' => 'Content Creation & Social Media', 'url' => '/services'],
                ],
            ],
        ];
    }

    /**
     * Get Social Links.
     */
    public static function getSocialLinks(): array
    {
        return [
            'facebook' => 'https://facebook.com',
            'instagram' => 'https://instagram.com',
            'linkedin' => 'https://linkedin.com',
            'tiktok' => 'https://tiktok.com',
            'youtube' => 'https://youtube.com',
            'x' => '#',
            'github' => '#',
            'google' => '#',
            'slack' => '#',
        ];
    }

    /**
     * Get Partners data.
     */
    public static function getPartners(): array
    {
        return [
            [
                'name' => 'first',
                'href' => '#',
                'svg' => '<svg class="mx-auto h-auto w-32 py-3 sm:mx-0 lg:w-40 lg:py-5" viewBox="0 0 1033.583 318.543"><path d="M-26.912 496.696c-2.812-5.011-7.55-7.83-13.31-7.83-7.824 0-15.236 5.018-15.236 13.383 0 7.21 5.357 10.577 11.255 13.108l3.563 1.514c4.47 1.853 8.926 4.254 8.926 9.807 0 5.422-3.974 10.094-9.54 10.094-5.559 0-10.087-4.124-10.015-9.814l-6.525 1.37c1.102 8.307 7.62 14.486 15.999 14.486 9.259 0 16.534-6.727 16.534-16.136 0-8.64-5.488-12.691-12.835-15.568l-3.7-1.442c-3.23-1.24-7.21-3.36-7.21-7.42 0-4.521 4.529-7.34 8.646-7.34 3.915 0 6.382 1.651 8.3 4.88l5.148-3.092zm50.62-7.83c-14.825 0-27.104 12.15-27.104 26.974 0 15.373 12.142 26.974 27.104 26.974 14.955 0 27.11-11.601 27.11-26.974 0-14.824-12.286-26.974-27.11-26.974zm0 47.906c-11.184 0-20.651-9.128-20.651-20.932 0-11.392 8.508-20.932 20.65-20.932 12.15 0 20.659 9.54 20.659 20.932 0 11.804-9.474 20.932-20.658 20.932zm86.722-44.402c-3.909-2.401-8.515-3.504-13.043-3.504-15.236 0-27.516 11.947-27.516 27.248 0 14.962 12.221 26.7 26.968 26.7 4.528 0 9.61-1.312 13.59-3.648v-7.614c-3.849 3.432-8.716 5.357-13.793 5.357-11.53 0-20.318-9.677-20.318-21.004 0-11.457 8.854-21.134 20.455-21.134 4.868 0 9.944 1.788 13.657 5.083v-7.484zm35.782-2.401h-6.453v51.742h6.453V489.97zm32.227 51.742h27.789v-5.898h-21.343V516.25h20.723v-5.898h-20.723v-14.486h21.343v-5.898h-27.79v51.742zm68.113-45.844h12.286v-5.898h-31.02v5.898h12.287v45.844h6.447v-45.844zm61.38 32.873 5.898 12.971h6.935l-24.703-53.934-24.703 53.934h6.93l5.898-12.971h23.744zm-2.683-5.899h-18.387l9.2-20.932 9.187 20.932zm62.978-26.145c-2.805-5.011-7.549-7.83-13.31-7.83-7.817 0-15.23 5.018-15.23 13.383 0 7.21 5.351 10.577 11.25 13.108l3.569 1.514c4.463 1.853 8.92 4.254 8.92 9.807 0 5.422-3.981 10.094-9.54 10.094-5.56 0-10.088-4.124-10.016-9.814l-6.518 1.37c1.096 8.307 7.614 14.486 15.986 14.486 9.265 0 16.54-6.727 16.54-16.136 0-8.64-5.487-12.691-12.834-15.568l-3.706-1.442c-3.224-1.24-7.204-3.36-7.204-7.42 0-4.521 4.528-7.34 8.646-7.34 3.915 0 6.38 1.651 8.306 4.88l5.141-3.092zm65.425 45.015h27.783v-5.898h-21.343V516.25h20.73v-5.898h-20.73v-14.486h21.343v-5.898h-27.783v51.742zm53.974-51.742v32.735c0 11.393 7.073 20.11 18.942 20.11 11.868 0 18.941-8.717 18.941-20.11V489.97h-6.453v30.536c0 8.443-2.538 16.267-12.488 16.267s-12.489-7.824-12.489-16.267V489.97h-6.453zm82.461 29.238c7.478-.894 12.417-7.067 12.417-14.485 0-4.933-2.466-9.814-6.792-12.352-4.118-2.336-9.057-2.401-13.65-2.401h-7.824v51.742h6.453v-21.89h2.669l15.236 21.89h7.823l-16.332-22.504zm-9.396-23.477h1.716c6.382 0 14.061 1.168 14.061 9.272 0 8.228-7.138 9.461-13.728 9.461h-2.049V495.73zm72.726-6.864c-14.817 0-27.104 12.15-27.104 26.974 0 15.373 12.15 26.974 27.104 26.974 14.969 0 27.111-11.601 27.111-26.974 0-14.824-12.28-26.974-27.11-26.974zm0 47.906c-11.177 0-20.65-9.128-20.65-20.932 0-11.392 8.508-20.932 20.65-20.932 12.15 0 20.658 9.54 20.658 20.932 0 11.804-9.474 20.932-20.658 20.932zm58.248-16.75h3.7c9.813 0 18.12-4.182 18.12-15.092 0-9.474-4.94-14.961-20.86-14.961h-7.413v51.742h6.453v-21.689zm0-24.292h1.71c6.38 0 14.067.966 14.067 9.063 0 8.235-7.138 9.468-13.728 9.468h-2.049v-18.53zm75.65 33.01 5.898 12.971h6.93l-24.704-53.934-24.703 53.934h6.936l5.898-12.971h23.744zm-2.676-5.899h-18.387l9.187-20.932 9.2 20.932zm36.213 18.87h27.79v-5.898h-21.343V516.25h20.73v-5.898h-20.73v-14.486h21.343v-5.898h-27.79v51.742zm85.274-12.971 5.898 12.971h6.93l-24.704-53.934-24.703 53.934h6.936l5.899-12.971h23.744zm-2.682-5.899H865.05l9.2-20.932 9.194 20.932" style="fill:#6B7280;fill-opacity:1;fill-rule:nonzero;stroke:none" transform="translate(98.847 -259.733)"></path></svg>',
            ],
            [
                'name' => 'Second',
                'href' => '#',
                'svg' => '<svg class="mx-auto h-auto w-32 py-3 sm:mx-0 lg:w-40 lg:py-5" viewBox="0 0 150 40" fill="none"><path stroke="#6B7280" stroke-miterlimit="3.864" stroke-width=".851" d="M.492 38.141h149.015M.492.911h149.015"></path><path fill="#6B7280" d="M.545 33.488h27.878V5.565H.545v27.923Z"></path><path fill="#d4d4d4" d="m2.176 22.319 12.286-14.24 12.286 14.24H18.65l-4.188-5.026-4.188 5.026H2.176ZM2.176 23.436h8.098v1.395h8.377v-1.395h8.097v5.584H2.176v-5.584Z"></path><path fill="#6B7280" fill-rule="evenodd" d="M56.51 25.334c0-2.875 1.218-5.637 4.462-5.637 3.244 0 4.463 2.762 4.463 5.637 0 2.737-1.219 5.499-4.463 5.499-3.244 0-4.462-2.762-4.462-5.5Zm-3.612 0c0 4.738 2.99 8.534 8.074 8.534s8.074-3.796 8.074-8.534c0-4.878-2.99-8.673-8.074-8.673s-8.074 3.795-8.074 8.673ZM85.25 22.573c-.438-3.796-3.473-5.913-7.084-5.913-5.085 0-8.074 3.797-8.074 8.673 0 4.74 2.989 8.535 8.074 8.535 4.024 0 6.853-2.624 7.222-6.717H81.89c-.275 2.163-1.518 3.68-3.724 3.68-3.245 0-4.464-2.761-4.464-5.498 0-2.875 1.219-5.637 4.464-5.637 1.794 0 3.357 1.244 3.588 2.877h3.496ZM86.688 33.477h3.611V26.39h6.648v7.086h3.612V17.05h-3.612v6.304H90.3V17.05h-3.612v16.426ZM106.898 33.477h3.611V20.089h4.923V17.05h-13.457v3.038h4.923v13.388ZM116.847 33.477h3.611V17.05h-3.611v16.426ZM123.397 33.477h12.468v-3.035h-8.856v-4.027h7.959v-2.808h-7.959V20.09h8.672V17.05h-12.284v16.426Z" clip-rule="evenodd"></path><path fill="#6B7280" d="M137.873 33.477h3.611V26.69h6.878v-2.807h-6.878V20.09h7.937V17.05h-11.548v16.426ZM37.73 33.49h3.608v-7.085h6.648v7.086h3.612V17.065h-3.612v6.303h-6.648v-6.303h-3.607v16.426Z"></path></svg>',
            ],
            [
                'name' => 'Third',
                'href' => '#',
                'svg' => '<svg class="mx-auto h-auto w-32 py-3 sm:mx-0 lg:w-40 lg:py-5" viewBox="0 0 100 30" fill="none"><text x="10" y="20" font-family="sans-serif" font-size="14" font-weight="bold" fill="#6B7280">BUILDR</text></svg>',
            ],
            [
                'name' => 'Fourth',
                'href' => '#',
                'svg' => '<svg class="mx-auto h-auto w-32 py-3 sm:mx-0 lg:w-40 lg:py-5" viewBox="0 0 100 30" fill="none"><text x="10" y="20" font-family="sans-serif" font-size="14" font-weight="bold" fill="#6B7280">CONSTRUCT</text></svg>',
            ],
        ];
    }

    /**
     * Get FAQs.
     */
    public static function getFaqs(string $locale = 'en'): array
    {
        $path = $locale === 'fr' 
            ? resource_path('../src/data_files/fr/faqs.json')
            : resource_path('../src/data_files/faqs.json');

        if (file_exists($path)) {
            return json_decode(file_get_contents($path), true);
        }

        return [
            'subTitle' => 'Ask us anything about our brand and products, and get factual responses.',
            'faqs' => [],
        ];
    }

    /**
     * Get Features.
     */
    public static function getFeatures(string $locale = 'en'): array
    {
        $path = $locale === 'fr'
            ? resource_path('../src/data_files/fr/features.json')
            : resource_path('../src/data_files/features.json');

        if (file_exists($path)) {
            return json_decode(file_get_contents($path), true);
        }

        return [];
    }

    /**
     * Get Pricing.
     */
    public static function getPricing(string $locale = 'en'): array
    {
        $path = $locale === 'fr'
            ? resource_path('../src/data_files/fr/pricing.json')
            : resource_path('../src/data_files/pricing.json');

        if (file_exists($path)) {
            return json_decode(file_get_contents($path), true);
        }

        return [];
    }

    /**
     * Get Products Catalog.
     */
    public static function getProducts(string $locale = 'en'): array
    {
        $raw = [
            'item-t845' => [
                'id' => 'item-t845',
                'title' => '[VERIFIED PROJECT NAME]',
                'description' => 'Branding & Visual Identity System',
                'category' => 'Branding',
                'client' => '[VERIFIED CLIENT / PRIVATE CLIENT / SELF-INITIATED]',
                'challenge' => 'Developing a cohesive, modern visual brand identity to establish credibility in the market.',
                'approach' => 'Crafted an identity system with logo direction, bespoke typography, and versatile color hierarchy.',
                'deliverables' => 'Brand Identity Guide • Logo Suite • Typography System • Social Templates',
                'outcome' => 'Unified brand touchpoints and elevated market recognition. [VERIFIED]',
                'tools' => '[VERIFIED TOOLS OR FRAMEWORKS]',
                'main' => [
                    'id' => 1,
                    'content' => 'A comprehensive branding system designed to give the organization a recognizable, enduring presence across digital, print, and social touchpoints.',
                    'imgCard' => asset('images/product-image-1.avif'),
                    'imgMain' => asset('images/product-image-main-1.avif'),
                    'imgAlt' => 'ColorSpire branding and visual identity showcase',
                ],
                'tabs' => [
                    ['id' => 'tabs-with-card-item-1', 'dataTab' => '#tabs-with-card-1', 'title' => 'Overview'],
                    ['id' => 'tabs-with-card-item-2', 'dataTab' => '#tabs-with-card-2', 'title' => 'Deliverables'],
                    ['id' => 'tabs-with-card-item-3', 'dataTab' => '#tabs-with-card-3', 'title' => 'Outcome'],
                ],
                'longDescription' => [
                    'title' => 'Purposeful Identity Systems',
                    'subTitle' => 'Every visual has a purpose. We combine strategy, creativity, and execution to build identities that communicate clearly and inspire trust.',
                    'btnTitle' => 'Discuss a Similar Project',
                    'btnURL' => '/contact',
                ],
                'descriptionList' => [
                    ['title' => 'Strategic Foundation', 'subTitle' => 'Grounded in business goals, audience insight, and competitive positioning.'],
                    ['title' => 'Consistent System', 'subTitle' => 'Designed to scale seamlessly from business cards to billboards and digital platforms.'],
                    ['title' => 'Practical Application', 'subTitle' => 'Delivered with comprehensive guidelines ensuring easy implementation for internal teams.'],
                ],
                'specificationsLeft' => [
                    ['title' => 'Client', 'subTitle' => '[VERIFIED CLIENT / PRIVATE CLIENT / SELF-INITIATED]'],
                    ['title' => 'Category', 'subTitle' => 'Branding & Visual Identity'],
                    ['title' => 'Scope', 'subTitle' => 'Logo, Typography, Color Palette, Brand Guidelines'],
                    ['title' => 'Timeline', 'subTitle' => '[VERIFIED TIMELINE]'],
                ],
                'specificationsRight' => [
                    ['title' => 'Deliverables', 'subTitle' => 'Logo Suite, Brand Book, Collateral Templates, Social Assets'],
                    ['title' => 'Tools & Technology', 'subTitle' => '[VERIFIED TOOLS OR FRAMEWORKS]'],
                    ['title' => 'Market', 'subTitle' => 'Zambia & Regional'],
                    ['title' => 'Status', 'subTitle' => 'Completed & Verified'],
                ],
                'blueprints' => [
                    'first' => asset('images/blueprint-1.avif'),
                    'second' => asset('images/blueprint-2.avif'),
                ],
            ],
            'item-a765' => [
                'id' => 'item-a765',
                'title' => '[VERIFIED PROJECT NAME]',
                'description' => 'Web Design & Responsive Development',
                'category' => 'Web',
                'client' => '[VERIFIED CLIENT / PRIVATE CLIENT / SELF-INITIATED]',
                'challenge' => 'Redesigning an outdated digital presence into a responsive, conversion-oriented platform.',
                'approach' => 'Structured a content-first information architecture with performance-focused responsive development.',
                'deliverables' => 'Website strategy • UI design • Responsive development • Deployment support',
                'outcome' => 'Significantly faster load times and increased inquiry conversions. [VERIFIED]',
                'tools' => '[VERIFIED TOOLS OR FRAMEWORKS]',
                'main' => [
                    'id' => 2,
                    'content' => 'Modern, responsive web platform engineered for performance, clarity, and intuitive user journeys that convert visitors into active clients.',
                    'imgCard' => asset('images/product-image-2.avif'),
                    'imgMain' => asset('images/product-image-main-2.avif'),
                    'imgAlt' => 'ColorSpire responsive website project showcase',
                ],
                'tabs' => [
                    ['id' => 'tabs-with-card-item-1', 'dataTab' => '#tabs-with-card-1', 'title' => 'Overview'],
                    ['id' => 'tabs-with-card-item-2', 'dataTab' => '#tabs-with-card-2', 'title' => 'Specifications'],
                    ['id' => 'tabs-with-card-item-3', 'dataTab' => '#tabs-with-card-3', 'title' => 'Architecture'],
                ],
                'longDescription' => [
                    'title' => 'Websites Built Around People, Not Just Screens',
                    'subTitle' => 'Responsive digital experiences that make it easy for visitors to understand your offer, trust your business, and take the next step.',
                    'btnTitle' => 'Start a Website Project',
                    'btnURL' => '/contact',
                ],
                'descriptionList' => [
                    ['title' => 'Clarity & Hierarchy', 'subTitle' => 'Clear messaging and focused navigation that eliminate cognitive friction.'],
                    ['title' => 'Responsive Performance', 'subTitle' => 'Flawless presentation on mobile, tablet, and desktop viewports.'],
                    ['title' => 'Maintainability', 'subTitle' => 'Clean, modern architecture built for longevity and effortless content updates.'],
                ],
                'specificationsLeft' => [
                    ['title' => 'Client', 'subTitle' => '[VERIFIED CLIENT / PRIVATE CLIENT / SELF-INITIATED]'],
                    ['title' => 'Framework', 'subTitle' => 'Laravel & Modern CSS'],
                    ['title' => 'Deliverables', 'subTitle' => 'UI Design, Frontend, Backend, Deployment'],
                    ['title' => 'Responsiveness', 'subTitle' => 'Full Mobile & Desktop Optimization'],
                ],
                'tableData' => [
                    [
                        'feature' => ['Project Attribute', 'Detail'],
                        'description' => [
                            ['Category', 'Web Design & Development'],
                            ['Architecture', 'Modular & Component-Driven'],
                            ['Performance', 'Optimized Core Web Vitals'],
                            ['Deployment', 'Verified Production Environment'],
                            ['Status', '[VERIFIED PROJECT COMPLETED]'],
                        ],
                    ],
                ],
                'blueprints' => [
                    'first' => asset('images/blueprint-1.avif'),
                    'second' => asset('images/blueprint-2.avif'),
                ],
            ],
            'item-b203' => [
                'id' => 'item-b203',
                'title' => '[VERIFIED PROJECT NAME]',
                'description' => 'Social Content & Visual Campaigns',
                'category' => 'Social Content',
                'client' => '[VERIFIED CLIENT / PRIVATE CLIENT / SELF-INITIATED]',
                'challenge' => 'Maintaining brand consistency and audience engagement across multi-platform social channels.',
                'approach' => 'Designed structured content templates and campaign visuals tailored to audience behavior.',
                'deliverables' => 'Content calendars • Post design • Publishing support • Platform-ready assets',
                'outcome' => 'Enhanced organic engagement and strong visual recall. [VERIFIED]',
                'tools' => '[VERIFIED TOOLS OR FRAMEWORKS]',
                'main' => [
                    'id' => 3,
                    'content' => 'High-impact visual content created to help ambitious brands communicate regularly without sacrificing identity or aesthetic consistency.',
                    'imgCard' => asset('images/product-image-3.avif'),
                    'imgMain' => asset('images/product-image-main-3.avif'),
                    'imgAlt' => 'ColorSpire social content and campaign showcase',
                ],
                'tabs' => [
                    ['id' => 'tabs-with-card-item-1', 'dataTab' => '#tabs-with-card-1', 'title' => 'Strategy'],
                    ['id' => 'tabs-with-card-item-2', 'dataTab' => '#tabs-with-card-2', 'title' => 'Content'],
                    ['id' => 'tabs-with-card-item-3', 'dataTab' => '#tabs-with-card-3', 'title' => 'Results'],
                ],
                'longDescription' => [
                    'title' => 'Keep Your Brand Visible Without Losing Its Identity',
                    'subTitle' => 'From social graphics to campaign content, we help brands create a recognizable visual presence where audiences spend time.',
                    'btnTitle' => 'Plan My Content',
                    'btnURL' => '/contact',
                ],
                'descriptionList' => [
                    ['title' => 'Channel Consistency', 'subTitle' => 'Harmonious visuals across Instagram, LinkedIn, Facebook, and TikTok.'],
                    ['title' => 'Engaging Formats', 'subTitle' => 'Educational carousels, promotional announcements, and animated highlights.'],
                    ['title' => 'Strategic Cadence', 'subTitle' => 'Planned publishing schedules built around real campaign goals.'],
                ],
                'specificationsLeft' => [
                    ['title' => 'Client', 'subTitle' => '[VERIFIED CLIENT / PRIVATE CLIENT / SELF-INITIATED]'],
                    ['title' => 'Channels', 'subTitle' => 'Social Media & Digital Channels'],
                    ['title' => 'Asset Formats', 'subTitle' => 'Static Graphics, Carousels, Short-Form Clips'],
                    ['title' => 'Cadence', 'subTitle' => 'Weekly & Campaign-Based'],
                ],
                'specificationsRight' => [
                    ['title' => 'Deliverables', 'subTitle' => 'Content Calendar, Post Assets, Story Templates'],
                    ['title' => 'Outcome', 'subTitle' => 'Increased Engagement & Brand Recall [VERIFIED]'],
                    ['title' => 'Tools', 'subTitle' => '[VERIFIED TOOLS OR FRAMEWORKS]'],
                    ['title' => 'Status', 'subTitle' => 'Active & Verified'],
                ],
                'blueprints' => [
                    'first' => asset('images/blueprint-1.avif'),
                    'second' => asset('images/blueprint-2.avif'),
                ],
            ],
            'item-f303' => [
                'id' => 'item-f303',
                'title' => '[VERIFIED PROJECT NAME]',
                'description' => 'Marketing Collateral & Print Design',
                'category' => 'Graphic Design',
                'client' => '[VERIFIED CLIENT / PRIVATE CLIENT / SELF-INITIATED]',
                'challenge' => 'Creating professional print and event materials that reinforce credibility during high-stakes business presentations.',
                'approach' => 'Crafted tactile, premium collateral with strict typography, high-res layouts, and print-ready specifications.',
                'deliverables' => 'Brochures • Pull-up banners • Business materials • Event signage',
                'outcome' => 'Polished professional presentation praised by stakeholders. [VERIFIED]',
                'tools' => '[VERIFIED TOOLS OR FRAMEWORKS]',
                'main' => [
                    'id' => 4,
                    'content' => 'Precision-crafted graphic materials for business communications, event launches, and everyday commercial presence.',
                    'imgCard' => asset('images/product-image-4.avif'),
                    'imgMain' => asset('images/product-image-main-4.avif'),
                    'imgAlt' => 'ColorSpire print and marketing collateral showcase',
                ],
                'tabs' => [
                    ['id' => 'tabs-with-card-item-1', 'dataTab' => '#tabs-with-card-1', 'title' => 'Overview'],
                    ['id' => 'tabs-with-card-item-2', 'dataTab' => '#tabs-with-card-2', 'title' => 'Specifications'],
                    ['id' => 'tabs-with-card-item-3', 'dataTab' => '#tabs-with-card-3', 'title' => 'Production'],
                ],
                'longDescription' => [
                    'title' => 'Tangible Materials That Command Attention',
                    'subTitle' => 'From physical business collateral to multi-format event graphics, we make sure every printed piece represents your business with excellence.',
                    'btnTitle' => 'Request Graphic Design',
                    'btnURL' => '/contact',
                ],
                'descriptionList' => [
                    ['title' => 'Print-Ready Precision', 'subTitle' => 'Engineered with precise bleed, margins, CMYK color profiles, and vector resolution.'],
                    ['title' => 'Brand Continuity', 'subTitle' => 'Direct alignment with digital branding for an uninterrupted brand experience.'],
                    ['title' => 'Diverse Formats', 'subTitle' => 'From compact corporate brochures to large-format pull-up banners.'],
                ],
                'specificationsLeft' => [
                    ['title' => 'Client', 'subTitle' => '[VERIFIED CLIENT / PRIVATE CLIENT / SELF-INITIATED]'],
                    ['title' => 'Formats', 'subTitle' => 'Print & Digital Collateral'],
                    ['title' => 'Deliverables', 'subTitle' => 'Pull-Up Banners, Brochures, Business Packs'],
                    ['title' => 'Production', 'subTitle' => 'High-Resolution Print Assets'],
                ],
                'specificationsRight' => [
                    ['title' => 'Color Standards', 'subTitle' => 'CMYK, Pantone & Hex Harmonization'],
                    ['title' => 'Application', 'subTitle' => 'Corporate & Event Marketing'],
                    ['title' => 'Tools', 'subTitle' => '[VERIFIED TOOLS OR FRAMEWORKS]'],
                    ['title' => 'Status', 'subTitle' => 'Completed & Verified'],
                ],
                'blueprints' => [
                    'first' => asset('images/blueprint-1.avif'),
                    'second' => asset('images/blueprint-2.avif'),
                ],
            ],
        ];

        $products = [];
        foreach ($raw as $key => $item) {
            $item['data'] = $item;
            $products[$key] = $item;
        }

        return $products;
    }

    /**
     * Get single product by id.
     */
    public static function getProduct(string $id, string $locale = 'en'): ?array
    {
        $products = self::getProducts($locale);
        return $products[$id] ?? null;
    }

    /**
     * Get Blog posts.
     */
    public static function getBlogPosts(string $locale = 'en'): array
    {
        $raw = [
            'post-1' => [
                'id' => 'post-1',
                'title' => 'Why Your Business Needs More Than a Logo',
                'description' => 'Explain the difference between a logo and a complete visual identity.',
                'author' => 'ColorSpire Team',
                'authorImage' => asset('images/blog/jacob.avif'),
                'authorImageAlt' => 'ColorSpire Author',
                'pubDate' => '2024-03-01',
                'cardImage' => asset('images/blog/post-1.avif'),
                'cardImageAlt' => 'Branding and visual identity concepts',
                'readTime' => 4,
                'tags' => ['branding', 'identity', 'strategy'],
                'contents' => [
                    "A logo is often the first thing people think of when starting a business. But while a logo serves as a recognizable mark, it is only a single element within a broader visual identity system.",
                    "A complete visual identity establishes how your brand speaks, looks, and feels across every interaction. It encompasses typography choices, color palettes, spacing rules, imagery styles, and tone of voice that make your business instantly recognizable even when the logo isn't in view.",
                    "Without a unified system, marketing collateral quickly becomes disjointed. Social graphics look different from printed flyers, and your website feels disconnected from your physical touchpoints. This inconsistency erodes customer trust and dilutes brand recall.",
                    "At ColorSpire, we design cohesive brand systems that ensure every visual asset serves a purpose. By aligning your visual identity with your business strategy, we help you communicate clearly, project authority, and build lasting influence in your market.",
                ],
            ],
            'post-2' => [
                'id' => 'post-2',
                'title' => 'What Makes a Small Business Website Look Professional?',
                'description' => 'Cover hierarchy, spacing, typography, trust, mobile responsiveness and clear CTAs.',
                'author' => 'ColorSpire Team',
                'authorImage' => asset('images/blog/brad.avif'),
                'authorImageAlt' => 'ColorSpire Author',
                'pubDate' => '2024-03-08',
                'cardImage' => asset('images/blog/post-2.avif'),
                'cardImageAlt' => 'Modern responsive website design on screens',
                'readTime' => 5,
                'tags' => ['web-design', 'ui-ux', 'responsiveness'],
                'contents' => [
                    "Your website is often the front door of your business. In a competitive digital landscape, a website that feels outdated or cluttered immediately causes visitors to question credibility and seek alternatives.",
                    "Professional web design begins with clear visual hierarchy and generous whitespace. Guiding a visitor's eyes effortlessly from the primary headline to key value propositions prevents cognitive overload and keeps attention focused.",
                    "Mobile responsiveness is non-negotiable. Modern visitors expect seamless navigation, fast loading times, and legible typography regardless of their screen size. If a site breaks on a smartphone, you lose potential customers before they even read your offer.",
                    "Finally, trust elements and direct calls to action turn interest into business outcomes. Clear contact pathways, transparent service descriptions, and genuine testimonials give prospects the confidence to take the next step.",
                ],
            ],
            'post-3' => [
                'id' => 'post-3',
                'title' => '7 Design Mistakes That Make Business Graphics Look Amateur',
                'description' => 'Actionable advice for business owners producing social media and promotional graphics.',
                'author' => 'ColorSpire Team',
                'authorImage' => asset('images/blog/anna.avif'),
                'authorImageAlt' => 'ColorSpire Author',
                'pubDate' => '2024-03-15',
                'cardImage' => asset('images/blog/post-3.avif'),
                'cardImageAlt' => 'Graphic design workspace and creative layouts',
                'readTime' => 4,
                'tags' => ['graphic-design', 'social-media', 'tips'],
                'contents' => [
                    "Producing day-to-day promotional materials is essential for maintaining brand awareness, but common design mistakes can inadvertently make an established business look amateur.",
                    "From font overloading and inadequate color contrast to stretching logos and cramming excessive text into a single flyer, minor missteps quickly accumulate and degrade the perception of quality.",
                    "Prioritizing readability over decoration is the foundational rule of effective communication. When every element on a graphic has a clear purpose and hierarchy, your audience can grasp the message in seconds.",
                    "Establishing simple brand templates and guidelines empowers businesses to produce consistent, high-impact visuals without diluting their visual influence.",
                ],
            ],
            'post-4' => [
                'id' => 'post-4',
                'title' => 'How to Prepare for a Website Project',
                'description' => 'Give clients a checklist covering goals, pages, content, brand assets and functionality.',
                'author' => 'ColorSpire Team',
                'authorImage' => asset('images/blog/jacob.avif'),
                'authorImageAlt' => 'ColorSpire Author',
                'pubDate' => '2024-03-22',
                'cardImage' => asset('images/blog/post-1.avif'),
                'cardImageAlt' => 'Website planning and wireframing checklist',
                'readTime' => 4,
                'tags' => ['web-development', 'planning', 'checklist'],
                'contents' => [
                    "A successful website build begins long before the first line of code is written. Proper preparation accelerates development, avoids costly revisions, and ensures the end product aligns with your business goals.",
                    "Start by defining your primary objective: are you seeking direct leads, educating prospective clients, or providing an interactive portfolio? Knowing your primary conversion goal shapes page structure and layout decisions.",
                    "Organizing your assets beforehand—including high-resolution logos, brand color codes, approved photography, and draft copy—keeps timelines on track and allows designers to create layouts tailored to real content.",
                    "At ColorSpire, we collaborate closely with clients through every stage of preparation, turning rough concepts into structured, launch-ready web experiences.",
                ],
            ],
            'post-5' => [
                'id' => 'post-5',
                'title' => 'From Flyer to Full Digital Presence',
                'description' => 'Explain how businesses can evolve from isolated graphics into consistent branding and web presence.',
                'author' => 'ColorSpire Team',
                'authorImage' => asset('images/blog/anna.avif'),
                'authorImageAlt' => 'ColorSpire Author',
                'pubDate' => '2024-03-29',
                'cardImage' => asset('images/blog/post-2.avif'),
                'cardImageAlt' => 'Digital presence across devices and print collateral',
                'readTime' => 5,
                'tags' => ['branding', 'digital-presence', 'business-growth'],
                'contents' => [
                    "Many growing businesses start with isolated creative materials—a printed flyer, a temporary social banner, or a basic business card. While functional in the early days, fragmented materials eventually struggle to support bigger ambitions.",
                    "Evolving into a full digital presence means connecting your visual identity across every channel where your customers spend time, from planned social content to a responsive website.",
                    "Consistency builds familiarity, and familiarity builds trust. When a potential client encounters your brand on social media, visits your website, and receives your proposal, the visual continuity reinforces that they are dealing with a dependable partner.",
                    "ColorSpire partners with businesses to bridge this gap, transforming one-off creative needs into scalable digital ecosystems built to inspire and succeed.",
                ],
            ],
        ];

        $posts = [];
        foreach ($raw as $key => $item) {
            $item['data'] = $item;
            $posts[$key] = $item;
        }

        return $posts;
    }

    /**
     * Get single blog post.
     */
    public static function getBlogPost(string $id, string $locale = 'en'): ?array
    {
        $posts = self::getBlogPosts($locale);
        return $posts[$id] ?? null;
    }

    /**
     * Get Insights catalog.
     */
    public static function getInsights(string $locale = 'en'): array
    {
        $raw = [
            'insight-1' => [
                'id' => 'insight-1',
                'title' => 'Design That Communicates: Visuals with Purpose',
                'description' => 'Every visual should have a purpose, not just decoration. How intentional design drives genuine business impact.',
                'cardImage' => asset('images/insights/insight-1.avif'),
                'cardImageAlt' => 'ColorSpire visual design with clear purpose',
            ],
            'insight-2' => [
                'id' => 'insight-2',
                'title' => 'Digital Experiences That Work Across Every Screen',
                'description' => 'Why websites must be clear, responsive, maintainable and useful to turn curious visitors into loyal clients.',
                'cardImage' => asset('images/insights/insight-2.avif'),
                'cardImageAlt' => 'Responsive web layout on multiple screen sizes',
            ],
            'insight-3' => [
                'id' => 'insight-3',
                'title' => 'Zambian Roots, Global Ambition: Designing Visual Influence',
                'description' => 'Combining local cultural understanding with international design standards to build brands ready for a wider market.',
                'cardImage' => asset('images/insights/insight-3.avif'),
                'cardImageAlt' => 'Creative digital solutions and global ambition',
            ],
        ];

        $insights = [];
        foreach ($raw as $key => $item) {
            $item['data'] = $item;
            $insights[$key] = $item;
        }

        return $insights;
    }

    /**
     * Get single insight with parsed HTML content.
     */
    public static function getInsight(string $id, string $locale = 'en'): ?array
    {
        $insights = self::getInsights($locale);
        if (!isset($insights[$id])) {
            return null;
        }

        $insight = $insights[$id];
        $mdPath = resource_path("../src/content/insights/{$locale}/{$id}.md");
        if (!file_exists($mdPath)) {
            $mdPath = resource_path("../src/content/insights/en/{$id}.md");
        }

        if (file_exists($mdPath)) {
            $raw = file_get_contents($mdPath);
            // strip frontmatter
            if (preg_match('/^---\s*\n(.*?)\n---\s*\n(.*)$/s', $raw, $matches)) {
                $markdown = $matches[2];
            } else {
                $markdown = $raw;
            }
            $insight['content_html'] = Str::markdown($markdown);
            $insight['content'] = $insight['content_html'];
            $insight['data']['content'] = $insight['content'];
        } else {
            $insight['content_html'] = '';
            $insight['content'] = '';
            $insight['data']['content'] = '';
        }

        return $insight;
    }
}
