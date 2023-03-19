<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class Homecontroller extends Controller
{
    public function index()
    {
        $datas = Pengaduan::get();
        return view('masyarakat.pengaduan.index', compact('datas'));
    }

    public function list()
    {
        $datas = Pengaduan::get();
        return view('masyarakat.pengaduan.list-pengaduan', compact('datas'));
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validate = $request->all();
        $validate = $request->validate([
            'tgl_pengaduan' => 'required',
            'nik' => 'required',
            'isi_laporan' => 'required',
            'foto' => 'required',
        ]);
        if ($request->file('foto')) {
            $validate['foto'] = $request->file('foto')->store('pengaduan-img');
        }
        Pengaduan::create($validate);
        return redirect()->route('home')->with('alert', 'Berhasil Menyimpan !');
        
    }

    public function destroy($id_pengaduan)
    {
        $datas = Pengaduan::findOrFail($id_pengaduan);
        if ($datas->foto) {
            Storage::delete($datas->foto);
        }
        $datas->delete();
        return redirect()->route('tanggapan');
    }

    public function show($id_pengaduan)
    {
        $data = Pengaduan::where('id_pengaduan', $id_pengaduan)->get();
        return view('masyarakat.pengaduan.show', compact('data'))->with('hapus', 'Berhasil di hapus !');
    }
    


}
