<!DOCTYPE html>
<html lang="en">

<head>
  <title>Tugas 4 - Jquery</title>
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
      background-color: #80ed99;
    }

    .card {
      width: 650px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="card mt-3 m-auto">
      <div class="card-body shadow-sm">
        <h3 style="text-align: center">jQuery - Set Content and Attributes</h3>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="card my-3 m-auto">
      <div class="card-body shadow-sm">
        <p>Sesuai namanya, jQuery set content dapat digunakan untuk mengatur atau mengubah suatu teks, nilai, bahkan
          atribut dari suatu tag HTML</p>
        <!-- Nomer Satu -->
        <h4>1. text()</h4>
        <p>Fungsi set text() digunakan untuk mengubah atau mengatur teks pada elemen yang dipilih</p>
        <div class="container m-auto py-2 px-3 mb-4 border shadow-sm" style="width: 500px; border-radius: 3px">
          <p class="fw-bold">Contoh:</p>
          <p id="kalimat-1" style="text-align: center">Masukan tulisan dan klik tombol Set Text untuk mengganti kalimat
            ini</p>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Masukan disini" aria-describedby="button-addon2"
              id="input-1" />
            <button class="btn btn-success" type="button" id="button-1">Set Text</button>
          </div>
        </div>
        <!-- Nomer Dua -->
        <h4>2. html()</h4>
        <p>Fungsi set html() digunakan untuk mengubah atau mengatur konten pada elemen yang dipilih (termasuk tag html)
        </p>
        <div class="container m-auto py-2 px-3 mb-4 border shadow-sm" style="width: 500px; border-radius: 3px">
          <p class="fw-bold">Contoh:</p>
          <p id="kalimat-2" style="text-align: center">Klik tombol Set HTML untuk memberi kalimat ini tag bold</p>
          <button type="button" class="btn btn-success" id="button-2">Set HTML</button>
        </div>
        <!-- Nomer Tiga -->
        <h4>3. val()</h4>
        <p>Fungsi set val() digunakan untuk mengubah atau mengatur value pada isian form</p>
        <div class="container m-auto py-2 px-3 mb-4 border shadow-sm" style="width: 500px; border-radius: 3px">
          <p class="fw-bold">Contoh:</p>
          <p style="text-align: center">Klik tombol Set Value untuk mengganti tulisan di form menjadi "Ganti"</p>
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Masukan disini" value="Coba" id="kalimat-3" />
            <button class="btn btn-success" type="button" id="button-3">Set Value</button>
          </div>
        </div>
        <!-- Nomer Empat -->
        <h4>4. attr()</h4>
        <p>Fungsi set attr() digunakan untuk mengubah atau mengatur attribut pada tag html</p>
        <div class="container m-auto py-2 px-3 mb-4 border shadow-sm" style="width: 500px; border-radius: 3px">
          <p class="fw-bold">Contoh:</p>
          <p style="text-align: center">Masukan link <span
              class="fw-bold">https://i.ytimg.com/vi/1Ne1hqOXKKI/maxresdefault.jpg</span> ke isian dibawah kemudian
            tekan tombol Set Attr suntuk mengganti gambar burung menjadi gambar kucing</p>
          <img class="img-fluid mb-3" id="gambar-4"
            src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Eopsaltria_australis_-_Mogo_Campground.jpg/1200px-Eopsaltria_australis_-_Mogo_Campground.jpg"
            alt="">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Masukan link" id="input-4" />
            <button class="btn btn-success" type="button" id="button-4">Set Attr</button>
          </div>
        </div>
      </div>
      <script>
        // Nomer Satu
        $("#button-1").click(function () {
          let kalimat = $("#input-1").val()
          $("#kalimat-1").text(kalimat);
        });
        // Nomer Dua
        $("#button-2").click(function () {
          $("#kalimat-2").html("<b>Klik tombol Set HTML untuk memberi kalimat ini tag bold<b>");
        });
        // Nomer Tiga
        $("#button-3").click(function () {
          $("#kalimat-3").val("Ganti");
        });
        // Nomer Empat
        $("#button-4").click(function () {
          let gambar = $("#input-4").val()
          $("#gambar-4").attr("src", gambar);
        });
      </script>
</body>

</html>
