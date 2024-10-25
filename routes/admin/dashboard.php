<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
//Route::get('/dashboard', [AdminDashboardController::class, 'adminDashboard'])->name('admin.dashboard');
