<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quote;

class QuotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Quote::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++ ) {
            Quote::create([
                'author' => $faker->name,
                'quote' => $faker->sentence,
            ]);
        }
    }
}
