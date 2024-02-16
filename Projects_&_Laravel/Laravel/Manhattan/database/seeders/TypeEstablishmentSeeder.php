<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeEstablishment;

class TypeEstablishmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TypeEstablishment::create([
            "id" => 1,
            "type_establishment" => "consultorio"
        ]);

        TypeEstablishment::create([
            "id" => 2,
            "type_establishment" => "hospital"
        ]);

        TypeEstablishment::create([
            "id" => 3,
            "type_establishment" => "clinica"
        ]);
    }
}
