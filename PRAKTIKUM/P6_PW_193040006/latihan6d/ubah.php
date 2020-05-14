<?php
require 'functions.php';

$id = $_GET['id'];
$barang = query("SELECT * FROM mahasiswa WHERE id = $id = $id " [0];)
if (isset($_POST['ubah'])) {

  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah!');
            document.location.href = 'admin.php';
            </script>"; 
  } else { 
      echo "<script>
            alert ('data gagal diubah!');
            document.location.href = 'admin.php'
            </script>";

  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Tambah data elaktronik</title>
</head>
<body>
  <tittle> Form Tambah Data elektronik </tittle>
  <form action="" method="POST">
  <ul>
  <li>
  <label>
    No :
     <input type="text" name="no"required>
  </label>  
  </li>
  <li>
  <label>
    aksi :
     <input type="text" name="aksi"required>
  </label>  
  </li>
  <li>
  <label>
    nama :
     <input type="text" name="nama"required>
  </label>  
  </li>
  <li>
  <label>
    warna
     <input type="text" name="warna"required>
  </label>  
  </li>
  <li>
  <label>
    stok
     <input type="text" name="stok"required>
  </label>  
  </li>
  <li>
  <label>
    harga
     <input type="text" name="harga"required>
  </label>  
  </li>
  <li>
  <label>
    gambar
     <input type="text" name="gambar"required>
  </label>  
  </li>
  <li>
    <button type="submit" name="ubah">Tambah Data </button>
  </li>
  </ul>
  <br>
</body>
</html>