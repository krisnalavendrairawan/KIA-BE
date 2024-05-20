<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anak;
use App\Models\Penimbangan;

class anakController extends Controller
{
    public function getAnak()
    {
        $anak = Anak::with('penimbangan', 'imunisasi')->get();
            return response()->json([
                'anak' => $anak
            ]);
    }

    //buat data anak
    public function createAnak(Request $request)
    {
        $anak = new Anak;
        $anak->nik = $request->nik;
        $anak->no_kk = $request->no_kk;
        $anak->nama_anak = $request->nama_anak;
        $anak->nama_ibu = $request->nama_ibu;
        $anak->nama_ayah = $request->nama_ayah;
        $anak->anak_ke = $request->anak_ke;
        $anak->tanggal_lahir = $request->tanggal_lahir;
        $anak->jenis_kelamin = $request->jenis_kelamin;
        $anak->bb_lahir = $request->bb_lahir;
        $anak->pb_lahir = $request->pb_lahir;
        $anak->no_hp_ortu = $request->no_hp_ortu;
        $anak->alamat = $request->alamat;
        $anak->umur = $request->umur;
        $anak->save();

        return response()->json([
            'anak' => $anak
        ]);
    }


    //edit data anak

    public function updateAnak(Request $request, $nik)
{
    // Find the Anak record by nik
    $anak = Anak::where('nik', $nik)->first();

    // Check if the Anak record exists
    if (!$anak) {
        return response()->json(['message' => 'Anak not found'], 404);
    }

    // Update Anak details
    $anak->nik = $request->nik ?? $anak->nik;
    $anak->no_kk = $request->no_kk ?? $anak->no_kk;
    $anak->nama_anak = $request->nama_anak ?? $anak->nama_anak;
    $anak->nama_ibu = $request->nama_ibu ?? $anak->nama_ibu;
    $anak->nama_ayah = $request->nama_ayah ?? $anak->nama_ayah;
    $anak->anak_ke = $request->anak_ke ?? $anak->anak_ke;
    $anak->tanggal_lahir = $request->tanggal_lahir ?? $anak->tanggal_lahir;
    $anak->jenis_kelamin = $request->jenis_kelamin ?? $anak->jenis_kelamin;
    $anak->bb_lahir = $request->bb_lahir ?? $anak->bb_lahir;
    $anak->pb_lahir = $request->pb_lahir ?? $anak->pb_lahir;
    $anak->no_hp_ortu = $request->no_hp_ortu ?? $anak->no_hp_ortu;
    $anak->alamat = $request->alamat ?? $anak->alamat;
    $anak->umur = $request->umur ?? $anak->umur;

    // Save the changes
    $anak->save();

    return response()->json([
        'message' => 'Anak updated successfully',
        'anak' => $anak
    ]);
}

//getData by nik
public function getAnakByNik($nik)
{
    $anak = Anak::where('nik_anak', $nik)->with('penimbangan', 'imunisasi')->first();

    if (!$anak) {
        return response()->json(['message' => 'Anak not found'], 404);
    }

    return response()->json([
        'anak' => $anak
    ]);
}
//delete data anak

public function deleteAnak($nik)
{
    $anak = Anak::where('nik', $nik)->first();

    if (!$anak) {
        return response()->json(['message' => 'Anak not found'], 404);
    }

    $anak->delete();

    return response()->json([
        'message' => 'Anak deleted successfully'
    ]);

}



}