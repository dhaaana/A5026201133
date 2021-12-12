  @extends('layout.bahagia')

   @section('title', 'Detail Data Minuman')
   @section('judulhalaman', 'Detail Data Minuman')

   @section('konten')

	<br/>

	@foreach($minuman as $m)
        <div class="row d-flex justify-content-center">
            <div class="col-4">
                <h4>ID Minuman</h4>
                <h4>Merk Minuman</h4>
                <h4>Stock Minuman</h4>
                <h4>Status Ketersediaan</h4>
            </div>
            <div class="col-2">
                <h4>:</h4>
                <h4>:</h4>
                <h4>:</h4>
                <h4>:</h4>
            </div>
            <div class="col-4">
                <h4>{{ $m->kodeminuman }}</h4>
                <h4>{{ $m->merkminuman }}</h4>
                <h4>{{ $m->stockminuman }}</h4>
                <h4>
                    @if ($m->tersedia === "Y")
                        Tersedia
                    @else
                        Tidak Tersedia
                    @endif
                </h4>
            </div>
        </div>

		<div class="d-flex justify-content-center">
            <a class="btn btn-primary m-2" href="/minuman"> Kembali</a>
        </div>

	@endforeach

    @endsection
