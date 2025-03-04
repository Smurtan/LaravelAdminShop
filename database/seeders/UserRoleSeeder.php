<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\UserRole;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (User::query()->count() === 0) {
            User::factory()->count(10)->create();
        }

        if (Role::query()->count() === 0) {
            Role::factory()->count(3)->create();
        }

        UserRole::factory()
            ->count(10)
            ->create(function () {
                $user = User::query()->inRandomOrder()->first();
                $role = Role::query()->inRandomOrder()->first();

                return [
                    'user_id' => $user ? $user->id : User::factory(),
                    'role_id' => $role ? $role->id : Role::factory(),
                ];
            });
    }
}
