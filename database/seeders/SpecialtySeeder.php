<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Specialty::create([
            'name' => 'Cardiología',
            'description' => 'Especialidad médica que se dedica al diagnóstico y tratamiento de las enfermedades del corazón',
        ]);
    }
}
