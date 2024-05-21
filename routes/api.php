<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\UserController;

Route::prefix('v1')->group(function () {
    Route::post('/registration', [UserController::class, 'registration'])->name('registration');
    Route::post('/login', [UserController::class, 'login'])->name('login');

    Route::middleware('auth:sanctum')->group(function () {

        Route::post('/logout', [UserController::class, 'logout'])->name('logout');
        Route::get('/user', function (Request $request) {
            return $request->user();
        });

        Route::apiResource('cities', CityController::class);
    });
});
