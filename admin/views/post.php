<?php include "../config/koneksi.php"; ?>
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <a href="?page=tambah_post" class="btn btn-md btn-success"><i class="fas fa-plus"></i>Tambah Post</a>

          <form  style="float: right;" action="" method="post" class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 border-3 navbar-search">
            <div class="input-group">
              <input type="text" name="cari" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <input type="submit" name="cari_barang" class="btn btn-primary mb-3" value="cari">
              </div>
            </div>
          </form>
<br>
          <!-- DataTales Example -->
          <div class="card shadow mb-4 mt-3">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>

             

            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Title</th>
                      <th>Kategori</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
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
                        $sql = mysqli_query($koneksi,"select *from tb_post LIMIT $posisi, $batas");
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
                  <tbody>
                    <tr>
                      <td><?php echo $data['id_post'] ?></td>
                      <td><?php echo $data['title'] ?></td>
                      <td><?php echo $data['kategori'] ?></td>
                      <td>
                        <a href="?page=edit_post&id=<?php echo $data['id_post'] ?>" class="btn btn-md btn-primary">Edit</a>
                        <a href="?page=delete_post&id=<?php echo $data['id_post'] ?>" class="btn btn-md btn-danger">Hapus</a>
                      </td>
                    </tr>
                    </tbody>
                    <?php 
                      }
                    }
                    ?>
                </table>
                <?php 
                $jml = mysqli_num_rows(mysqli_query($koneksi,"select *from tb_post"));
                
                ?>
              </div>
              <div style="margin-top: 10px; float: right;">
                <?php 
                  $jml_hal = ceil($jml / $batas);
                  for($i=1; $i<=$jml_hal; $i++){
                ?>
                <a href="?page=post&hal=<?php echo $i; ?>" class="btn btn-outline-primary"><?php echo $i; ?></a>
                <?php
                  }
                ?>
            </div>
        </div>
    </div>
</div>