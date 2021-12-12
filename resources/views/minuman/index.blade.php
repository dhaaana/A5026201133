    @extends('layout.bahagia')

    @section('title', 'Tabel Data Minuman')
    @section('judulhalaman', 'Daftar Minuman')

    @section('konten')

    <div class="d-flex justify-content-between">
        <a class="btn btn-primary mb-3" href="/minuman/add"> + Tambah Minuman Baru</a>
        <form class="col-4 d-flex align-items-center" action="/minuman/cari" method="GET">
            <input style="padding: 8px; margin-right: 5px" type="text" name="cari" placeholder="Cari Minuman .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-md btn-primary" value="Cari">
        </form>
    </div>

	<br/>

	<table class="table table-bordered">
		<tr>
			<th>Kode Minuman</th>
            <th>Merk Minuman</th>
			<th>Opsi</th>
		</tr>
		@foreach($minuman as $m)
		<tr>
			<td>{{ $m->kodeminuman }}</td>
			<td>{{ $m->merkminuman }}</td>
			<td>
                <a class="btn btn-success btn-sm" href="/minuman/view/{{ $m->kodeminuman }}">View Detail</a>
				|
				<a class="btn btn-warning btn-sm" href="/minuman/edit/{{ $m->kodeminuman }}">Edit</a>
				|
				<a class="btn btn-danger btn-sm" href="/minuman/hapus/{{ $m->kodeminuman }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$minuman->links()}}


    @endsection
