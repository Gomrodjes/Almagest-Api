<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'num' => $this->faker->unique()->numerify('ORD-####'),
            'issuedate' => $this->faker->date(),
            'company_id' => \App\Models\Company::all()->random()->id,
            'deleted' => false,
        ];
    }
}
