<!DOCTYPE html>
<html>
<head>
	<title>Edit Pendapatan</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

    <div class="container">
		<div class="card mt-3" style="width:500px">
			<div class="card-body">

                <h3>Edit Pendapatan</h3>


	            <br/>

                @foreach($pendapatan as $p)
                <form action="/pendapatan/update" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
                    <div class="row">
                        <div class="col-4">
                            <h5>ID Pegawai: </h5>
                            <h5>Bulan: </h5>
                            <h5>Tahun: </h5>
                            <h5>Gaji: </h5>
                            <h5>Tunjangan: </h5>
                        </div>
                        <div class="col-6">
                            <input type="number" required="required" name="idpegawai" value="{{ $p->IDPegawai }}"> <br/>
                            <input type="number" required="required" name="bulan" value="{{ $p->Bulan }}"> <br/>
                            <input type="number" required="required" name="tahun" value="{{ $p->Tahun }}"> <br/>
                            <input type="number" required="required" name="gaji" value="{{ $p->Gaji }}"> <br/>
                            <input type="number" required="required" name="tunjangan" value="{{ $p->Tunjangan }}"><br/>
                        </div>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-primary m-2" href="/pendapatan"> Kembali</a>
                        <input class="btn btn-success m-2" type="submit" value="Simpan Data">
                    </div>
                </form>
                @endforeach

			</div>
		</div>
	</div>




</body>
</html>
