<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Chính trị'],
            ['name' => 'Văn học nghệ thuật'],
            ['name' => 'Khoa học công nghệ'],
            ['name' => 'Văn hóa xã hội'],
            ['name' => 'Tiểu thuyết']
        ]);
    }
}
