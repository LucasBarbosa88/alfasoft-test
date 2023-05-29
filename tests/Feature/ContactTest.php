<?php

namespace Tests\Feature;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ContactTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_screen_can_be_rendered()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_create_new_contact()
    {
        $response = $this->post('/store', [
            'name' => 'Test User',
            'contact' => '41998466322',
            'email' => 'test@example.com',
        ]); 
        $response->assertStatus(200);
    }
}
