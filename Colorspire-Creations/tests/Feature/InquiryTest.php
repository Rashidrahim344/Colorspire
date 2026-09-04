<?php

namespace Tests\Feature;

use Tests\TestCase;

class InquiryTest extends TestCase
{
    /**
     * Test that all multi-page routes load successfully (200 OK) with ColorSpire content.
     */
    public function test_all_multipage_routes_load_successfully(): void
    {
        $pages = [
            '/' => 'Designing Brands. Building Digital Experiences.',
            '/services' => 'Services Built for',
            '/portfolio' => 'Creative Work &',
            '/hub' => 'The ColorSpire Hub',
            '/about' => 'From Zambia 🇿🇲 to the World',
            '/blog' => 'Design & Digital',
            '/contact' => 'Studio Coordinates',
        ];

        foreach ($pages as $url => $expectedContent) {
            $response = $this->get($url);
            $response->assertStatus(200);
            $response->assertSee($expectedContent, false);
        }
    }

    /**
     * Test that contact inquiry requires mandatory fields.
     */
    public function test_contact_inquiry_requires_mandatory_fields(): void
    {
        $response = $this->post('/contact', []);

        $response->assertSessionHasErrors(['name', 'email', 'message']);
    }

    /**
     * Test that valid inquiry is accepted and redirects with success flash.
     */
    public function test_valid_contact_inquiry_redirects_with_success(): void
    {
        $response = $this->from('/contact')->post('/contact', [
            'name' => 'Mwila Tembo',
            'email' => 'mwila@example.com',
            'service' => 'web_dev',
            'budget' => 'digital_presence',
            'message' => 'We need a high-performance web platform for our organization.',
        ]);

        $response->assertRedirect('/contact');
        $response->assertSessionHas('success');
    }
}
