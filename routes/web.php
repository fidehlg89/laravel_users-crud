<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\ShipmentsController;
use App\Http\Controllers\UserController;

//Home
Route::get('/', function () {
    return view('pages.home');
})->middleware('auth')->name('home');

//CRUD
Route::get('/login', [SessionController::class, 'create'])->middleware('guest')->name('login.index');

Route::post('/login', [SessionController::class, 'store'])->name('login.store');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])->middleware('guest')->name('register.store');

Route::get('/logout', [SessionController::class, 'destroy'])->middleware('auth')->name('login.destroy');

Route::get('export-pdf', [PDFController::class, 'index'])->name('generateTag');

//Views
Route::view('home', 'livewire.home');

Route::view('clientes.create', 'livewire.statecity');

//Resources
Route::resource("usuarios", UserController::class)->middleware('auth');

Route::resource("clientes", ClientController::class)->middleware('auth');

Route::resource("envios", ShipmentsController::class)->middleware('auth');


