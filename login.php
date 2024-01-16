<?php 
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi
include 'config.php';

// menangkap data yang dikirim dari form
$usernamed = $_POST['usernamed'];
$psw = $_POST['psw'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($db,"select * from tb_user where username='$usernamed' and password='$psw'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
	$_SESSION['usernamed'] = $usernamed;
	$_SESSION['status'] = "login";
	header("location:dashboard.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>