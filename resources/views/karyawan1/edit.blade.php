  @extends('layout.bahagia')

   @section('title', 'Edit Data karyawan1 (EAS)')
   @section('judulhalaman', 'Edit Data Karyawan')

   @section('konten')

	<br/>

	@foreach($karyawan1 as $k)
	<form action="/karyawan1/update" method="post">
		{{ csrf_field() }}
        <input type="hidden" name="oldnip" value="{{ $k->NIP }}"> <br/>
		NIP <input type="text" name="nip" required="required" value="{{ $k->NIP }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $k->Nama }}"> <br/>
		Pangkat <input type="text" required="required" name="pangkat" value="{{ $k->Pangkat }}"> <br/>
		Gaji <input type="number" required="required" name="gaji" value="{{ $k->Gaji }}"> <br/>
		<div class="d-flex justify-content-center">
            <a class="btn btn-primary m-2" href="/karyawan1"> Kembali</a>
            <input class="btn btn-success m-2" type="submit" value="Simpan Perubahan">
        </div>
	</form>
	@endforeach

    @endsection
