<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\admin\DashboardController;
Route::get('/', [HomeController::class, 'index'])->name('web.home');

Route::get('/admin', [DashboardController::class, 'index'])->name('admin.dashboard');
