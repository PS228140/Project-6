<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'api_id' => 1,
            'categorie_id' => 1,
            'name' => 'rem architecto amet',
            'description' => 'Voluptates est officia doloribus labore. Natus corporis adipisci ab sint est velit officiis voluptatem. Eum eos sapiente eaque voluptas pariatur quis ut. Eos maxime mollitia aut cumque eum.',
            'price' => '786.16',
            'img_src' => 'public\assets\images\products\pannenkoekenplant.webp',
            'color' => 'blue',
            'height_cm' => '5',
            'width_cm' => '49',
            'depth_cm' => '24',
            'weight_gr' => '43',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        // DB::table('products')->insert([
        //     'api_id' => 0,
        //     'categorie_id' => 0,
        //     'name' => '',
        //     'description' => '',
        //     'price' => '',
        //     'img_src' => '',
        //     'color' => '',
        //     'height_cm' => '',
        //     'width_cm' => '',
        //     'depth_cm' => '',
        //     'weight_gr' => '',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now()
        // ]);
    }
}
