<!DOCTYPE html>
<html lang="en">
  <head>
    <title>ETS - Form Input Peminjaman Buku</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- My Style -->
    <style>
      body {
        background-color: #fef1e6;
        margin: 20px;
      }
      .user-input {
        margin-bottom: 10px;
      }
      .validation {
        color: red;
        display: none;
        font-size: small;
      }
    </style>
  </head>
  <body>
    <div class="container d-flex justify-content-center align-items-center">
      <div class="card shadow mb-3 px-5" style="width: 600px">
        <div class="card-body">
          <div class="identitas" style="line-height: 5px; font-size: small">
            <p>Ramadhana Rizqy Arifin</p>
            <p>Dhana</p>
            <p>5026201133</p>
          </div>
          <p style="text-align: center; font-weight: bold">Form Input Peminjaman Buku</p>
          <form class="me-3" name="myform" action="https://github.com/dhaaana/pweb" onsubmit="return cobaValidation()" novalidate>
            <div class="row user-input">
              <label for="judul-buku" class="col-sm-5 col-form-label">Judul Buku:</label>
              <div class="col-sm">
                <input type="text" class="form-control" name="judul-buku" id="judul-buku" pattern="[ A-Za-z0-9_@./#&+-]{10,}" required />
                <p class="validation" id="judul-error"></p>
              </div>
            </div>
            <div class="row user-input">
              <label for="no-buku" class="col-sm-5 col-form-label">No Buku:</label>
              <div class="col-sm">
                <input type="text" class="form-control" name="no-buku" id="no-buku" pattern="[0-9]{5}" required />
                <p class="validation" id="nomer-error"></p>
              </div>
            </div>
            <div class="row user-input">
              <label for="jenis-pinjam" class="col-sm-5 col-form-label">Jenis Peminjaman:</label>
              <div class="col-sm">
                <select class="col-sm form-select" aria-label="Default select example" name="jenis-pinjam" id="jenis-pinjam">
                  <option value="0" selected></option>
                  <option value="1">Biasa</option>
                  <option value="2">Kilat</option>
                  <option value="3">Lama</option>
                </select>
                <p class="validation" id="jenis-error"></p>
              </div>
            </div>
            <div class="row user-input">
              <label for="tgl-pinjam" class="col-sm-5 col-form-label">Tanggal Peminjaman:</label>
              <div class="col-sm">
                <input type="text" class="form-control" name="tgl-pinjam" id="tgl-pinjam" pattern="^(0?[1-9]|[12][0-9]|3[01])[\/\-](0?[1-9]|1[012])[\/\-]\d{4}$" required />
                <p class="validation" id="tgl-error"></p>
              </div>
            </div>
            <div class="row mx-3">
              <button type="submit" class="col btn btn-primary m-3">Simpan</button>
              <button type="button" class="col btn btn-success m-3" onclick="resetForms()">Reset</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script>
      const myForm = document.forms["myform"];
      const judulBuku = document.getElementById("judul-buku");
      const noBuku = document.getElementById("no-buku");
      const jenisPinjam = document.getElementById("jenis-pinjam");
      const tanggalPinjam = document.getElementById("tgl-pinjam");
      function cobaValidation() {
        if (!myForm.checkValidity()) {
          // Judul buku Validation
          if (judulBuku.validity.valid == false) {
            if (judulBuku.validity.valueMissing) {
              $("#judul-error").text("*Required");
              $("#judul-error").show(400);
              $("#judul-buku").css({ "border-color": "red" });
            } else if (judulBuku.validity.patternMismatch) {
              $("#judul-error").text("Judul Buku must contain atleast 10 characters");
              $("#judul-error").show(400);
              $("#judul-buku").css({ "border-color": "red" });
            }
          }
          if (judulBuku.validity.valid == true) {
            $("#judul-error").hide(400);
            $("#judul-buku").css({ "border-color": "#CED4DA" });
          }
          //  No buku Validation
          if (noBuku.validity.valid == false) {
            if (noBuku.validity.valueMissing) {
              $("#nomer-error").text("*Required");
              $("#nomer-error ").show(400);
              $("#no-buku").css({ "border-color": "red" });
            } else if (noBuku.validity.patternMismatch) {
              $("#nomer-error").text("No Buku must be number and have exactly 5 digit");
              $("#nomer-error ").show(400);
              $("#no-buku").css({ "border-color": "red" });
            }
          }
          if (noBuku.validity.valid == true) {
            $("#nomer-error ").hide(400);
            $("#no-buku").css({ "border-color": "#CED4DA" });
          }
          // Jenis peminjaman Validation
          if (jenisPinjam.value == 0) {
            $("#jenis-error").text("*Required");
            $("#jenis-error ").show(400);
            $("#jenis-pinjam").css({ "border-color": "red" });
          } else {
            $("#jenis-error ").hide(400);
            $("#jenis-pinjam").css({ "border-color": "#CED4DA" });
          }
          // Tanggal pinjam Validation
          if (tanggalPinjam.validity.valid == false) {
            if (tanggalPinjam.validity.valueMissing) {
              $("#tgl-error").text("*Required");
              $("#tgl-error ").show(400);
              $("#tgl-pinjam").css({ "border-color": "red" });
            } else if (tanggalPinjam.validity.patternMismatch) {
              $("#tgl-error").text("Tanggal must be valid (use dd/mm/yyyy)");
              $("#tgl-error ").show(400);
              $("#tgl-pinjam").css({ "border-color": "red" });
            }
          }
          if (tanggalPinjam.validity.valid == true) {
            $("#tgl-error ").hide(400);
            $("#tgl-pinjam").css({ "border-color": "#CED4DA" });
          }

          return false;
        }
        return true;
      }
      function resetForms() {
        judulBuku.value = "";
        noBuku.value = "";
        jenisPinjam.value = "";
        tanggalPinjam.value = "";
        $(".validation").hide(400);
        $(".form-control").css({ "border-color": "#CED4DA" });
        $(".form-select").css({ "border-color": "#CED4DA" });
      }
    </script>
  </body>
</html>
