<?php 
include "../config/koneksi.php";
	$idpost = @$_GET['id'];
	$sql = mysqli_query($koneksi,"select *from tb_post where id_post = '$idpost'");
	$data = mysqli_fetch_array($sql);
?>
<div class="container-fluid">
	<form method="post" action="" enctype="multipart/form-data">
	<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">title</span>
  </div>
  <input type="text" class="form-control" name="judul" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>

<textarea class="form-control ckeditor" id="ckeditor" name="post" rows="3"></textarea>

<br>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Gambar</span>
  </div>
  <input type="file" class="form-control" name="gambar" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroup-sizing-default">Kategori</span>
  </div>
  <input type="text" class="form-control" name="kategori" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>

<input type="submit" name="tambah" value="Tambah" class="btn btn-md btn-primary">
<a href="?page=post" class="btn btn-md btn-danger">Batal</a>
</form>

</div>