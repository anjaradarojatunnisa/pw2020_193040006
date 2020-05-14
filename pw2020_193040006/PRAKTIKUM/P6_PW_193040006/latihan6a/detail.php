<?php
require 'functions.php';

// ambil nrp dari URL
$id = $_GET['id'];

// query elektronik berdasarkan nrp
$m = query("SELECT * FROM elektronik WHERE id = $id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?= css(); ?>
  <title>Detail elektronik</title>
</head>
<body>
  <h3>Detail elektronik</h3>
  <ul>
    <li><img src="img/hihi.jpg" width="50"></li>
    <li> nomor : <?= $m['nomor']; ?></li>
    <li> Nama : <?= $m['nama']; ?></li>
    <li> warna : <?= $m['warna']; ?></li>
    <li> stok : <?= $m['stok']; ?></li> 
    <li> harga : <?= $m['harga']; ?></li>
    <li><a href="">ubah</a> | <a href="">hapus</a></li>
    <li><a href="latihan3.php">Kembali ke daftar mahasiswa</a></li>
  </ul>
</body>