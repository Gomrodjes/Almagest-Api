<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DeliveryNote>
 */
class DeliveryNoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'num' => $this->faker->unique()->numerify('DN-####'),
            'issuedate' => $this->faker->date(),
            'order_id' => \App\Models\Order::all()->random()->id,
            'deleted' => false,
        ];
    }
}
