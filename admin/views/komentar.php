<?php 
  include "../config/koneksi.php";
?>
<!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800">Tables</h1>
          <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

          

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
                      <th>Nama</th>
                      <th>Isi Komentar</th>
                      <th>Aktif</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <?php 
                    $sql = mysqli_query($koneksi,"select *from komentar order by id desc");
                    while($data = mysqli_fetch_array($sql)){
                  ?>
                  <tbody>
                    <tr>
                      <td><?php echo $data['id'] ?></td>
                      <td><?php echo $data['nama'] ?></td>
                      <td><?php echo $data['komentar'] ?></td>
                      <td><?php echo $data['aktif'] ?></td>
                      <td style="text-align: center;">
                        <a href="?page=edit_komen&id=<?php echo $data['id'] ?>" class="btn btn-md btn-primary">Edit</a>
                        <a href="?page=delete_komen$id=<?php echo $data['id'] ?>" class="btn btn-md btn-danger">Hapus</a>
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