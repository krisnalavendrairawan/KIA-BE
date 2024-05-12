<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kader')->insert([
            'id' => 1,
            'nik' => '1234567890123456',
            'nama' => 'Kader 1',
            'alamat' => 'Jl. Kenangan',
            'tanggal_lahir' => '2000-01-01',
            'telepon' => '081234567890',
            'username' => 'kader1',
            'email' => 'kader1@gmail.com',
            'password' => bcrypt('kader1'),
            'jenis_kelamin' => 'perempuan',
        ]);
    }
}
