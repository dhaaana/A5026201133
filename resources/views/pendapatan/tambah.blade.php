

    @extends('layout.bahagia')

    @section('title', 'Tambah Pendapatan')
    @section('judulhalaman', 'Tambah Pendapatan')
    @section('konten')

                <form action="/pendapatan/store" method="post">
                    {{ csrf_field() }}
                            <label for="idpegawai">ID Pegawai: </label>
                            <select name="idpegawai" >
                            @foreach($pegawai as $e)
                            <option value="{{ $e->pegawai_id }}">{{ $e->pegawai_nama }}</option>
                            @endforeach
                            </select>
                            <label for="bulan">Bulan: </label>
                            <div>
                                <div class="form-group">
                                    <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                        <input style="margin: 0; height: 50px" type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1" name="bulan" required="required"/>
                                        <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                $(function () {
                                    $('#datetimepicker1').datetimepicker({
                                        viewMode: 'months',
                                        format: 'MM',
                                        locale : 'id',
                                        "defaultDate": new Date(),
                                    });
                                });
                                </script>
                            </div>
                            <label for="tahun">Tahun: </label>
                            <div>
                                <div class="form-group">
                                    <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                                        <input style="margin: 0; height: 50px" type="text" class="form-control datetimepicker-input" data-target="#datetimepicker2" name="tahun" required="required"/>
                                        <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                $(function () {
                                    $('#datetimepicker2').datetimepicker({
                                        viewMode: 'years',
                                        format: 'YYYY',
                                        locale : 'id',
                                        "defaultDate": new Date(),
                                    });
                                });
                                </script>
                            </div>
                            <label for="gaji">Gaji: </label>
                            <input type="number" required="required" name="gaji"> <br/>
                            <label for="tunjangan">Tunjangan: </label>
                            <input type="number" required="required" name="tunjangan"> <br/>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-primary m-2" href="/pendapatan"> Kembali</a>
                        <input class="btn btn-success m-2" type="submit" value="Simpan Data">
                    </div>
                </form>
        @endsection
