<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // <-- PASTIKAN INI ADA
use Illuminate\Support\Facades\Hash; // <-- PASTIKAN INI ADA
class AuthController extends Controller
{
    private function dashboardRedirect()
    {
        // Pengecekan role: Jika admin diarahkan ke dashboard admin, jika user ke dashboard user
        if (Auth::user()?->role === 'admin') {
            return redirect()->route('dashboard.admin');
        }

        return redirect()->route('dashboard.user');
    }

    public function showLogin()
    {
        if (Auth::check()) {
            return $this->dashboardRedirect();
        }

        return view('login');
    }

    public function showRegister()
    {
        if (Auth::check()) {
            return $this->dashboardRedirect();
        }

        return view('register');
    }

    public function register(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:150', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // Pendaftaran standar via form selalu mendaftarkan sebagai 'user'
        // Akun admin biasanya dibuat langsung melalui Database Seeder / Tinker demi keamanan
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'user', 
        ]);

        return redirect()
            ->route('login')
            ->with('registration_success', 'Registrasi berhasil! Silakan login menggunakan akun kamu.');
    }

    public function login(Request $request)
    {
        if (Auth::check()) {
            return $this->dashboardRedirect();
        }

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'string'],
        ]);

        if (!Auth::attempt($credentials)) {
            return back()
                ->withErrors([
                    'email' => 'Email atau password salah.',
                ])
                ->onlyInput('email');
        }

        $request->session()->regenerate();

        // Sistem secara otomatis mengarahkan ke dashboard.admin atau dashboard.user berdasarkan kolom 'role' di database
        return $this->dashboardRedirect();
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('home')
            ->with('success', 'Kamu berhasil logout.');
    }
}