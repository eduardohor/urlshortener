<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserDeleteTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function  test_user_delete()
    {
        $user = User::factory()->create();
        $userEdit = User::factory()->create();

        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);

        $response = $this->actingAs($user)
            ->delete('/admin/dashboard/user/' . $userEdit);

        $response = $this->get('/admin/dashboard/users');

        $response->assertStatus(200);
    }
}