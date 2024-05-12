<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BidanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bidan')->insert([
            'id' => 1,
            'username' => 'bidan1',
            'email' => 'bidan1@gmail.com',
            'password' => bcrypt('bidan1'),
            'nama' => 'Bidan 1',
            'alamat' => 'Jl. Kenangan',
            'telepon' => '081234567890',
        ]);

    }
}
