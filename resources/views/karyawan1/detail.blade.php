  @extends('layout.bahagia')

   @section('title', 'View Data karyawan1 (EAS)')
   @section('judulhalaman', 'View Data Karyawan')

   @section('konten')

	<br/>

	@foreach($karyawan1 as $k)
        <div class="row d-flex justify-content-center">
            <div class="col-4">
                <h4>NIP</h4>
                <h4>Nama</h4>
                <h4>Pangkat</h4>
                <h4>Gaji</h4>
            </div>
            <div class="col-2">
                <h4>:</h4>
                <h4>:</h4>
                <h4>:</h4>
                <h4>:</h4>
            </div>
            <div class="col-4">
                <h4>{{ $k->NIP }}</h4>
                <h4>{{ $k->Nama }}</h4>
                <h4>{{ $k->Pangkat }}</h4>
                <h4>{{ number_format($k->Gaji) }}</h4>
            </div>
        </div>

		<div class="d-flex justify-content-center">
            <a class="btn btn-primary m-2" href="/karyawan1"> Kembali</a>
        </div>

	@endforeach

    @endsection
