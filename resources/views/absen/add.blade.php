
    @extends('layout.bahagia')

    @section('title', 'Tambah Absen')
    @section('judulhalaman', 'Tambah Data Absen')

    @section('konten')
        <form action="/absen/store" method="post">
            {{ csrf_field() }}

        <label for="idpegawai">ID Pegawai: </label>
        <select name="idpegawai" >
        @foreach($pegawai as $p)
        <option value="{{ $p->pegawai_id }}">{{ $p->pegawai_nama }}</option>
        @endforeach
        </select>
        <br>
        <label for="tanggal">Tanggal: </label>
                            <div class="form-group">
                                <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                    <input style="margin: 0" type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1" name="tanggal" required="required"/>
                                    <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                        <script type="text/javascript">
                            $(function () {
                                $('#datetimepicker1').datetimepicker({
                                    format: 'YYYY-MM-DD hh:mm:ss',
                                    showTodayButton: false,
                                    locale : 'id',
                                    "defaultDate": new Date(),
                                });
                            });
                        </script>

            <label for="status">Status: </label>
            <div class="d-flex p-1">
                <input type="radio" id="izin" name="status" value="I">
                <label for="izin">Izin</label><br>
                <input type="radio" id="sakit" name="status" value="S" checked="checked">
                <label for="sakit">Sakit</label><br>
                <input type="radio" id="alpha" name="status" value="A">
                <label for="alpha">Alpha</label>

            </div>
            <div class="d-flex justify-content-center">
                <a class="btn btn-primary m-2" href="/absen"> Kembali</a>
                <input class="btn btn-success m-2" type="submit" value="Simpan Data">
            </div>
        </form>

    @endsection
