<!-- 86. Ambil data petugas -->
<?php 

include "../config/koneksi.php";

$data = mysqli_query($koneksi,"SELECT *From petugas WHERE id_petugas='$_GET[id]'") or die(mysqli_error($koneksi));
$x = mysqli_fetch_array($data);
?>
<!-- End -->

<!-- Content Header (Page header) -->
<div class="content-header">
<div class="container-fluid">
  <div class="row mb-2">
    <div class="col-sm-6">
      <a href="?page=petugas" class="btn btn-info">Kembali</a>
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
            Edit Petugas
          </div>
        </div>
        <div class="card-body">
          <form action="?page=petugas_editproses" method="POST">
          <input type="hidden" name="id" value="<?php echo $x["id_petugas"]; ?>">
          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama_petugas" class="form-control" value="<?php echo $x["nama_petugas"]; ?>">
          </div>
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="username_petugas" class="form-control" value="<?php echo $x["username_petugas"]; ?>">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="password_petugas" class="form-control" value="<?php echo $x["password_petugas"]; ?>">
          </div>
          <div class="form-group">
            <label>Telepon</label>
            <input type="number" name="telp_petugas" class="form-control" value="<?php echo $x["telp_petugas"]; ?>">
          </div>
          <div class="form-group">
            <label>Pilih status</label>
            <select name="status" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
              <option selected="selected"><?php echo $x["status"]; ?></option>
              <option value="montir">Montir</option>
              <option value="admin">Admin</option>
            </select>
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