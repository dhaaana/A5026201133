  @extends('layout.bahagia')

   @section('title', 'Detail Data Pendapatan')
   @section('judulhalaman', 'Detail Data Pendapatan')

   @section('konten')

	<br/>

	@foreach($pendapatan as $p)
        <div class="row d-flex justify-content-center">
            <div class="col-3">
                <h4>ID Pendapatam</h4>
                <h4>ID Pegawai</h4>
                <h4>Nama Pegawai</h4>
                <h4>Bulan</h4>
                <h4>Tahun</h4>
                <h4>Gaji</h4>
                <h4>Tunjangan</h4>
            </div>
            <div class="col-2">
                <h4>:</h4>
                <h4>:</h4>
                <h4>:</h4>
                <h4>:</h4>
                <h4>:</h4>
                <h4>:</h4>
                <h4>:</h4>
            </div>
            <div class="col-4">
                <h4>{{ $p->ID }}</h4>
                <h4>{{ $p->pegawai_id }}</h4>
                <h4>{{ $p->pegawai_nama }}</h4>
                <h4>{{ $p->Bulan }}</h4>
                <h4>{{ $p->Tahun }}</h4>
                <h4>{{ $p->Gaji }}</h4>
                <h4>{{ $p->Tunjangan }}</h4>
            </div>
        </div>

		<div class="d-flex justify-content-center">
            <a class="btn btn-primary m-2" href="/pendapatan"> Kembali</a>
        </div>
	@endforeach

    @endsection
