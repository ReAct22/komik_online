<?php 
	include "config/koneksi.php";
	$idpost = @$_GET['id'];
	$sql = mysqli_query($koneksi,"select *from tb_post where id_post = '$idpost'");
	$data = mysqli_fetch_array($sql);
?>

	
	<div style="margin-left: 30px; margin-top: 30px;">
			<?php echo $data['post']; ?>
	</div>
	
