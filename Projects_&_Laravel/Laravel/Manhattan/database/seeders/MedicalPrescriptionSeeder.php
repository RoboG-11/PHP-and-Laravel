<?php

namespace Database\Seeders;

use App\Models\MedicalPrescription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicalPrescriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MedicalPrescription::create([
            'id' => 1,
            'instructions' => 'Se debe de tomar todo el medicamento cada 8 horas'
        ]);

        MedicalPrescription::create([
            'id' => 2,
            'instructions' => 'Se debe de tomar todo el medicamento cada 8 horas'
        ]);
    }
}
