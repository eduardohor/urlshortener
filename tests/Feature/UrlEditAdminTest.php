<?php

namespace Tests\Feature;

use App\Models\Url;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UrlEditAdminTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_admin_can_view_url_edit_screen()
    {
        $user = User::factory()->create();
        $url = Url::factory()->create();

        $response = $this->actingAs($user)
            ->get('/admin/dashboard/url/' .  $url->id . '/edit');
        $response->assertStatus(200);
    }

    public function test_url_can_be_edited_by_the_admin()
    {

        $user = User::factory()->create();
        $url = Url::factory()->create();

        $response = $this->actingAs($user)
            ->put('/user/url/' .  $url->id, [
                'title' => 'new title'
            ]);

        $response = $this->get('/admin/dashboard/url/' . $url->id);

        $response->assertStatus(200);
    }
}