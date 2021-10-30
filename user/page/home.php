		<?php include('akses.php'); ?>
		<div id="content">
			<div id="page">Data Perkara</div>
		</div>
		<div id="content">
			<div id="view-table-top">
				<a href="index.php?page=perkaratambah" class="aadd"><i class="fa-plus-square"></i> Tambah Berkas Perkara </a><br>
				<br>
				<form name="formcari" method="post" action="index.php?page=homecari">
				<input class="cari-data" type="text" name="cari" placeholder="Cari.."> <input class="btn-cari-data" type="submit" value="Search" > </td>
				</form>
				<br>
				<table id="table">
				  <tr>
				  
					<th>Perkara</th>
					<th>No PN</th>
					<th>No PT</th>
					<th>Lemari</th>
					<th>Rak</th>
					<th>Box</th>
				    <th>Klasifikasi</th>
					<th>Tanggal</th>
				    <th>File</th>
					<th colspan="2">Aksi</th>
				  </tr>
				  <?php
				include "../koneksi.php";

				$batas = 10;
				$halaman = @$_GET['halaman'];
				if(empty($halaman)) {
				$posisi = 0;
				$halaman = 1;
				}
				else {
				$posisi = ($halaman - 1) * $batas;
				}
				
				$query = "select *  from tbl_arsipperkara
				
				inner join tbl_lemari on tbl_arsipperkara.kd_lemari = tbl_lemari.kd_lemari
				inner join tbl_rak on tbl_arsipperkara.kd_rak = tbl_rak.kd_rak
				inner join tbl_box on tbl_arsipperkara.id_boxperkara = tbl_box.id_boxperkara
				inner join tbl_perkara on tbl_arsipperkara.id_perkara = tbl_perkara.id_perkara limit $posisi,$batas";
				$hasil = mysql_query($query);
				$no=1;
				if(mysql_num_rows($hasil) == 0){
					echo '<tr><td colspan="4">Tidak ada data!</td></tr>';
				}else{
					
					while ($data = mysql_fetch_array($hasil)){
						
					echo '<tr>';
					echo '<td>'.$data['nama_perkara'].'</td>';
						echo '<td>'.$data['no_pn'].'</td>';
						echo '<td>'.$data['no_pt'].'</td>';
						echo '<td>'.$data['lemari'].'</td>';
						echo '<td>'.$data['rak'].'</td>';
						echo '<td>'.$data['box'].'</td>';
						echo '<td>'.$data['klasifikasi'].'</td>';
						echo '<td>'.date ("d-F-Y", strtotime($data['tanggal'])).'</td>';
						echo '<td><a href="../uploads/'.$data['file'].'"> <i class=\'fa fa-download\' aria-hidden=\'true\'></i> </a></td>';
						echo '<td style="text-align: center;"><a href="index.php?page=perkaraedit&kode_perkara='.$data['kode_perkara'].'" class="aedit"><i class="fa-edit"></i></a> </td> <td>
				                  <a href="index.php?page=perkarahapus&kode_perkara='.$data['kode_perkara'].'" class="adelete" onclick="return confirm(\'Anda yakin ingin menghapus data ini ?\')"><i class="fa-trash"></i></a></td>';
					echo '</tr>';	
						
						}
					} $no++;
				?>
				
				</table>
<?php    
     
// 4). code untuk Menampilkan nomor paging di bagian bawah tabel.
      $sql_paging = mysql_query("select *  from tbl_arsipperkara");
      $jmldata = mysql_num_rows($sql_paging);
      $jumlah_halaman = ceil($jmldata / $batas);
 
      echo "Halaman :";
      for($i = 1; $i <= $jumlah_halaman; $i++)
        if($i != $halaman) {
          echo "<a href=?halaman=$i>$i</a>|";
        } else {
          echo "<b>$i</b>|";
        }
      mysql_close();?>
    <br>
    Jumlah data :<?php echo $jmldata;?>
					</div>
			
			</div>
		</div>
		