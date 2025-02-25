<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::factory()->count(5)->create();

        $topLevelCategoryIds = Category::query()->whereNull('parent_id')->pluck('id')->toArray();

        foreach ($topLevelCategoryIds as $categoryId) {
            Category::factory()->count(3)->withParent($categoryId)->create();
        }
    }
}
