<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Tugas 5 - PHP</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Internal CSS -->
    <style>
      body {
        background-color: #a6b1e1;
      }

      .card .card-header {
        text-align: center;
      }

      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="d-flex min-vh-100 justify-content-center align-items-center">
        <div class="card shadow" style="width: 400px">
          <div class="card-header"><h4>Palindrome Terdekat</h4></div>
          <div class="card-body">
            <form action="hasiltugas5" method="post">
                @csrf
              <label for="bilangan" class="col-form-label">Masukkan Bilangan:</label>
              <input class="form-control" type="number" placeholder="Isi disini" name="bilangan" value="" required />
              <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary mt-3" id="tombolku" style="width: 100px">Cari</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
