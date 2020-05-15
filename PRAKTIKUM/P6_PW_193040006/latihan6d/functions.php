<?php
 function koneksi()
  { $conn = mysqli_connect("localhost", "root", "") or die ("koneksi ke DB gagal");
	 mysqli_select_db($conn, "tubes_193040006") or die ("Database salah!");
	 
	 return $conn;
	}
	  
	  function query($sql){ 
		  $conn = koneksi();
		   $result = mysqli_query($conn, "$sql"); 
		   
		   $rows = []; 
		   while ($row = mysqli_fetch_assoc($result)){ 
			   $rows[] = $row;

			 }
			  return $rows;
			
			} function tambah($data) { 
				$conn = koneksi();
				 $nama = htmlspecialchars($data['nama']);
				  $warna = htmlspecialchars($data['warna']); 
				  $stok = htmlspecialchars($data['stok']);
				   $harga = htmlspecialchars($data['harga']); 
				   $gambar = htmlspecialchars($data['gambar']);
				   
				 
				   function ubah($data)
				   {
					   $conn = koneksi();
					   $nama = htmlspecialchars($data['nama']);
					   $warna = htmlspecialchars($data['warna']);
					   $stok = htmlspecialchars($data['stok']);
					   $harga = htmlspecialchars($data['harga']);
					   $gambar = htmlspecialchars($data['gambar']);
				   }
				   
				 
				   $query = "UPDATE elektronik
				   				 SET 
									
									nama ='$nama',
									warna ='$warna',
									stok ='$stok',
									harga='$harga',
									gambar='$gambar',
									WHERE id = '$id'
									";


									 
									 
									 mysqli_query($conn, $query);

									  return mysqli_affected_rows($conn);
									}
									?>