<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imunisasi extends Model
{
    use HasFactory;

    protected $table = 'imunisasi';
    protected $primaryKey = 'id_imunisasi';
    protected $fillable = ['tgl_imunisasi', 'nik_anak', 'jenis_imunisasi'];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'nik_anak', 'nik');
    }

    public function kader()
    {
        return $this->belongsTo(Kader::class, 'id_kader', 'id');
    }
}
