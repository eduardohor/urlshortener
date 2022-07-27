<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserLoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_only_logged_in_users_can_see_shortener_of_url()
    {
        $response = $this->get('/shorten')
            ->assertRedirect('/login');
    }

    public function test_only_registered_users_can_login()
    {
        $user = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => '12345678'
        ]);

        $this->actingAs($user);

        $response = $this->get('/shorten');

        $response->assertStatus(200);
    }
}