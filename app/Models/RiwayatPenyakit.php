<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiwayatPenyakit extends Model
{
    use HasFactory;
    protected $table = 'riwayat_penyakit';
    protected $primaryKey = 'id_penyakit';
    protected $fillable = ['tgl_rujukan', 'jenis_penyakit', 'nik_anak', 'rujukan', 'saran', 'id_kader'];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'nik_anak', 'nik');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_kader', 'id');
    }
}
