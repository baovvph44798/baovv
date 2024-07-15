<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i=0; $i < 50; $i++) { 
            DB::table('books')->insert([
                'title' => $faker->text(25),
                'thumbnail' => 'https://cdn-i.vtcnews.vn/resize/th/upload/2024/07/15/217080474101606065871793056367006084667072382n-18385629.jpg',
                'author' => $faker->text(50),
                'publisher' => $faker->text(50),
                'Publication' => $faker->dateTime(),
                'Price' => rand(10000,900000),
                'Quantity' => rand(10,200),
                'Category_id' =>rand(1,5)
            ]);
        }

    }
}
