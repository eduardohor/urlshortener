<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'is_admin' => 1,
            'email' => fake()->safeEmail(),
            'password' => '12345678',
            'remember_token' => '12345678',
            'telephone' => fake()->numerify('(##)#####-####'),
            'birth_date' => fake()->date($format = 'Y-m-d', $max = 'now'),
            'cpf' => fake()->numerify('#########-##'),
            'cep' => '65400000',
            'street' => 'Rua Test',
            'number' => '2010',
            'neighborhood' => 'Testando',
            'city' => 'Codo',
            'state' => 'MA',
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}