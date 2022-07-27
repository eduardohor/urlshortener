<?php

namespace Tests\Feature;

use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserRegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_check_if_the_registration_screen_can_be_rendered()
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }


    public function test_new_users_can_register()
    {
        $user = User::factory()->create();

        $response = $this->post('/register', [
            'name' => $user->name,
            'email' => $user->email,
            'password' => '12345678',
            'password_confirmation' => '12345678',
            'telephone' => $user->telephone,
            'birth_date' => $user->birth_date,
            'cpf' => $user->cpf,
            'street' => $user->street,
            'number' => $user->number,
            'neighborhood' => $user->neighborhood,
            'city' => $user->city,
            'state' => $user->state,
            'cep' => $user->cep
        ]);

        $this->actingAs($user);

        $response = $this->get(RouteServiceProvider::HOME);

        $response->assertStatus(200);
    }
}