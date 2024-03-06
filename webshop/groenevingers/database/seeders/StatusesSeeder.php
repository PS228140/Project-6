<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('statuses')->insert([
            'name' => 'Actief',
        ]);

        DB::table('statuses')->insert([
            'name' => 'Ziek',
        ]);

        DB::table('statuses')->insert([
            'name' => 'Vakantie',
        ]);
    }
}
