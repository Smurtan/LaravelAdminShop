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
        Role::created(['name' => 'admin']);
        Role::created(['name' => 'editor']);
        Role::created(['name' => 'user']);
    }
}
