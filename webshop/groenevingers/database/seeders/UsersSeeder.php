<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
            'phone' => '06-39349446',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'role' => 1,
            'email' => 'bastiaan.schilders@gmail.com',
            'password' => '$2y$12$C7xc8OqQm/mtxj6mADTLsO/Own9o838JJhRpDhm2urcbTDpINtmJy',
            'name' => 'Bastiaan `Jacco Adriaan` Schilders',
            'branch' => 1,
            'status' => 1,
            'phone' => '06-24431222',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'role' => 2,
            'email' => 'rajhogewoning@groenevingersshop.com',
            'password' => '$2y$12$7BeCi8dQLl4PUfQVZ3liIO1jvepmCHEOyWy1ho4jdoHKgyZjnykoq',
            'name' => 'Raj Hogewoning',
            'branch' => 1,
            'status' => 1,
            'phone' => '06-33024999',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'role' => 2,
            'email' => 'annekuin@kuinshop.com',
            'password' => '$2y$12$mu2fpJD8qLBjqK4eFDspBuaN1VvlABj006hpa6j6heK/ijELAf9oq',
            'name' => 'Anne Kuin',
            'branch' => 1,
            'status' => 1,
            'phone' => '06-91204657',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'role' => 2,
            'email' => 'ytielens@snellewiel.com',
            'password' => '$2y$12$izlEKcHCKsc4.1uLgdaDmeD7SfM2jmStu/kT2/qkpbZ.YEPxFuf3q',
            'name' => 'Yannick Tielens',
            'branch' => 1,
            'status' => 1,
            'phone' => '06-44194779',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
