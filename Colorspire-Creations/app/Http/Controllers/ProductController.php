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
            $title = 'Produits';
            $subTitle = 'Explorez la durabilité et la précision des outils ScrewFast, conçus aussi bien pour les professionnels que pour les amateurs. Chacun de nos produits est fabriqué avec précision et conçu pour durer, garantissant que vous disposez du bon outil pour chaque tâche.';
            $benefits = [
                'Outils robustes et fiables pour des performances durables.',
                'Solutions innovantes adaptées aux besoins de construction modernes.',
                'Support client dédié au succès de votre projet.',
            ];
            $whyTitle = 'Pourquoi choisir ScrewFast ?';
            $whySubTitle = 'Transformez vos idées en résultats tangibles avec les outils ScrewFast. Que vous commenciez par un croquis sur un coin de table ou plongiez dans un projet de construction complet, nos outils sont conçus pour vous aider à construire en toute confiance.';
            $testimonialsTitle = 'Ce que disent nos clients';
            $testimonials = [
                [
                    'content' => "Depuis que nous avons adopté les outils matériels de ScrewFast, l'efficacité sur nos chantiers de construction a explosé. La durabilité des boulons hexagonaux et la précision des vis machine sont tout simplement inégalées. C'est rafraîchissant de travailler avec une entreprise qui comprend vraiment les exigences quotidiennes de l'industrie.",
                    'author' => 'Jason Clark',
                    'role' => 'Contremaître de chantier | TopBuild',
                    'avatarSrc' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80',
                    'avatarAlt' => "Description de l'image",
                ],
                [
                    'content' => "En tant que designer d'intérieur, je suis toujours à la recherche de matériaux et d'outils de haute qualité qui m'aident à donner vie à mes visions. L'assortiment de vis mixtes de ScrewFast a révolutionné mes projets, offrant le mélange parfait de qualité et de variété. Le support client exceptionnel était la cerise sur le gâteau !",
                    'author' => 'Maria Gonzalez',
                    'role' => "Designer d'intérieur | Creative Spaces",
                    'avatarSrc' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=1376&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80',
                    'avatarAlt' => "Description de l'image",
                ],
                [
                    'content' => "Je suis menuisier professionnel depuis plus de 15 ans, et je peux sincèrement dire que les boulons et écrous à tarauder de ScrewFast sont parmi les meilleurs que j'ai utilisés. Ils adhèrent comme aucun autre, et j'ai une confiance totale dans chaque joint et élément. De plus, le service est impeccable - ils se soucient vraiment du succès de mon projet.",
                    'author' => 'Richard Kim',
                    'role' => 'Menuisier-Maître | WoodWright',
                    'avatarSrc' => 'https://images.unsplash.com/photo-1474176857210-7287d38d27c6?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80',
                    'avatarAlt' => "Description de l'image",
                ],
            ];
            $customerStoriesBtn = 'Histoires de clients';
        } else {
            $title = 'Products';
            $subTitle = 'Explore the durability and precision of ScrewFast tools, designed for both professionals and enthusiasts. Each of our products is crafted with precision and built to last, ensuring you have the right tool for every job.';
            $benefits = [
                'Robust and reliable tools for long-lasting performance.',
                'Innovative solutions tailored to modern construction needs.',
                "Customer support dedicated to your project's success.",
            ];
            $whyTitle = 'Why Choose ScrewFast?';
            $whySubTitle = "Transform your ideas into tangible results with ScrewFast tools. Whether you're starting with a sketch on a napkin or diving into a comprehensive construction project, our tools are engineered to help you build with confidence.";
            $testimonialsTitle = 'What Our Customers Say';
            $testimonials = [
                [
                    'content' => ' "Since switching to ScrewFast\'s hardware tools, the efficiency on our construction sites has skyrocketed. The durability of the hex bolts and precision of the machine screws are simply unmatched. It\'s refreshing to work with a company that truly understands the daily demands of the industry." ',
                    'author' => 'Jason Clark',
                    'role' => 'Site Foreman | TopBuild',
                    'avatarSrc' => 'https://images.unsplash.com/photo-1500648767791-00dcc994a43e?q=80&w=1374&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80',
                    'avatarAlt' => 'Jason Clark',
                ],
                [
                    'content' => ' "As an interior designer, I\'m always looking for high-quality materials and tools that help bring my visions to life. ScrewFast\'s mixed screws assortment has been a game-changer for my projects, providing the perfect blend of quality and variety. The outstanding customer support was just the cherry on top!" ',
                    'author' => 'Maria Gonzalez',
                    'role' => 'Interior Designer | Creative Spaces',
                    'avatarSrc' => 'https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=1376&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80',
                    'avatarAlt' => 'Maria Gonzalez',
                ],
                [
                    'content' => " \"I've been a professional carpenter for over 15 years, and I can sincerely say that ScrewFast's tap bolts and nuts are some of the best I've used. They grip like no other, and I have full confidence in every joint and fixture. Plus, the service is impeccable – they truly care about my project's success.\" ",
                    'author' => 'Richard Kim',
                    'role' => 'Master Carpenter | WoodWright',
                    'avatarSrc' => 'https://images.unsplash.com/photo-1474176857210-7287d38d27c6?q=80&w=1470&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80',
                    'avatarAlt' => 'Richard Kim',
                ],
            ];
            $customerStoriesBtn = 'Customer Stories';
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
