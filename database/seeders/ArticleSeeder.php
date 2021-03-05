<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        // Article::truncate();

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        // for ($i = 0; $i < 50; $i++) {
        //     Article::create([
        //         'title' => $faker->sentence,
        //         'body' => $faker->paragraph,
        //     ]);
        // }


        for ($i = 0; $i < 50; $i++) {
            DB::table('articles')->insert([
                'title' => $faker->sentence,
                'body' => $faker->paragraph,
            ]);
        }
    }
}
