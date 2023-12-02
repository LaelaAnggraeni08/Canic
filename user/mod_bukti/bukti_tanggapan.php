<!-- 49. Mengambil data dari tabel pengaduan -->
  <?php 

  include '../config/koneksi.php';

  $no = 1;
  $data = mysqli_query($koneksi,"select * from pengaduan WHERE id_pengaduan='$_GET[id]'") or die( mysqli_error($koneksi));
  $d = mysqli_fetch_array($data);
  ?>
<!-- End -->

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <!-- <a href="?page=pengaduan" class="btn btn-success">Kembali</a> -->
        <div class="btn-group">
          <a href="?page=pengaduan" class="btn btn-success"><i class="fa fa-backward"></i> Kembali</a>
        </div>
      </div>
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <div class="card card-danger">
          <div class="card-header">
            <div class="card-title">
              Detail Pengaduan
            </div>
          </div>
          <div class="card-body">
            <!-- Mengambil kode dari database -->
            
            <!-- end -->
            <div class="form-group">
              <label>ID PENGADUAN</label>
              <input type="text" name="id_pengaduan" class="form-control" value="<?php echo $d['id_pengaduan']; ?>" readonly>
            </div>
            <div class="form-group">
              <label>TANGGAL PENGADUAN</label>
              <input type="text" name="tgl_pengaduan" class="form-control" value="<?php echo $d['tgl_pengaduan']; ?>" readonly> 
            </div>
            <div class="form-group">
              <label>NIK</label>
              <input type="text" name="nik" class="form-control" value="<?php echo $d['nik']; ?>" readonly>
            </div>
            <div class="form-group">
              <label>Status</label>
              	<?php if ($d['status'] == 0) { ?>
	                <span class="badge badge-danger">Belum Diverifikasi</span>
	            <?php } elseif ($d['status'] == 1) { ?>
	                <span class="badge badge-info">Sedang Diproses</span>
	            <?php } elseif ($d['status'] == 2) { ?>
	                <span class="badge badge-success">Selesai</span>
	            <?php } ?>
            </div>
            <div class="form-group">
              <label>Bukti Foto</label><br>
              <img src="../img/<?php echo $d['foto']; ?>" class="img-thumbnail" style="width: 500px;" alt="<?php echo $d['foto']; ?>">
            </div>
            <div class="form-group">
              <label>ISI Laporan</label>
              <!-- Isi laporan -->
              <div class="position-relative p-3 bg-gray" style="height: 180px">
                
                <p>
                  <?php echo $d['isi_laporan']; ?>
                </p>
              </div>
              <!-- end -->
            </div>
            
          </div>
        </div>



      </div>
      <div class="col-md-6">
        <!-- Tanggapan -->
        <div class="card card-info">
          <div class="card-header">
            <div class="card-title">
              Tanggapan
            </div>
          </div>
          <div class="card-body">
            <form action="?page=tanggapan_proses" method="POST">

            <!-- 50. Ambil Data Tanggapan -->
              <?php 

              $data = mysqli_query($koneksi,"select * from pengaduan WHERE id_pengaduan='$_GET[id]'") or die(mysqli_error($koneksi));
              $b = mysqli_fetch_array($data);

              ?>
            <!-- End -->

            <div class="form-group">
              <label>ID PENGADUAN</label>
              <input type="text" name="id_pengaduan" class="form-control" value="<?php echo $b['id_pengaduan']; ?>" readonly> 
            </div>
            <div class="form-group">
              <label>TANGGAL TANGGAPAN</label>

              <!-- 51. Mengambil Tanggal Hari Ini -->
                <?php 
                  $tgl = date('Y-m-d');
                ?>
              <!-- End -->

              <input type="text" name="tgl_tanggapan" class="form-control" value="<?php echo $tgl; ?>" readonly>
            </div>
            <div class="form-group">
              <label>ID PETUGAS</label>
              <input type="text" name="id_petugas" class="form-control" value="<?php echo $_SESSION['id_petugas']; ?>" readonly>
            </div>

            <!-- 52. Mengambil kode dari database -->
              <?php 
              $database1 = mysqli_query($koneksi,"select * from tanggapan WHERE id_pengaduan='$_GET[id]'") or die(mysqli_error($koneksi));
              $c = mysqli_fetch_array($database1);

              ?>
            <!-- End -->

            <?php if ($c['tanggapan'] == NULL) { ?>
            <!-- Untuk Tanggapan -->
            <div class="form-group">
              <label>TANGGAPAN</label>
              <textarea id="summernote" name="tanggapan">
                
              </textarea>
            </div>
            
            <button type="submit" class="btn btn-danger"><i class="fa fa-comment"></i> Tanggapi</button>
            <!-- End Tanggapan -->
            <?php } else { ?>

            <div class="position-relative p-3 bg-gray" style="height: 180px">
              <p>
                <?php echo $c['tanggapan']; ?>
              </p>
            </div>
            <br>
            <button type="submit" class="btn btn-danger" disabled><i class="fa fa-comment"></i> Sudah Ditanggapi</button>
            <?php } ?>
            </form>
          </div>
        </div>
        <!-- Tanggapan -->
      </div>
    </div>
  </div>
</section>