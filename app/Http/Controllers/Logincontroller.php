<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Logincontroller extends Controller
{
    public function index()
    {
        return view('masyarakat.auth.login');
    }

    public function store(Request $request)
    {
        $login = $request->validate([
            'nik' => 'required',
            'password' => 'required'
        ]);
        // dd($request->all());

        if (Auth::attempt($login)) {
            $request->session()->regenerate();
            return redirect()->route('home');
        } else {
            return back()->with('alert', 'Login Galal, Coba Lagi');
        }
    }

    public function logout(Request $request) 
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
