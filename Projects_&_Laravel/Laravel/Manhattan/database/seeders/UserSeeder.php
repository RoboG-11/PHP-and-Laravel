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
            'rol' => 2,
            'name' => 'Brian',
            'first_last_name' => 'Rivera',
            'second_last_name' => 'Martinez',
            'email' => 'riverab1@icloud.com',
            'password' => Hash::make('12345'),
            'phone' => 5548075347,
            'sex' => 'male',
            'age' => 21,
            'date_of_birth' => '2001-12-13'
        ]);

        User::create([
            'id' => 2,
            'rol' => 3,
            'name' => 'Jorge',
            'first_last_name' => 'Infante',
            'second_last_name' => 'Fragoso',
            'email' => 'jorge@gmail.com',
            'password' => Hash::make('12345'),
            'phone' => 387976754,
            'sex' => 'male',
            'age' => 20,
            'date_of_birth' => '2001-12-22'
        ]);

        User::create([
            'id' => 3,
            'rol' => 2,
            'name' => 'Juan',
            'first_last_name' => 'Escutia',
            'second_last_name' => 'Camanei',
            'email' => 'juan@gmail.com',
            'password' => Hash::make('12345'),
            'phone' => 754745854,
            'sex' => 'male',
            'age' => 21,
            'date_of_birth' => '2001-12-13'
        ]);

        User::create([
            'id' => 4,
            'rol' => 1,
            'name' => 'Eren',
            'first_last_name' => 'Jeager',
            'second_last_name' => 'Jeager',
            'email' => 'eren@gmail.com',
            'password' => Hash::make('12345'),
            'phone' => 5548075347,
            'sex' => 'male',
            'age' => 21,
            'date_of_birth' => '2001-12-13'
        ]);
    }
}
