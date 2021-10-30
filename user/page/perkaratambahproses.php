<?php
include('akses.php');
if(isset($_POST['perkaratambah'])){
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
$lokasi = '../uploads/';

if($ukuran < 6000000) {
move_uploaded_file($file_tmp, $lokasi.$file);


$perintah = "INSERT INTO tbl_arsipperkara (id_perkara, tanggal, no_pn, no_pt, kd_lemari,  kd_rak,id_boxperkara, file) 
VALUES ('$perkara','$tgl','$nopn','$nopt','$lemari','$rak','$box','$file')";

$result = mysql_query($perintah);
	if ($result) {
		echo '<script language="javascript">window.location="index.php?page=home"; alert("Berkas Perkara Berhasil di input...!");</script>';
		}else {
			echo '<script language="javascript">window.location="index.php?page=perkaratambah"; alert("Berkas Perkara Gagal Di Input...!");</script>';
		}
		
}else {
		echo "ukuran file terlalu besar";
		}
}
?>