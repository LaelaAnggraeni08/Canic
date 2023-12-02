<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <a href="?page=petugas_tambah" class="btn btn-info">Tambah Data</a>
      </div>
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Petugas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  
                  <tr>
                    <th>No</th>
                    <th>ID Petugas</th>
                    <th>Nama Petugas</th>
                    <th>Username</th>
                    <th>Telepon</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  <!-- 83. Ambil data petugas-->
                    <?php 
                    include '../config/koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi,"select * from petugas");
                      while($d = mysqli_fetch_array($data)) {
                      ?>
                  <!-- End -->
                  
                  <!-- 84. Memunculkan data petugas -->
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $d['id_petugas']; ?></td>
                      <td><?php echo $d['nama_petugas']; ?></td>
                      <td><?php echo $d['username_petugas']; ?></td>
                      <td><?php echo $d['telp_petugas']; ?></td>
                      <td>
                        <?php if($d['status']=="montir") { ?>
                          <span class="badge badge-info">MONTIR</span>
                        <?php } elseif($d['status']=="admin") { ?>
                          <span class="badge badge-info">ADMIN</span>
                        <?php } elseif($d['status']=="user") { ?>
                          <span class="badge badge-success">USER</span>
                        <?php } ?>
                      </td>
                      <td>
                        <a href="?page=petugas_edit&id=<?php echo $d['id_petugas']; ?>" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="?page=petugas_hapus&id=<?php echo $d['id_petugas']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php $no++;} ?>
                  <!-- End -->
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
      </div>
    </div>
  </div>
</section>