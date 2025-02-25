<?php

namespace Database\Seeders;

use App\Models\Gallery;
use App\Models\Product;
use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Product::query()->count() == 0) {
            Product::factory()->count(50)->create();
        }

        Gallery::factory()
            ->count(50)
            ->create(function () {
                $product = Product::query()->inRandomOrder()->first();

                return [
                    'product_id' => $product ? $product->id : Product::factory(),
                ];
            });
    }
}
