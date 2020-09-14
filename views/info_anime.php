<?php include "config/koneksi.php"; ?>
<!--Content Web-->

<div class="w3-animate-zoom">
  <div style="padding-left: 30px; padding-top: 30px;">
  <div class="row">
    <?php 
      $sql = mysqli_query($koneksi,"select *from tb_post where kategori = 'anime'");
      while($data = mysqli_fetch_array($sql)){
    ?>
    <div class="card" style="width: 18rem; margin-left: 30px;">
      <img src="assets/img/<?php echo $data['gambar'] ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title"><?php echo $data['title'] ?></h3>
        
        <a href="?page=detail&id=<?php echo $data['id_post'] ?>" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    <?php 
      }
    ?>
  </div>
</div>
</div>