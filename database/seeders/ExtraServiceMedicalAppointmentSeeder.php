<?php

namespace Database\Seeders;
use App\Models\ExtraServiceMedicalAppointment;
use Illuminate\Database\Seeder;

class ExtraServiceMedicalAppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ExtraServiceMedicalAppointment::create([
            'medical_appointment' => 1,
            'extra_service' => 1,
            'descripcion' => 'Análisis de sangre completo',
            'validate_patient' => true
        ]);
    }
}
