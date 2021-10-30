<?php
include('akses.php');

if(isset($_GET['id'])){
include "../koneksi.php";
	
	$id = $_GET['id'];

	$query = "DELETE FROM tbl_pelanggan WHERE id_pelanggan = $id";
	$hasil = mysql_query($query);
		if($hasil) echo '<script>window.history.back(); alert("Data Pendaftaran Berhasil Di Hapus...!"); </script>';
			
	$query = "SELECT * FROM tbl_pelanggan ORDER BY id_pelanggan";
	$hasil = mysql_query($query);

	$no = 1;

	while ($data = mysql_fetch_array($hasil)){
		$id = $data['id_pelanggan'];
		
		$query2 = "UPDATE tbl_pelanggan SET id_pelanggan = $no WHERE id_pelanggan = $id";
		mysql_query($query2);
		
		$no++;
	}

	$query = "ALTER TABLE tbl_pelanggan AUTO_INCREMENT = $no";
	mysql_query($query);
}
?>