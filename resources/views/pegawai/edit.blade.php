  @extends('layout.bahagia')

   @section('title', 'Edit Data Pegawai')
   @section('judulhalaman', 'Edit Data Pegawai')

   @section('konten')

	<br/>

	@foreach($pegawai as $p)
	<form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
		<div class="d-flex justify-content-center">
            <a class="btn btn-primary m-2" href="/pegawai"> Kembali</a>
            <input class="btn btn-success m-2" type="submit" value="Simpan Data">
        </div>
	</form>
	@endforeach

    @endsection
