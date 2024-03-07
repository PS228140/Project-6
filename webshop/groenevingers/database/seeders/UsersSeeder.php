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
            'role_id' => 1,
            'email' => 'tjg.teisman@gmail.com',
            'password' => '$2y$12$LPyArz2oN2i3tAdBpMjnMu6PR.4lvIDSw9agBLOY1zy7ZM3.4d75y',
            'name' => 'Tom Teisman',
            'branch_id' => 2,
            'status_id' => 1,
            'phone' => '0639349446',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'role_id' => 1,
            'email' => 'bastiaan.schilders@gmail.com',
            'password' => '$2y$12$C7xc8OqQm/mtxj6mADTLsO/Own9o838JJhRpDhm2urcbTDpINtmJy',
            'name' => 'Bastiaan `Jacco Adriaan` Schilders',
            'branch_id' => 1,
            'status_id' => 1,
            'phone' => '0624431222',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'email' => 'rajhogewoning@groenevingersshop.com',
            'password' => '$2y$12$7BeCi8dQLl4PUfQVZ3liIO1jvepmCHEOyWy1ho4jdoHKgyZjnykoq',
            'name' => 'Raj Hogewoning',
            'branch_id' => 3,
            'status_id' => 3,
            'phone' => '0633024999',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'email' => 'annekuin@kuinshop.com',
            'password' => '$2y$12$mu2fpJD8qLBjqK4eFDspBuaN1VvlABj006hpa6j6heK/ijELAf9oq',
            'name' => 'Anne Kuin',
            'branch_id' => 3,
            'status_id' => 1,
            'phone' => '0691204657',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        DB::table('users')->insert([
            'role_id' => 2,
            'email' => 'ytielens@snellewiel.com',
            'password' => '$2y$12$izlEKcHCKsc4.1uLgdaDmeD7SfM2jmStu/kT2/qkpbZ.YEPxFuf3q',
            'name' => 'Yannick Tielens',
            'branch_id' => 2,
            'status_id' => 2,
            'phone' => '0644194779',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
