<?php
// koneksi
$conn = mysqli_connect("localhost","root","", "tugasbesar_193040006");

//ambil data dari tabel mahasiswa
$result = mysqli_query($conn,"SELECT * FROM elektronik");

?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Halaman admin</title>

</head>
<body>

<h1> daftar elektronik</h1>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
            <th>No</th>
            <th>aksi</th>
            <th>nama</th>
            <th>warna</th>
            <th>stok</th>
            <th>harga</th>
            <th>gambar</th>
        </tr>

        <?php $i = 1; ?>
        <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
        <tr>
            <td> <?= $i; ?> </td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td> <?= $row["nama"]; ?> </td>
            <td> <?= $row["warna"]; ?> </td>
            <td> <?= $row["harga"]; ?> </td>
            <td> <?= $row["stok"]; ?> </td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </tible>
</body>
</html>
