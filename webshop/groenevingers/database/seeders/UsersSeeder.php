<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'role' => 1,
            'email' => 'tjg.teisman@gmail.com',
            'password' => '$2y$12$LPyArz2oN2i3tAdBpMjnMu6PR.4lvIDSw9agBLOY1zy7ZM3.4d75y',
            'name' => 'Tom Teisman',
            'branch' => 3,
            'status' => 1,
            'phone' => '0639349446',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
