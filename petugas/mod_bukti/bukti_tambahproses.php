<!-- 29. Pengaduan tambah proses -->
<?php 
	include "../config/koneksi.php";

	$id_bukti = $_POST['id_bukti'];
	$tgl_bukti = $_POST['tgl_bukti'];
	$id_petugas = $_POST['id_petugas'];
	$id_user = $_POST['id_user'];
	$keterangan = $_POST['keterangan'];
	$rand = rand();
	$ekstensi = array('png','jpg','jpeg','gif');
	$filename = $_FILES['foto']['name'];
	$ukuran = $_FILES['foto']['size'];
	$ext = pathinfo($filename,PATHINFO_EXTENSION);

	if(!in_array($ext,$ekstensi)){
		header("location:?page=tambah");
	}else{
		if($ukuran<1044070){
			$xx = $rand.'_'.$filename;
			move_uploaded_file($_FILES['foto']['tmp_name'],'../images/'.$rand.'_'.$filename);
			mysqli_query($koneksi,"INSERT INTO bukti
				VALUES('$id_bukti','$tgl_bukti','$id_petugas','$id_user','$keterangan','$xx')");
			echo "<meta http-equiv='refresh'content='0; url=?page=bukti'>";
		}else{
			header("location:?page=tambah");
		}
	}
	?>
<!-- End -->