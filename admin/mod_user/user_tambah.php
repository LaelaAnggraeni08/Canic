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
              Tambah User
            </div>
          </div>
          <div class="card-body">
            <form action="?page=user_tambahproses" method="POST">
            
            <div class="form-group">
              <label>ID User</label>
              <input type="text" name="id_user" class="form-control" required="">
            </div>
            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama_user" class="form-control" required=""> 
            </div>
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="username" class="form-control" required="">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" required="">
            </div>
            <div class="form-group">
              <label>Telepon</label>
              <input type="number" name="telp" class="form-control" required="">
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