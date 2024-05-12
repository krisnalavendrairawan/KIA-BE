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
    
}
