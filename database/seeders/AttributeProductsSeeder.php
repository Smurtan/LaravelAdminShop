<?php

namespace Database\Seeders;

use App\Models\AttributeProducts;
use App\Models\AttributeValue;
use App\Models\Product;
use Illuminate\Database\Seeder;

class AttributeProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (AttributeValue::query()->count() === 0) {
            AttributeValue::factory()->count(10)->create();
        }

        if (Product::query()->count() === 0) {
            Product::factory()->count(10)->create();
        }

        AttributeProducts::factory()
            ->count(10)
            ->create(function () {
                $product = Product::query()->inRandomOrder()->first();
                $attribute = AttributeValue::query()->inRandomOrder()->first();

                return [
                    'user_id' => $product ? $product->id : Product::factory(),
                    'role_id' => $attribute ? $attribute->id : AttributeValue::factory(),
                ];
            });
    }
}
