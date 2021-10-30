<?php
include('akses.php');

include "../koneksi.php";

$kd = $_POST['kdtxt'];
$box = $_POST['boxtxt'];
$klasi = $_POST['klasitxt'];
$perintah = "INSERT INTO tbl_box (id_boxperkara, box, klasifikasi) VALUES ('$kd','$box','$klasi')";

$result = mysql_query($perintah);
	if ($result) {
		echo '<script language="javascript">window.location="index.php?page=boxtambah"; alert("Penambahan Box Berhasil...!");</script>';
		}else {
		echo '<script language="javascript">window.location="index.php?page=boxtambah"; alert("Penambahan Box Tidak Berhasil...!");</script>';
		}

?>