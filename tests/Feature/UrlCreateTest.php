<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UrlCreateTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_url_registration_screen_can_be_rendered()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->get('/shorten');

        $response->assertStatus(200);
    }

    public function test_user_saving_url()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->post('/shorte/create', [
                'user_id' =>  $user->id,
                'title' => 'Title teste',
                'normal_url' => 'www.minhaurl.com.br/site/pdsqw312e2ewd',
                'shortened_url' => 'www.urlencurtada/123'
            ]);


        $response = $this->get('/shorten');

        $response->assertStatus(200);
    }
}