<?php

// Koneksi database
function koneksi()
{
  $host     = 'localhost';
  $username = 'root';
  $password = '';
  $db       = 'tubes_193040006';

  $conn = mysqli_connect($host, $username, $password) or die("koneksi DB gagal");
  mysqli_select_db($conn, $db) or die("database tidak ditemukan");
  return $conn;
}
// Query
function query($sql)
{
  $result = mysqli_query(koneksi(), $sql);

  $rows = [];


  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
// fungsi untuk menghapus data
function hapus($id)
{
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM elektronik WHERE id = $id") or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

// fungsi untuk ubah data
function ubah($data)
{
  $conn = koneksi();

  $id = htmlspecialchars($data['id']);
  $nama = htmlspecialchars($data['nama']);
  $warna = htmlspecialchars($data['warna']);
  $stok = htmlspecialchars($data['stok']);
  $harga = htmlspecialchars($data['harga']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "UPDATE elektronik
            SET 
              nama = '$nama', 
              warna = '$warna', 
              stok = '$stok', 
              harga = '$harga', 
              gambar = '$gambar'
              WHERE id = '$id'
            ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}

// fungsi untuk menambah data
function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $warna = htmlspecialchars($data['warna']);
  $stok = htmlspecialchars($data['stok']);
  $harga = htmlspecialchars($data['harga']);
  $gambar = htmlspecialchars($data['gambar']);

  $query = "INSERT INTO
              elektronik
            VALUES
              (null, '$nama', '$warna', '$stok', '$harga', '$gambar')
            ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
// cari
function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM elektronik
              WHERE 
              nama LIKE '%$keyword%' OR 
              warna LIKE '%$keyword%' OR
              harga LIKE '%$keyword%'
              ";
  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

// registrasi
function registrasi($data)
{
  $conn = koneksi();
  $username = strtolower(stripcslashes($data['username']));
  $password = mysqli_real_escape_string($conn, $data['password']);

  // cek username sudah ada atau belum
  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
  if (mysqli_fetch_assoc($result)) {
    echo "<script>
                alert('username sudah digunakan');
              </script>";
  }

  // enkripsi password
  $password = password_hash($password, PASSWORD_DEFAULT);

  // tambah user baru
  $query_tambah = "INSERT INTO user VALUES(null, '$username', '$password')";
  mysqli_query($conn, $query_tambah);

  return mysqli_affected_rows($conn);
}
