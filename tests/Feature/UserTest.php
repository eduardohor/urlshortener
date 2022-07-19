<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
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
}