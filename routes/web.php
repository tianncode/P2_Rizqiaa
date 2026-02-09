<?php

use App\Http\Controllers\AuthC;
use Illuminate\Support\Facades\Route;

// ===== Landing page =====
// Landing page tetap public, tapi kita bisa redirect user yang sudah login
Route::get('/', function () {
    // Jika user sudah login, redirect ke dashboard sesuai role
    if (\Illuminate\Support\Facades\Auth::check()) {
        $role = \Illuminate\Support\Facades\Auth::user()->role;
        if ($role === 'admin') return redirect('/dashboard'); // sesuaikan dengan role admin
        if ($role === 'agen') return redirect('/agen/dashboard'); // jika ada route agen
         // default jemaah
    }

    return view('landingpage');
});

// ===== Login untuk semua role =====
Route::get('/login', [AuthC::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthC::class, 'login'])->name('login.submit');

// ===== Logout untuk semua role =====
Route::post('/logout', [AuthC::class, 'logout'])->name('logout')->middleware('auth');

// ===== Register khusus Jemaah =====
Route::middleware('guest')->group(function () {
    Route::get('/register', [AuthC::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthC::class, 'registerJemaah'])->name('jemaah.register.submit');
});

// ===== Dashboard (protected) =====
Route::get('/dashboard', function () {
    // pastikan user login
    if (!\Illuminate\Support\Facades\Auth::check()) {
        return redirect('/login');
    }
    return view('backend.dash');
})->name('dashboard');

Route::get('/landingpage', function () {
    // jika user sudah login, redirect sesuai role
    if (\Illuminate\Support\Facades\Auth::check()) {
        $role = \Illuminate\Support\Facades\Auth::user()->role;
        if ($role === 'admin') return redirect('/dashboard');
        if ($role === 'agen') return redirect('dashboard.agen');
        return redirect('/dashboard.jemaah');
    }
    return view('landingpage');
})->name('landingpage');
