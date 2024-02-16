<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Product::create([
        //     'name' => 'Example',
        //     'short_description' => 'Lorem ipsum',
        //     'description' => 'Lorem ipsum dolor set aimet',
        //     'price' => 25
        // ]);

        // Product::create([
        //     'name' => 'Example 2',
        //     'short_description' => 'Lorem ipsum',
        //     'description' => 'Lorem ipsum dolor set aimet',
        //     'price' => 42
        // ]);

        // Product::create([
        //     'name' => 'Example 3',
        //     'short_description' => 'Lorem ipsum',
        //     'description' => 'Lorem ipsum dolor set aimet',
        //     'price' => 60
        // ]);

        // NOTE: Se generan elementos de acuerdo al factory que se conecta al seeder. Se generan 150 products
        Product::factory()->count(150)->create();
    }
}
