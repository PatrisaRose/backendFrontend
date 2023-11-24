<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tablazat>
 */
class TablazatFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [

            'name' => fake('hu_HU')->name(),
            'country' => fake('hu_HU')->country(),
            'city' => fake('hu_HU')->city(),
            'zipcode' => rand(1, 5000),
            'address' => fake('hu_HU')->address(),
        ];
    }
}
