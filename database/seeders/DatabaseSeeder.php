<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolesTableSeeder::class,
            CurrenciesTableSeeder::class,
            OrdersTableSeeder::class,
            AttributeGroupsTableSeeder::class,
            AttributeValuesTableSeeder::class,
            BrandsTableSeeder::class,
            CategoriesTableSeeder::class,
            ProductsTableSeeder::class,
            GalleriesTableSeeder::class,
            OrderProductsTableSeeder::class,
        ]);

        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
