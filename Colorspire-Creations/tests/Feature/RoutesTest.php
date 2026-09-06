<?php

namespace Tests\Feature;

use Tests\TestCase;

class RoutesTest extends TestCase
{
    public function test_home_page_loads_successfully(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('ScrewFast');
    }

    public function test_french_home_page_loads_successfully(): void
    {
        $response = $this->get('/fr');
        $response->assertStatus(200);
        $response->assertSee('ScrewFast');
    }

    public function test_services_page_loads_successfully(): void
    {
        $response = $this->get('/services');
        $response->assertStatus(200);
        $response->assertSee('Services');
    }

    public function test_french_services_page_loads_successfully(): void
    {
        $response = $this->get('/fr/services');
        $response->assertStatus(200);
        $response->assertSee('Services');
    }

    public function test_products_index_page_loads_successfully(): void
    {
        $response = $this->get('/products');
        $response->assertStatus(200);
        $response->assertSee('Products');
    }

    public function test_french_products_index_page_loads_successfully(): void
    {
        $response = $this->get('/fr/products');
        $response->assertStatus(200);
        $response->assertSee('Produits');
    }

    public function test_product_detail_page_loads_successfully(): void
    {
        $response = $this->get('/products/item-a765');
        $response->assertStatus(200);
        $response->assertSee('ScrewFast');
    }

    public function test_blog_index_page_loads_successfully(): void
    {
        $response = $this->get('/blog');
        $response->assertStatus(200);
        $response->assertSee('ScrewFast');
    }

    public function test_french_blog_index_page_loads_successfully(): void
    {
        $response = $this->get('/fr/blog');
        $response->assertStatus(200);
        $response->assertSee('ScrewFast');
    }

    public function test_blog_post_page_loads_successfully(): void
    {
        $response = $this->get('/blog/post-1');
        $response->assertStatus(200);
        $response->assertSee('ScrewFast');
    }

    public function test_insight_page_loads_successfully(): void
    {
        $response = $this->get('/insights/insight-1');
        $response->assertStatus(200);
        $response->assertSee('ScrewFast');
    }

    public function test_contact_page_loads_successfully(): void
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
        $response->assertSee('Contact');
    }

    public function test_french_contact_page_loads_successfully(): void
    {
        $response = $this->get('/fr/contact');
        $response->assertStatus(200);
        $response->assertSee('Contacter');
    }

    public function test_not_found_page_renders_custom_404(): void
    {
        $response = $this->get('/this-page-does-not-exist');
        $response->assertStatus(404);
        $response->assertSee('404');
    }
}
