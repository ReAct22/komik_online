<?php 
	include "config/koneksi.php";
	$idpost = @$_GET['id'];
	$sql = mysqli_query($koneksi,"select *from tb_post where id_post = '$idpost'");
	$data = mysqli_fetch_array($sql);
?>

	<h1 align="center"><?php echo $data['title'] ?></h1>
<div style="position: center;" class="container">
	<?php echo $data['post'] ?>

<!--Tampil Halaman Komentar-->
<div class="card">
	<div class="card-heading bg-primary text-white">
		<h3 class="card-title">Komentar</h3>
	</div>
	<div class="card-body">
		<ul class="media-list">
		<?php 
			$sqlkomen = mysqli_query($koneksi,"select *from komentar where id_post = '$data[id_post]' and aktif = 'Y' order by id desc");
			while($komen = mysqli_fetch_array($sqlkomen)){
			?>
				<li class="media" style="border-bottom: solid 1px #ebebeb;">
					<div class="media-body">
						<h4><a href="mailto:<?php echo $komen['email']; ?>">
						<?php echo $komen['nama'] ?></a></h4>
						<?php echo $komen['komentar']; ?> [<?php echo $komen['tgl']; ?>]
					</div>
				</li>
			<?php	
			}
		 ?>
		</ul>
	</div>
</div>	

<br>

<!--Halaman untuk Komentar-->
<div class="card">
	<div class="card-heading bg-primary text-white">
		<h3 class="card-title">Tinggalkan Komentar</h3>
	</div>
	<div class="card-body">
		<form action="simpan_komentar.php" method="post">
			<input type="hidden" name="idpost" value="<?php echo $data['id_post'] ?>">
			<div class="form-group">
				<label>Nama Anda</label>
				<input type="text" name="nama" class="form-control">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label>Ulasan</label>
				<textarea rows="3" class="form-control" name="ulasan"></textarea>
			</div>
			<div class="form-group">
				<input type="submit" name="kirim" class="btn btn-md btn-primary" value="kirim">
			</div>
		</form>
	</div>
</div>
</div>
	
