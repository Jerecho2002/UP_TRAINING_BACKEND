<?php

use App\Http\Controllers\SampleController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('users', SampleController::class);

    Route::post('/logout', [AuthController::class, 'logout']);
    
    Route::get('/profile', function (Request $request) {
        return $request->user();
    });
});

