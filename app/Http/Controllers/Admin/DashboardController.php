<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Pengaduan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard.index');
    }

    public function tanggapan()
    {
        $datas = Pengaduan::latest()->get();
        return view('admin.tanggapan.index', compact('datas'));
    }
}
