<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Table</title>
  <link rel="shortcut icon" href="gambar/Tut Wuri Handayani.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.1/css/bootstrap.min.css">
</head>

<body style="background-image: url('gambar/blue.jpg');">
  <div class="container">
    <!-- mengatur logo gambar pada php -->
    <div style="float: left; position: absolute; top: 5px; margin-left: 5vh;">
      <img src="gambar/Hima.png" alt="Himatif" width="65" height="65">
    </div>
    <div style="float: right; position: relative; top: 5px; margin-right: 5vh;">
      <img src="gambar/upb.png" alt="Universitas Pelita Bangsa" width="65" height="65">
    </div>
    <h1>
      <div class="p-3 mb-1 bg-info text-light" style="text-align: center;">Data Tabel Absen Mahasiswa</div>
    </h1>
    <img src="gambar/Absen.png" class="img-fluid" alt="gambar absen" width="1300" height="1000">
    <table class="table table-primary table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Nim</th>
          <th>Pertemuan 1</th>
          <th>Pertemuan 2</th>
          <th>Pertemuan 3</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include("fetch.php");
        $data = json_decode(file_get_contents($url), true);
        foreach ($data as $row) {
        ?>
          <tr>
            <td><?= $row["NO"]; ?></td>
            <td><?= $row["NaMa"]; ?></td>
            <td><?= $row["NIM"]; ?></td>
            <td><?= $row["1"]; ?></td>
            <td><?= $row["2"]; ?></td>
            <td><?= $row["3"]; ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
    <strong>
      <div class="p-3 mb-2 bg-info text-light" style="text-align: center;">Copyright © 2023 - Pemrograman Mobile 2</div>
    </strong>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.1/js/bootstrap.min.js"></script>
  <script>
    // menampilkan pesan pop up jika tidak ada data yang ditemukan
    if (document.querySelector('.table tbody').rows.length === 0) {
      alert('No data found');
    }
  </script>
</body>

</html>