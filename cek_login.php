<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($koneksi, "select * from login where username='$username' and password='$password'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
if($cek == 1){
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	$col = mysqli_fetch_array($data);
	$_SESSION['name'] = $col['name'];
	$_SESSION['akses'] = $col['akses'];
	header("location:home.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>