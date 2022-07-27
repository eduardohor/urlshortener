<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Url>
 */
class UrlFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => rand(156, 157),
            'title' => $this->faker->name(),
            'normal_url' => 'www.urlnormal.com.br/123231233',
            'shortened_url' => 'urlencurtada'
        ];
    }
}