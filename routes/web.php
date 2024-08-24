<?php

use App\Http\Controllers\Admin\AboutofficeController;
use App\Http\Controllers\Admin\ClientsController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;



/***  Middleware and backend Routing    ***/
Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    route::resource('aboutoffice', AboutofficeController::class);
     Route::resource('client', ClientsController::class);
});
