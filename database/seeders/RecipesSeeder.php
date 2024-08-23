<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $recipes = [
            [
                'name' => 'Каша',
                'title' => 'Пример описания',
                'cost' => 150,
                'user_id' => 1,
                'category_id' => 1,

                'created_at' => Carbon::now('UTC'),
                'updated_at' => Carbon::now('UTC'),
            ],


        ];

        foreach ($recipes as $recipe) {
            DB::table('recipes')->insert([$recipe]);
        }
    }
}
