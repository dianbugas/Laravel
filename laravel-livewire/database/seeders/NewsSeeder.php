<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;
use App\Models\News;

class NewsSeeder extends Seeder
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
            News::create([
                'title' => $faker->sentence($nbWords = 5, $variableNbWords = true),
                'body' => $faker->sentence($nbWords = 25, $variableNbWords = true),
            ]);
        }
    }
}