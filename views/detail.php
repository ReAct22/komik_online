<?php 
	include "config/koneksi.php";
	$idpost = @$_GET['id'];
	$sql = mysqli_query($koneksi,"select *from tb_post where id_post = '$idpost'");
	$data = mysqli_fetch_array($sql);
?>

	<h1 align="center"><?php echo $data['title'] ?></h1>
<div style="position: center;" class="container">
	<?php echo $data['post'] ?>
</div>
	
