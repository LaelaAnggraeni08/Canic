<!-- 88. Petugas Hapus -->
	<?php 

	include "../config/koneksi.php";

	//menghapus
	mysqli_query($koneksi,"DELETE From petugas where id_petugas='$_GET[id]'");

	//mengalihkan halaman kembali ke index.php
	echo"<meta http-equiv='refresh' content='0; url=?page=petugas'>";

	?>
<!-- End -->