<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Registercontroller extends Controller
{
    public function index()
    {
        return view('masyarakat.auth.register');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'username' => 'required',
            'password' => 'required',
            'telp' => 'required',
        ]);
       
        $validate['password']= Hash::make($request['password']);
        // $validate['level'] = 'admin';
        Masyarakat::create($validate);
        return redirect()->route('login')->with('success', 'Success - Profile Berhasil Di Update');;
    }
}
