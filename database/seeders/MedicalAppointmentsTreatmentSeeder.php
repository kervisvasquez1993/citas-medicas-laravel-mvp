<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicalAppointmentsTreatmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MedicalAppointmentsTreatment::create([
            'medical_appointment_id' => 1,
            'description' => 'Se recetan antibióticos y se recomienda reposo'
        ]);
    }
}
