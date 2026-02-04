<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transport>
 */
class TransportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'min'      => $this->faker->numberBetween(0, 50),
            'max'      => $this->faker->numberBetween(51, 200),
            'price'    => $this->faker->randomFloat(2, 5, 100),
            'deleted'  => false,
        ];
    }
}
