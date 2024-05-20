<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    use HasFactory;

    protected $table = 'anak';
    protected $primaryKey = 'nik';
    protected $fillable = ['nik', 'no_kk', 'nama_anak', 'nama_ibu', 'nama_ayah', 'anak_ke', 'tanggal_lahir', 'jenis_kelamin', 'bb_lahir', 'pb_lahir', 'no_hp_ortu', 'alamat', 'umur'];

    public function imunisasi()
    {
        return $this->hasMany(Imunisasi::class, 'nik_anak', 'nik');
    }

    public function penimbangan()
    {
        return $this->hasMany(Penimbangan::class, 'nik_anak', 'nik');
    }
}
