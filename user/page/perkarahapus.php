<?php
include('akses.php');

include "../koneksi.php";
	
	$id = $_GET['kode_perkara'];

	$sql = "DELETE FROM tbl_arsipperkara WHERE kode_perkara =$id";
if(mysql_query($sql))
{
	header('location:index.php');
}
else
{
}
	die('Could not delete record:' .mysql_error());
?>