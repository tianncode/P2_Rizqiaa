<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\People;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthC extends Controller
{
    // ===== Form Login =====
    public function showLoginForm()
    {
        return view('auth.login'); // login untuk semua role
    }

    // ===== Proses Login =====
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Proteksi session
            $request->session()->regenerate();

            $role = Auth::user()->role;

            // Gunakan redirect()->intended agar user diarahkan ke halaman sebelumnya jika ada
            if ($role === 'Admin') {
                return redirect()->intended(route('dashboard'));
            } elseif ($role === 'Agent') {
                return redirect()->intended(route('agen.dashboard'));
            } elseif ($role === 'Jemaah') {
                return redirect()->intended(route('jemaah.dashboard'));
            }

            // Fallback: logout jika role tidak dikenali
            Auth::logout();
            return redirect()->route('landingpage')->with('error', 'Role tidak dikenali');
        }

        // Jika login gagal
        return back()->withInput()->withErrors([
            'email' => 'Email atau password salah',
        ]);
    }


    // ===== Logout =====
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();         // hapus semua session
        $request->session()->regenerateToken();    // proteksi CSRF
        return redirect()->route('login');
    }

    // ===== Form Register Jemaah =====
    public function showRegisterForm()
    {
        return view('auth.register'); // register khusus jemaah
    }

    // ===== Proses Register Jemaah =====
    public function registerJemaah(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);

        // 1. Buat People record terlebih dahulu
        $people = People::create([
            'fullname' => $request->name,
        ]);

        // 2. Buat user dengan relasi polymorphic ke People (bukan Jemaah)
        // Catatan: Jemaah akan dibuat nanti ketika user memilih paket
        $user = User::create([
            'username' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_active' => true,
            'userable_id' => $people->id,
            'userable_type' => 'App\Models\People',
        ]);

        // 3. Tambahkan role 'Jemaah' ke user (many-to-many)
        $jemaahRole = Role::where('name', 'Jemaah')->first();
        if ($jemaahRole) {
            $user->roles()->attach($jemaahRole->id);
        }

        // Redirect ke halaman login
        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }
}
