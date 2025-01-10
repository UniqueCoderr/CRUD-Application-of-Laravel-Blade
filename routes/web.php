<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'home'])->name('users.home');
Route::resource('users', UserController::class);


