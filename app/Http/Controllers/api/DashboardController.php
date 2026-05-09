<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
         return response()->json([
            'total_users' => User::count(),
            'total_products' => Product::count()
        ]);
    }
}
