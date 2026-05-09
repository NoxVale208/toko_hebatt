<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Models\User;

// REGISTER
Route::post('/register', [AuthController::class, 'register']);

// LOGIN
Route::post('/login', [AuthController::class, 'login']);

// PUBLIC PRODUCT
Route::post('/products', [ProductController::class, 'store']);
Route::get('/products', [ProductController::class, 'index']);
Route::delete('/products/{id}', [ProductController::class, 'destroy']);


// PUBLIC DASHBOARD
Route::get('/admin/dashboard', [DashboardController::class, 'index']);