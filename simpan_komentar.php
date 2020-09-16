<?php 
	include "config/koneksi.php";

	$nama = @$_POST['nama'];
	$email = @$_POST['email'];
	$komentar = @$_POST['ulasan'];
	$tgl = date("Y-m-d");
	$id_post = @$_POST['idpost'];

	$simpan = mysqli_query($koneksi,"insert into komentar 
		(nama,email,komentar,tgl,id_post)
		values('$nama','$email','$komentar','$tgl','$id_post')");

	if($simpan){
		header("location:./?page=detail&id=$id_post");
	}
?>