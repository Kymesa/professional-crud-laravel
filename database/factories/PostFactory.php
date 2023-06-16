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
            'image' => fake()->randomElement(["uploads/1686892663_xbox.png", "uploads/1686892736_iphone.webp", "uploads/1686892816_pc.png", "uploads/1686892834_laptop.png", "uploads/1686893352_play.png"]),
            'category_id' => fake()->randomElement([1, 2, 3, 4, 5])
        ];
    }
}
