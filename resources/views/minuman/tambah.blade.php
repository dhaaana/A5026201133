  @extends('layout.bahagia')

   @section('title', 'Tambah Data Minuman')
   @section('judulhalaman', 'Tambah Data Minuman')

   @section('konten')


	<br/>

	<form action="/minuman/store" method="post">
		{{ csrf_field() }}
		Merk Minuman <input type="text" required="required" name="merk"> <br/>
		Stock <input type="text" required="required" name="stock"> <br/>
		<label for="tersedia">Tersedia: </label>
                <div class="d-flex p-1">
                    <input type="radio" id="yes" name="tersedia" value="Y">
                    <label for="yes">Tersedia</label><br>
                    <input type="radio" id="no" name="tersedia" value="N">
                    <label for="no">Tidak Tersedia</label><br>
                </div>
        <div class="d-flex justify-content-center">
            <a class="btn btn-primary m-2" href="/minuman"> Kembali</a>
            <input class="btn btn-success m-2" type="submit" value="Simpan Data">
        </div>
	</form>

    @endsection
