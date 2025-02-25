<?php

namespace Database\Factories;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    protected $model = Brand::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->company();
        $slug = Str::slug($title);

        return [
            'title' => $title,
            'slug' => $slug,
            'image' => $this->faker->imageUrl(200, 150),
            'description' => $this->faker->paragraph(),
        ];
    }
}
