<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Buat akun admin default
        User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'name' => 'admintampan',
                'password' => Hash::make('admin1234') // tanpa spasi
, // Ganti dengan password yang aman
            ]
        );
    }
}
