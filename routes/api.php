<?php

use App\Http\Controllers\Api\LoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('/login', [LoginController::class, 'authenticate']);

Route::middleware('auth.sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});
