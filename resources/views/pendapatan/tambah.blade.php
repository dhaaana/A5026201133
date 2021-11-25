<!DOCTYPE html>
<html>
<head>
	<title>Tambah Pendapatan</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
</head>
<body>

     <div class="container">
        <div class="card mt-3" style="width:500px">
            <div class="card-body">
                <h3>Tambah Pendapatan</h3>
                <br/>
                <br/>

                <form action="/pendapatan/store" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-4">
                            <h5>ID Pegawai: </h5>
                            <h5>Bulan: </h5>
                            <h5>Tahun: </h5>
                            <h5>Gaji: </h5>
                            <h5>Tunjangan: </h5>
                        </div>
                        <div class="col-6">
                            <input type="number" required="required" name="idpegawai"> <br/>
                            <input type="number" required="required" name="bulan"> <br/>
                            <input type="number" required="required" name="tahun"> <br/>
                            <input type="number" required="required" name="gaji"> <br/>
                            <input type="number" required="required" name="tunjangan"> <br/>
                        </div>
                    </div>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-primary m-2" href="/pendapatan"> Kembali</a>
                        <input class="btn btn-success m-2" type="submit" value="Simpan Data">
                    </div>
                </form>

            </div>
        </div>
     </div>



</body>
</html>
