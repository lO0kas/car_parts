<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PartController;

Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'login')->name('auth.login');
    Route::post('/', 'authenticate')->name('auth.authenticate');
});

Route::middleware('auth')->group(function() {
    Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');
    Route::resource('/cars', CarController::class)->except(['show']);
    Route::resource('/parts', PartController::class)->except(['show']);
});
