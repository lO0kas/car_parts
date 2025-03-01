<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'is_registered' => $isRegistered = rand(0, 1) ? Str::random(10) : null,
            'registration_number' => $isRegistered
        ];
    }
}
