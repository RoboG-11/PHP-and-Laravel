<?php

namespace Database\Seeders;

use App\Models\Medicine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Medicine::create([
            'id' => 1,
            'medication_name' => 'Avamys',
            'description' => 'Medicamento para la nariz congestionada por alergia',
            'quantity' => '120 dosis',
            'stock' => 5,
            'price' => 120.50
        ]);

        Medicine::create([
            'id' => 2,
            'medication_name' => 'Tempra',
            'description' => 'Medicamento para la tempratura',
            'quantity' => '10 tabletas',
            'stock' => 10,
            'price' => 200.00
        ]);

        Medicine::create([
            'id' => 3,
            'medication_name' => 'Paracetamol',
            'description' => 'Medicamento para el dolor xd',
            'quantity' => '20 tabletas',
            'stock' => 25,
            'price' => 150.00
        ]);
    }
}
