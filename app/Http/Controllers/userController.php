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

    //get user by id
    public function getUserById($id)
    {
        $user = User::where('id', $id)->first();

        if (!$user) {
            return response()->json([
                'message' => 'User not found.'
            ], 404);
        }

        return response()->json([
            'user' => $user
        ]);
    }

    public function cekEmailEdit($email, $id)
    {
        $user = User::where('email', $email)->where('id', '!=', $id)->first();

        if ($user) {
            return response()->json([
                'message' => 'Email sudah digunakan'
            ]);
        }

        return response()->json([
            'message' => 'Email belum digunakan'
        ]);
    }

    public function cekUsernameEdit($username, $id)
    {
        $user = User::where('username', $username)->where('id', '!=', $id)->first();

        if ($user) {
            return response()->json([
                'message' => 'Username sudah digunakan'
            ]);
        }

        return response()->json([
            'message' => 'Username belum digunakan'
        ]);
    }
    
    //update user
    //update user
    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'message' => 'User not found.'
            ], 404);
        }

        // Pengecekan email edit
        $emailExists = $this->cekEmailEdit($request->email, $id);
        if ($emailExists->original['message'] === "Email sudah digunakan") {
            return response()->json([
                'message' => 'Email sudah digunakan'
            ]);
        }

        // Pengecekan username edit
        $usernameExists = $this->cekUsernameEdit($request->username, $id);
        if ($usernameExists->original['message'] === "Username sudah digunakan") {
            return response()->json([
                'message' => 'Username sudah digunakan'
            ]);
        }

        // Update data user
        $user->nama = $request->nama;
        $user->nik = $request->nik;
        $user->role = $request->role;
        $user->username = $request->username;
        $user->password = $request->password;
        $user->confirm_password = $request->confirm_password;
        $user->email = $request->email;
        $user->alamat = $request->alamat;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->rt = $request->rt;
        $user->rw = $request->rw;

        $user->save();

        return response()->json([
            'message' => 'User updated.',
            'user' => $user
        ]);
    }

    //delete user
    public function deleteUser($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json([
                'message' => 'User not found.'
            ], 404);
        }

        $user->delete();

        return response()->json([
            'message' => 'User deleted.'
        ]);
    }

    
}
