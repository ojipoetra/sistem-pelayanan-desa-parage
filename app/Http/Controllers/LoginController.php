<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('components/login', ["title" => "Login"]);
    }

    public function authenticate(Request $request)
    {
        $validasi = $request->validate([
            "email" => "required",
            "password" => "required"
        ]);

        // jika validasi di atas berhasil maka regenerate ke dashboard

        if (Auth::attempt($validasi)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'username & password salah');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
