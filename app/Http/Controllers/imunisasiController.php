<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imunisasi;

class imunisasiController extends Controller
{
    //get data imunisasi dengan dengan anak
    public function getImunisasi()
    {
        $imunisasi = Imunisasi::all();
        $imunisasi->load('anak');
        return response()->json([
            'imunisasi' => $imunisasi
        ]);
    }

    //create imunisasi
    public function createImunisasi (Request $request)
    {
        $imunisasi = new Imunisasi;
        $imunisasi->nik_anak = $request->nik_anak;
        $imunisasi->id_kader = $request->id_kader;
        $imunisasi->tgl_imunisasi = $request->tgl_imunisasi;
        $imunisasi->usia = $request->usia;
        $imunisasi->jenis_imunisasi = $request->jenis_imunisasi;
        $imunisasi->save();

        return response()->json([
            'message' => 'Data imunisasi berhasil ditambahkan',
            'imunisasi' => $imunisasi
        ]);
    }
}
