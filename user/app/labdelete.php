<?php
include('akses.php');

if(isset($_GET['id'])){
include "../koneksi.php";
	
	$id = $_GET['id'];

	$query = "DELETE FROM tbl_lab WHERE id_lab = $id";
	$hasil = mysql_query($query);
		if($hasil) echo '<script>alert("Data Lab Berhasil Di Hapus...!"); window.history.back();</script>';
			
	$query = "SELECT * FROM tbl_lab ORDER BY id_lab";
	$hasil = mysql_query($query);

	$no = 1;

	while ($data = mysql_fetch_array($hasil)){
		$id = $data['id_lab'];
		
		$query2 = "UPDATE tbl_lab SET id_lab = $no WHERE id_lab = $id";
		mysql_query($query2);
		
		$no++;
	}

	$query = "ALTER TABLE tbl_lab AUTO_INCREMENT = $no";
	mysql_query($query);
}
?>