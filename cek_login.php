<?php 
session_start();
include 'koneksi.php';


$username = $_POST['user'];
$password = MD5($_POST['pass']);


$query = "SELECT * FROM tb_admin WHERE username ='$username' and password='$password'";
$login = mysqli_query($conn, $query);
$cek = mysqli_num_rows($login);

if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	if($data['level']=="admin"){

		$_SESSION['username'] = $username;
		$_SESSION['nama'] = $data['nm_admin'];
		$_SESSION['level'] = "admin";
		header("location:index.php");

	}else if($data['level']=="peserta"){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "peserta";
		header("location:daftar-peserta.php");

	}else{
		//echo '<script>alert("Gagal, username atau password salah")</script>';
		header("location:login.php");
	}

	
}else{
	//echo '<script>alert("Gagal, username atau password salah")</script>';
	header("location:login.php");
}



?>