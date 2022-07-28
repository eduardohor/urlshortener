<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiShortenTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function test_array_returning_in_json_format()
    // {
    //     $this->post('/shorten', ['url' => 'www.minhaurls.com.br/fgdgvsga6125635162536'])
    //         ->seeJson([
    //             'created' => true,
    //         ]);
    // }

    public function test_api_shorten_url()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)
            ->post('/shorten', [
                'url' => 'www.minhaurls.com.br/fgdgvsga6125635162536'
            ]);

        $response = $this->get('/shorten');

        $response->assertStatus(200);
    }
}