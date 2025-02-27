<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    public function definition(): array
    {
        $isRegistered = rand(0, 1);

        if ($isRegistered) {
            $alphas = range('A', 'Z');
            $licencePlate = $alphas[rand(0, str_len($alphas))] . $alphas[rand(0, str_len($alphas))] . rand(0, 9) . rand(0, 9) . rand(0, 9) . $alphas[rand(0, str_len($alphas))] . $alphas[rand(0, str_len($alphas))];    
        }

        return [
            'name' => fake()->name(),
            'registration_number' => null,
            'is_registered' => false
        ];
    }
}
