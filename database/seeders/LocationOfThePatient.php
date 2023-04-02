<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LocationOfThePatient extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LocationOfThePatient::create([
            'patient_id' => 1,
            'city' => 'Bogotá',
            'state' => 'Cundinamarca',
            'address' => 'Carrera 15 #85-34',
            'latitude' => 4.676632,
            'longitude' => -74.052762,
            'LandmarkOfALocation' => 'Frente al centro comercial',
            'priority' => 1
        ]);
    }
}
