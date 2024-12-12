<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->lastName,
            'description' => $this->faker->sentences(2, true),
            'lien_image' => $this->faker->word(),
            'prix' => $this->faker->randomDigit(),
            'tva' => $this->faker->randomFloat(null, 0, 1),
        ];
    }
}
