<!-- Content Header (Page header) -->
<div class="content-header">
 
</div>
<!-- /.content-header -->

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Bukti Transaksi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  
                  <tr>
                    <th>No</th>
                    <th>Id Bukti</th>
                    <th>Tanggal Bukti</th>
                    <th>Id User</th>
                  </tr>
                  </thead>
                  <tbody>
                  <!-- 39. Mengambil data dari tabel pengaduan -->
                    <?php 
                    include '../config/koneksi.php';
                    $no = 1;
                    $data = mysqli_query($koneksi,"select * from bukti");
                    while($d = mysqli_fetch_array($data)){
                    ?>
                  <!-- End -->
                  
                  <!-- 40. Menampilkan tabel pengaduan -->
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><a href="?page=detail&id=<?php echo $d['id_bukti'];?>"><?php echo $d['id_bukti']; ?></a></td>
                        <td><?php echo $d['tgl_bukti']; ?></td>
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