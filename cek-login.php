<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login

//ini adalah bagian filter input / disaring
$username = trim(htmlentities($_POST['username'])); 
$password = trim(htmlentities($_POST['password'])); 
// end filter input


//ini adalah filter yang tidak di input/disaring
// $username = $_POST['username'];  
// $password = $_POST['password'];
// end 
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($conn,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
//select * from user where username='yyy' OR 1=1 -- ' and password='xxx' kODE SQL INJECTION

// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['role']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:dashboard.php");
 

 
	// cek jika user login sebagai user
	}else if($data['role']=="pengunjung"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['role'] = "pengunjung";
		// alihkan ke halaman dashboard pengurus
		header("location:halaman-pengunjung.php");
 
	}else{
 
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}
 
?>