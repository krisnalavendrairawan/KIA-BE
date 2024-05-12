<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penimbangan;

class penimbanganController extends Controller
{
    public function getPenimbangan()
    {
        $penimbangan = Penimbangan::all();
        return response()->json([
            'penimbangan' => $penimbangan
        ]);
    }

    public function createPenimbangan (Request $request)
    {
        $penimbangan = new Penimbangan;
        $penimbangan->nik_anak = $request->nik_anak;
        $penimbangan->id_kader = $request->id_kader;
        $penimbangan->tgl_penimbangan = $request->tgl_penimbangan;
        $penimbangan->usia = $request->usia;
        $penimbangan->berat_badan = $request->berat_badan;
        $penimbangan->tinggi_badan = $request->tinggi_badan;
        $penimbangan->status_gizi = $request->status_gizi;
        $penimbangan->keterangan = $request->keterangan;
        $penimbangan->saran = $request->saran;

        $penimbangan->save();

        return response()->json([
            'penimbangan' => $penimbangan
        ]);
    }
}
