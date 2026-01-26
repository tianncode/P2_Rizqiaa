<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthC extends Controller
{
    public function login()
    {
        if (Auth::check()) {
            return redirect('/dashboard');
        }
        return view('auth.login');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

        // Menghapus session & token lama
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/'); // arahkan ke halaman awal
    }

    public function register()
    {
        if (Auth::check()) {
            return redirect('/dashboard'); // Atau route yang kamu pakai
        }
        return view('auth.register');
    }
}
