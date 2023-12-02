<!-- 87. Petugas Edit Proses -->
<?php 

include "../config/koneksi.php";

//menangkap data yang dikirim dari form 
$id = $_POST['id'];
$nama_petugas = $_POST['nama_petugas'];
$username_petugas = $_POST['username_petugas'];
$password_petugas = $_POST['password_petugas'];
$telp_petugas = $_POST['telp_petugas'];
$status = $_POST['status'];

//menginput data ke tabel tanggapan 
mysqli_query($koneksi,"UPDATE petugas SET nama_petugas='$nama_petugas',username_petugas='$username_petugas',password_petugas='$password_petugas',telp_petugas='$telp_petugas',status='$status' WHERE id_petugas='$id'");
	
//mengalihkan halaman kembali ke index.php
echo "<meta http-equiv='refresh' content='0; url=?page=petugas'>";?>
<!-- End -->