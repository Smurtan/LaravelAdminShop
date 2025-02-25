<?php

namespace Database\Factories;

use App\Models\Currency;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'status' => (string)$this->faker->numberBetween(0, 2),
            'note' => $this->faker->realText(),
            'sum' => $this->faker->randomFloat(2, 10, 100),
            'user_id' => User::factory(),
            'currency_id' => Currency::factory(),
        ];
    }
}
