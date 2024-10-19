<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\User\ProfileController;

Route::get('/profile', [ProfileController::class, 'profile'])->name('profile');
