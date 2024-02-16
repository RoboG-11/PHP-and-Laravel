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
            'id' => 1,
            'name' => 'example',
            'email' => 'example@gmail.com',
            'password' => Hash::make('12345')
        ]);

        User::create([
            'id' => 2,
            'name' => 'example2',
            'email' => 'example2@gmail.com',
            'password' => Hash::make('12345')
        ]);
        User::create([

            'id' => 3,
            'name' => 'example3',
            'email' => 'example3@gmail.com',
            'password' => Hash::make('12345')
        ]);
    }
}
