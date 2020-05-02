<?php
require 'functions.php';
$barang = query("SELECT * FROM elektronik");

// ketika tombol cari diklik
if (isset($_POST['cari'])) {
  $barang = cari($_POST['keyword']);
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>elektronik</title>
</head>
<body>
  <h3><center> Daftar elektronik </center> </h3>
  <a href="tambah.php">Tambah Data elektronik</a>
  <br>
</body>
<br>
  <form action="" method="POST">
    <input type="text" name="keyword" size="40" placeholder="Masukan Keyword Pencarian.." autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form>
  <br>

    <table border="1" cellpadding="10" cellspacing="0">

        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>nama</th>
            <th>warna</th>
            <th>stok</th>
            <th>harga</th>
            
        </tr>
        <?php if (empty($barang)) :?>
        <tr>
        <td colspan="7">
        <h1>data tidak ditemukan!</h1>
        </td>
        </tr>

        <div>
      <a href="tambah.php"><button>Tambah Data</button></a>
    </div>

<?php else: ?>
    <?php $i = 1; ?>
    <?php foreach ($barang as $e) : ?>
      <tr>
        <td><?= $i; ?></td>
        <td>
          <div class="update"><a href="ubah.php?id=<?= $mhs['id'] ?>">ubah</a></div>
          <div class="delete"><a href ="hapus.php?id=<?= $mhs['id']?>" onclick="return confirm('hapus data??')">hapus</a></div>
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