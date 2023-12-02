<!-- 66. Masyarakat Hapus -->
	<?php
	include"../config/koneksi.php";
	// Menghapus
	mysqli_query($koneksi,"DELETE From user where id_user='$_GET[id]'");
	// mengalihkan halaman kembali ke index.php
	echo"<meta http-equiv='refresh' content='0; url=?page=user'>";
	?>
<!-- End -->