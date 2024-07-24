<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imunisasi extends Model
{
    use HasFactory;

    protected $table = 'imunisasi';
    protected $primaryKey = 'id_imunisasi';
    protected $fillable = ['tgl_imunisasi', 'nik_anak', 'jenis_imunisasi', 'usia', 'vitamin', 'mpasi', 'id_kader'];

    public function anak()
    {
        return $this->belongsTo(Anak::class, 'nik_anak', 'nik');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_kader', 'id');
    }
}
