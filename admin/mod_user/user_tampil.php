<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <a href="?page=user_tambah" class="btn btn-info">Tambah Data</a>
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
                <h3 class="card-title">Data User</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  
                  <tr>
                    <th>No</th>
                    <th>ID User</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Telepon</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>

                  <!-- 61. Ambil data -->
                    <?php
                    include'../config/koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi,"select * from user");
                    while($d = mysqli_fetch_array($data)){
                    ?>
                  <!-- End -->
                  
                  <!-- 62. Munculkan Data -->
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><a href="?page=user_detail&id=<?php echo $d['id_user']; ?>"><?php echo $d['id_user']; ?></a></td>
                      <td><?php echo $d['nama_user']; ?></td>
                      <td><?php echo $d['username']; ?></td>
                      <td><?php echo $d['telp']; ?></td>
                      <td>
                        <a href="?page=user_edit&id=<?php echo $d['id_user']; ?>" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></a>
                        <a href="?page=user_hapus&id=<?php echo $d['id_user']; ?>" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php $no++; } ?>
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