<!DOCTYPE html>
<html>
<head>
	<title>Tabel Pendapatan</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

	<div class="container">
		<div class="card mt-3">
			<div class="card-body">

				<h3 class="text-center">Nama Tabel: Pendapatan</h3>


				<a class="btn btn-primary mb-3" href="/pendapatan/tambah">Tambah Data Pendapatan</a>


				<br/>

				<table class="table table-bordered">
					<tr>
						<th>ID Pegawai</th>
						<th>Bulan</th>
						<th>Tahun</th>
						<th>Gaji</th>
                        <th>Tunjangan</th>
					</tr>
					@foreach($pendapatan as $p)
					<tr>
						<td>{{ $p->IDPegawai }}</td>
						<td>{{ $p->Bulan }}</td>
						<td>{{ $p->Tahun }}</td>
						<td>{{ $p->Gaji }}</td>
                        <td>{{ $p->Tunjangan }}</td>
						<td>
							<a class="btn btn-warning btn-sm" href="/pendapatan/edit/{{ $p->ID }}">Edit</a>
							<a class="btn btn-danger btn-sm" href="/pendapatan/hapus/{{ $p->ID }}">Hapus</a>
						</td>
					</tr>
					@endforeach
				</table>

			</div>
		</div>
	</div>


</body>
</html>
