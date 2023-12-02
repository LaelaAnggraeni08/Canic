<!-- Pendaftaran Proses -->
<?php 

//include file koneksi ke database
include"config/koneksi.php";

//menerima nilai dari kiriman form pendaftaran
$id_user=$_POST["id_user"];
$nama_user=$_POST["nama_user"];
$username=$_POST["username"];
$password=$_POST["password"];
$telp=$_POST["telp"];

//Query input menginput data ke dalam tabel anggota
$sql="INSERT INTO user(id_user,nama_user,username,password,telp)
VALUES 
	('$id_user','$nama_user','$username','$password','$telp')";

//mengeksekusi/menjalankan query diatas
	$hasil=mysqli_query($koneksi,$sql);

//kondisi apakah berhasil atau tidak
	if($hasil) {
		header("location:daftar.php?pesan=sukses");
		exit;
	}
	else {
		header("location:daftar.php?pesan=gagal");
		exit;
	}

?>
<!-- End -->