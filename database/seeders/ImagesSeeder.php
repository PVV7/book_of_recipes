<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $images = [
            [
                'alt' => 'Image1',
                'path' => '/image1',
                'recipe_id' => 1,
                'created_at' => Carbon::now('UTC'),
                'updated_at' => Carbon::now('UTC'),
            ],
        ];

        foreach ($images as $image) {
            DB::table('images')->insert([$image]);
        }
    }
}
