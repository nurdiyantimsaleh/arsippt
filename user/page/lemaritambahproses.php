<?php
include('akses.php');

include "../koneksi.php";

$kd = $_POST['kdtxt'];

$lemari = $_POST['lemaritxt'];
$perintah = "INSERT INTO tbl_lemari (kd_lemari, lemari) VALUES ('$kd','$lemari')";

$result = mysql_query($perintah);
	if ($result) {
		echo '<script language="javascript">window.location="index.php?page=lemaritambah"; alert("Penambahan Lemari Berhasil...!");</script>';
		}else {
		echo '<script language="javascript">window.location="index.php?page=lemaritambah"; alert("Penambahan Lemari Tidak Berhasil...!");</script>';
		}
		

?>