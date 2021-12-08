
    @extends('layout.bahagia')

    @section('title', 'Edit Pendapatan')
    @section('judulhalaman', 'Edit Pendapatan')
    @section('konten')

                @foreach($pendapatan as $p)
                <form action="/pendapatan/update" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $p->ID }}"> <br/>
                            <label for="idpegawai">ID Pegawai: </label>
                            <select name="idpegawai" >
                                @foreach($pegawai as $e)
                                <option value="{{ $e->pegawai_id }}" @if ($e->pegawai_id === $p->IDPegawai ) selected="selected" @endif>{{ $e->pegawai_nama }}</option>
                                @endforeach
                            </select>
                            <label for="bulan">Bulan: </label>
                             <div>
                                <div class="form-group">
                                    <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                        <input style="margin: 0; height: 50px" type="text" value="{{ $p->Bulan }}" class="form-control datetimepicker-input" data-target="#datetimepicker1" name="bulan" required="required"/>
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
                                        <input style="margin: 0; height: 50px" type="text" value="{{ $p->Tahun }}" class="form-control datetimepicker-input" data-target="#datetimepicker2" name="tahun" required="required"/>
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
                            <input type="number" required="required" name="gaji" value="{{ $p->Gaji }}"> <br/>
                            <label for="tunjangan">Tunjangan: </label>
                            <input type="number" required="required" name="tunjangan" value="{{ $p->Tunjangan }}"><br/>
                    <br>
                    <div class="d-flex justify-content-center">
                        <a class="btn btn-primary m-2" href="/pendapatan"> Kembali</a>
                        <input class="btn btn-success m-2" type="submit" value="Simpan Data">
                    </div>
                </form>
                @endforeach

    @endsection
