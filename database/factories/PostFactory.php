<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->unique()->jobTitle(),
            'price' => fake()->randomElement([499, 599, 699, 799, 899]),
            'stock' => rand(1, 20),
            'image' => fake()->image(),
            'category_id' => fake()->randomElement([1, 2, 3, 4, 5])
        ];
    }
}
