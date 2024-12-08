<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'title' => fake()->word(),
        'image' => fake()->imageUrl(640, 480, 'categories', true, 'Faker'),
        'description' => fake()->sentence(),
        'status' => fake()->boolean(),
        'order' => fake()->numberBetween(1, 100),
        
    ];
}

}
