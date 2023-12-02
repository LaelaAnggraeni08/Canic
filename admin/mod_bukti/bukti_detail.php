<!-- 30. Mengambil data dari dalam tabel pengaduan berdasarkan id pengaduan -->
  <?php 
  include'../config/koneksi.php';
  $no = 1;
  $data = mysqli_query($koneksi,"select * from bukti WHERE id_bukti='$_GET[id]'") or die(mysqli_error($koneksi));
  $d = mysqli_fetch_array($data);
   ?>
<!-- End -->

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <a href="?page=bukti" class="btn btn-info">Kembali</a>
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
              Detail Bukti Transaksi
            </div>
          </div>
          <div class="card-body">
            <!-- Mengambil kode dari database -->
            
            <!-- end -->
            <div class="form-group">
              <label>ID BUKTI</label>
              <input type="text" name="id_bukti" class="form-control" value="<?php echo $d['id_bukti']; ?>" readonly>
            </div>
            <div class="form-group">
              <label>TANGGAL BUKTI</label>
              <input type="text" name="tgl_bukti" class="form-control" value="<?php echo $d['tgl_bukti']; ?>" readonly> 
            </div>
            <div class="form-group">
              <label>ID PETUGAS</label>
              <input type="text" name="id_petugas" class="form-control" value="<?php echo $d['id_petugas']; ?>" readonly>
            </div>
            <div class="form-group">
              <label>ID USER</label>
              <input type="text" name="id_user" class="form-control" value="<?php echo $d['id_user']; ?>" readonly>
            </div>
            <div class="form-group">
              <label>Bukti Foto</label><br>
              <img src="../images/<?php echo $d['foto']; ?>" class="img-thumbnail" style="width: 500px;" alt="<?php echo $d['foto']; ?>">
            </div>
            <div class="form-group">
              <label>Keterangan</label><br>
              <textarea rows="5" cols="100" name="keterangan" readonly="">
                <?php echo $d['keterangan']; ?>
              </textarea>
            </div>
            
          </div>
        </div>



      </div>
    </div>
  </div>
</section>