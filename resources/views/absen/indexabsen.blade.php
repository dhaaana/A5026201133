   @extends('layout.bahagia')

   @section('title', 'Tabel Data Absensi')
   @section('judulhalaman', 'Daftar Absensi Pegawai')

   @section('konten')


   <div class="d-flex justify-content-between">
        <a class="btn btn-primary mb-3" href="/absen/add"> + Tambah Absensi</a>
        <form class="col-4 d-flex align-items-center" action="/absen/cari" method="GET">
            <input style="padding: 8px; margin-right: 5px" type="text" name="cari" placeholder="Cari Absensi .." value="{{ old('cari') }}">
            <input type="submit" class="btn btn-md btn-primary" value="Cari">
        </form>
    </div>

	<br/>

	<table class="table table-bordered">
		<tr>

			<th>Nama Pegawai</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($absen as $a)
		<tr>

			<td>{{ $a->pegawai_nama }}</td>
			<td>{{ $a->Tanggal }}</td>
			<td>{{ $a->Status }}</td>
			<td>
                <a class="btn btn-success btn-sm" href="/absen/view/{{ $a->ID }}">View Detail</a>
				|
                <a class="btn btn-warning btn-sm" href="/absen/edit/{{ $a->ID }}">Edit</a>
                |
				<a class="btn btn-danger btn-sm" href="/absen/hapus/{{ $a->ID }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
    <p>
        Keterangan Status: <br>
        I : Izin <br>
        S : Sakit <br>
        A : Alpha <br>
        </p>

    {{$absen->links()}}

        @endsection
