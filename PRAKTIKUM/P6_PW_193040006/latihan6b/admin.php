<?php
require 'functions.php';
$barang = query("SELECT * FROM elektronik");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<!--link css-->
<link rel="stylesheet" type="text/css" href="style.css">
    <title>Halaman Admin</title>
</head>
<body>
    
    <h1>Daftar elektronik</h1>
<div class="add">
<button><a href="tambah.php">tambah data</a></button>


</div>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>nama</th>
            <th>warna</th>
            <th>stok</th>
            <th>harga</th>
            
        </tr>

        <div>
      <a href="tambah.php"><button>Tambah Data</button></a>
    </div>
    <?php $i = 1; ?>
    <?php foreach ($barang as $e) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <a href=""><button>Ubah</button></a>
          <a href="hapus"><button>Hapus</button></a>
        </td>
        <td><img src="../assets/img/<?= $e['foto']; ?>" </td> <td><?= $e['nama']; ?></td>
        <td><?= $e['warna']; ?></td>
        <td><?= $e['stok']; ?></td>
        <td><?= $e['harga']; ?></td>
      </tr>
      <?php $i++; ?>
    <?php endforeach; ?>

    </table>
</body>
</html>