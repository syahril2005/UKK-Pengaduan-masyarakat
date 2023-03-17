<?php

namespace App\Http\Controllers\Admin;

use App\Models\Petugas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminRegisterController extends Controller
{
    public function index()
    {
        return view('admin.auth.register');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama_petugas' => 'required',
            'username' => 'required|unique:petugas',
            'password' => 'required',
            'telp' => 'required',
        ]);
        // if ($request->file('image')) {
        //     $validate['image'] = $request->file('image')->store('customer-img');
        // }
        $validate['password']= Hash::make($request['password']);
        $validate['level'] = 'admin';
        Petugas::create($validate);
        return redirect()->route('admin.login');
    }
}
