<?php
session_start();

if (!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
//menghubungkan dengan file php lainya
require 'functions.php';
//melakukan query
$elektronik = query("SELECT * FROM elektronik");
// ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $elektronik = cari($_POST['keyword']);
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
  <title>tubes</title>
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

    <h1>
      <center> Daftar Elektronik </center>
    </h1>
    <form action="" method="post">
      <div class="input-group mb-3">
        <input type="text" class="form-control" name="keyword" placeholder="Masukan keyword pencarian.." autocomplete="off" autofocus>
        <div class="input-group-append">
          <button class="btn btn-outline-primary" type="submit" name="cari">Cari!</button>
        </div>
      </div>
    </form>
    <a class="btn btn-primary" href="tambah.php">Tambah Data</a>
    <table class="table mt-3">
      <thead style="background-color: lightblue; color: white;">
        <tr>
          <th>No.</th>
          <th>Opsi</th>
          <th>gambar</th>
          <th>nama</th>
          <th>warna</th>
          <th>stok</th>
          <th>harga</th>
        </tr>
      </thead>
      <tbody>
        <?php if (empty($elektronik)) : ?>
          <tr>
            <td colspan="7">
              <h1 style="color: red; font-style: italic; text-align: center">Data tidak ditemukan</h1>
            </td>
          </tr>
        <?php endif; ?>

        <?php $i = 1; ?>
        <?php foreach ($elektronik as $row) : ?>
          <tr>
            <td><?= $i++; ?></td>
            <td>
              <a class="btn btn-primary" href="ubah.php?id=<?= $row['id']; ?>">ubah</a>
              <a class="btn btn-outline-secondary" href="hapus.php?id=<?= $row['id']; ?> " onclick="return confirm('apakah anda yakin?');">hapus</a>
            </td>
            <td><img src="../img/<?php echo $row["gambar"]; ?>" width="60"></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["warna"]; ?></td>
            <td><?= $row["stok"]; ?></td>
            <td><?= $row["harga"]; ?></td>

          </tr>
        <?php endforeach; ?>

      </tbody>
    </table>

  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>