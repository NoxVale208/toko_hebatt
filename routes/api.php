<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Models\User;

// REGISTER
Route::post('/register', [AuthController::class, 'register']);

// LOGIN
Route::post('/login', [AuthController::class, 'login']);

// ADMIN ROUTE (BUG)
Route::get('/admin/users', function () {
    return User::all();

});