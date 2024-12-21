<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }
    public function showRegister()
    {
        return view('auth.Register');
    }

    public function register(Request $request): RedirectResponse
    {
        // Validasi input data
        $validatedData = $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'email', 'unique:users,email'],
                'password' => ['required', 'string', 'min:8'],
            ],
            [
                'name.required' => 'Nama wajib diisi.',
                'email.required' => 'Email wajib diisi.',
                'email.unique' => 'Email sudah terdaftar.',
                'password.required' => 'Password wajib diisi.',
                'password.min' => 'Password harus terdiri dari minimal 8 karakter.',
            ]
        );
        

        // Buat pengguna baru
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Login otomatis setelah registrasi
        Auth::login($user);

        // Alihkan ke halaman sesuai peran pengguna
        if ($user->role == 'admin') {
            return redirect()->to('/admin/dashboard');
        } elseif ($user->role == 'user') {
            return redirect()->to('/auth/login');
        }

        return redirect()->to('/'); // Default redirect jika peran tidak dikenali
    }
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate(
            [
                // 'username' => ['required','regex:/^\S*$/'],
                'email' => ['required', 'email'],
                'password' => ['required']
            ],
            [
                'email.required' => 'Email wajib diisi.',
                'password.required' => 'Password wajib diisi.'
            ]
        );
        // $credentials = $request->only('username', 'password');
        // $remember_me = $request->has('remember') ? true : false; 

        if (Auth::attempt($credentials)) {
            // $request->session()->regenerate();
            if (Auth::user()->role == 'admin') {
                return redirect()->to('/admin/dashboard');
            } elseif (Auth::user()->role == 'user') {
                return redirect()->to('/');
            }
        }
        return back()->withErrors([
            'loginFailed' => 'Login Gagal, Username atau Password yang Anda masukkan salah.'
        ]);
    }
    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('auth/login');
    }
}
