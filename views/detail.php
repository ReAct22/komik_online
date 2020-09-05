<?php 
	include "config/koneksi.php";
	$idpost = @$_GET['id'];
	$sql = mysqli_query($koneksi,"select *from tb_post where id_post = '$idpost'");
	$data = mysqli_fetch_array($sql);
?>
<center><img src="assets/img/<?php echo $data['gambar'] ?>" width="800" height="150"></center>

	
		<?php echo $data['post']; ?>
	
