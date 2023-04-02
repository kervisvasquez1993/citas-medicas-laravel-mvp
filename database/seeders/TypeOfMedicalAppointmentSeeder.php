<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeOfMedicalAppointment;
class TypeOfMedicalAppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeOfMedicalAppointment::create([
            'name' => 'online',
        ]);
        TypeOfMedicalAppointment::create([
            'name' => 'presencial',
        ]);
    }
}
