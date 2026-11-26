<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_application_returns_a_successful_response(): void
    {
        $response = $this->get('/');

        $response->assertOk()
            ->assertSee('El mundo te espera')
            ->assertSee('assets/images/portada.svg');
    }

    public function test_contact_page_shows_contact_details_and_map(): void
    {
        $this->get('/contact')
            ->assertOk()
            ->assertSee('hola@horizonteviajes.example')
            ->assertSee('assets/images/mapa.svg')
            ->assertSee('tel:+34900123456');
    }

    public function test_about_page_remains_available(): void
    {
        $this->get('/about')
            ->assertOk()
            ->assertSee('Sobre nosotros');
    }

    public function test_services_page_shows_three_city_cards(): void
    {
        $this->get('/services')
            ->assertOk()
            ->assertSee('Lisboa')
            ->assertSee('París')
            ->assertSee('Roma')
            ->assertSee('4 días')
            ->assertSee('assets/images/lisboa.svg')
            ->assertSee('assets/images/paris.svg')
            ->assertSee('assets/images/roma.svg');
    }
}
