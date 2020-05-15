<?php 
function koneksi() {
	 $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
	  mysqli_select_db($conn, "tubes_193040006") or die ("Database salah!");
	  
	  return $conn;
	}
	//query
	 function query($sql){
		  $conn = koneksi();
		   $result = mysqli_query($conn, "$sql");
		   
		   $rows = []; 
		   while ($row = mysqli_fetch_assoc($result)){
				$rows[] = $row;
			 }
			  return $rows;
			
			}
			
//hapus data
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

//tambah data
			 function tambah($data) {
				  $conn = koneksi();
				   $nama = htmlspecialchars($data['nama']);
					$warna = htmlspecialchars($data['warna']);
					 $stok = htmlspecialchars($data['stok']);
					  $harga = htmlspecialchars($data['harga']);
					   $gambar = htmlspecialchars($data['gambar']);
						$query = "INSERT INTO elektronik
						 			VALUES
						 		 ('', '$nama', '$warna','$stok','$harga','$gambar')";
						
						mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
?>