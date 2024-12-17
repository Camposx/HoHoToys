<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ChildFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => $this->faker->name(),
            "surname" => $this->faker->lastName(),
            "photo" => $this->faker->imageUrl(),
            "age" => $this->faker->numberBetween(0,18),
            "naughty" => $this->faker->boolval(),
        ];
    }
}
