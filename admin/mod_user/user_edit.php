<!-- 64. Mengambil Data Dari Tabel masyarakat -->
  <?php 
  include"../config/koneksi.php";
  $data = mysqli_query($koneksi, "SELECT * From user WHERE id_user='$_GET[id]'");
  $b = mysqli_fetch_array($data);
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
        <div class="card card-danger">
          <div class="card-header">
            <div class="card-title">
              Data User
            </div>
          </div>
          <div class="card-body">
            <form action="?page=user_editproses" method="POST">
            
            <div class="form-group">
              <label>Id User</label>
              <input type="text" name="id_user" class="form-control" value="<?php echo $b['id_user']; ?>" readonly>
            </div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama_user" class="form-control" value="<?php echo $b['nama_user']; ?>"> 
            </div>
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="username" class="form-control" value="<?php echo $b['username']; ?>">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" value="<?php echo $b['password']; ?>">
            </div>
            <div class="form-group">
              <label>Telepon</label>
              <input type="number" name="telp" class="form-control" value="<?php echo $b['telp']; ?>">
            </div>

          </div>
          <div class="card-footer">
            <button class="btn btn-info" type="submit">SIMPAN</button>
          </div>
           </form>
        </div>
      </div>
    </div>
  </div>
</section>