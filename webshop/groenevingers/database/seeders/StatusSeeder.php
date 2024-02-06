<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status')->insert([
            'name' => 'actief'
        ]);

        DB::table('status')->insert([
            'name' => 'ziek'
        ]);

        DB::table('status')->insert([
            'name' => 'vakantie'
        ]);
    }
}
