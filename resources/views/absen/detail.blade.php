  @extends('layout.bahagia')

   @section('title', 'Detail Data Absen')
   @section('judulhalaman', 'Detail Data Absen')

   @section('konten')

	<br/>

	@foreach($absen as $a)
        <div class="row d-flex justify-content-center">
            <div class="col-3">
                <h4>ID Absen</h4>
                <h4>ID Pegawai</h4>
                <h4>Nama Pegawai</h4>
                <h4>Tanggal</h4>
                <h4>Status</h4>
            </div>
            <div class="col-2">
                <h4>:</h4>
                <h4>:</h4>
                <h4>:</h4>
                <h4>:</h4>
                <h4>:</h4>
            </div>
            <div class="col-4">
                <h4>{{ $a->ID }}</h4>
                <h4>{{ $a->pegawai_id }}</h4>
                <h4>{{ $a->pegawai_nama }}</h4>
                <h4>{{ $a->Tanggal }}</h4>
                <h4>
                    @if ($a->Status === "I")
                        Izin
                    @elseif ($a->Status === "S")
                        Sakit
                    @else
                        Alpha
                    @endif
                </h4>
            </div>
        </div>

		<div class="d-flex justify-content-center">
            <a class="btn btn-primary m-2" href="/absen"> Kembali</a>
        </div>

	@endforeach

    @endsection
