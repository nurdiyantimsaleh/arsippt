<?php
	$server = "localhost";
    $username = "root";
    $pass = "";
    $db = "arsipbaru";
    mysql_connect($server, $username, $pass) or die("Tidak Dapat Terhubung Ke Localhost");
    mysql_select_db($db) or die("Database Tidak Di Temukan");
?>