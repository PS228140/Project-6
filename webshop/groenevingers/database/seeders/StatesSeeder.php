<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('states')->insert([
            "name" => "Ontvangen"
        ]);

        DB::table('states')->insert([
            "name" => "Betaald"
        ]);

        DB::table('states')->insert([
            "name" => "Verwerkt"
        ]);

        DB::table('states')->insert([
            "name" => "Verzonden"
        ]);

        DB::table('states')->insert([
            "name" => "Afgeleverd"
        ]);

        DB::table('states')->insert([
            "name" => "Geannuleerd"
        ]);
    }
}
