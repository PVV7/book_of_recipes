<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'name' => 'Завтрак',
        ]);

        DB::table('categories')->insert([
            'name' => 'Обед',
        ]);

        DB::table('categories')->insert([
            'name' => 'Ужин',
        ]);

        DB::table('categories')->insert([
            'name' => 'Напитки',
        ]);

        DB::table('categories')->insert([
            'name' => 'Десерты',
        ]);
    }
}
