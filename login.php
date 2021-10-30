<?php
include('koneksi.php');
 
	$username = $_POST['username'];
	$password = $_POST['password'];
	 
	$login = mysql_query("select * from tbl_admin where username='$username' and password='$password'");
	$cek = mysql_num_rows($login);
	 
	if($cek > 0){
		session_start();
		$_SESSION['username'] = $username;
		echo '<script language="javascript">document.location="user/index.php?page=home";</script>';
	}else{
		echo '<script language="javascript">alert("Username Atau Password Salah!!!"); document.location="index.php";</script>';	
	}
	
?>