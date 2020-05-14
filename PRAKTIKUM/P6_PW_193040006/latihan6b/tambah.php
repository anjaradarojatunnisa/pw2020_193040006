<?php
require 'functions.php';
if (isset($_POST['tambah'])) {

  if (tambah($_POST) > 0) {
    echo '<div class="alert alert-success" role="alert">
            Data berhasil ditambahkan!
          </div>';
  } else {
    echo '<div class="alert alert-danger" role="alert">
            Data gagal ditambahkan!
          </div>';
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
  <h3><center> Form Tambah Data elektronik </center> </h3>
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
    <button type="submit" name="tambah">Tambah Data </button>
  </li>
  </ul>
  <br>
</body>
</html>