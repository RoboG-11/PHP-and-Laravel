<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Juanjo',
            'email' => 'juanjo@gmail.com',
            'password' => Hash::make('1234567890')
        ]);

        User::create([
            'name' => 'Luis',
            'email' => 'luis@gmail.com',
            'password' => Hash::make('1234567890')
        ]);

        User::create([
            'name' => 'Maria',
            'email' => 'maria@gmail.com',
            'password' => Hash::make('1234567890')
        ]);

        User::create([
            'name' => 'Alondra',
            'email' => 'alondra@gmail.com',
            'password' => Hash::make('1234567890')
        ]);
    }
}
