<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\MedicalAppointment;

class MedicalAppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MedicalAppointment::create([
            'patient_id' => 1,
            'medical_service_cost_id' => 1,
            'date-of-appointment' => '2023-04-05',
            'hour-of-appointment' => '10:00',
            'cots' => 800,
            'is_paid' => false,
            'attended' => false
        ]);
    }
}
