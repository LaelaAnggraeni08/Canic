<!-- 63. Tambah Masyarakat Proses -->
	<?php
	include"../config/koneksi.php";
	
	// menangkap data yang di kirim dari form
	$id_user = $_POST['id_user'];
	$nama_user = $_POST['nama_user'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$telp = $_POST['telp'];

	// menginput data ke tabel tanggapan
	mysqli_query($koneksi,"insert into user
	values('$id_user','$nama_user','$username','$password','$telp')");

	// mengalihkan halaman kembali ke index.php
	echo "<meta http-equiv='refresh' content='0; url=?page=user'>";
	?>
<!-- End -->