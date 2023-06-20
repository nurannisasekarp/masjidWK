<?php

require 'koneksi.php';
$conn = mysqli_connect("localhost", "root", "", "db_masjid");

if (isset($_POST["submit"])) {


    if (tambah($_POST) > 0) {
        echo "<script> alert('data berhasil diinput')
                       document.location.href = 'index.php'
                       </script>";
    } else {
        echo "<script>
        alert('data gagal diinput')
        document.location.href = 'index.php'
        </script>";
    };
};
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
    html {
      display: flex;
      justify-content: center;
    }
  </style>
</head>

<body>
    <h1>Tambah Data</h1>
    <br>
    <form action="" method="post" enctype="multipart/form-data">
        <label class="form-label" for="">Nama : </label>
        <input style="width:250px;" class="form-control" type="text" name="nama_donatur" id="nama">
        <br>
        <label class="form-label" for="">paket : </label>
        <input style="width:250px;" class="form-control" type="text" name="paket" id="paket">
        <br>
        <label class="form-label" for="">kategori : </label>
        <input style="width:250px;" class="form-control" type="text" name="kategori" id="kategori">
        <br>
        <label class="form-label" for="">nominal : </label>
        <input style="width:250px;" class="form-control" type="text" name="nominal" id="nominal">
      <br>
        <button type="submit" name="submit">kirim</button>

    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>