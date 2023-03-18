@extends('masyarakat.layouts.main')

@section('content')
<main id="main" class="main">

<div class="col-lg-6">

    <!-- Default Card -->
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Data Pengaduan</h5>
@foreach ($data as $item)
    {{ $item->isi_laporan }}
@endforeach
      </div>
    </div><!-- End Default Card -->

        <!-- Default Card -->
        <div class="card">
            <div class="card-body">
              <h5 class="card-title">Data Tanggapan</h5>
      @foreach ($data as $item)
          isi: {{ $item->tanggapan->tanggapan }}<br>
          {{-- {{ Auth::guard('admin')->user()->nama_petugas }}<br> --}}
          Tanggal: {{ $item->tanggapan->tgl_tanggapan }}
      @endforeach
            </div>
          </div><!-- End Default Card -->

  </div>
</main>

@endsection