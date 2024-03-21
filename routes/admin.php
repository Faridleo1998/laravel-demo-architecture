<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => to_route('dashboard'));

Route::get('/dashboard', fn () => view('dashboard'))->name('dashboard');

Route::resource('users', UserController::class)->only(['index', 'show']);
