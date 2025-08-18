<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Form;

class FormSeeder extends Seeder
{
    public function run(): void
    {
        Form::create([
            'frm_content' => 'Pengajuan ikut ekskul basket',
            'frm_extracuriculler_id' => 1, // pastikan id ekskul ada
            'frm_user_id' => 1,            // pastikan user ada
            'frm_status' => '1',           // pending
            'frm_reason' => null,
            'frm_created_by' => 1,
        ]);
    }
}
