<?php 
$koneksi = mysqli_connect("localhost","fani","250107","kasir");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>