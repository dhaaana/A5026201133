  @extends('layout.bahagia')

   @section('title', 'Tambah Data Pegawai')
   @section('judulhalaman', 'Tambah Data Pegawai')

   @section('konten')


	<br/>

	<form action="/pegawai/store" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Jabatan <input type="text" name="jabatan" required="required"> <br/>
		Umur <input type="number" name="umur" required="required"> <br/>
		Alamat <textarea name="alamat" required="required"></textarea> <br/>
        <div class="d-flex justify-content-center">
            <a class="btn btn-primary m-2" href="/pegawai"> Kembali</a>
            <input class="btn btn-success m-2" type="submit" value="Simpan Data">
        </div>
	</form>

    @endsection
