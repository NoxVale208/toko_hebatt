<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Models\User;

// PUBLIC
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// PROTECTED ROUTES
Route::middleware('auth:sanctum')->group(function () {

    // PROFILE
    Route::get('/me', [AuthController::class, 'me']);

    // LOGOUT
    Route::post('/logout', [AuthController::class, 'logout']);

    // ADMIN ONLY
    Route::get('/admin/users', function () {

        if (auth()->user()->role !== 'admin') {

            return response()->json([
                'message' => 'akses ditolak hanya untuk admin'
            ], 403);
        }

        return User::all();
    });
});