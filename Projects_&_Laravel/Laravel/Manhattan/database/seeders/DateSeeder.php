<?php

namespace Database\Seeders;

use App\Models\Date;
use Illuminate\Database\Seeder;

class DateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Date::create([
            'doctor_user_id' => 1,
            'patient_user_id' => 2,
            'date' => '2023-10-31',
            'time' => "15:30:00",
            'link' => null,
            'status' => "accepted", // NOTE: Pending, rejected, accepted
            'motive' => 'Dolor de cabeza'
        ]);

        Date::create([
            'doctor_user_id' => 1,
            'patient_user_id' => 2,
            'date' => '2025-10-31',
            'time' => "12:30:00",
            'link' => null,
            'status' => 'pending', // NOTE: Pending, rejected, accepted
            'motive' => 'Seguimiento del paciente'
        ]);
    }
}
