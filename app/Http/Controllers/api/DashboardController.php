<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;

class DashboardController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        if ($user->role !== 'admin') {

            return response()->json([
                'message' => 'khusus admin'
            ], 403);
        }

        return response()->json([
            'message' => 'selamat datang admin',
            'total_users' => User::count(),
            'total_products' => Product::count()
        ]);
    }
}