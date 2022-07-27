<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserEditTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_users_edit_screen_can_be_render()
    {
        $user = User::factory()->create();
        $userEdit = User::factory()->create();

        $response = $this->actingAs($user)
            ->get('/admin/dashboard/user/' .  $userEdit->id . '/edit');
        $response->assertStatus(200);
    }

    public function test_users_can_be_edited()
    {

        $user = User::factory()->create();
        $userEdit = User::factory()->create();

        $response = $this->actingAs($user)
            ->put('/admin/dashboard/user/' .  $userEdit->id, [
                'password' => '10101010'
            ]);

        $response = $this->get('/admin/dashboard/user/' . $userEdit->id);

        $response->assertStatus(200);
    }
}