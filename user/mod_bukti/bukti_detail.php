<!-- 45. Mengambil data dari tabel pengaduan -->
  <?php 
  include '../config/koneksi.php';
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
        <div class="btn-group">
          <a href="?page=bukti" class="btn btn-info"><i class="fa fa-backward"></i> Kembali</a>
          <!-- Tombol Verifikasi -->

          <!-- End Tombol-->
        </div>
      </div>
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
  <div class="container-fluid">
    <div class="row">
      
      <div class="col-md-12">
        <!-- Tanggapan -->
        <div class="card card-info">
          <div class="card-header">
            <div class="card-title">
              Bukti Transaksi
            </div>
          </div>
          <div class="card-body">
            <!-- 47. Ambil Data Tanggapan -->
              <?php 

              $data = mysqli_query($koneksi,"select * from bukti WHERE id_bukti='$_GET[id]'") or die(mysqli_error($koneksi));
              $b = mysqli_fetch_array($data);

              ?>
            <!-- End -->

            <!-- Mengambil kode dari database -->
            <?php if ($b['id_bukti'] == NULL) { ?>
            <?php } else { ?>
            <!-- end -->
            <div class="form-group">
              <label>ID BUKTI</label>
              <input type="text" name="id_bukti" class="form-control" value="<?php echo $b['id_bukti']; ?>" readonly>
            </div>
            <div class="form-group">
              <label>TANGGAL BUKTI</label>
              <input type="text" name="tgl_bukti" class="form-control" value="<?php echo $b['tgl_bukti']; ?>" readonly>
            </div>
            <div class="form-group">
              <label>ID USER</label>
              <input type="text" name="id_user" class="form-control" value="<?php echo $b['id_user']; ?>" readonly>
            </div>
            <div class="form-group">
              <label>Bukti Foto</label><br>
              <img src="../images/<?php echo $d['foto']; ?>" class="img-thumbnail" style="width: 500px;" alt="<?php echo $d['foto']; ?>">
            </div>
            <div class="form-group">
              <label>Keterangan</label>
             <div class="position-relative p-3 bg-white" style="height: 180px">
                <div class="ribbon-wrapper">
                </div>
                <p>
                  <?php echo $b['keterangan']; ?>
                </p>
              </div>
            </div>
            <!-- 48. End Sintaks -->
            <?php $no++; } ?>
            <!-- End -->
          </div>
        </div>
        <!-- Tanggapan -->
      </div>
    </div>
  </div>
</section>