<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicalAppointmentsReportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MedicalAppointmentsReport::create([
            'medical_appointment_id' => 1,
            'description' => 'El paciente presenta una infección respiratoria'
        ]);
    }
}
