<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\LocationOfTheDoctor;

class LocationOfTheDoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LocationOfTheDoctor::create([
            'doctor_id' => 1,
            'city' => 'Bogotá',
            'state' => 'Cundinamarca',
            'address' => 'Calle 100 #15-20',
            'latitude' => 4.689578,
            'longitude' => -74.074531,
            'LandmarkOfALocation' => 'Frente al parque',
            'priority' => 1
        ]);
    }
}
