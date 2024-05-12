<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kader;
use Laravel\Passport\HasApiTokens;
class kaderController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function showKader()
    {
        //tampilkan json dari data kader

        $kader = Kader::all();
        // ambil nama kadernya saja

        return response()->json($kader);
    }
}
