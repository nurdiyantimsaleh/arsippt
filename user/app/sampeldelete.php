<?php
include('akses.php');

if(isset($_GET['id'])){
include "../koneksi.php";
	
	$id = $_GET['id'];

	$query = "DELETE FROM tbl_parameter WHERE id_sampel = $id";
	$hasil = mysql_query($query);
		if($hasil) echo '<script>alert("Data Sampel Berhasil Di Hapus...!"); window.history.back();</script>';
			
	$query = "SELECT * FROM tbl_parameter ORDER BY id_sampel";
	$hasil = mysql_query($query);

	$no = 1;

	while ($data = mysql_fetch_array($hasil)){
		$id = $data['id_sampel'];
		
		$query2 = "UPDATE tbl_parameter SET id_sampel = $no WHERE id_sampel = $id";
		mysql_query($query2);
		
		$no++;
	}

	$query = "ALTER TABLE tbl_parameter AUTO_INCREMENT = $no";
	mysql_query($query);
}
?>