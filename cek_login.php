<!-- 11. Cek Login -->
	<?php 
	//mengaktifkan session pada php
	session_start();

	//menghubungkan php dengan koneksi database
	include'config/koneksi.php';

	//menangkap data yang dikirim dari form login
	$username_petugas = $_POST['username_petugas'];
	$password_petugas = $_POST['password_petugas'];

	//menyeleksi data user dengan username dan password yang sesuai
	$login = mysqli_query($koneksi,"select * from petugas where username_petugas='$username_petugas' and password_petugas='$password_petugas'");

	//menghitung jumlah data yang ditemukan 
	$cek = mysqli_num_rows($login);

	//cek apakah username dan password ditemukan pada database
	if($cek > 0){

		$data = mysqli_fetch_assoc($login);

		//cek jika user login sebagai admin
		if($data['status']=="admin"){

			//buat session login dan username
			$_SESSION['username_petugas'] = $username_petugas;
			$_SESSION['status'] = "admin";
			$_SESSION['nama_petugas'] = $data['nama_petugas'];
			$_SESSION['id_petugas'] = $data['id_petugas'];

			//alihkan ke halaman dashboard admin
			header("location:admin/dashboard.php");

		//cek jika user login sebagai petugas
		}else if($data['status']=="montir"){
			//buat session login dan username
			$_SESSION['username_petugas'] = $username_petugas;
			$_SESSION['status'] = "montir";
			$_SESSION['nama_petugas'] = $data['nama_petugas'];
			$_SESSION['id_petugas'] = $data['id_petugas'];

			//alihkan ke halaman dashboard petugas
			header("location:petugas/dashboard.php");

		}else{

			//alihkan ke halaman login kembali
			header("location:login.php?pesan=gagal");

		}
	}else{
		header("location:login.php?pesan=gagal");
	} 
	
	?>
<!-- End -->