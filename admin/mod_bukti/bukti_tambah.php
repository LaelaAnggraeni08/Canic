<!-- 26. Menampilkan data dari tabel masyarakat -->
  <?php 
  $data = mysqli_query($koneksi,"select * from bukti WHERE id_petugas='$_SESSION[id_petugas]'");
  $d=mysqli_fetch_array($data);
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
              Data Bukti Transaksi
            </div>
          </div>
          <div class="card-body">
            <form action="?page=tambah_proses" method="POST" enctype="multipart/form-data">

            <!-- 27. Mengambil data dari tabel pengaduan dan membuat kode otomatis -->
              <?php 
              //mengambil data pengaduan dengan kode paling besar 
              $query = mysqli_query($koneksi,"SELECT max(id_bukti) as kodeTerbesar From bukti") or die(mysqli_error($koneksi));
              $data = mysqli_fetch_array($query);
              $kodebukti = $data['kodeTerbesar'];

              //mengambil angka dari kode pengaduan terbesar,menggunakan fungsi substr
              //dan diubah ke integer dengan (int)
              $urutan = (int) substr($kodebukti,3,3);

              //bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
              $urutan++;

              //membentuk kode pengaduan baru
              //perintah sprintif("%03s",$urutan); berguna untuk membuat string menjadi 3 karakter
              //misalnya perintah sprintif("%03s",15); maka akan menghasilkan '015'
              //angka yang diambil tadi digabungkan dengan kode hurufyang kita inginkan ,misalnya BRG
              $huruf = "CNC";
              $kodebukti = $huruf . sprintf("%03s",$urutan);
              ?>
            <!-- End -->

            <div class="form-group">
              <label>ID BUKTI</label>
              <input type="text" name="id_bukti" class="form-control" value="<?php echo $kodebukti; ?>" readonly>
            </div>
            <div class="form-group">
              <label>TANGGAL BUKTI</label>

              <!-- 28. Mengambil Tanggal Hari Ini -->
                <?php 
                  $tgl = date('Y-m-d');
                ?>
              <!-- End -->
              
              <input type="text" name="tgl_bukti" class="form-control" value="<?php echo $tgl; ?>" readonly> 
            </div>
            <div class="form-group">
              <label>ID PETUGAS</label>
              <input type="text" name="id_petugas" class="form-control" value="<?php echo $d['id_petugas']; ?>" readonly>
            </div>            
            <div class="form-group">
              <label>ID USER</label>
              <input type="text" name="id_user" class="form-control" value="">
            </div>
            <div class="form-group">
              <label>Keterangan</label>
              <textarea id="summernote" name="keterangan">
                Silahkan isikan keterangan bukti disini
              </textarea>
            </div>
            <div class="form-group">
              <label>Upload Bukti</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" name="foto" class="custom-file-input" id="exampleInputFile">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
                <div class="input-group-append">
                  <span class="input-group-text">Upload</span>
                </div>
              </div>
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