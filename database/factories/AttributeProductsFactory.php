<?php

namespace Database\Factories;

use App\Models\AttributeProducts;
use App\Models\AttributeValue;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AttributeProducts>
 */
class AttributeProductsFactory extends Factory
{
    protected $model = AttributeProducts::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'attribute_id' => AttributeValue::factory(),
            'product_id' => Product::factory(),
        ];
    }
}
