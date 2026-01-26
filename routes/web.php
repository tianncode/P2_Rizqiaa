<?php

use App\Http\Controllers\AuthC;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', [AuthC::class, 'login'])->name('login');
Route::post('/login', [AuthC::class, 'loginStore'])->name('login.store');
Route::get('/register', [AuthC::class, 'register'])->name('register');
Route::post('/register', [AuthC::class, 'registerStore'])->name('register.store');
Route::get('/logout', [AuthC::class, 'logout'])->name('logout');