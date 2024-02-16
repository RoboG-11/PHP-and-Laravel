<?php

namespace Database\Seeders;

use App\Models\Establishment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

warning:
class EstablishmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Establishment::create([
            'id' => 1,
            'establishment_name' => 'Pies sanitos pa',
            'address_id' => 1,
            'type_establishment_id' => 1
        ]);

        Establishment::create([
            'id' => 2,
            'establishment_name' => 'Juanes pa',
            'address_id' => 1,
            'type_establishment_id' => 1
        ]);

        Establishment::create([
            'id' => 3,
            'establishment_name' => 'DentaBucal',
            'address_id' => 2,
            'type_establishment_id' => 3
        ]);

        // WARNING: Se tiene para que cuando se ocupe los seeders tenga info las tablas
        DB::table('doctor_establishment')->insert([
            'establishment_id' => 1,
            'doctor_user_id' => 1
        ]);

        DB::table('doctor_establishment')->insert([
            'establishment_id' => 2,
            'doctor_user_id' => 1
        ]);

        DB::table('doctor_specialty')->insert([
            'doctor_user_id' => 1,
            'specialty_id' => 1
        ]);

        DB::table('doctor_specialty')->insert([
            'doctor_user_id' => 1,
            'specialty_id' => 3
        ]);

        DB::table('doctor_specialty')->insert([
            'doctor_user_id' => 3,
            'specialty_id' => 1
        ]);

        DB::table('allergy_patient')->insert([
            'patient_user_id' => 2,
            'allergy_id' => 1
        ]);

        DB::table('disease_patient')->insert([
            'patient_user_id' => 2,
            'disease_id' => 1
        ]);
    }
}
