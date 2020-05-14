<?php
// koneksi
$conn = mysqli_connect("localhost","root","", "pw_193040006");

//ambil data dari tabel mahasiswa
$result = mysqli_query($conn,"SELECT * FROM mahasiswa");

?>
<!DOCTYPE html>
<html>
<head>
    
    <title>Halaman admin</title>

</head>
<body>

<h1> daftar mahasiswa</h1>

<table border="1" cellpadding="10" cellspacing="0">

<tr>
            <th>No</th>
            <th>aksi</th>
            <th>gambar</th>
            <th>nrp</th>
            <th>nama</th>
            <th>email</th>
            <th>jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
        <tr>
            <td> <?= $i; ?> </td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
            <td> <?= $row["nama"]; ?> </td>
            <td> <?= $row["nrp"]; ?> </td>
            <td> <?= $row["email"]; ?> </td>
            <td> <?= $row["jurusan"]; ?> </td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </tible>
</body>
</html>
