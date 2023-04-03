<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MedicalAppointmentsQualification;

class MedicalAppointmentsQualificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MedicalAppointmentsQualification::create([
            'm_appointment_id' => 1,
            'qualification' => 5
        ]);
    }
}
