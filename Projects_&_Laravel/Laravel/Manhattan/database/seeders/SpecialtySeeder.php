<?php

namespace Database\Seeders;

use App\Models\Specialty;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecialtySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Specialty::create([
            'id' => 1,
            'speciality_name' => 'General',
            'description' => 'Doctor general xd'
        ]);

        Specialty::create([
            'id' => 2,
            'speciality_name' => 'Oculista',
            'description' => 'Es oculista we'
        ]);

        Specialty::create([
            'id' => 3,
            'speciality_name' => 'Dentista',
            'description' => 'Dentista paaa'
        ]);
    }
}
