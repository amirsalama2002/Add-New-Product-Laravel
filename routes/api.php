<?php

use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;







Route::apiResource("home",HomeController::class);

Route::middleware('auth:sanctum')->group(function () {
});

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
