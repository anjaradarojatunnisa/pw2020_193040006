<?php
require 'functions.php';
$mhs = query("SELECT * FROM elektronik");
?>
<!DOCTYPE html>
<html>
<head>
<!--link css-->
<link rel="stylesheet" type="text/css" href="style.css">
    <title>Halaman Admin</title>
</head>
<body>
    
    <h1>Daftar elektronik</h1>

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