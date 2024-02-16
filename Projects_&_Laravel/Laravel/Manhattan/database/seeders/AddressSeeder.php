<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Address::create([
            'id' => 1,
            'street' => 'Prolongación Vazco de Quiroga',
            'interior_number' => null,
            'outside_number' => 238,
            'colony' => 'Santa Fe',
            'city' => 'Ciudad Bolillo',
            'zip_code' => 05340
        ]);

        Address::create([
            'id' => 2,
            'street' => 'Prolongación Vazco de Quiroga',
            'interior_number' => null,
            'outside_number' => 4834,
            'colony' => 'Santa Fe',
            'city' => 'Ciudad Bolillo',
            'zip_code' => 05340
        ]);
    }
}
