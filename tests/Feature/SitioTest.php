<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SitioTest extends TestCase
{
    /**
     * A basic feature test example.
     *Commit final
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response = $this->get('/contacto');

        $response = $this->get('/landingpage');


        $response->assertStatus(200);
    }
}
