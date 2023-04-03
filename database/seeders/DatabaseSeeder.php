<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call(UserSeeder::class);
        $this->call(DoctorSeeder::class);
        $this->call(PatientSeeder::class);
        $this->call(WalletSeeder::class);
        $this->call(SpecialitySeeder::class);
        $this->call(TypeOfMedicalAppointmentSeeder::class);        
        $this->call(MedicalServiceCostSeeder::class);
        $this->call(TopUpWalletSeeder::class);
        $this->call(SpecialitySeeder::class);
        $this->call(ExtraServiceProviderByTheDoctorSeeder::class);
        $this->call(LocationOfTheDoctorSeeder::class);
        $this->call(LocationOfThePatientSeeder::class);
        $this->call(MedicalAppointmentSeeder::class);
        $this->call(ExtraServiceMedicalAppointmentSeeder::class);
        $this->call(MedicalAppointmentsQualificationSeeder::class);
        $this->call(MedicalAppointmentsReportSeeder::class);
        $this->call(MedicalAppointmentsTreatmentSeeder::class);
    }
}
