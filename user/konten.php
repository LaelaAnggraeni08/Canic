<!-- 18. Konten user -->
<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];

		switch ($page) {
			case 'home':
				include "home.php";
				break;
				
			case 'daftarmontir':
				include "mod_montir/daftar_montir.php";
				break;

			case 'profil_montir1':
				include "mod_montir/profil_montir1.php";
				break;
				
			case 'profil_montir2':
				include "mod_montir/profil_montir2.php";
				break;

			case 'profil_montir3':
				include "mod_montir/profil_montir3.php";
				break;
				
			case 'profil_montir4':
				include "mod_montir/profil_montir4.php";
				break;

				//bukti transaksi
				case 'bukti':
					include "mod_bukti/bukti_tampil.php";
					break;
				
				case 'detail':
					include "mod_bukti/bukti_detail.php";
					break;
						
				case 'tanggapan':
					include "mod_bukti/bukti_tanggapan.php";
					break;

				case 'tanggapan_proses':
					include "mod_bukti/bukti_tanggapanproses.php";
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

<!-- prodcuts section starts  
      <table width="100%" style="background-color: blue; color:white;">
        <tr>
          <th><center><h1>Toko Onderdil</h1></center></th>
        </tr>
      </table>-->