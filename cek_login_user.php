<!-- Cek Login user -->
<?php 
	//mengaktifkan session pada php
	session_start();

	//menghubungkan php dengan koneksi database
	include'config/koneksi.php';

	//menangkap data yang dikirim dari form login
	$username = $_POST['username'];
	$password = $_POST['password'];

	//menyeleksi data user dengan username dan password yang sesuai
	$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");

	//menghitung jumlah data yang ditemukan 
	$cek = mysqli_num_rows($login);

	$data = mysqli_fetch_assoc($login);

	//cek apakah username dan password ditemukan pada database
	if($cek > 0){

			//buat session login dan username
			$_SESSION['username'] = $username;
			$_SESSION['id_user'] = $data['id_user'];
			
			//alihkan ke halaman dashboard admin
			header("location:user/dashboard.php");

		//cek jika user login sebagai petugas
		}else{
		header("location:login_user.php?pesan=gagal");
	} 
	
	?>
<!-- End -->