<!DOCTYPE html>
<html>

<head>
    <title>@yield("title")</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/css/tempusdominus-bootstrap-4.min.css" integrity="sha256-XPTBwC3SBoWHSmKasAk01c08M6sIA5gF5+sRxqak2Qs=" crossorigin="anonymous" />
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.21/moment-timezone-with-data-2012-2022.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js" integrity="sha256-z0oKYg6xiLq3yJGsp/LsY9XykbweQlHl42jHv2XTBz4=" crossorigin="anonymous"></script>
</head>
<body>

<div class="mycontainer">
@section("header")
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-2 d-flex justify-content-center">
                    <img style="height: 100px;" class="rounded-circle" src="{{ asset('foto.jpg') }}" alt="">
                </div>
                <div class="col-sm mt-2">
                    <h1>Ramadhana Rizqy Arifin</h1>
                    <h3>5026201133</h3>
                </div>
            </div>
        </div>
    </div>
@show

<div class="container mb-4">
    <div class="row">
        <div class="col-sm-3">
            <div class="container">
                <div style="height: 300px; background-color: #E9ECEF;" class="sidebar d-flex justify-content-center w-100 mx-4">
                <ul style="list-style: none" class="sidebar-list mt-2">
                    <li><a href="/pegawai">Pegawai</a></li>
                    <li><a href="/absen">Absen</a></li>
                    <li><a href="/pendapatan">Pendapatan</a></li>
                    <li><a href="/minuman">Minuman</a></li>
                    <li><a href="/karyawan1">karyawan1 (EAS)</a></li>
                </ul>
                </div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="container">
		        <div class="card mt-1 mb-4">
			        <div class="card-body">
                         <h3 class="text-center">@yield("judulhalaman")</h3>
                             @yield("konten")
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@section("footer")
    <div class="footer">

        <nav class="navbar navbar-dark position-relative" style="background-color: #E9ECEF; bottom: 0;">
            <div class="container justify-content-center p-3">
                <h6 class="fw-light" style="color: #000;">Hak Cipta oleh 5026201133 - Ramadhana Rizqy Arifin</h6>
            </div>
        </nav>
    </div>
@show

</div>
</body>

</html>
