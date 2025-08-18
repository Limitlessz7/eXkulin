<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;    // Import DB
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run()
    {
      DB::table('users')->insert([
    'usr_email' => 'admin@gmail.com',
    'usr_name' => 'admintampan',
    'usr_password' => Hash::make('admin1234'),
    'usr_created_by' => 1, // misalnya admin dengan id 1 atau sesuaikan dengan data yang ada
    'usr_updated_by' => null,
    'usr_created_at' => now(),
    'usr_updated_at' => now(),
]);
    }
}
