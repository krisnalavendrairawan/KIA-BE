<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penimbangan extends Model
{
    use HasFactory;
    protected $table = 'penimbangan';
    protected $primaryKey = 'id_penimbangan';
    protected $fillable = ['tgl_penimbangan', 'nik_anak', 'berat_badan', 'tinggi_badan', 'status_gizi', 'keterangan', 'saran', 'usia', 'bulan_ke', 'id_kader'];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'nik_anak', 'nik');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_kader', 'id');
    }
}
