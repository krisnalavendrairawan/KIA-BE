<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class userController extends Controller

{
    public function showKader ()
    {
        $kader = User::where('role', 'kader')->get();
        return response()->json([
            'kader' => $kader
        ]);
    }

    public function showBidan ()
    {
        $bidan = User::where('role', 'bidan')->get();
        return response()->json([
            'bidan' => $bidan
        ]);
    }

    public function showKaderByUsername($username)
    {
        $kader = User::where('role', 'kader')->where('username', $username)->first();

        if (!$kader) {
            return response()->json([
                'message' => 'Kader not found.'
            ], 404);
        }

        return response()->json([
            'kader' => $kader
        ]);
    }

    //getAllUser
    public function getAllUser()
    {
        $users = User::select('id', 'nama', 'nik', 'role', 'username', 'password', 'email', 'alamat', 'jenis_kelamin', 'rt', 'rw')->get();
    
        return response()->json([
            'users' => $users
        ]);

    }

    //cek username apakah ada yang sama
    public function cekUsername($username)
    {
        $user = User::where('username', $username)->first();

        if ($user) {
            return response()->json([
                'message' => 'Username sudah digunakan'
            ]);
        }

        return response()->json([
            'message' => 'Username belum digunakan'
        ]);
    }

    //cek email apakah ada yang sama
    public function cekEmail($email)
    {
        $user = User::where('email', $email)->first();

        if ($user) {
            return response()->json([
                'message' => 'Email sudah digunakan'
            ]);
        }

        return response()->json([
            'message' => 'Email belum digunakan'
        ]);
    }
    
}
