<?php

namespace Database\Seeders;

use App\Models\Allergy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AllergySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Allergy::create([
            'id' => 1,
            'allergy_name' => 'polen',
            'description' => 'Alergia al polen'
        ]);
    }
}
