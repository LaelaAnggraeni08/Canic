<!-- 53. Tanggapan Proses -->
	<?php 
	include "../config/koneksi.php";

	//menangkap data yang dikirim dari form
	$id_pengaduan = $_POST['id_pengaduan'];
	$tgl_tanggapan = $_POST['tgl_tanggapan'];
	$id_petugas = $_POST['id_petugas'];
	$tanggapan = $_POST['tanggapan'];

	//menginput data ke tabel tanggapan
	mysqli_query($koneksi,"insert into tanggapan values('','$id_pengaduan','$tgl_tanggapan','$tanggapan','$id_petugas')");

	$status = 2;
	$id_pengaduan = $_POST['id_pengaduan'];

	//update data status
	mysqli_query($koneksi,"update pengaduan set status='$status' where id_pengaduan='$id_pengaduan'");

	//mengalihkan halaman kembali ke index.php
	header("location:?page=pengaduan");

	?>
<!-- End -->