<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\RelatedProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RelatedProduct>
 */
class RelatedProductFactory extends Factory
{
    protected $model = RelatedProduct::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => Product::factory(),
            'related_product_id' => Product::factory(),
        ];
    }
}
