<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penimbangan;

class penimbanganController extends Controller
{
    public function getPenimbangan()
    {
        //tampilkan juga nama anak
        $penimbangan = Penimbangan::all();
        $penimbangan->load('anak');
        return response()->json([
            'penimbangan' => $penimbangan
        ]);
    }

    //buat agar bisa menampilkan nama anak berdasarkan nik
    public function getPenimbanganByNik($nik_anak)
    {
        try {
            // Lakukan pencarian berdasarkan nik_anak
            $penimbangan = Penimbangan::where('nik_anak', $nik_anak)->get();

            // Pastikan data ditemukan sebelum merespons
            if ($penimbangan->isEmpty()) {
                return response()->json(['message' => 'Data penimbangan tidak ditemukan untuk nik_anak yang diberikan'], 404);
            }

            // Muat data anak terkait
            $penimbangan->load('anak');

            return response()->json(['penimbangan' => $penimbangan]);
        } catch (\Exception $e) {
            // Tangani kesalahan jika ada
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }


    public function createPenimbangan(Request $request)
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
        $penimbangan->bulan_ke = $request->bulan_ke;

        $penimbangan->save();

        return response()->json([
            'penimbangan' => $penimbangan
        ]);
    }

    //get data penimbangan by id dengan mengambil data anak dan kader
    public function getPenimbanganById($id)
    {
        $penimbangan = Penimbangan::find($id);
        $penimbangan->load('anak');
        $penimbangan->load('user');
        return response()->json([
            'penimbangan' => $penimbangan
        ]);
    }

    //cari data berdasarkan bulan tanggal penimbangan
    public function getPenimbanganByBulan($tahun, $bulan)
    {
        $penimbangan = Penimbangan::whereYear('tgl_penimbangan', $tahun)
            ->whereMonth('tgl_penimbangan', $bulan)
            ->get();
        $penimbangan->load('anak');
        $penimbangan->load('user');
        return response()->json([
            'penimbangan' => $penimbangan
        ]);
    }

    //update data penimbangan
    public function updatePenimbangan(Request $request, $id)
    {
        $penimbangan = Penimbangan::find($id);
        $penimbangan->nik_anak = $request->nik_anak;
        $penimbangan->id_kader = $request->id_kader;
        $penimbangan->tgl_penimbangan = $request->tgl_penimbangan;
        $penimbangan->usia = $request->usia;
        $penimbangan->berat_badan = $request->berat_badan;
        $penimbangan->tinggi_badan = $request->tinggi_badan;
        $penimbangan->status_gizi = $request->status_gizi;
        $penimbangan->keterangan = $request->keterangan;
        $penimbangan->saran = $request->saran;
        $penimbangan->bulan_ke = $request->bulan_ke;

        $penimbangan->save();

        return response()->json([
            'penimbangan' => $penimbangan
        ]);
    }


    //delete data penimbangan
    public function deletePenimbangan($id)
    {
        $penimbangan = Penimbangan::find($id);

        if (!$penimbangan) {
            return response()->json(['message' => 'Data penimbangan tidak ditemukan'], 404);
        }

        $penimbangan->delete();

        return response()->json([
            'message' => 'Data penimbangan berhasil dihapus'
        ]);
    }
}
