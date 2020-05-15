<?php
// Koneksi database
function koneksi(){
	$host     = 'localhost';
	$username = 'root';
	$password = '';
	$db       = 'tubes_193040006';


function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

?>