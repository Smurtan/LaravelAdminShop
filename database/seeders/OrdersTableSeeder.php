<?php

namespace Database\Seeders;

use App\Models\Currency;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (User::query()->count() == 0) {
            User::factory()->count(5)->create();
        }
        if (Currency::query()->count() == 0) {
            Currency::factory()->count(5)->create();
        }

        Order::factory()
            ->count(10)
            ->create(function () {
                $user = User::query()->inRandomOrder()->first();
                $currency = Currency::query()->inRandomOrder()->first();

                return [
                    'user_id' => $user ? $user->id : User::factory(),
                    'currency_id' => $currency ? $currency->id : Currency::factory(),
                ];
            });
    }
}
