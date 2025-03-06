<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::query()->create(['name' => 'admin']);
        Role::query()->create(['name' => 'disabled']);
        Role::query()->create(['name' => 'user']);
    }
}
