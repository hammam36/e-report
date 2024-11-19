<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [UserController::class, 'index'])->name('ereporthub.index');

Route::get('/register', [UserController::class, 'formRegister'])->name('ereporthub.formRegister');