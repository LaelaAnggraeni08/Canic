<!-- 88. Petugas Hapus -->
	<?php 

	include "../config/koneksi.php";

	//menghapus
	mysqli_query($koneksi,"DELETE From bukti where id_bukti='$_GET[id]'");

	//mengalihkan halaman kembali ke index.php
	echo"<meta http-equiv='refresh' content='0; url=?page=bukti'>";

	?>
<!-- End -->