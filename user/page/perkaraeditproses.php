<?php
include('akses.php');
if(isset($_POST['perkaraedit'])){
include "../koneksi.php";

$ukuran = $_FILES['file']['size'];
$file_tmp = $_FILES['file']['tmp_name'];
$allowed_ext	= array('pdf', 'rar', 'zip');
$lokasi = '../uploads/';

if($ukuran < 6000000) {
move_uploaded_file($file_tmp, $lokasi.$file);


$perintah = "UPDATE tbl_arsipperkara set id_perkara='$_POST[perkaralist]', tanggal='$_POST[tgltxt]', no_pn='$_POST[nopntxt]', no_pt='$_POST[nopttxt]', kd_lemari='$_POST[lemarilist]', id_boxperkara='$_POST[boxlist]', kd_rak='$_POST[raklist]' where kode_perkara = '$_POST[idtxt]'";

$result = mysql_query($perintah);
	if ($result) {
		echo '<script language="javascript">window.location="index.php?page=home"; alert("Berkas Perkara Berhasil di input...!");</script>';
		}else {
			echo '<script language="javascript">window.location="index.php?page=perkaraedit"; alert("Berkas Perkara Gagal Di Input...!");</script>';
		}
		
}else {
		echo "ukuran file terlalu besar";
		}
}
?>