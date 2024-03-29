<?php

namespace Database\Seeders;

use App\Models\Articles;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
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
            Articles::create([
                'title' => $faker->sentence($nbWords = 5, $variableNbWords = true),
                'body' => $faker->sentence($nbWords = 20, $variableNbWords = true),
            ]);
        }
    }
}