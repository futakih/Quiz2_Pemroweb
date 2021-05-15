<?php 
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];
$result = mysqli_query($koneksi,"select * from user where Username='$username' and Password='$password'");
if(mysqli_num_rows($result) > 0){
	$_SESSION['username']=$username;
	$_SESSION['login'] = true;
	if (isset($_POST['rememb'])){
		setcookie('username',$username, time()+3000);
		setcookie('login','true', time()+3000);
	}
	header("location:index.php");
	exit;
}else{
	header("location:login.php?pesan=gagal");
	exit;
}
?>