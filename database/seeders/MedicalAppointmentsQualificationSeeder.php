<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicalAppointmentsQualificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MedicalAppointmentsQualification::create([
            'medical_appointment_id' => 1,
            'qualification' => 5
        ]);
    }
}
