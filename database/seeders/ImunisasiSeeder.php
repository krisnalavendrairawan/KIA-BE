<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImunisasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imunisasi')->insert([
            'id_imunisasi' => 1,
            'tgl_imunisasi' => '2021-01-01',
            'nik_anak' => '3204110200000001',
            'jenis_imunisasi' => 'BCG',
            'id_kader' => 1,
        ]);
    }
}
