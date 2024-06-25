<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RiwayatPenyakit;

class RiwayatPenyakitController extends Controller
{
    //create riwayat penyakit
    public function createRiwayatPenyakit (Request $request)
    {
        $riwayatPenyakit = new RiwayatPenyakit;
        $riwayatPenyakit->tgl_rujukan = $request->tgl_rujukan;
        $riwayatPenyakit->jenis_penyakit = $request->jenis_penyakit;
        $riwayatPenyakit->nik_anak = $request->nik_anak;
        $riwayatPenyakit->rujukan = $request->rujukan;
        $riwayatPenyakit->saran = $request->saran;
        $riwayatPenyakit->id_kader = $request->id_kader;

        $riwayatPenyakit->save();

        return response()->json([
            'riwayatPenyakit' => $riwayatPenyakit
        ]);
    }

    //get riwayat penyakit
    public function getRiwayatPenyakit()
    {
        $riwayatPenyakit = RiwayatPenyakit::all();
        $riwayatPenyakit->load('anak');
        $riwayatPenyakit->load('user');
        return response()->json([
            'riwayatPenyakit' => $riwayatPenyakit
        ]);
    }

    //get riwayat penyakit by nik anak
    public function getRiwayatPenyakitByNik($nik_anak)
    {
        try {
            // Lakukan pencarian berdasarkan nik_anak
            $riwayatPenyakit = RiwayatPenyakit::where('nik_anak', $nik_anak)->get();
            
            // Pastikan data ditemukan sebelum merespons
            if ($riwayatPenyakit->isEmpty()) {
                return response()->json(['message' => 'Data riwayat penyakit tidak ditemukan untuk nik_anak yang diberikan'], 404);
            }
    
            // Muat data anak terkait
            $riwayatPenyakit->load('anak');
    
            return response()->json(['riwayatPenyakit' => $riwayatPenyakit]);
        } catch (\Exception $e) {
            // Tangani kesalahan jika ada
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    //get riwayat penyakit by id penyakit
    public function getRiwayatPenyakitById($id_penyakit)
    {
        try {
            // Lakukan pencarian berdasarkan id_penyakit
            $riwayatPenyakit = RiwayatPenyakit::where('id_penyakit', $id_penyakit)->get();
            
            // Pastikan data ditemukan sebelum merespons
            if ($riwayatPenyakit->isEmpty()) {
                return response()->json(['message' => 'Data riwayat penyakit tidak ditemukan untuk id_penyakit yang diberikan'], 404);
            }
    
            // Muat data anak terkait
            $riwayatPenyakit->load('anak');
    
            return response()->json(['riwayatPenyakit' => $riwayatPenyakit]);
        } catch (\Exception $e) {
            // Tangani kesalahan jika ada
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

    //update riwayat penyakit
    public function updateRiwayatPenyakit(Request $request, $id_penyakit)
    {
        $riwayatPenyakit = RiwayatPenyakit::find($id_penyakit);
        $riwayatPenyakit->tgl_rujukan = $request->tgl_rujukan;
        $riwayatPenyakit->jenis_penyakit = $request->jenis_penyakit;
        $riwayatPenyakit->nik_anak = $request->nik_anak;
        $riwayatPenyakit->rujukan = $request->rujukan;
        $riwayatPenyakit->saran = $request->saran;
        $riwayatPenyakit->id_kader = $request->id_kader;

        $riwayatPenyakit->save();

        return response()->json([
            'riwayatPenyakit' => $riwayatPenyakit
        ]);
    }

    //delete riwayat penyakit
    public function deleteRiwayatPenyakit($id_penyakit)
    {
        $riwayatPenyakit = RiwayatPenyakit::find($id_penyakit);
        $riwayatPenyakit->delete();

        return response()->json([
            'message' => 'Riwayat penyakit deleted.'
        ]);
    }
}


