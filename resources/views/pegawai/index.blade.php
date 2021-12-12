    @extends('layout.bahagia')

    @section('title', 'Tabel Data Pegawai')
    @section('judulhalaman', 'Daftar Pegawai')

    @section('konten')

    <div class="d-flex justify-content-between">
        <a class="btn btn-primary mb-3" href="/pegawai/tambah"> + Tambah Pegawai Baru</a>
        <form class="col-4 d-flex align-items-center" action="/pegawai/cari" method="GET">
            <input style="padding: 8px; margin-right: 5px" type="text" name="cari" placeholder="Cari Pegawai .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-md btn-primary" value="Cari">
        </form>
    </div>

	<br/>

	<table class="table table-bordered">
		<tr>
			<th>Nama</th>
			{{-- <th>Jabatan</th>
			<th>Umur</th> --}}
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			{{-- <td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td> --}}
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
                <a class="btn btn-success btn-sm" href="/pegawai/view/{{ $p->pegawai_id }}">View Detail</a>
				|
				<a class="btn btn-warning btn-sm" href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a class="btn btn-danger btn-sm" href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$pegawai->links()}}


    @endsection
