
   @extends('layout.bahagia')

   @section('title', 'Edit Data Absensi')
   @section('judulhalaman', 'Edit Absensi Pegawai')

   @section('konten')

	@foreach($absen as $a)
	<form action="/absen/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $a->ID }}">
        IDPegawai <select name="idpegawai" >
            @foreach($pegawai as $p)
             <option value="{{ $p->pegawai_id }}" @if ($p->pegawai_id === $a->IDPegawai ) selected="selected" @endif>{{ $p->pegawai_nama }}</option>
            @endforeach
        </select>
        <br>
        <label for="tanggal">Tanggal: </label>
            <div class="form-group">
                <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                    <input style="margin: 0" type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1" name="tanggal" value="{{ $a->Tanggal }}" required="required"/>
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
                    <input type="radio" id="html" name="status" value="I" @if ($a->Status === "I" ) checked="checked" @endif>
                    <label for="html">Izin</label><br>
                    <input type="radio" id="css" name="status" value="S"  @if ($a->Status === "S" ) checked="checked" @endif>
                    <label for="css">Sakit</label><br>
                    <input type="radio" id="javascript" name="status" value="A"  @if ($a->Status === "A" ) checked="checked" @endif>
                    <label for="javascript">Alpha</label>
                </div>
                <div class="d-flex justify-content-center">
                    <a class="btn btn-primary m-2" href="/absen"> Kembali</a>
                    <input class="btn btn-success m-2" type="submit" value="Simpan Data">
                </div>
	</form>
	@endforeach

   @endsection
