<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        $name = $this->faker->unique()->numerify('Продукт №##');
        return [
            'name' => $name,
            'slug' => Str::slug($name),
            'image' => $this->faker->imageUrl,
            'short_description' => $this->faker->sentence(20),
            'description' => $this->faker->sentence(20),
            'price' => $this->faker->numberBetween(100, 5000),
            'category_id' => $this->faker->numberBetween(1,6)
        ];
    }
}
