<!-- 67. Ambil data user -->
  <?php
  include"../config/koneksi.php";
  $data = mysqli_query($koneksi,"select * from user WHERE id_user='$_GET[id]'");
  $d = mysqli_fetch_array($data);
  ?>
<!-- End -->

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <a href="?page=user" class="btn btn-info">Kembali</a>
      </div>
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-info">
          <div class="card-header">
            <div class="card-title">
              Detail User
            </div>
          </div>
          <div class="card-body">
            
            
            <div class="form-group">
              <label>ID User</label>
              <input type="text" class="form-control" value="<?php echo $d['id_user']; ?>" readonly>
            </div>
            <div class="form-group">
              <label>Nama</label>
              <!-- Mengambil Tanggal Hari Ini -->
              
              <!-- End -->
              <input type="text" class="form-control" value="<?php echo $d['nama_user']; ?>" readonly> 
            </div>
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" value="<?php echo $d['username']; ?>" readonly>
            </div>
            <div class="form-group">
              <label>Telepon</label>
              <input type="text" class="form-control" value="<?php echo $d['telp']; ?>" readonly>
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </div>
</section>