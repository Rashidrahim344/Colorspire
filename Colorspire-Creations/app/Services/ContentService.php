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
            'title' => 'ScrewFast',
            'tagline' => $locale === 'fr' ? 'Outils de quincaillerie de haute qualité' : 'Top-quality Hardware Tools',
            'description' => $locale === 'fr' 
                ? 'ScrewFast propose des outils de quincaillerie de premier ordre et des services de construction experts pour répondre à tous vos besoins de projet.'
                : 'ScrewFast offers top-tier hardware tools and expert construction services to meet all your project needs. Start exploring and contact our sales team for superior quality and reliability.',
            'description_short' => $locale === 'fr'
                ? 'ScrewFast propose des outils de quincaillerie de premier ordre et des services de construction experts.'
                : 'ScrewFast offers top-tier hardware tools and expert construction services to meet all your project needs.',
            'url' => '#!',
            'author' => 'Emil Gulamov',
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
            'title' => "{$site['title']}: : Hardware Tools & Construction Services",
            'description' => "Equip your projects with ScrewFast's top-quality hardware tools and expert construction services. Trusted by industry leaders, ScrewFast offers simplicity, affordability, and reliability. Experience the difference with user-centric design and cutting-edge tools. Start exploring now!",
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
            ['name' => 'Produits', 'url' => '/fr/products'],
            ['name' => 'Services', 'url' => '/fr/services'],
            ['name' => 'Blog', 'url' => '/fr/blog'],
            ['name' => 'Contact', 'url' => '/fr/contact'],
        ] : [
            ['name' => 'Home', 'url' => '/'],
            ['name' => 'Products', 'url' => '/products'],
            ['name' => 'Services', 'url' => '/services'],
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
                    'section' => 'Écosystème',
                    'links' => [
                        ['name' => 'Documentation', 'url' => '/fr/welcome-to-docs/'],
                        ['name' => 'Outils et Équipements', 'url' => '/fr/products'],
                        ['name' => 'Services de Construction', 'url' => '/fr/services'],
                    ],
                ],
                [
                    'section' => 'Société',
                    'links' => [
                        ['name' => 'À propos de nous', 'url' => '#'],
                        ['name' => 'Blog', 'url' => '/fr/blog'],
                        ['name' => 'Carrières', 'url' => '#'],
                        ['name' => 'Clients', 'url' => '#'],
                    ],
                ],
            ];
        }

        return [
            [
                'section' => 'Ecosystem',
                'links' => [
                    ['name' => 'Documentation', 'url' => '/welcome-to-docs/'],
                    ['name' => 'Tools & Equipment', 'url' => '/products'],
                    ['name' => 'Construction Services', 'url' => '/services'],
                ],
            ],
            [
                'section' => 'Company',
                'links' => [
                    ['name' => 'About us', 'url' => '#'],
                    ['name' => 'Blog', 'url' => '/blog'],
                    ['name' => 'Careers', 'url' => '#'],
                    ['name' => 'Customers', 'url' => '#'],
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
            'facebook' => '#',
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
                'title' => 'SF-TB T845',
                'description' => 'Machine Screws',
                'main' => [
                    'id' => 1,
                    'content' => 'Introducing the SF-TB T845 – your go-to solution for precision fastening in machinery and equipment. This comprehensive set of machine screws is meticulously crafted to meet the stringent demands of industrial applications, ensuring secure and reliable fastening.',
                    'imgCard' => asset('images/product-image-1.avif'),
                    'imgMain' => asset('images/product-image-main-1.avif'),
                    'imgAlt' => 'Mockup boxes of machine screws set',
                ],
                'tabs' => [
                    ['id' => 'tabs-with-card-item-1', 'dataTab' => '#tabs-with-card-1', 'title' => 'Description'],
                    ['id' => 'tabs-with-card-item-2', 'dataTab' => '#tabs-with-card-2', 'title' => 'Specifications'],
                    ['id' => 'tabs-with-card-item-3', 'dataTab' => '#tabs-with-card-3', 'title' => 'Blueprints'],
                ],
                'longDescription' => [
                    'title' => 'Precision Fastening Solutions',
                    'subTitle' => 'The SF-TB T845 Machine Screws offer unparalleled precision and reliability for industrial applications, ensuring seamless operation and longevity for your machinery and equipment.',
                    'btnTitle' => 'Contact sales to learn more',
                    'btnURL' => '#',
                ],
                'descriptionList' => [
                    ['title' => 'Durability', 'subTitle' => 'Crafted from high-quality materials, these machine screws are built to withstand the rigors of industrial environments.'],
                    ['title' => 'Precision Engineering', 'subTitle' => 'Engineered with precision-cut threads and exact specifications, ensuring a tight and secure fit for every application.'],
                    ['title' => 'Versatility', 'subTitle' => 'Suitable for a wide range of machinery and equipment, providing versatile fastening solutions for various industrial needs.'],
                ],
                'specificationsLeft' => [
                    ['title' => 'Material Composition', 'subTitle' => 'Constructed from premium-grade steel or alloy for exceptional strength and durability.'],
                    ['title' => 'Surface Finish', 'subTitle' => 'Finished with a protective coating to enhance corrosion resistance and extend service life.'],
                    ['title' => 'Quantity Per Set', 'subTitle' => 'Each set contains a comprehensive assortment of machine screws to meet diverse industrial requirements.'],
                    ['title' => 'Size Range', 'subTitle' => 'Available in various sizes and lengths to accommodate different machinery and equipment specifications.'],
                ],
                'specificationsRight' => [
                    ['title' => 'Thread Specifications', 'subTitle' => 'Precision-engineered threads ensure optimal grip and reliability, even in high-vibration environments.'],
                    ['title' => 'Load Capacity', 'subTitle' => 'Designed to meet or exceed industry standards for load-bearing capacity, ensuring safe and reliable operation.'],
                    ['title' => 'Certifications', 'subTitle' => 'Compliant with relevant industry standards and certifications, guaranteeing quality and reliability.'],
                    ['title' => 'Applications', 'subTitle' => 'Ideal for use in a wide range of industrial machinery, equipment, and assemblies that demand precise and secure fastening.'],
                ],
                'blueprints' => [
                    'first' => asset('images/blueprint-1.avif'),
                    'second' => asset('images/blueprint-2.avif'),
                ],
            ],
            'item-a765' => [
                'id' => 'item-a765',
                'title' => 'SF-AB A765',
                'description' => 'Assorted Screw Set',
                'main' => [
                    'id' => 2,
                    'content' => 'Introducing the SF-AB A765 Assorted Screw Set – the ultimate solution for your screw fastening needs. This comprehensive set includes a wide variety of screws meticulously curated to tackle various projects with ease and precision.',
                    'imgCard' => asset('images/product-image-2.avif'),
                    'imgMain' => asset('images/product-image-main-2.avif'),
                    'imgAlt' => 'Mockup boxes of assorted screw set',
                ],
                'tabs' => [
                    ['id' => 'tabs-with-card-item-1', 'dataTab' => '#tabs-with-card-1', 'title' => 'Description'],
                    ['id' => 'tabs-with-card-item-2', 'dataTab' => '#tabs-with-card-2', 'title' => 'Specifications'],
                    ['id' => 'tabs-with-card-item-3', 'dataTab' => '#tabs-with-card-3', 'title' => 'Blueprints'],
                ],
                'longDescription' => [
                    'title' => 'Versatile Screw Fastening Solutions',
                    'subTitle' => "The SF-AB A765 Assorted Screw Set offers unmatched versatility and convenience, making it the perfect choice for DIY enthusiasts and professionals alike. With a comprehensive selection of screws, you'll always have the right fastener for the job.",
                    'btnTitle' => 'Contact sales to learn more',
                    'btnURL' => '#',
                ],
                'descriptionList' => [
                    ['title' => 'Wide Variety', 'subTitle' => 'Includes a diverse range of screw types and sizes to accommodate various applications and materials.'],
                    ['title' => 'Ease of Use', 'subTitle' => 'Each screw is designed for effortless installation, ensuring hassle-free fastening every time.'],
                    ['title' => 'Convenience', 'subTitle' => 'Eliminates the need for multiple trips to the hardware store, saving time and effort on your projects.'],
                ],
                'specificationsLeft' => [
                    ['title' => 'Material', 'subTitle' => 'Constructed from high-quality materials such as stainless steel, ensuring durability and corrosion resistance.'],
                    ['title' => 'Assortment', 'subTitle' => 'Contains a generous assortment of screws, including wood screws, machine screws, and sheet metal screws.'],
                    ['title' => 'Quantity', 'subTitle' => 'Each set includes a sufficient quantity of screws to handle a wide range of projects and tasks.'],
                    ['title' => 'Sizes', 'subTitle' => 'Available in various sizes to suit different project requirements, ensuring compatibility and versatility.'],
                ],
                'tableData' => [
                    [
                        'feature' => ['Specification', 'Value'],
                        'description' => [
                            ['Length (mm)', 'Various'],
                            ['Weight (g)', 'N/A'],
                            ['Material', 'Stainless Steel'],
                            ['Finish', 'Assorted'],
                            ['Package Contents', 'Various screws in a set'],
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
                'title' => 'SF-BN B203',
                'description' => 'Tap Bolts and Nuts Set',
                'main' => [
                    'id' => 3,
                    'content' => 'Meet the SF-BN B203 – your reliable companion for professional-grade fastening. This comprehensive box set comes with a versatile selection of tap bolts and nuts, meticulously crafted to provide the strongest hold for your construction and assembly projects.',
                    'imgCard' => asset('images/product-image-3.avif'),
                    'imgMain' => asset('images/product-image-main-3.avif'),
                    'imgAlt' => 'Mockup boxes of a tap bolts and nuts set',
                ],
                'tabs' => [
                    ['id' => 'tabs-with-card-item-1', 'dataTab' => '#tabs-with-card-1', 'title' => 'Description'],
                    ['id' => 'tabs-with-card-item-2', 'dataTab' => '#tabs-with-card-2', 'title' => 'Specifications'],
                    ['id' => 'tabs-with-card-item-3', 'dataTab' => '#tabs-with-card-3', 'title' => 'Blueprints'],
                ],
                'longDescription' => [
                    'title' => 'Strength Meets Precision',
                    'subTitle' => 'The SF-BN B203 Tap Bolts and Nuts Set offers robust durability and precision for construction professionals, ensuring reliable performance in every application, from house framing to machinery assembly.',
                    'btnTitle' => 'Contact sales to learn more',
                    'btnURL' => '#',
                ],
                'descriptionList' => [
                    ['title' => 'Corrosion Resistance', 'subTitle' => 'Zinc coating not only provides a polished look but also shields against corrosion, ensuring longevity.'],
                    ['title' => 'Improved Safety', 'subTitle' => 'A secure fitting translates to safer structures with reduced risk of component failure.'],
                    ['title' => 'Convenience', 'subTitle' => 'This all-in-one set means you have the right size on hand, cutting down on project delays and additional trips to the hardware store.'],
                ],
                'specificationsLeft' => [
                    ['title' => 'Material Composition', 'subTitle' => 'Manufactured from high-grade steel, delivering strength and reliability for demanding applications.'],
                    ['title' => 'Surface Finish', 'subTitle' => 'Protected with a zinc coating to offer enhanced corrosion resistance and longevity.'],
                    ['title' => 'Quantity Per Set', 'subTitle' => 'The set includes a balanced selection of 25 tap bolts and 25 matching nuts.'],
                    ['title' => 'Size Assortment', 'subTitle' => 'Features a comprehensive range of sizes to cater to various project requirements, ensuring compatibility and versatility.'],
                ],
                'specificationsRight' => [
                    ['title' => 'Thread Details', 'subTitle' => 'Engineered with precision-cut threads for a secure fit and easy installation.'],
                    ['title' => 'Mechanical Properties', 'subTitle' => 'Each bolt and nut is designed to meet specific load rating or strength grades, suitable for structural applications.'],
                    ['title' => 'Standards and Certifications', 'subTitle' => 'Complies with relevant industry standards and certifications, ensuring consistent quality and safety.'],
                    ['title' => 'Suitable Applications', 'subTitle' => 'Ideal for a wide array of uses, from construction environments to mechanical assemblies that demand strong and secure joints.'],
                ],
                'blueprints' => [
                    'first' => asset('images/blueprint-1.avif'),
                    'second' => asset('images/blueprint-2.avif'),
                ],
            ],
            'item-f303' => [
                'id' => 'item-f303',
                'title' => 'SF-FN F303',
                'description' => 'Hex Bolts',
                'main' => [
                    'id' => 4,
                    'content' => 'Introducing the SF-FN F303 Hex Bolts – the perfect choice for heavy-duty fastening applications. Crafted with precision and durability in mind, these hex bolts provide the strength and reliability you need for your toughest projects.',
                    'imgCard' => asset('images/product-image-4.avif'),
                    'imgMain' => asset('images/product-image-main-4.avif'),
                    'imgAlt' => 'Mockup boxes of hex bolts',
                ],
                'tabs' => [
                    ['id' => 'tabs-with-card-item-1', 'dataTab' => '#tabs-with-card-1', 'title' => 'Description'],
                    ['id' => 'tabs-with-card-item-2', 'dataTab' => '#tabs-with-card-2', 'title' => 'Specifications'],
                    ['id' => 'tabs-with-card-item-3', 'dataTab' => '#tabs-with-card-3', 'title' => 'Blueprints'],
                ],
                'longDescription' => [
                    'title' => 'Heavy-Duty Fastening Solutions',
                    'subTitle' => "The SF-FN F303 Hex Bolts are designed to handle the toughest fastening challenges with ease. Whether you're working on construction projects or heavy machinery, these hex bolts deliver the strength and reliability you need.",
                    'btnTitle' => 'Contact sales to learn more',
                    'btnURL' => '#',
                ],
                'descriptionList' => [
                    ['title' => 'Strength and Durability', 'subTitle' => 'Constructed from high-quality materials, these hex bolts are built to withstand heavy loads and tough conditions.'],
                    ['title' => 'Precision Engineering', 'subTitle' => 'Engineered with precision-cut threads and exact specifications, ensuring a tight and secure fit every time.'],
                    ['title' => 'Versatility', 'subTitle' => 'Suitable for a wide range of applications, from construction to machinery, providing versatile fastening solutions.'],
                ],
                'specificationsLeft' => [
                    ['title' => 'Material', 'subTitle' => 'Made from premium-grade steel or alloy, offering exceptional strength and corrosion resistance.'],
                    ['title' => 'Thread Design', 'subTitle' => 'Precision-cut threads ensure optimal grip and reliability, even in high-stress environments.'],
                    ['title' => 'Quantity', 'subTitle' => 'Each set includes a sufficient quantity of hex bolts to tackle various projects and applications.'],
                    ['title' => 'Sizes', 'subTitle' => 'Available in a range of sizes to accommodate different project requirements, ensuring versatility and compatibility.'],
                ],
                'specificationsRight' => [
                    ['title' => 'Finish', 'subTitle' => 'Finished with a protective coating to enhance corrosion resistance and extend service life.'],
                    ['title' => 'Load Capacity', 'subTitle' => 'Designed to meet or exceed industry standards for load-bearing capacity, ensuring reliable performance under heavy loads.'],
                    ['title' => 'Certifications', 'subTitle' => 'Compliant with relevant industry standards and certifications, guaranteeing quality and reliability.'],
                    ['title' => 'Applications', 'subTitle' => 'Ideal for use in construction, machinery, automotive, and other heavy-duty applications that demand strong and reliable fastening.'],
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
                'title' => "Maximizing Efficiency with ScrewFast's Cutting-Edge Tools",
                'description' => 'Innovating Construction Efficiency with Precision Tools & Support',
                'author' => 'Jacob',
                'authorImage' => asset('images/blog/jacob.avif'),
                'authorImageAlt' => 'Avatar Description',
                'pubDate' => '2024-02-06',
                'cardImage' => asset('images/blog/post-1.avif'),
                'cardImageAlt' => 'Top view mechanical tools arrangement',
                'readTime' => 4,
                'tags' => ['tools', 'construction', 'workflow'],
                'contents' => [
                    "In today's fast-paced construction industry, efficiency is key to success. At ScrewFast, we understand the importance of optimizing your project workflow to meet deadlines and stay within budget. That's why we're thrilled to introduce our cutting-edge tools designed to empower your projects like never before.",
                    "Our range of hardware tools combines precision engineering with user-centric design, ensuring maximum productivity on every job site. From power drills to advanced fastening solutions, ScrewFast's tools are built to withstand the rigors of construction while streamlining your workflow.",
                    'One of our standout offerings is our intuitive dashboards, which provide real-time insights into project progress, resource allocation, and more. With user-friendly interfaces, navigating and overseeing your projects has never been easier.',
                    "But efficiency isn't just about the tools you use—it's also about the support you receive. That's why ScrewFast offers comprehensive documentation and expert guidance every step of the way. Our dedicated teams are committed to your success, providing personalized assistance to ensure you get the most out of our products.",
                    'Join the countless industry leaders who have already experienced the difference ScrewFast tools can make. With our cutting-edge solutions, you can fast-track your projects to success and stay ahead of the competition.',
                ],
            ],
            'post-2' => [
                'id' => 'post-2',
                'title' => 'Enhancing Safety and Workmanship with ScrewFast Construction Services',
                'description' => 'Quality construction services for lasting results',
                'author' => 'Brad',
                'authorImage' => asset('images/blog/brad.avif'),
                'authorImageAlt' => 'Avatar Description',
                'pubDate' => '2024-02-10',
                'cardImage' => asset('images/blog/post-2.avif'),
                'cardImageAlt' => 'Man in black sweatpants using DEWALT circular saw and cutting a wood plank',
                'readTime' => 5,
                'tags' => ['safety', 'craftsmanship', 'management'],
                'contents' => [
                    "When it comes to construction, safety and quality workmanship are non-negotiable. At ScrewFast, we're proud to offer a range of construction services that prioritize both, ensuring your projects are built to last.",
                    'Our team of skilled craftsmen brings precision and expertise to every job, from minor installations to large-scale structural work. With top-quality tools and materials from our extensive inventory, we guarantee the highest standards of safety and craftsmanship on every project.',
                    "But our commitment to excellence doesn't end there. We also provide thorough project management services to keep your build on track and within budget. From workflow coordination to stakeholder communication, ScrewFast handles the complexities so you can focus on your vision.",
                    "What sets ScrewFast apart is our dedication to ongoing support. We don't just finish the job and walk away—we're here for the long haul. Our maintenance services ensure that your construction remains in optimal condition, providing peace of mind for years to come.",
                    'For larger enterprise clients, we offer custom solutions tailored to your unique challenges. By understanding your specific needs, we engineer strategies aimed at maximizing efficiency and driving your business forward.',
                    'With ScrewFast construction services, you can trust that your projects are in good hands. Experience the difference today and see why so many clients choose ScrewFast for their construction needs.',
                ],
            ],
            'post-3' => [
                'id' => 'post-3',
                'title' => 'Simplify Procurement and Stay Within Budget with ScrewFast',
                'description' => 'Affordable, durable tools for efficient construction projects',
                'author' => 'Olga Zabegina',
                'role' => 'Strategic Marketing Manager',
                'authorImage' => asset('images/blog/anna.avif'),
                'authorImageAlt' => 'Avatar Description',
                'pubDate' => '2024-02-18',
                'cardImage' => asset('images/blog/post-3.avif'),
                'cardImageAlt' => 'Side view worker wearing gloves',
                'readTime' => 3,
                'tags' => ['procurement', 'affordable', 'efficiency'],
                'contents' => [
                    "Managing a construction project can be overwhelming, especially when it comes to procurement. That's why ScrewFast is committed to simplifying the process and keeping your projects within budget.",
                    'With our line of affordable tools and equipment, you can find everything you need without breaking the bank. Our user-centric design ensures that our products are easy to use, saving you time and frustration on the job site.',
                    "But affordability doesn't mean sacrificing quality. ScrewFast products are built to last, providing reliable performance and durability when you need it most. And with our comprehensive documentation and tutorials, you can integrate our products seamlessly into your workflow, maximizing efficiency and productivity.",
                    "Whether you're a DIY enthusiast or a seasoned contractor, ScrewFast has the solutions you need to succeed. Experience the difference for yourself and see why ScrewFast is the trusted choice for hardware and construction needs.",
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
                'title' => 'The Future of Construction Technology',
                'description' => "Explore ScrewFast's pioneering role in revolutionizing construction through advanced technology and innovative solutions.",
                'cardImage' => asset('images/insights/insight-1.avif'),
                'cardImageAlt' => 'Top view mechanical tools arrangement',
            ],
            'insight-2' => [
                'id' => 'insight-2',
                'title' => 'The Importance of Collaboration',
                'description' => "Explore how collaboration is central to ScrewFast's construction approach, driving effective communication and teamwork to achieve outstanding outcomes.",
                'cardImage' => asset('images/insights/insight-2.avif'),
                'cardImageAlt' => 'Top view mechanical tools arrangement',
            ],
            'insight-3' => [
                'id' => 'insight-3',
                'title' => 'The Impact of Sustainable Practices',
                'description' => 'Discover how ScrewFast is leading the charge in promoting sustainability within the construction industry',
                'cardImage' => asset('images/insights/insight-3.avif'),
                'cardImageAlt' => 'Top view mechanical tools arrangement',
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
