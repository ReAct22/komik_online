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
  <input type="text" class="form-control" name="judul" value="<?php echo $data['title'] ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>

<textarea class="form-control ckeditor" id="ckeditor" name="post" rows="3"><?php echo $data['post'] ?></textarea>

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
  <input type="text" class="form-control" name="kategori" value="<?php echo $data['kategori'] ?>" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
</div>

<input type="submit" name="edit" value="Edit" class="btn btn-md btn-primary">
<a href="?page=post" class="btn btn-md btn-danger">Batal</a>
</form>
<?php 
	 $judul = @$_POST['judul'];
	  $post = @$_POST['post'];

	  $sumber = @$_FILES['gambar']['tmp_name'];
	  $target = '../assets/img/';
	  $nama_gambar = @$_FILES['gambar']['name']; 

	  $kategori = @$_POST['kategori'];

	  $edit_data = @$_POST['edit'];
if($edit_data){
	if($nama_gambar == ""){
		mysqli_query($koneksi,"update tb_post set title = '$judul',
		post = '$post',
		kategori = '$kategori' where id_post = '$idpost'");
		?>
			<script type="text/javascript">
				alert("Data berhasil di Edit");
				window.location.href="?page=post";
			</script>
		<?php
	}else{
		$pindah = move_uploaded_file($sumber, $target.$nama_gambar);
		if($pindah){
			mysqli_query($koneksi,"update tb_post set title = '$judul',
			post = '$post',
			gambar = '$nama_gambar',
			kategori = '$kategori' where id_post = '$idpost'");
			?>
				<script type="text/javascript">
					alert("Data berhasil di Edit");
					window.location.href="?page=post";
				</script>
			<?php
		}

	}
}
	
?>
</div>