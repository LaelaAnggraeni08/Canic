<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <a href="?page=tambah" class="btn btn-info">Tambah Data</a>
      </div>
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  
                  <tr>
                    <th>No</th>
                    <th>Id Bukti</th>
                    <th>Tanggal Bukti</th>
                    <th>Id Petugas</th>
                    <th>Id User</th>
                  </tr>
                  </thead>
                  <tbody>
                  <!-- 24. Menampilkan Data Dari Tabel Pengaduan -->
                    <?php 
                      include'../config/koneksi.php';
                      $no = 1;
                      $data = mysqli_query($koneksi,"select * from bukti WHERE id_petugas='$_SESSION[id_petugas]'");
                      while($d = mysqli_fetch_array($data)){
                    ?>
                  <!-- End -->
                  
                  <!-- 25. Membuat Baris Dan Menampilkan Data Sesuai Dengan Tabel Pengaduan -->
                    <tr>
                      
                      <td><?php echo $no; ?></td>
                      <td><a href="?page=detail&id=<?php echo $d['id_bukti']; ?>"><?php echo $d['id_bukti']; ?></td>
                      <td><?php echo $d['tgl_bukti']; ?></td>
                      <td><?php echo $d['id_petugas']; ?></td>
                      <td><?php echo $d['id_user']; ?></td>

                    </tr>
                  <?php $no++; } ?>
                  <!-- End -->
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
      </div>
    </div>
  </div>
</section>