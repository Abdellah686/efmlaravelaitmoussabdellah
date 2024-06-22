<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Client::class;

    public function definition()
    {
        return [
            'NomClient' => $this->faker->name,
            'AdresseClient' => $this->faker->address,
            'TelClient' => $this->faker->phoneNumber,
        ];
    }

}
