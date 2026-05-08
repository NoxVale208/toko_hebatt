<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // REGISTER (BUG)
    public function register(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,

            // password plain text
            'password' => $request->password,

            'role' => $request->role ?? 'user'
        ]);

        return response()->json([
            'message' => 'Register berhasil',
            'user' => $user
        ]);
    }

    public function login(Request $request)
{
    $user = User::where('email', $request->email)->first();

    if ($user) {

        return response()->json([
            'message' => 'Login berhasil',
            'user' => $user
        ]);
    }

    return response()->json([
        'message' => 'User tidak ditemukan'
    ], 404);
}

}