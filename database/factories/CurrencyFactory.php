<?php

namespace Database\Factories;

use App\Models\Currency;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Currency>
 */
class CurrencyFactory extends Factory
{
    protected $model = Currency::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->currencyCode(),
            'title' => $this->faker->unique()->currencyCode(),
            'symbol_left' => $this->faker->unique()->randomLetter(),
            'symbol_right' => $this->faker->unique()->randomLetter(),
            'value' => $this->faker->randomFloat(2, 10, 100),
            'base' => (string)(int)$this->faker->boolean(10)
        ];
    }
}
