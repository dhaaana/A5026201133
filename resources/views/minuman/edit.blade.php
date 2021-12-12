  @extends('layout.bahagia')

   @section('title', 'Edit Data Minuman')
   @section('judulhalaman', 'Edit Data Minuman')

   @section('konten')

	<br/>

	@foreach($minuman as $m)
	<form action="/minuman/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $m->kodeminuman }}"> <br/>
		Merk Minuman <input type="text" required="required" name="merk" value="{{ $m->merkminuman }}"> <br/>
		Stock <input type="text" required="required" name="stock" value="{{ $m->stockminuman }}"> <br/>
		<label for="tersedia">Tersedia: </label>
                <div class="d-flex p-1">
                    <input type="radio" id="yes" name="tersedia" value="Y" @if ($m->tersedia === "Y" ) checked="checked" @endif>
                    <label for="yes">Tersedia</label><br>
                    <input type="radio" id="no" name="tersedia" value="N"  @if ($m->tersedia === "N" ) checked="checked" @endif>
                    <label for="no">Tidak Tersedia</label><br>
                </div>
		<div class="d-flex justify-content-center">
            <a class="btn btn-primary m-2" href="/minuman"> Kembali</a>
            <input class="btn btn-success m-2" type="submit" value="Simpan Data">
        </div>
	</form>
	@endforeach

    @endsection
