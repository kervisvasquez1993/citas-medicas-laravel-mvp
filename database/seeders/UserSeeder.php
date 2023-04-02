<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Juan',
            'last_name' => 'Pérez',
            'role' => 'patient',
            'email' => 'juanperez@example.com',
            'dni' => '12345678',
            'phone_number' => '1234567890',
            'password' => bcrypt('password123')
        ]);

        User::create([
            'name' => 'María',
            'last_name' => 'González',
            'role' => 'doctor',
            'email' => 'mariagonzalez@example.com',
            'dni' => '87654321',
            'phone_number' => '0987654321',
            'password' => bcrypt('password123')
        ]);
    }
}
