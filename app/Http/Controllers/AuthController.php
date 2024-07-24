<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;


class AuthController extends Controller
{
    // use Auth;
    public function userRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'id' => 'required',
            'nik' => 'required|string',
            'nama' => 'required|string',
            'alamat' => 'required|string',
            'telepon' => 'required|string',
            'username' => 'required|string',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'jenis_kelamin' => 'required|string',
            'rt' => 'required|string',
            'rw' => 'required|string',
            'role' => 'required|string'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => 'Ada Kesalahan',
                'errors' => $validator->errors()
            ]);
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['nama'] = $user->nama;
        return response()->json([
            'status' => 'success',
            'message' => `User Berhasil Register`,
            'data' => $success
        ]);
    }

    public function userLogin(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            // Check user's role
            if ($user->role === 'kader' || $user->role === 'bidan' || $user->role === 'admin') {
                $token = $user->createToken('authToken')->plainTextToken;
                return response()->json([
                    'status' => 'success',
                    'message' => 'Login successful',
                    'token' => $token,
                    'role' => $user->role,
                    'nama' => $user->nama,
                    'id_user' => $user->id,
                    'username' => $user->username,
                ]);
            } else {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Unauthorized',
                ], 401);
            }
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Invalid credentials',
            ], 401);
        }
    }
}
