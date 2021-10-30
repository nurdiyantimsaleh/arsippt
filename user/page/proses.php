<?php
include('akses.php');

if(isset($_POST['labadd'])){
	include "../koneksi.php";
	
	$namalab       = $_POST['nama_lab'];
	$namajenisuji  = $_POST['nama_jenis_uji'];
	
	$check = mysql_num_rows(mysql_query("SELECT nama_jenis_uji FROM tbl_lab WHERE nama_jenis_uji='$_POST[nama_jenis_uji]'"));
	if ($check > 0){
		echo '<script>alert("Nama Jenis Uji Yang Anda Masukan Sudah Ada...!"); window.history.back();</script>';
	}else{
		$input = mysql_query("INSERT INTO tbl_lab VALUES(NULL, '$namalab', '$namajenisuji')") or die(mysql_error());
		if ($input){
			echo '<script language="javascript">window.location="index.php?app=lab"; alert("Data Lab Berhasil Di Input...!");</script>';
		}else{
			echo '<script language="javascript">window.location="index.php?app=labadd"; alert("Data Lab Gagal Di Input...!");</script>';
		}
	}	
}

if(isset($_POST['labedit'])){
	include "../koneksi.php";
	
	$idlab			= $_POST['id_lab'];
	$namalab       	= $_POST['nama_lab'];
	$namajenisuji  	= $_POST['nama_jenis_uji'];
	
	$check = mysql_num_rows(mysql_query("SELECT * FROM tbl_lab WHERE id_lab='$_POST[id_lab]' AND nama_jenis_uji='$_POST[nama_jenis_uji]'"));
	if ($check == 1){
		$update = mysql_query("UPDATE tbl_lab SET nama_lab='$namalab', nama_jenis_uji='$namajenisuji' WHERE id_lab='$idlab'") or die(mysql_error());
			if ($update){
				echo '<script language="javascript">window.location="index.php?app=lab"; alert("Data Lab Berhasil Di Update...!");</script>';
			}else{
				echo '<script language="javascript">window.location="index.php?app=labedit"; alert("Data Lab Gagal Di Update...!");</script>';
			}
	}else{
		$check = mysql_num_rows(mysql_query("SELECT nama_jenis_uji FROM tbl_lab WHERE nama_jenis_uji='$_POST[nama_jenis_uji]'"));
		if ($check > 0){
			echo '<script>alert("Nama Lab Yang Anda Masukan Sudah Ada...!"); window.history.back();</script>';
		}else{
			$update = mysql_query("UPDATE tbl_lab SET nama_lab='$namalab', nama_jenis_uji='$namajenisuji' WHERE id_lab='$idlab'") or die(mysql_error());
			if ($update){
				echo '<script language="javascript">window.location="index.php?app=lab"; alert("Data Lab Berhasil Di Update...!");</script>';
			}else{
				echo '<script language="javascript">window.location="index.php?app=labedit"; alert("Data Lab Gagal Di Update...!");</script>';
			}
		}
	}
}

if(isset($_POST['sampeladd'])){
	include "../koneksi.php";
	
	$idlab        	= $_POST['id_lab'];
	$sampel  		= $_POST['sampel'];
	$parameteruji   = $_POST['parameter_uji'];
	$harga 		    = $_POST['harga'];
	
	$check = mysql_num_rows(mysql_query("SELECT sampel FROM tbl_parameter WHERE sampel='$_POST[sampel]'"));
	if ($check > 0){
		echo '<script>alert("Sampel Yang Anda Masukan Sudah Ada...!"); window.history.back();</script>';
	}else{
		$input = mysql_query("INSERT INTO tbl_parameter VALUES(NULL, '$idlab', '$sampel', '$parameteruji', '$harga')") or die(mysql_error());
		if ($input){
			echo '<script language="javascript">window.location="index.php?app=sampel"; alert("Data Parameter Berhasil Di Input...!");</script>';
		}else{
			echo '<script language="javascript">window.location="index.php?app=sampeladd"; alert("Data Parameter Gagal Di Input...!");</script>';
		}
	}	
}

