<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Canic | Daftar</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-info">
    <div class="card-header text-center">
      <a href="daftar.php" class="h1 bg-white">Canic<span>.</span></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg bg-white h5">Daftar Akun</p>

      <!-- Notifikasi Pendaftaran Sukses -->
        <?php 
        if(isset($_GET['pesan'])){
          if($_GET['pesan']=="sukses"){
            echo"<div class='alert'>Pendaftaran Berhasil Silakan Login!</div>";
          }
        }
        ?>
      <!-- Notifikasi End -->

      <!-- Notifikasi Pendaftaran Gagal -->
        <?php
        if(isset($_GET['pesan'])){
          if($_GET['pesan']=="gagal"){
            echo"<div class='alert'>Pendaftaran Gagal!</div>";
          }
        } 
        ?>
      <!-- Notifikasi End -->

      <form action="simpan_pendaftaran.php" method="post">
        
        <div class="input-group mb-3">
          <input name="nama_user" type="text" class="form-control" placeholder="Masukan Nama Lengkap">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="telp" type="number" class="form-control" placeholder="Masukan Nomor Telepon">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="username" type="text" class="form-control" placeholder="Buat Username">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input name="password" type="password" class="form-control" placeholder="Buat Password" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-info btn-block">Daftar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="login_user.php" class="text-center">Saya sudah memiliki akun</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>