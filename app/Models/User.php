<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'users';
    protected $primaryKey = 'id';

    protected $fillable = ['nik', 'nama', 'alamat', 'telepon', 'username', 'email', 'password', 'confirm_password', 'jenis_kelamin', 'rt', 'rw', 'role'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function penimbangan()
    {
        return $this->hasMany(Penimbangan::class, 'id_kader', 'id');
    }

    public function imunisasi()
    {
        return $this->hasMany(Imunisasi::class, 'id_kader', 'id');
    }

    public function riwayatPenyakit()
    {
        return $this->hasMany(RiwayatPenyakit::class, 'id_kader', 'id');
    }
}
