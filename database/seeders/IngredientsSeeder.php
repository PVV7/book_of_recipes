<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ingredients = [
            [
                'name' => 'Молоко',
                'unit' => '2',
                'created_at' => Carbon::now('UTC'),
                'updated_at' => Carbon::now('UTC'),
            ],
            [
                'name' => 'Хлеб',
                'unit' => '2',
                'created_at' => Carbon::now('UTC'),
                'updated_at' => Carbon::now('UTC'),
            ],
            [
                'name' => 'Помидоры',
                'unit' => '3',
                'created_at' => Carbon::now('UTC'),
                'updated_at' => Carbon::now('UTC'),
            ],
            [
                'name' => 'Огурцы',
                'unit' => '4',
                'created_at' => Carbon::now('UTC'),
                'updated_at' => Carbon::now('UTC'),
            ],
            [
                'name' => 'Творог',
                'unit' => '5',
                'created_at' => Carbon::now('UTC'),
                'updated_at' => Carbon::now('UTC'),
            ],

        ];

        foreach ($ingredients as $ingredient) {
            DB::table('ingredients')->insert([$ingredient]);
        }


    }
}
