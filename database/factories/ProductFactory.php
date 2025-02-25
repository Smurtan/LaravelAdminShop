<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(5);
        $slug = Str::slug($title);

        return [
            'title' => $title,
            'slug' => $slug,
            'content' => $this->faker->paragraph(3),
            'price' => $this->faker->randomFloat(2, 10, 100000),
            'old_price' => $this->faker->optional()->randomFloat(2, 10, 100000),
            'status' => (string)(int)$this->faker->boolean(80),
            'keyword' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(),
            'image' => $this->faker->imageUrl(640, 480),
            'hit' => (string)(int)$this->faker->boolean(20),
            'category_id' => Category::factory(),
            'brand_id' => Brand::factory(),
        ];
    }
}
