<?php
include('akses.php');

include "../koneksi.php";

$perkara = $_POST['perkaralist'];
$tgl = $_POST['tgltxt'];
$nopn = $_POST['nopntxt'];
$nopt = $_POST['nopttxt'];
$lemari = $_POST['lemarilist'];
$rak = $_POST['raklist'];
$box = $_POST['boxlist'];
$file = $_FILES['file']['name'];
$ukuran = $_FILES['file']['size'];
$file_tmp = $_FILES['file']['tmp_name'];
$allowed_ext	= array('pdf', 'rar', 'zip');
$lokasi = '../upload/';

if($ukuran < 6000000) {
move_uploaded_file($file_tmp, $lokasi.$file);


$perintah = "INSERT INTO tbl_arsipperkara (id_perkara, tanggal, no_pn, no_pt, kd_lemari, id_boxperkara, kd_rak, file) 
VALUES ('$perkara','$tglterbit','$nopn','$nopt','$lemari','$box','$rak','$file')";

$result = mysql_query($perintah);
	if ($result) {
		echo '<script language="javascript">window.location="index.php"; alert("Data Lab Berhasil Di Input...!");</script>';
		}else {
		echo "Data belum dapat di simpan!!";
		}
		
}else {
		echo "ukuran file terlalu besar";
		}
?>