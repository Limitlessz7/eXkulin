<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    public function run(): void
    {
        Role::firstOrCreate(['rl_name' => 'siswa'], [
            'rl_description' => 'Role default untuk siswa',
            'rl_create_by' => 1,
        ]);

        Role::firstOrCreate(['rl_name' => 'pembina'], [
            'rl_description' => 'Role untuk pembina ekskul',
            'rl_create_by' => 1,
        ]);

        Role::firstOrCreate(['rl_name' => 'kesiswaan'], [
            'rl_description' => 'Role untuk bagian kesiswaan',
            'rl_create_by' => 1,
        ]);

       
    }
}
