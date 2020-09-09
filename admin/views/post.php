<?php include "../config/koneksi.php"; ?>
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          <a href="?page=tambah_post" class="btn btn-md btn-success"><i class="fas fa-plus"></i>Tambah Post</a>
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
                      <th>id</th>
                      <th>Title</th>
                      <th>Kategori</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <?php 
                    $sql = mysqli_query($koneksi,"select *from tb_post");
                    while($data = mysqli_fetch_array($sql)){
                  ?>
                  <tbody>
                    <tr>
                      <td><?php echo $data['id_post'] ?></td>
                      <td><?php echo $data['title'] ?></td>
                      <td><?php echo $data['kategori'] ?></td>
                      <td>
                        <a href="?page=edit_post&id=<?php echo $data['id_post'] ?>" class="btn btn-md btn-primary">Edit</a>
                        <a href="" class="btn btn-md btn-danger">Hapus</a>
                      </td>
                    </tr>
                    </tbody>
                    <?php 
                      }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>