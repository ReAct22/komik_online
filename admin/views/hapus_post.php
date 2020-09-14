<?php 
include "../config/koneksi.php";
$idpost = @$_GET['id'];
mysqli_query($koneksi,"delete from tb_post where id_post = '$idpost'");
?>
<script type="text/javascript">
	alert("Data berhasil di hapus");
	window.location.href="?page=post";
</script>