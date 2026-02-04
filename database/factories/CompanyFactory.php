<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'              => $this->faker->company,
            'address'           => $this->faker->streetAddress,
            'city'              => $this->faker->city,
            'cif'               => $this->faker->bothify('########?'), // Ej: 12345678A
            'email'             => $this->faker->unique()->safeEmail,
            'phone'             => $this->faker->numerify('#########'),
            'del_term_id'       => \App\Models\DeliveryTerm::all()->random()->id,
            'transport_id'      => \App\Models\Transport::all()->random()->id,
            'payment_term_id'   => \App\Models\PaymentTerm::all()->random()->id,
            'bank_entity_id'    => \App\Models\BankEntity::all()->random()->id,
            'discount_id'       => \App\Models\Discount::all()->random()->id,
            'deleted'           => false,
        ];
    }
}
