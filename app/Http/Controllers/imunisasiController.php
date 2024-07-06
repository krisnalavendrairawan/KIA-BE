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
        $imunisasi->load('user');
        return response()->json([
            'imunisasi' => $imunisasi
        ]);
    }

    //get data imunisasi by id 
    public function getImunisasiById($id)
    {
        $imunisasi = Imunisasi::find($id);
        $imunisasi->load('anak');
        return response()->json([
            'imunisasi' => $imunisasi
        ]);
    }
    //cari data imunisasi berdsarkan bulan dan tahun
    public function getImunisasiByBulan($tahun, $bulan)
    {
        $imunisasi = Imunisasi::whereYear('tgl_imunisasi', $tahun)
            ->whereMonth('tgl_imunisasi', $bulan)
            ->get();
        $imunisasi->load('anak');
        $imunisasi->load('user');
        return response()->json([
            'imunisasi' => $imunisasi
        ]);
    }


    //create imunisasi
    public function createImunisasi(Request $request)
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

    //update data imunisasi
    public function updateImunisasi(Request $request, $id)
    {
        $imunisasi = Imunisasi::find($id);
        $imunisasi->nik_anak = $request->nik_anak;
        $imunisasi->id_kader = $request->id_kader;
        $imunisasi->tgl_imunisasi = $request->tgl_imunisasi;
        $imunisasi->usia = $request->usia;
        $imunisasi->jenis_imunisasi = $request->jenis_imunisasi;

        $imunisasi->save();

        return response()->json([
            'message' => 'Data imunisasi berhasil diupdate',
            'imunisasi' => $imunisasi
        ]);
    }

    //delete data imunisasi
    public function deleteImunisasi($id)
    {
        $imunisasi = Imunisasi::find($id);

        if (!$imunisasi) {
            return response()->json(['message' => 'Data imunisasi tidak ditemukan'], 404);
        }

        $imunisasi->delete();

        return response()->json([
            'message' => 'Data imunisasi berhasil dihapus'
        ]);
    }
}
