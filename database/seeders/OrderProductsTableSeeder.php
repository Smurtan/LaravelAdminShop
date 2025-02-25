<?php

namespace Database\Seeders;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use Illuminate\Database\Seeder;

class OrderProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Product::query()->count() == 0) {
            Product::factory()->count(10)->create();
        }

        if (Order::query()->count() == 0) {
            Order::factory()->count(10)->create();
        }

        OrderProduct::factory()
            ->count(100)
            ->create(function () {
                $order = Order::query()->inRandomOrder()->first();
                $product = Product::query()->inRandomOrder()->first();

                return [
                    'order_id' => $order ? $order->id : Order::factory(),
                    'product_id' => $product ? $product->id : Product::factory(),
                ];
            });
    }
}
