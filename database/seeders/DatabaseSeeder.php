<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $admin_role = Role::firstOrCreate([
            'rl_name' => 'kesiswaan',
            'rl_description' => 'kesiswaan role',
        ]);
        $user_role = Role::firstOrCreate([
            'rl_name' => 'user',
            'rl_description' => 'user role',
        ]);

        $admin = User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'admintampan',
                'password' => Hash::make('11111111'),
                'usr_activation' => true,
                'usr_role_id' => $admin_role->rl_id,
            ]
        );
    }
}
