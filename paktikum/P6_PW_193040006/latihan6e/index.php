<?php
require 'functions.php';
$mhs = query("SELECT * FROM elektronik");

// ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html>
<head>
<!--link css-->
<link rel="stylesheet" type="text/css" href="style.css">
    <title>Halaman Admin</title>
</head>
<body>
<br>
  <form action="" method="POST">
    <input type="text" name="keyword" size="40" placeholder="Masukan Keyword Pencarian.." autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form>
  <br>
    
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
            <th>gambar</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mhs as $row) : ?>
        <tr>
            <td> <?= $i; ?> </td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            
            <td> <?= $row["nama"]; ?> </td>
            <td> <?= $row["warna"]; ?> </td>
            <td> <?= $row["stok"]; ?> </td>
            <td> <?= $row["harga"]; ?> </td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>

    </table>
</body>
</html>