<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\superAdmin\DashboardController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\superAdmin\ApplicantController;
use App\Http\Controllers\superAdmin\ServiceController;
use App\Http\Controllers\Applicant\ApplicantDashboardController;
use App\Http\Controllers\Applicant\ReservationController;




Route::get('/', [AuthController::class,'login'])->name('login');
Route::get('/login', [AuthController::class,'login'])->name('login');
Route::post('/login', [AuthController::class,'postLogin'])->name('postlogin');
Route::get('/register', [AuthController::class,'register'])->name('register');
Route::post('/register', [AuthController::class,'postRegister'])->name('postregister');
Route::post('/logout', [AuthController::class,'logout'])->name('logout');


Route::group(['prefix'=>'superadmin/','as'=>'superadmin.','middleware'=>['auth','isAdmin']], function () {
    Route::get('/', [DashboardController::class, 'home'])->name('dashboard.home');


    Route::group(['prefix'=>'applicant/','as'=>'applicant.'], function () {

        Route::get('index', [ApplicantController::class,'index'])->name('index');
        Route::get('add', [ApplicantController::class,'Add'])->name('add');
        Route::post('insert', [ApplicantController::class,'Insert'])->name('insert');
        Route::get('edit/{id}', [ApplicantController::class,'Edit'])->name('edit');
        Route::post('update', [ApplicantController::class,'Update'])->name('update');
        Route::get('delete/{id}', [ApplicantController::class,'Delete'])->name('delete');
        Route::get('profile/{applicant_id}', [ApplicantController::class,'getApplicantProfile'])->name('profile');
        Route::get('changeReservationStatus/{status}/{id}', [ApplicantController::class,'changeReservationStatus'])->name('changeReservationStatus');
        
    });

    Route::group(['prefix'=>'service/','as'=>'service.'], function () {

        Route::get('index', [ServiceController::class,'index'])->name('index');
        Route::get('add', [ServiceController::class,'Add'])->name('add');
        Route::post('insert', [ServiceController::class,'Insert'])->name('insert');
        Route::get('edit/{id}', [ServiceController::class,'Edit'])->name('edit');
        Route::post('update', [ServiceController::class,'Update'])->name('update');
        Route::get('delete/{id}', [ServiceController::class,'Delete'])->name('delete');
    });
    

});


Route::group(['prefix'=>'applicant/','as'=>'applicant.','middleware'=>['auth','isApplicant']], function () {
    Route::get('/', [ApplicantDashboardController::class, 'home'])->name('dashboard.home');

   Route::group(['prefix'=>'reservation/','as'=>'reservation.'], function () {
        Route::get('add', [ReservationController::class,'Add'])->name('add');
        Route::post('insert', [ReservationController::class,'insert'])->name('insert');
        Route::get('delete/{id}', [ReservationController::class,'Delete'])->name('delete');
    });
    

});