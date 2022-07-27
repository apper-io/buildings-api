<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ApartmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'apartment_code' => $this->faker->secondaryAddress(),
            'flat_code' => $this->faker->randomDigit(),
            'tower_code' => $this->faker->company(),
            'status_id' => 1,
            'type_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
