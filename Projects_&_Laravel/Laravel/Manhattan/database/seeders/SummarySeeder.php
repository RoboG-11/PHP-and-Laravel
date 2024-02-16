<?php

namespace Database\Seeders;

use App\Models\Summary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SummarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Summary::create([
            'id' => 1,
            'date_id' => 1,
            'medical_prescription_id' => 1,
            'diagnostic' => 'El paciente está bien'
        ]);
    }
}
