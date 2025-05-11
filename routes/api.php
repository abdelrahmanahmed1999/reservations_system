<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\superAdmin\ServiceController;
use App\Http\Controllers\Applicant\ReservationController;

Route::post('login', [AuthController::class, 'apiLogin']);
Route::post('register', [AuthController::class, 'apiRegister']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::middleware('isAdmin')->group(function () {
        Route::get('/services', [ServiceController::class, 'serviceApi']);
    });

    Route::middleware('isApplicant')->group(function () {
        Route::post('reservations', [ReservationController::class, 'insertApi'])->name('api.reservations.insert');
        Route::delete('reservations/{id}', [ReservationController::class, 'deleteApi'])->name('api.reservations.delete');
    });
});

