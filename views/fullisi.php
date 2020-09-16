<?php include "config/koneksi.php"; ?>
<!--Content Web-->

<div class="w3-animate-zoom">
  <div style="padding-left: 120px; padding-top: 30px;">
  <div class="row">
    <?php 
      $no =1;

                      $batas = 10;
                      $hal = @$_GET['hal'];
                      if(empty($hal)){
                        $posisi = 0;
                        $hal = 1;
                      }else{
                        $posisi = ($hal - 1)*$batas;
                      }

                      $cari = @$_POST['cari'];
                      $cari_barang = @$_POST['cari_barang'];
                      if($cari_barang){
                        if($cari != ""){
                          $sql = mysqli_query($koneksi,"select *from tb_post where id_post like '%$cari%' or title like '%$cari%'");
                        }else{
                          $sql = mysqli_query($koneksi,"select *from tb_post");
                        }
                      }else{
                        $sql = mysqli_query($koneksi,"select *from tb_post order by id_post desc LIMIT $posisi, $batas");
                      }

                      $cek = mysqli_num_rows($sql);
                      if($cek < 1){
                        ?>
                          <tr>
                            <td colspan="7" style="padding: 10px; text-align: center;">Data Tidak Ditemukan</td>
                          </tr>
                        <?php
                      }else{
                        while($data = mysqli_fetch_array($sql)){
    ?>
    <div class="card" style="width: 18rem; margin-left: 50px; margin-top: 30px;">
      <img src="assets/img/<?php echo $data['gambar'] ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h3 class="card-title"><?php echo $data['title'] ?></h3>
        
        <a href="?page=detail&id=<?php echo $data['id_post'] ?>" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
    <?php 
      }
  		}
    ?>
  </div>
  <?php 
                $jml = mysqli_num_rows(mysqli_query($koneksi,"select *from tb_post"));
                
                ?>
              </div>
              <div style="margin-top: 10px; float: right;">
                <?php 
                  $jml_hal = ceil($jml / $batas);
                  for($i=1; $i<=$jml_hal; $i++){
                ?>
                <a href="?page=fullisi&hal=<?php echo $i; ?>" class="btn btn-outline-primary"><?php echo $i; ?></a>
                <?php
                  }
                ?>
            </div>
</div>
</div>