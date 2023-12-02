<!-- 33. Konten Petugas -->
	<?php 
		if(isset($_GET['page'])){
			$page = $_GET['page'];

			switch ($page) {
				case 'home':
					include "home.php";
					break;

				case 'bukti':
					include "mod_bukti/bukti_tampil.php";
					break;

				case 'tambah':
					include "mod_bukti/bukti_tambah.php";
					break;

				case 'tambah_proses':
					include "mod_bukti/bukti_tambahproses.php";
					break;

				case 'detail':
					include "mod_bukti/bukti_detail.php";
					break;
					
				default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
			}
		}else{
			include "home.php";
		}
		?>
<!-- End -->