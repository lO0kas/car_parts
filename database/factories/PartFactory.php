<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartFactory extends Factory
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
            'serialnumber' => Str::random(10),
            'car_id' => null
        ];
    }
}
