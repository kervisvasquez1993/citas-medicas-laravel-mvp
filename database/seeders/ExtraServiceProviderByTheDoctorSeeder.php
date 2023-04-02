<?php

namespace Database\Seeders;
use App\Models\ExtraServiceProviderByTheDoctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExtraServiceProviderByTheDoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ExtraServiceProviderByTheDoctor::create([
            'doctor_id' => 1,
            'name' => 'Radiografía de tórax',
            'description' => 'Estudio radiológico para evaluar el estado de los pulmones y el corazón',
            'cost' => 500
        ]);
    }
}
