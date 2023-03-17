<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pengaduan;
use App\Models\Tanggapan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class TanggapanController extends Controller
{
    public function index()
    {
        $datas = Pengaduan::get();
        return view('admin.tanggapan.index', compact('datas'));
    }

    public function create($id_pengaduan)
    {
        $item = Pengaduan::findOrFail($id_pengaduan);
        return view('admin.tanggapan.tanggapan-pengaduan', compact('item'));
    }

    public function store(Request $request, $id_pengaduan)
    {
        $validate = $request->all();
        $validate = $request->validate([
            'tgl_tanggapan' => 'required',
            'tanggapan' => 'required',
        ]);

        $validate['id_petugas'] = Auth::guard('admin')->user()->id;
        $validate['id_pengaduan'] = $request->id_pengaduan;
        Tanggapan::create($validate);

        $data = Pengaduan::findOrFail($id_pengaduan);
        $pengaduan['status'] = 'selesai';
        $data->update($pengaduan);

        return redirect()->route('tanggapan');
    }

    public function update($id)
    {
        $data = Pengaduan::findOrFail($id);
        if ($data->status == 0) {
            $status = 'proses';
        } else {
            $status = 'proses';
        }

        $data = Pengaduan::where('id_pengaduan', $id)->update(['status' => $status]);
        return redirect()->route('tanggapan');
    }

    public function show($id_pengaduan)
    {
        $data = Pengaduan::with('tanggapan')->where('id_pengaduan', $id_pengaduan)->get();
        return view('admin.tanggapan.show', compact('data'));
    }

    public function pdf($id_pengaduan)
    {
        $data = Pengaduan::with('tanggapan')->where('id_pengaduan', $id_pengaduan)->get();
        // dd($data);
        $pdf = pdf::loadView('admin.tanggapan.cetak-pdf', compact('data'))->setOptions(['enable_php', true, 'dpi' => 150, 'defaultFont' => 'sans-serif']);
        return $pdf->download('PengaduanMasyarakat.pdf');
    }
}
