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
            'medical_appointment' => 'Consulta de seguimiento',
            'extra_service' => 'Estudio de laboratorio',
            'descripcion' => 'Análisis de sangre completo',
            'validate_patient' => true
        ]);
    }
}
