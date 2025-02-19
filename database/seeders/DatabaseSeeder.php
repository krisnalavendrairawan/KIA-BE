<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Anak;
use App\Models\User;
use App\Models\Penimbangan;
use App\Models\Imunisasi;
use App\Models\Jadwal;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $users = [
            [
                'id' => 1,
                'nik' => '3204110200000011',
                'nama' => 'admin',
                'email' => 'admin@gmail.com',
                'username' => 'admin',
                'password' => bcrypt('admin'),
                'confirm_password' => bcrypt('admin'),
                'role' => 'admin',
                'telepon' => '081234567890',
                'jenis_kelamin' => 'Laki-Laki',
                'alamat' => 'Jl. Raya Cikondang',
                'rt' => '01',
                'rw' => '1',
            ],
            [
                'id' => 2,
                'nik' => '3204110200000012',
                'nama' => 'sakura',
                'email' => 'kader1@gmail.com',
                'username' => 'kader1',
                'password' => bcrypt('password'),
                'confirm_password' => bcrypt('password'),
                'role' => 'kader',
                'telepon' => '081234567891',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl. Merdeka',
                'rt' => '02',
                'rw' => '2',
            ],
            [
                'id' => 3,
                'nik' => '3204110200000013',
                'nama' => 'tsunade',
                'email' => 'bidan1@gmail.com',
                'username' => 'bidan1',
                'password' => bcrypt('password'),
                'confirm_password' => bcrypt('password'),
                'role' => 'bidan',
                'telepon' => '081234567892',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl. Pahlawan',
                'rt' => '03',
                'rw' => '3',
            ],
            [
                'id' => 4,
                'nik' => '3204110200000014',
                'nama' => 'hinata',
                'email' => 'kader2@gmail.com',
                'username' => 'kader2',
                'password' => bcrypt('password'),
                'confirm_password' => bcrypt('password'),
                'role' => 'kader',
                'telepon' => '081234567893',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl. Veteran',
                'rt' => '04',
                'rw' => '4',
            ],
            [
                'id' => 5,
                'nik' => '3204110200000015',
                'nama' => 'kurenai',
                'email' => 'bidan2@gmail.com',
                'username' => 'bidan2',
                'password' => bcrypt('password'),
                'confirm_password' => bcrypt('password'),
                'role' => 'bidan',
                'telepon' => '081234567894',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Jl. Sudirman',
                'rt' => '05',
                'rw' => '5',
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }

        $childs = [
            [
                'nik' => '3204110200000001',
                'no_kk' => '3204110202000001',
                'nama_anak' => 'ADNIKA RIZQI RAMADHANI',
                'nama_ibu' => 'SITI NURJANAH',
                'nama_ayah' => 'AGUS SUPRIYANTO',
                'anak_ke' => '1',
                'tanggal_lahir' => '2020-02-01',
                'jenis_kelamin' => 'Laki-Laki',
                'bb_lahir' => 2.8,
                'pb_lahir' => 33,
                'umur' => 0,
                'no_hp_ortu' => '081234567890',
                'alamat' => 'dsn. Cikondang',
                'rt' => '01',
                'rw' => '1',
            ],
            [
                'nik' => '3204110200000002',
                'no_kk' => '3204110202000002',
                'nama_anak' => 'RISKI FAUZIA NUGRAHA',
                'nama_ibu' => 'ELIS SOPIAH',
                'nama_ayah' => 'DIDIN KOMARUDIN',
                'anak_ke' => '2',
                'tanggal_lahir' => '2020-02-02',
                'jenis_kelamin' => 'Laki-Laki',
                'bb_lahir' => 2.9,
                'pb_lahir' => 34,
                'umur' => 0,
                'no_hp_ortu' => '081234567891',
                'alamat' => 'Jl. Raya Cikondang',
                'rt' => '02',
                'rw' => '2',
            ],
            [
                'nik' => '3204110200000003',
                'no_kk' => '3204110202000003',
                'nama_anak' => 'SALSABILA APRILIA PUTRI',
                'nama_ibu' => 'NURHALIMAH',
                'nama_ayah' => 'BUDI SANTOSO',
                'anak_ke' => '1',
                'tanggal_lahir' => '2020-03-03',
                'jenis_kelamin' => 'Perempuan',
                'bb_lahir' => 2.7,
                'pb_lahir' => 32,
                'umur' => 0,
                'no_hp_ortu' => '081234567892',
                'alamat' => 'Jl. Merdeka',
                'rt' => '03',
                'rw' => '3',
            ],
            [
                'nik' => '3204110200000004',
                'no_kk' => '3204110202000004',
                'nama_anak' => 'ANDIKA PUTRA PRATAMA',
                'nama_ibu' => 'DEWI KARTIKA',
                'nama_ayah' => 'SUGENG PRAYITNO',
                'anak_ke' => '3',
                'tanggal_lahir' => '2020-04-04',
                'jenis_kelamin' => 'Laki-Laki',
                'bb_lahir' => 3.0,
                'pb_lahir' => 35,
                'umur' => 0,
                'no_hp_ortu' => '081234567893',
                'alamat' => 'Jl. Pahlawan',
                'rt' => '04',
                'rw' => '4',
            ],
            [
                'nik' => '3204110200000005',
                'no_kk' => '3204110202000005',
                'nama_anak' => 'NADIA MAHARANI',
                'nama_ibu' => 'LINA MARYANA',
                'nama_ayah' => 'TONI MAULANA',
                'anak_ke' => '2',
                'tanggal_lahir' => '2020-05-05',
                'jenis_kelamin' => 'Perempuan',
                'bb_lahir' => 2.6,
                'pb_lahir' => 31,
                'umur' => 0,
                'no_hp_ortu' => '081234567894',
                'alamat' => 'Jl. Veteran',
                'rt' => '05',
                'rw' => '5',
            ],
            [
                'nik' => '3204110200000006',
                'no_kk' => '3204110202000006',
                'nama_anak' => 'JOKO TRIYONO',
                'nama_ibu' => 'ANA SARI',
                'nama_ayah' => 'SUDIRMAN',
                'anak_ke' => '4',
                'tanggal_lahir' => '2020-06-06',
                'jenis_kelamin' => 'Laki-Laki',
                'bb_lahir' => 2.5,
                'pb_lahir' => 30,
                'umur' => 0,
                'no_hp_ortu' => '081234567895',
                'alamat' => 'Jl. Sudirman',
                'rt' => '06',
                'rw' => '6',
            ],
            [
                'nik' => '3204110200000007',
                'no_kk' => '3204110202000007',
                'nama_anak' => 'TIARA PUTRI KARTIKA',
                'nama_ibu' => 'SRI WAHYUNI',
                'nama_ayah' => 'HARYANTO',
                'anak_ke' => '1',
                'tanggal_lahir' => '2020-07-07',
                'jenis_kelamin' => 'Perempuan',
                'bb_lahir' => 2.4,
                'pb_lahir' => 29,
                'umur' => 0,
                'no_hp_ortu' => '081234567896',
                'alamat' => 'Jl. Kenangan',
                'rt' => '07',
                'rw' => '7',
            ],
            [
                'nik' => '3204110200000008',
                'no_kk' => '3204110202000008',
                'nama_anak' => 'IRFAN RIZKI NUGRAHA',
                'nama_ibu' => 'AINI NURJANAH',
                'nama_ayah' => 'SUPRIADI',
                'anak_ke' => '2',
                'tanggal_lahir' => '2020-08-08',
                'jenis_kelamin' => 'Laki-Laki',
                'bb_lahir' => 3.1,
                'pb_lahir' => 36,
                'umur' => 0,
                'no_hp_ortu' => '081234567897',
                'alamat' => 'Jl. Pelita',
                'rt' => '08',
                'rw' => '8',
            ],
            [
                'nik' => '3204110200000009',
                'no_kk' => '3204110202000009',
                'nama_anak' => 'SHINTA DEWI RAHMA',
                'nama_ibu' => 'MAWAR INDAH',
                'nama_ayah' => 'SUPARMAN',
                'anak_ke' => '3',
                'tanggal_lahir' => '2020-09-09',
                'jenis_kelamin' => 'Perempuan',
                'bb_lahir' => 2.3,
                'pb_lahir' => 28,
                'umur' => 0,
                'no_hp_ortu' => '081234567898',
                'alamat' => 'Jl. Harmoni',
                'rt' => '09',
                'rw' => '9',
            ],
            [
                'nik' => '3204110200000010',
                'no_kk' => '3204110202000010',
                'nama_anak' => 'WIDIYA ARDIANSYAH',
                'nama_ibu' => 'KARTINI',
                'nama_ayah' => 'ADI PRASETYO',
                'anak_ke' => '1',
                'tanggal_lahir' => '2020-10-10',
                'jenis_kelamin' => 'Laki-Laki',
                'bb_lahir' => 3.2,
                'pb_lahir' => 37,
                'umur' => 0,
                'no_hp_ortu' => '081234567899',
                'alamat' => 'Jl. Sukajadi',
                'rt' => '10',
                'rw' => '10',
            ],
            [
                'nik' => '3204110200000011',
                'no_kk' => '3204110202000011',
                'nama_anak' => 'YUNITA APRILIA PUTRI',
                'nama_ibu' => 'DIAN SARI',
                'nama_ayah' => 'RUDI HARYANTO',
                'anak_ke' => '2',
                'tanggal_lahir' => '2020-11-11',
                'jenis_kelamin' => 'Perempuan',
                'bb_lahir' => 2.5,
                'pb_lahir' => 30,
                'umur' => 0,
                'no_hp_ortu' => '081234567900',
                'alamat' => 'Jl. Maju Jaya',
                'rt' => '11',
                'rw' => '11',
            ],
            [
                'nik' => '3204110200000012',
                'no_kk' => '3204110202000012',
                'nama_anak' => 'BAYU PRASETYO',
                'nama_ibu' => 'AYU WULANDARI',
                'nama_ayah' => 'TOTO SUHARTO',
                'anak_ke' => '3',
                'tanggal_lahir' => '2020-12-12',
                'jenis_kelamin' => 'Laki-Laki',
                'bb_lahir' => 3.0,
                'pb_lahir' => 35,
                'umur' => 0,
                'no_hp_ortu' => '081234567901',
                'alamat' => 'Jl. Harapan Indah',
                'rt' => '12',
                'rw' => '12',
            ],
            [
                'nik' => '3204110200000013',
                'no_kk' => '3204110202000013',
                'nama_anak' => 'TARI ARDIANSYAH',
                'nama_ibu' => 'HANI WULANDARI',
                'nama_ayah' => 'FAJAR SANTOSO',
                'anak_ke' => '1',
                'tanggal_lahir' => '2020-01-13',
                'jenis_kelamin' => 'Perempuan',
                'bb_lahir' => 2.6,
                'pb_lahir' => 32,
                'umur' => 0,
                'no_hp_ortu' => '081234567902',
                'alamat' => 'Jl. Pelita Harapan',
                'rt' => '02',
                'rw' => '1',
            ],
            [
                'nik' => '3204110200000014',
                'no_kk' => '3204110202000014',
                'nama_anak' => 'DINA OKTAVIA',
                'nama_ibu' => 'SRI DEWI',
                'nama_ayah' => 'SUPARDI',
                'anak_ke' => '2',
                'tanggal_lahir' => '2020-02-14',
                'jenis_kelamin' => 'Perempuan',
                'bb_lahir' => 2.7,
                'pb_lahir' => 33,
                'umur' => 0,
                'no_hp_ortu' => '081234567903',
                'alamat' => 'Jl. Bintang',
                'rt' => '02',
                'rw' => '2',
            ],
            [
                'nik' => '3204110200000015',
                'no_kk' => '3204110202000015',
                'nama_anak' => 'RIKI SAPUTRA',
                'nama_ibu' => 'LINA KARTIKA',
                'nama_ayah' => 'SURYANA',
                'anak_ke' => '3',
                'tanggal_lahir' => '2020-03-15',
                'jenis_kelamin' => 'Laki-Laki',
                'bb_lahir' => 2.8,
                'pb_lahir' => 34,
                'umur' => 0,
                'no_hp_ortu' => '081234567904',
                'alamat' => 'Jl. Pelangi',
                'rt' => '03',
                'rw' => '3',
            ],
            [
                'nik' => '3204110200000016',
                'no_kk' => '3204110202000016',
                'nama_anak' => 'YUNUS MAULANA',
                'nama_ibu' => 'LINA SUSANTI',
                'nama_ayah' => 'DIDIK PRAYITNO',
                'anak_ke' => '1',
                'tanggal_lahir' => '2020-04-16',
                'jenis_kelamin' => 'Laki-Laki',
                'bb_lahir' => 3.1,
                'pb_lahir' => 36,
                'umur' => 0,
                'no_hp_ortu' => '081234567905',
                'alamat' => 'Jl. Kemuning',
                'rt' => '04',
                'rw' => '4',
            ],
            [
                'nik' => '3204110200000017',
                'no_kk' => '3204110202000017',
                'nama_anak' => 'SARI LESTARI',
                'nama_ibu' => 'WULAN LESTARI',
                'nama_ayah' => 'RAHMAN HADI',
                'anak_ke' => '2',
                'tanggal_lahir' => '2020-05-17',
                'jenis_kelamin' => 'Perempuan',
                'bb_lahir' => 2.4,
                'pb_lahir' => 29,
                'umur' => 0,
                'no_hp_ortu' => '081234567906',
                'alamat' => 'Jl. Kenanga',
                'rt' => '05',
                'rw' => '5',
            ],
            [
                'nik' => '3204110200000018',
                'no_kk' => '3204110202000018',
                'nama_anak' => 'FIRMAN NUGRAHA',
                'nama_ibu' => 'DIANA MAHARANI',
                'nama_ayah' => 'IRWAN SUTRISNO',
                'anak_ke' => '3',
                'tanggal_lahir' => '2020-06-18',
                'jenis_kelamin' => 'Laki-Laki',
                'bb_lahir' => 2.5,
                'pb_lahir' => 30,
                'umur' => 0,
                'no_hp_ortu' => '081234567907',
                'alamat' => 'Jl. Flamboyan',
                'rt' => '006',
                'rw' => '006',
            ],
            [
                'nik' => '3204110200000019',
                'no_kk' => '3204110202000019',
                'nama_anak' => 'TINA MARIANA',
                'nama_ibu' => 'YULI MARIA',
                'nama_ayah' => 'DANI KURNIAWAN',
                'anak_ke' => '1',
                'tanggal_lahir' => '2020-07-19',
                'jenis_kelamin' => 'Perempuan',
                'bb_lahir' => 2.6,
                'pb_lahir' => 32,
                'umur' => 0,
                'no_hp_ortu' => '081234567908',
                'alamat' => 'Jl. Sakura',
                'rt' => '07',
                'rw' => '7',
            ],
            [
                'nik' => '3204110200000020',
                'no_kk' => '3204110202000020',
                'nama_anak' => 'NURDIN ARIFIN',
                'nama_ibu' => 'SITI MARYAM',
                'nama_ayah' => 'ABDUL RAHMAN',
                'anak_ke' => '2',
                'tanggal_lahir' => '2020-08-20',
                'jenis_kelamin' => 'Laki-Laki',
                'bb_lahir' => 3.0,
                'pb_lahir' => 35,
                'umur' => 0,
                'no_hp_ortu' => '081234567909',
                'alamat' => 'Jl. Melati',
                'rt' => '08',
                'rw' => '8',
            ]
        ];

        foreach ($childs as $child) {
            Anak::create($child);
        }

        $penimbangan = [
            [
                'id_penimbangan' => 1,
                'tgl_penimbangan' => '2021-02-01',
                'nik_anak' => '3204110200000001',
                'berat_badan' => 0,
                'tinggi_badan' => 0,
                'status_gizi' => '-',
                'keterangan' => '-',
                'saran' => '-',
                'usia' => 0,
                'bulan_ke' => 0,
                'id_kader' => 2,
            ],
            [
                'id_penimbangan' => 2,
                'tgl_penimbangan' => '2021-03-01',
                'nik_anak' => '3204110200000002',
                'berat_badan' => 0,
                'tinggi_badan' => 0,
                'status_gizi' => '-',
                'keterangan' => '-',
                'saran' => '-',
                'usia' => 0,
                'bulan_ke' => 0,
                'id_kader' => 2,
            ],
            [
                'id_penimbangan' => 3,
                'tgl_penimbangan' => '2021-04-01',
                'nik_anak' => '3204110200000003',
                'berat_badan' => 0,
                'tinggi_badan' => 0,
                'status_gizi' => '-',
                'keterangan' => '-',
                'saran' => '-',
                'usia' => 0,
                'bulan_ke' => 0,
                'id_kader' => 2,
            ],
            [
                'id_penimbangan' => 4,
                'tgl_penimbangan' => '2021-05-01',
                'nik_anak' => '3204110200000004',
                'berat_badan' => 0,
                'tinggi_badan' => 0,
                'status_gizi' => '-',
                'keterangan' => '-',
                'saran' => '-',
                'usia' => 0,
                'bulan_ke' => 0,
                'id_kader' => 2,
            ],
            [
                'id_penimbangan' => 5,
                'tgl_penimbangan' => '2021-06-01',
                'nik_anak' => '3204110200000005',
                'berat_badan' => 0,
                'tinggi_badan' => 0,
                'status_gizi' => '-',
                'keterangan' => '-',
                'saran' => '-',
                'usia' => 0,
                'bulan_ke' => 0,
                'id_kader' => 2,
            ],
            [
                'id_penimbangan' => 6,
                'tgl_penimbangan' => '2021-07-01',
                'nik_anak' => '3204110200000006',
                'berat_badan' => 0,
                'tinggi_badan' => 0,
                'status_gizi' => '-',
                'keterangan' => '-',
                'saran' => '-',
                'usia' => 0,
                'bulan_ke' => 0,
                'id_kader' => 2,
            ],
            [
                'id_penimbangan' => 7,
                'tgl_penimbangan' => '2021-08-01',
                'nik_anak' => '3204110200000007',
                'berat_badan' => 0,
                'tinggi_badan' => 0,
                'status_gizi' => '-',
                'keterangan' => '-',
                'saran' => '-',
                'usia' => 0,
                'bulan_ke' => 0,
                'id_kader' => 2,
            ],
            [
                'id_penimbangan' => 8,
                'tgl_penimbangan' => '2021-09-01',
                'nik_anak' => '3204110200000008',
                'berat_badan' => 0,
                'tinggi_badan' => 0,
                'status_gizi' => '-',
                'keterangan' => '-',
                'saran' => '-',
                'usia' => 0,
                'bulan_ke' => 0,
                'id_kader' => 2,
            ],
            [
                'id_penimbangan' => 9,
                'tgl_penimbangan' => '2021-10-01',
                'nik_anak' => '3204110200000009',
                'berat_badan' => 0,
                'tinggi_badan' => 0,
                'status_gizi' => '-',
                'keterangan' => '-',
                'saran' => '-',
                'usia' => 0,
                'bulan_ke' => 0,
                'id_kader' => 2,
            ],
            [
                'id_penimbangan' => 10,
                'tgl_penimbangan' => '2021-11-01',
                'nik_anak' => '3204110200000010',
                'berat_badan' => 0,
                'tinggi_badan' => 0,
                'status_gizi' => '-',
                'keterangan' => '-',
                'saran' => '-',
                'usia' => 0,
                'bulan_ke' => 0,
                'id_kader' => 2,
            ],
            [
                'id_penimbangan' => 11,
                'tgl_penimbangan' => '2021-12-01',
                'nik_anak' => '3204110200000011',
                'berat_badan' => 0,
                'tinggi_badan' => 0,
                'status_gizi' => '-',
                'keterangan' => '-',
                'saran' => '-',
                'usia' => 0,
                'bulan_ke' => 0,
                'id_kader' => 2,
            ],
            [
                'id_penimbangan' => 12,
                'tgl_penimbangan' => '2021-01-01',
                'nik_anak' => '3204110200000012',
                'berat_badan' => 0,
                'tinggi_badan' => 0,
                'status_gizi' => '-',
                'keterangan' => '-',
                'saran' => '-',
                'usia' => 0,
                'bulan_ke' => 0,
                'id_kader' => 2,
            ],
            [
                'id_penimbangan' => 13,
                'tgl_penimbangan' => '2021-02-01',
                'nik_anak' => '3204110200000013',
                'berat_badan' => 0,
                'tinggi_badan' => 0,
                'status_gizi' => '-',
                'keterangan' => '-',
                'saran' => '-',
                'usia' => 0,
                'bulan_ke' => 0,
                'id_kader' => 2,
            ],
            [
                'id_penimbangan' => 14,
                'tgl_penimbangan' => '2021-03-01',
                'nik_anak' => '3204110200000014',
                'berat_badan' => 0,
                'tinggi_badan' => 0,
                'status_gizi' => '-',
                'keterangan' => '-',
                'saran' => '-',
                'usia' => 0,
                'bulan_ke' => 0,
                'id_kader' => 2,
            ],
            [
                'id_penimbangan' => 15,
                'tgl_penimbangan' => '2021-04-01',
                'nik_anak' => '3204110200000015',
                'berat_badan' => 0,
                'tinggi_badan' => 0,
                'status_gizi' => '-',
                'keterangan' => '-',
                'saran' => '-',
                'usia' => 0,
                'bulan_ke' => 0,
                'id_kader' => 2,
            ],
            [
                'id_penimbangan' => 16,
                'tgl_penimbangan' => '2021-05-01',
                'nik_anak' => '3204110200000016',
                'berat_badan' => 0,
                'tinggi_badan' => 0,
                'status_gizi' => '-',
                'keterangan' => '-',
                'saran' => '-',
                'usia' => 0,
                'bulan_ke' => 0,
                'id_kader' => 2,
            ],
            [
                'id_penimbangan' => 17,
                'tgl_penimbangan' => '2021-06-01',
                'nik_anak' => '3204110200000017',
                'berat_badan' => 0,
                'tinggi_badan' => 0,
                'status_gizi' => '-',
                'keterangan' => '-',
                'saran' => '-',
                'usia' => 0,
                'bulan_ke' => 0,
                'id_kader' => 2,
            ],
            [
                'id_penimbangan' => 18,
                'tgl_penimbangan' => '2021-07-01',
                'nik_anak' => '3204110200000018',
                'berat_badan' => 0,
                'tinggi_badan' => 0,
                'status_gizi' => '-',
                'keterangan' => '-',
                'saran' => '-',
                'usia' => 0,
                'bulan_ke' => 0,
                'id_kader' => 2,
            ],
            [
                'id_penimbangan' => 19,
                'tgl_penimbangan' => '2021-08-01',
                'nik_anak' => '3204110200000019',
                'berat_badan' => 0,
                'tinggi_badan' => 0,
                'status_gizi' => '-',
                'keterangan' => '-',
                'saran' => '-',
                'usia' => 0,
                'bulan_ke' => 0,
                'id_kader' => 2,
            ],
            [
                'id_penimbangan' => 20,
                'tgl_penimbangan' => '2021-09-01',
                'nik_anak' => '3204110200000020',
                'berat_badan' => 0,
                'tinggi_badan' => 0,
                'status_gizi' => '-',
                'keterangan' => '-',
                'saran' => '-',
                'usia' => 0,
                'bulan_ke' => 0,
                'id_kader' => 2,
            ],
        ];

        //berat_badan dan tinggi_badan pada array penimbangan diganti dengan nilainya dengan bb_lahir dan pb_lahir pada array childs
        foreach ($penimbangan as $key => $penimbang) {
            $penimbangan[$key]['berat_badan'] = Anak::where('nik', $penimbang['nik_anak'])->first()->bb_lahir;
            $penimbangan[$key]['tinggi_badan'] = Anak::where('nik', $penimbang['nik_anak'])->first()->pb_lahir;
        }

        foreach ($penimbangan as $penimbang) {
            Penimbangan::create($penimbang);
        }



        $jadwal = [
            [
                'id_jadwal' => 1,
                'tgl_kegiatan' => '2021-02-01',
                'rw' => '1',
                'tempat' => 'Posyandu RW 01',
                'keterangan' => 'Kegiatan Posyandu dimulai pukul 08.00 WIB',
            ],
            [
                'id_jadwal' => 2,
                'tgl_kegiatan' => '2021-02-01',
                'rw' => '2',
                'tempat' => 'Posyandu RW 02',
                'keterangan' => 'Kegiatan Posyandu dimulai pukul 08.00 WIB',
            ],
            [
                'id_jadwal' => 3,
                'tgl_kegiatan' => '2021-02-01',
                'rw' => '3',
                'tempat' => 'Posyandu RW 03',
                'keterangan' => 'Kegiatan Posyandu dimulai pukul 08.00 WIB',
            ],
            [
                'id_jadwal' => 4,
                'tgl_kegiatan' => '2021-02-01',
                'rw' => '4',
                'tempat' => 'Posyandu RW 04',
                'keterangan' => 'Kegiatan Posyandu dimulai pukul 08.00 WIB',
            ],
            [
                'id_jadwal' => 5,
                'tgl_kegiatan' => '2021-02-01',
                'rw' => '5',
                'tempat' => 'Posyandu RW 05',
                'keterangan' => 'Kegiatan Posyandu dimulai pukul 08.00 WIB',
            ],
            [
                'id_jadwal' => 6,
                'tgl_kegiatan' => '2021-02-01',
                'rw' => '6',
                'tempat' => 'Posyandu RW 06',
                'keterangan' => 'Kegiatan Posyandu dimulai pukul 08.00 WIB',
            ],
            [
                'id_jadwal' => 7,
                'tgl_kegiatan' => '2021-02-01',
                'rw' => '7',
                'tempat' => 'Posyandu RW 07',
                'keterangan' => 'Kegiatan Posyandu dimulai pukul 08.00 WIB',
            ],
            [
                'id_jadwal' => 8,
                'tgl_kegiatan' => '2021-02-01',
                'rw' => '8',
                'tempat' => 'Posyandu RW 08',
                'keterangan' => 'Kegiatan Posyandu dimulai pukul 08.00 WIB',
            ],
            [
                'id_jadwal' => 9,
                'tgl_kegiatan' => '2021-02-01',
                'rw' => '9',
                'tempat' => 'Posyandu RW 09',
                'keterangan' => 'Kegiatan Posyandu dimulai pukul 08.00 WIB',
            ],
            [
                'id_jadwal' => 10,
                'tgl_kegiatan' => '2021-02-01',
                'rw' => '10',
                'tempat' => 'Posyandu RW 10',
                'keterangan' => 'Kegiatan Posyandu dimulai pukul 08.00 WIB',
            ],
            [
                'id_jadwal' => 11,
                'tgl_kegiatan' => '2021-02-01',
                'rw' => '11',
                'tempat' => 'Posyandu RW 11',
                'keterangan' => 'Kegiatan Posyandu dimulai pukul 08.00 WIB',
            ],
            [
                'id_jadwal' => 12,
                'tgl_kegiatan' => '2021-02-01',
                'rw' => '12',
                'tempat' => 'Posyandu RW 12',
                'keterangan' => 'Kegiatan Posyandu dimulai pukul 08.00 WIB',
            ],

        ];

        foreach ($jadwal as $jadwal) {
            Jadwal::create($jadwal);
        }
    }
}
