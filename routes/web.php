<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ClientController;

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/login', [SessionController::class, 'create'])->middleware('guest')->name('login.index');

Route::post('/login', [SessionController::class, 'store'])->name('login.store');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.store');

Route::get('/logout', [SessionController::class, 'destroy'])->middleware('auth')->name('login.destroy');

Route::resource("clientes", ClientController::class);
