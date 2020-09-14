<?php 
  include "../config/koneksi.php";
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
<?php 
  $judul = @$_POST['judul'];
  $post = @$_POST['post'];

  $sumber = @$_FILES['gambar']['tmp_name'];
  $target = '../assets/img/';
  $nama_gambar = @$_FILES['gambar']['name']; 

  $kategori = @$_POST['kategori'];

  $tambah_data = @$_POST['tambah'];

  if($tambah_data){
    if($judul == "" || $post == "" || $nama_gambar == "" || $kategori == ""){
      ?>
        <script type="text/javascript">
          alert("Inputan data tidak boleh ada yang kosong")
        </script>
      <?php
    }else{
      $pindah = move_uploaded_file($sumber, $target.$nama_gambar);
      if($pindah){
        mysqli_query($koneksi,"insert into tb_post values('','$judul','$post','$nama_gambar','$kategori')");
        ?>
          <script type="text/javascript">
            alert("Data berhasil Di tambah kan");
            window.location.href="?page=post";
          </script>
        <?php
      }else{
        ?>
          <script type="text/javascript">
            alert("Upload Gambar gagal");
          </script>
        <?php
      }
    }
  }
?>
</div>