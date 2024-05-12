<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anak')->insert([
            'nik' => '3204110200000001',
            'no_kk' => '3204110202000001', // '3204110200000001' => '3204110200000001'
            'nama_anak' => 'ADNIKA RIZQI RAMADHANI',
            'nama_ibu' => 'SITI NURJANAH',
            'nama_ayah' => 'AGUS SUPRIYANTO',
            'anak_ke' => '1',
            'tanggal_lahir' => '2020-02-01',
            'jenis_kelamin' => 'Laki-laki',
            'bb_lahir' => 3000,
            'pb_lahir' => 50,
            'no_hp_ortu' => '081234567890',
            'alamat' => 'Kp. Cikadu RT 01/01'
        ]);

    }
}
