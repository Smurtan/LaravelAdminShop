<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(3);
        $slug = Str::slug($title);

        return [
            'title' => $title,
            'slug' => $slug,
            'keywords' => $this->faker->words(5, true),
            'description' => $this->faker->text(),
            'parent_id' => null,
        ];
    }

    // Method to create subcategories
    public function withParent(int $parentId): Factory
    {
        return $this->state(function (array $attributes) use ($parentId) {
            return [
                'parent_id' => $parentId,
            ];
        });
    }
}
