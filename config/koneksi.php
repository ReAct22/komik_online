<?php 
	$koneksi = mysqli_connect("localhost","root","","db_artikel");

	if(mysqli_connect_errno()){
		echo "Koneksi Database gagal : ". mysqli_connect_error();
	}
?>