if(isset($_POST['sampeledit'])){
	include "../koneksi.php";
	
	$idsampel		= $_POST['id_sampel'];
	$idlab       	= $_POST['id_lab'];
	$sampel  		= $_POST['sampel'];
	$parameteruji   = $_POST['parameter_uji'];
	$harga 		    = $_POST['harga'];
	
	$check = mysql_num_rows(mysql_query("SELECT * FROM tbl_parameter WHERE id_sampel='$_POST[id_sampel]' AND sampel='$_POST[sampel]'"));
	if ($check == 1){
		$update = mysql_query("UPDATE tbl_parameter SET id_lab='$idlab', sampel='$sampel', parameter_uji='$parameteruji', harga='$harga' WHERE id_sampel='$idsampel'") or die(mysql_error());
			if ($update){
				echo '<script language="javascript">window.location="index.php?app=sampel"; alert("Data Sampel & Parameter Berhasil Di Update...!");</script>';
			}else{
				echo '<script language="javascript">window.location="index.php?app=sampeledit"; alert("Data Sampel & Parameter Gagal Di Update...!");</script>';
			}
	}else{
		$check = mysql_num_rows(mysql_query("SELECT sampel FROM tbl_parameter WHERE sampel='$_POST[sampel]'"));
		if ($check > 0){
			echo '<script>alert("Sampel Yang Anda Masukan Sudah Ada...!"); window.history.back();</script>';
		}else{
			$update = mysql_query("UPDATE tbl_parameter SET id_lab='$idlab', sampel='$sampel', parameter_uji='$parameteruji', harga='$harga' WHERE id_sampel='$idsampel'") or die(mysql_error());
			if ($update){
				echo '<script language="javascript">window.location="index.php?app=sampel"; alert("Data Sampel & Parameter Berhasil Di Update...!");</script>';
			}else{
				echo '<script language="javascript">window.location="index.php?app=sampeledit"; alert("Data Sampel & Parameter Gagal Di Update...!");</script>';
			}
		}
	}
}

if(isset($_POST['daftaradd'])){
	include "../koneksi.php";
	
	$namapelanggan  = $_POST['nama_pelanggan'];
	$alamat  		= $_POST['alamat'];
	$notelp   		= $_POST['no_telp'];
	$idsampel 		= $_POST['id_sampel'];
	$parameteruji	= $_POST['parameter_uji'];
	$harga			= $_POST['harga'];
	$tglambil		= $_POST['tgl_ambil'];
	$jamambil		= $_POST['jam_ambil'];
	
	$check = mysql_num_rows(mysql_query("SELECT nama_pelanggan FROM tbl_pelanggan WHERE nama_pelanggan='$_POST[nama_pelanggan]'"));
	if ($check > 0){
		echo '<script>alert("Nama Pelanggan Yang Anda Masukan Sudah Ada...!"); window.history.back();</script>';
	}else{
		$input = mysql_query("INSERT INTO tbl_pelanggan VALUES(NULL, '$namapelanggan', '$alamat', '$notelp')") or die(mysql_error());
		if ($input){
			
			$show = mysql_query("SELECT * FROM tbl_pelanggan WHERE nama_pelanggan='$_POST[nama_pelanggan]'");
			$data = mysql_fetch_assoc($show);
			
			$idpelanggan = $data['id_pelanggan'];
		}
			if ($data){
				$add = mysql_query("INSERT INTO tbl_pendaftaran VALUES(NULL, '$idpelanggan', '$idsampel', '$tglambil', '$jamambil')") or die(mysql_error());
				if ($add){
					echo '<script language="javascript">window.location="index.php?app=home";</script>';
				}else{
					echo '<script language="javascript">window.location="index.php?app=daftar"; alert("Data Pelanggan Gagal Di Input...!");</script>';
				}
		}
	}	
}

if(isset($_POST['profiledit'])){
	include "../koneksi.php";
	
	$idlogin		= $_POST['id_login'];
	$username       = $_POST['username'];
	$password  		= md5($_POST['password']);
	$norek   		= $_POST['no_rek'];
	$alamatbtklpp 	= $_POST['alamat_btklpp'];
	
	$check = mysql_num_rows(mysql_query("SELECT * FROM tbl_login WHERE id_login='$_POST[id_login]' AND username='$_POST[username]'"));
	if ($check == 1){
		$update = mysql_query("UPDATE tbl_login SET username='$username', password='$password', no_rek='$norek', alamat_btklpp='$alamatbtklpp' WHERE id_login='$idlogin'") or die(mysql_error());
			if ($update){
				echo '<script language="javascript">window.location="index.php?app=home"; alert("Data Profil Berhasil Di Update...!");</script>';
			}else{
				echo '<script language="javascript">window.location="index.php?app=profil"; alert("Data Profil Gagal Di Update...!");</script>';
			}
	}else{
		$check = mysql_num_rows(mysql_query("SELECT username FROM tbl_login WHERE username='$_POST[username]'"));
		if ($check > 0){
			echo '<script>alert("Username Yang Anda Masukan Sudah Ada...!"); window.history.back();</script>';
		}else{
			$update = mysql_query("UPDATE tbl_login SET username='$username', password='$password', no_rek='$norek', alamat_btklpp='$alamatbtklpp' WHERE id_login='$idlogin'") or die(mysql_error());
			if ($update){
				echo '<script language="javascript">window.location="index.php?app=sampel"; alert("Data Profil Berhasil Di Update...!");</script>';
			}else{
				echo '<script language="javascript">window.location="index.php?app=sampeledit"; alert("Data Profil Gagal Di Update...!");</script>';
			}
		}
	}
}
?>