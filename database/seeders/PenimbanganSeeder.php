<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenimbanganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('penimbangan')->insert([
            'id_penimbangan' => 1,
            'tgl_penimbangan' => '2021-01-01',
            'nik_anak' => '3204110200000001',
            'berat_badan' => 3000,
            'tinggi_badan' => 50,
            'status_gizi' => 'baik',
            'keterangan' => 'baik', 
            'saran' => 'baik', 
            'id_kader' => 1,
        ]);
    }
}
