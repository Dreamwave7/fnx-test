<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

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
    public function definition(): array
    {
        $productImages = Storage::disk('public')->files('products_images');


        return [
            'name' => $this->faker->sentence(2),
            'description' => $this->faker->sentence(6),
            'price' => $this->faker->randomFloat(2,5,150),
            'image' => $this->faker->randomElement($productImages),
            'is_active' => true
        ];
    }
}
