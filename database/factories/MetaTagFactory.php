<?php

namespace Database\Factories;

use App\Models\MetaTag;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MetaTag>
 */
class MetaTagFactory extends Factory
{
    protected $model = MetaTag::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'path' => $this->faker->word(),
        ];
    }
}
