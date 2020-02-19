<?php 
// mengaktifkan session pada php
session_start();

// menghubungkan php dengan koneksi database
include 'conn.php';

// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"select * from data_user where nama='$username' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	// cek jika user login sebagai admin
	if($data['kode_fakultas']=="0"){

		// buat session login dan username
		$_SESSION['nama'] = $username;
		$_SESSION['kode_fakultas'] = "0";
		// alihkan ke halaman dashboard admin
		header("location:halaman_per_fakultas/halaman_admin.php");

	}else if($data['kode_fakultas']=="FK001"){
		// buat session login dan username
		$_SESSION['nama'] = $username;
		$_SESSION['kode_fakultas'] = "FK001";
		
		header("location:halaman_per_fakultas/halaman_ekonomi.php");

	
	}else if($data['kode_fakultas']=="FK002"){
		// buat session login dan username
		$_SESSION['nama'] = $username;
		$_SESSION['kode_fakultas'] = "FK002";
		
		header("location:halaman_per_fakultas/halaman_fad.php");

	
	}else if($data['kode_fakultas']=="FK003"){
		// buat session login dan username
		$_SESSION['nama'] = $username;
		$_SESSION['kode_fakultas'] = "FK003";
		
		header("location:halaman_per_fakultas/halaman_fisip.php");

	
	}else if($data['kode_fakultas']=="FK004"){
		// buat session login dan username
		$_SESSION['nama'] = $username;
		$_SESSION['kode_fakultas'] = "FK004";
		
		header("location:halaman_per_fakultas/halaman_hukum.php");

	
	}else if($data['kode_fakultas']=="FK005"){
		// buat session login dan username
		$_SESSION['nama'] = $username;
		$_SESSION['kode_fakultas'] = "FK005";
		
		header("location:halaman_per_fakultas/halaman_ilmu_komputer.php");

	
	}else if($data['kode_fakultas']=="FK006"){
		// buat session login dan username
		$_SESSION['nama'] = $username;
		$_SESSION['kode_fakultas'] = "FK006";
		
		header("location:halaman_per_fakultas/halaman_pertanian.php");

	
	}else if($data['kode_fakultas']=="FK007"){
		// buat session login dan username
		$_SESSION['nama'] = $username;
		$_SESSION['kode_fakultas'] = "FK007";
		
		header("location:halaman_per_fakultas/halaman_teknik.php");

	
	}else{

		// alihkan ke halaman login kembali
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

?>