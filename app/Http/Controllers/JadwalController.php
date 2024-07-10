<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalController extends Controller
{
    //get jadwal
    public function getJadwal()
    {
        $jadwal = Jadwal::all();
        return response()->json([
            'jadwal' => $jadwal
        ]);
    }

    //get jadwal by id
    public function getJadwalById($id)
    {
        $jadwal = Jadwal::find($id);
        return response()->json([
            'jadwal' => $jadwal
        ]);
    }

    //create jadwal
    public function createJadwal(Request $request)
    {
        $jadwal = new Jadwal;
        $jadwal->tgl_kegiatan = $request->tgl_kegiatan;
        $jadwal->rw = $request->rw;
        $jadwal->tempat = $request->tempat;
        $jadwal->keterangan = $request->keterangan;

        $jadwal->save();

        return response()->json([
            'jadwal' => $jadwal
        ]);
    }

    //update jadwal
    public function updateJadwal(Request $request, $id)
    {
        $jadwal = Jadwal::find($id);
        $jadwal->tgl_kegiatan = $request->tgl_kegiatan;
        $jadwal->rw = $request->rw;
        $jadwal->tempat = $request->tempat;
        $jadwal->keterangan = $request->keterangan;

        $jadwal->save();

        return response()->json([
            'jadwal' => $jadwal
        ]);
    }

    //delete jadwal
    public function deleteJadwal($id)
    {
        $jadwal = Jadwal::find($id);
        $jadwal->delete();

        return response()->json([
            'message' => 'Jadwal berhasil dihapus'
        ]);
    }
}
