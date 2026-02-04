<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'price_min' => $this->faker->numberBetween(10, 50),
            'price_max' => $this->faker->numberBetween(51, 200),
            'color_name' => $this->faker->colorName(),
            'weight' => $this->faker->numberBetween(1, 100),
            'size' => $this->faker->numberBetween(1, 50),
            'family_id' => \App\Models\Family::all()->random()->id,
            'deleted' => false,
        ];
    }
}
