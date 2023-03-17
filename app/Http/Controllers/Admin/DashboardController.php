<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Console\View\Components\Alert;

class DashboardController extends Controller

    {
        public function index()
        {
            return view('admin.dashboard');
        }
    
        public function tanggapan()
        {
            $datas = Pengaduan::latest()->get();
            return view('admin.tanggapan.index', compact('datas'));
        }
    
        public function destroy($id_pengaduan)
        {
            $pengaduan = Pengaduan::find($id_pengaduan);
            $pengaduan->delete();
            return redirect()->route('tanggapan');
        }
    
        public function store(Request $request)
        { 
            DB::table('pengaduan')->where('id', $request->id_pengaduan)->update([
                'status'=> $request->status,
            ]);
            
    
            $petugas_id = Auth::user()->id;        
    
                
            $data = $request->all();
    
            $data['id_pengaduan'] = $request->id_pengaduan;
            $data['id_petugas']=$petugas_id;
    
            // Alert::success('Berhasil', 'Pengaduan berhasil ditanggapi');
            Tanggapan::create($data);
            return redirect('pengaduan');
        }
    }

