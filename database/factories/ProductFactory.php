<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->shuffle(trim(fake()->sentence(3), '.')),
            'description' => fake()->text(500),
            'short_description' => fake()->text(140),
            'SKU' => fake()->isbn13(),
            'price' => fake()->randomFloat(2, 100, 5000),
            'discount' => rand(0, 30),
            'in_stock' => rand(0, 120),
            'thumbnail' => fake()->imageUrl
        ];
    }

    public function withCategory(int $cat_id)
    {
        return $this->state(fn (array $attr) => ['category_id' => $cat_id]);
    }
}
