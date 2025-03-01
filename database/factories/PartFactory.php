<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'serialnumber' => Str::random(10),
            'car_id' => Car::factory()
        ];
    }
}
