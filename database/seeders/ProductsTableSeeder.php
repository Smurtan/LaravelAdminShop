<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Category::query()->count() == 0) {
            Category::factory()->count(5)->create();
        }
        if (Brand::query()->count() == 0) {
            Brand::factory()->count(10)->create();
        }

        Product::factory()
            ->count(50)
            ->create(function () {
                $category = Category::query()->inRandomOrder()->first();
                $brand = Brand::query()->inRandomOrder()->first();

                return [
                    'category_id' => $category ? $category->id : Category::factory(),
                    'brand_id' => $brand ? $brand->id : Brand::factory(),
                ];
            });
    }
}
