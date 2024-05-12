<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Kader extends Model
{
    use HasFactory;
    use HasApiTokens;

    protected $table = 'kader';
    protected $primaryKey = 'id';
    protected $fillable = ['nik', 'nama', 'alamat', 'telepon', 'username', 'email', 'password', 'confirm_password', 'jenis_kelamin', 'rt', 'rw'];

    public function penimbangan()
    {
        return $this->hasMany(Penimbangan::class, 'id_kader', 'id');
    }

    public function imunisasi()
    {
        return $this->hasMany(Imunisasi::class, 'id_kader', 'id');
    }
}
