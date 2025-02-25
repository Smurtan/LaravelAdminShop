<?php

namespace Database\Seeders;

use App\Models\AttributeGroup;
use App\Models\AttributeValue;
use Illuminate\Database\Seeder;

class AttributeValuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (AttributeGroup::query()->count() == 0) {
            AttributeGroup::factory()->count(5)->create();
        }

        AttributeValue::factory()
            ->count(10)
            ->create(function () {
                $group = AttributeValue::query()->inRandomOrder()->first();

                return [
                    'group_id' => $group ? $group->id : AttributeValue::factory(),
                ];
            });
    }
}
