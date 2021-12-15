    @extends('layout.bahagia')

    @section('title', 'Tabel Data karyawan1 (EAS)')
    @section('judulhalaman', 'Daftar Karyawan')

    @section('konten')

	<br/>

	<table class="table table-bordered">
		<tr>
			<th>NIP</th>
            <th>Nama</th>
			<th>Pangkat</th>
            <th>Gaji</th>
		</tr>
		@foreach($karyawan1 as $k)
		<tr>
			<td>{{ $k->NIP }}</td>
			<td>{{ $k->Nama }}</td>
            <td>{{ $k->Pangkat }}</td>
            <td>{{ number_format($k->Gaji) }}</td>
			<td>
                <a class="btn btn-success btn-sm" href="/karyawan1/view/{{ $k->NIP }}">View</a>
				|
				<a class="btn btn-warning btn-sm" href="/karyawan1/edit/{{ $k->NIP }}">Edit</a>
			</td>
		</tr>
		@endforeach
	</table>
    {{$karyawan1->links()}}


    @endsection
