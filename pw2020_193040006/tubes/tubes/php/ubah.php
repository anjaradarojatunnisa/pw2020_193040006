<?php
require 'functions.php';

$id = $_GET['id'];
$row = query("SELECT * FROM elektronik WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
              alert('Data Berhasil diubah!');
              document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
              alert('Data Gagal diubah!');
              document.location.href = 'admin.php';
          </script>";
  }
}
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <title>Form Ubah Data</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
      <a class="navbar-brand" href="#">Anjara</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="container mt-3">
    <h1 class="text-center">Form Ubah Data Elektronik</h1>

    <div class="row justify-content-md-center mt-5">
      <div class="col-md-4">
        <form action="" method="POST">
          <input type="hidden" name="id" id="id" value="<?= $row['id']; ?>">
          <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" placeholder="Nama" name="nama" value="<?= $row['nama']; ?>" required>
          </div>
          <div class="form-group">
            <label>Warna</label>
            <input type="text" class="form-control" placeholder="Warna" name="warna" value="<?= $row['warna']; ?>" required>
          </div>
          <div class="form-group">
            <label>Stok</label>
            <input type="text" class="form-control" placeholder="Stok" name="stok" value="<?= $row['stok']; ?>" required>
          </div>
          <div class="form-group">
            <label>Harga</label>
            <input type="text" class="form-control" placeholder="Harga" name="harga" value="<?= $row['harga']; ?>" required>
          </div>
          <div class="form-group">
            <label>Gambar</label>
            <input type="text" class="form-control" placeholder="Gambar" name="gambar" value="<?= $row['gambar']; ?>" required>
          </div>
          <button class="btn btn-primary" type="submit" name="ubah">Ubah Data</button>
          <a class="btn btn-outline-secondary" href="admin.php">Kembali</a>
        </form>

      </div>
    </div>


  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>