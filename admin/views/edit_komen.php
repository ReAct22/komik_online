<?php 
	include "../config/koneksi.php";
	$idkom = @$_GET['id'];
	$sql = mysqli_query($koneksi,"select *from komentar where id = '$idkom'");
	$dkom = mysqli_fetch_array($sql);
?>
<!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Edit Komentar</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

<form action="" method="post">
	<div class="input-group mb-3">
	  <div class="input-group-prepend">
	    <span class="input-group-text" id="inputGroup-sizing-default">Nama</span>
	  </div>
	  <input type="text" class="form-control" name="nama" value="<?php echo $dkom['nama'] ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group mb-3">
	  <div class="input-group-prepend">
	    <span class="input-group-text" id="inputGroup-sizing-default">Kategori</span>
	  </div>
	  <select name="aktif" class="form-control">
	  	<option selected="selected"><?php echo $dkom['aktif'] ?></option>
	    <option value="Y">Y</option>
	    <option value="N">N</option>
	  </select>
</div>
<input type="submit" name="edit" class="btn btn-md btn-success">
</form>
<?php 
	$nama = @$_POST['nama'];
	$aktif = @$_POST['aktif'];
	$edit_data = @$_POST['edit'];
	if($edit_data){
		mysqli_query($koneksi,"update komentar set nama = '$nama', aktif = '$aktif' where id = '$idkom' ");
		?>
			<script type="text/javascript">
				window.location.href="?page=disqusi";
			</script>
		<?php
	}
?>
