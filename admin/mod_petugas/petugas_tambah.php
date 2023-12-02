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
              Tambah Petugas
            </div>
          </div>
          <div class="card-body">
            <form action="?page=petugas_tambahproses" method="POST">
            
            <div class="form-group">
              <label>Nama</label>
              <input type="text" name="nama_petugas" class="form-control" required="">
            </div>
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="username_petugas" class="form-control" required="">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password_petugas" class="form-control" required="">
            </div>
            <div class="form-group">
              <label>Telepon</label>
              <input type="number" name="telp_petugas" class="form-control" required="">
            </div>
            <div class="form-group">
              <label>Pilih Status</label>
              <select name="status" class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                
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