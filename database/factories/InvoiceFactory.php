<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'num' => $this->faker->unique()->numberBetween(1, 9999),
            'issuedate' => $this->faker->date(),
            'delivery_note_id' => \App\Models\DeliveryNote::all()->random()->id,
            'deleted' => false,
        ];
    }
}
