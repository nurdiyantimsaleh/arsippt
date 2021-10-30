<?php
include('akses.php');

include "../koneksi.php";

$kd = $_POST['kdtxt'];

$rak = $_POST['raktxt'];
$perintah = "INSERT INTO tbl_rak (kd_rak, rak) VALUES ('$kd','$rak')";

$result = mysql_query($perintah);
	if ($result) {
		echo '<script language="javascript">window.location="index.php?page=raktambah"; alert("Penambahan Rak Berhasil...!");</script>';
		}else {
		echo '<script language="javascript">window.location="index.php?page=raktambah"; alert("Penambahan Rak Tidak Berhasil...!");</script>';
		}

?>