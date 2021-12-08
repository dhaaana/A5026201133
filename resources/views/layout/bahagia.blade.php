<!DOCTYPE html>
<html>

<head>
    <title>@yield("title")</title>
    {{-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link
        href="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">
    <script type="text/javascript" src="//code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="//cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/app.css') }}">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/css/tempusdominus-bootstrap-4.min.css" integrity="sha256-XPTBwC3SBoWHSmKasAk01c08M6sIA5gF5+sRxqak2Qs=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha256-98vAGjEDGN79TjHkYWVD4s87rvWkdWLHPs5MC3FvFX4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha256-xaF9RpdtRxzwYMWg4ldJoyPWqyDPCRD0Cv7YEEe6Ie8=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment-with-locales.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.21/moment-timezone-with-data-2012-2022.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.1.2/js/tempusdominus-bootstrap-4.min.js" integrity="sha256-z0oKYg6xiLq3yJGsp/LsY9XykbweQlHl42jHv2XTBz4=" crossorigin="anonymous"></script>
</head>
<body>
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
            <div class="container h-100">
                <div style="height: 300px; background-color: #E9ECEF;" class="sidebar d-flex justify-content-center w-100 mx-4">
                <ul style="list-style: none" class="mt-2">
                    <li><a href="/pegawai">Pegawai</a></li>
                    <li><a href="/absen">Absen</a></li>
                    <li><a href="/pendapatan">Pendapatan</a></li>
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
    <nav class="navbar navbar-dark" style="background-color: #E9ECEF">
      <div class="container justify-content-center p-3">
        <h6 class="fw-light" style="color: #000;">Hak Cipta oleh 5026201133 - Ramadhana Rizqy Arifin</h6>
      </div>
    </nav>
@show
</body>

</html>
