<?php

namespace Database\Seeders;

use App\Models\Doctor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Doctor::create([
            'user_id' => 1,
            'professional_license' => 24787381283,
            'education' => 'UAM Cuajimalpa'
        ]);

        Doctor::create([
            'user_id' => 3,
            'professional_license' => 498737474,
            'education' => 'UANM CU'
        ]);

    }
}
