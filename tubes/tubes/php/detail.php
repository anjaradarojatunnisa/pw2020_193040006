<?php
require 'functions.php';

// ambil nrp dari URL
$id = $_GET['id'];

$row = query("SELECT * FROM elektronik WHERE id = $id")[0];
?>

</html>
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
  <nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
      <a class="navbar-brand" href="#">Anjara</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link active" href="admin.php">Login</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="container mt-5">
    <div class="row justify-content-md-center">
      <div class="col-md-4">
        <div class="card">
          <img src="../img/<?php echo $row["gambar"]; ?>" alt="">
        </div>

      </div>
      <div class="col-md-8">
        <h3><?= $row['nama']; ?></h3>
        <ul>
          <li> warna :<?= $row['warna']; ?></li>
          <li> stok :<?= $row['stok']; ?></li>
          <li> harga :<?= $row['harga']; ?></li>
      </div>
      </ul>
      <a class="btn btn-primary" href="../index.php">Kembali</a>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>