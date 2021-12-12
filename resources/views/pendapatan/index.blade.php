  @extends('layout.bahagia')

   @section('title', 'Tabel Data Pendapatan')
   @section('judulhalaman', 'Daftar Pendapatan')

   @section('konten')



                <div class="d-flex justify-content-between">
                    <a class="btn btn-primary mb-3" href="/pendapatan/tambah"> + Tambah Data Pendapatan</a>
                    <form class="col-4 d-flex align-items-center" action="/pendapatan/cari" method="GET">
                        <input style="padding: 8px; margin-right: 5px" type="text" name="cari" placeholder="Cari Pendapatan .." value="{{ old('cari') }}">
                        <input type="submit" class="btn btn-md btn-primary" value="Cari">
                    </form>
                </div>

				<br/>

				<table class="table table-bordered">
					<tr>
						<th>Nama Pegawai</th>
						<th>Bulan</th>
						<th>Tahun</th>
						<th>Gaji</th>
                        {{-- <th>Tunjangan</th> --}}
					</tr>
					@foreach($pendapatan as $p)
					<tr>
						<td>{{ $p->pegawai_nama }}</td>
						<td>{{ $p->Bulan }}</td>
						<td>{{ $p->Tahun }}</td>
						<td>{{ $p->Gaji }}</td>
                        {{-- <td>{{ $p->Tunjangan }}</td> --}}
						<td>
                            <a class="btn btn-success btn-sm" href="/pendapatan/view/{{ $p->ID }}">View Detail</a>
				            |
							<a class="btn btn-warning btn-sm" href="/pendapatan/edit/{{ $p->ID }}">Edit</a>
                            |
							<a class="btn btn-danger btn-sm" href="/pendapatan/hapus/{{ $p->ID }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>
                {{$pendapatan->links()}}

    @endsection
