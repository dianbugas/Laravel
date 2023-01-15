<?php

namespace Database\Seeders;

use App\Models\Product;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('id_ID');
        foreach (range(1, 50) as $item) {
            Product::create([
                'name' => $faker->sentence($nbWords = 5, $variableNbWords = true),
                'price' => $faker->randomElement([1, 3]),
            ]);
        }
    }
}