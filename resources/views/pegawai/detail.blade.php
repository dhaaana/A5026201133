  @extends('layout.bahagia')

   @section('title', 'Detail Data Pegawai')
   @section('judulhalaman', 'Detail Data Pegawai')

   @section('konten')

	<br/>

	@foreach($pegawai as $p)
        <div class="row d-flex justify-content-center">
            <div class="col-2">
                <h4>Nama</h4>
                <h4>Jabatan</h4>
                <h4>Umur</h4>
                <h4>Alamat</h4>
            </div>
            <div class="col-2">
                <h4>:</h4>
                <h4>:</h4>
                <h4>:</h4>
                <h4>:</h4>
            </div>
            <div class="col-4">
                <h4>{{ $p->pegawai_nama }}</h4>
                <h4>{{ $p->pegawai_jabatan }}</h4>
                <h4>{{ $p->pegawai_umur }}</h4>
                <h4>{{ $p->pegawai_alamat }}</h4>
            </div>
        </div>

		<div class="d-flex justify-content-center">
            <a class="btn btn-primary m-2" href="/pegawai"> Kembali</a>
        </div>

	@endforeach

    @endsection
