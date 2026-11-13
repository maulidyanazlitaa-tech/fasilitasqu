<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_homepage_redirects_guests_to_login(): void
    {
        $response = $this->get('/');

        $response->assertRedirectToRoute('login');
    }
}