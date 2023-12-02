<!-- 65. Edit Masyarakat Proses -->
	<?php
	include"../config/koneksi.php";
	// menangkap data yang di kirim dari form
	$id_user = $_POST['id_user'];
	$nama_user = $_POST['nama_user'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$telp = $_POST['telp'];
	// menginput data ke tabel tanggapan
	mysqli_query($koneksi,"UPDATE user SET nama_user='$nama_user', username='$username', password='$password', telp='$telp' where id_user='$id_user'");
	// mengalihkan halaman kembali ke index.php
	echo "<meta http-equiv='refresh' content='0; url=?page=user'>";
	?>
<!-- End -->