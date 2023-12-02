<!-- 55. Konten pada halaman admin -->
	<?php 
		if(isset($_GET['page'])){
			$page = $_GET['page'];

			switch ($page) {
				case 'home':
					include "home.php";
					break;

				// Bagian Masyarakat
				case 'user':
					include "mod_user/user_tampil.php";
					break;

				case 'user_tambah':
					include "mod_user/user_tambah.php";
					break;

				case 'user_tambahproses':
					include "mod_user/user_tambahproses.php";
					break;

				case 'user_edit':
					include "mod_user/user_edit.php";
					break;

				case 'user_editproses':
					include "mod_user/user_editproses.php";
					break;

				case 'user_detail':
					include "mod_user/user_detail.php";
					break;

				case 'user_hapus':
					include "mod_user/user_hapus.php";
					break;

				// Bagian Bukti
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

				case 'bukti_hapus':
					include "mod_bukti/bukti_hapus.php";
					break;	

				// Bagian Petugas
				case 'petugas':
					include "mod_petugas/petugas_tampil.php";
					break;

				case 'petugas_tambah':
					include "mod_petugas/petugas_tambah.php";
					break;

				case 'petugas_tambahproses':
					include "mod_petugas/petugas_tambahproses.php";
					break;

				case 'petugas_edit':
					include "mod_petugas/petugas_edit.php";
					break;

				case 'petugas_editproses':
					include "mod_petugas/petugas_editproses.php";
					break;

				case 'petugas_hapus':
					include "mod_petugas/petugas_hapus.php";
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