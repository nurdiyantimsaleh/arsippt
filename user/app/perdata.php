		<?php include('akses.php'); ?>
		<div id="content">
			<div id="page">Perkara Perdata</div>
		</div>
		<div id="content">
			<div id="view-table-top">
				<a href="index.php?app=labadd" class="aadd"><i class="fa-plus-square"></i> Tambah Data </a>
			</div>
		</div>
		<div id="content">
			<div id="view-table">
				<table id="table">
				  <tr>
					<th>No PN</th>
					<th>No PT</th>
					<th>Lemari</th>
					<th>Rak</th>
					<th>Box</th>
					<th>Tanggal</th>
				  </tr>
				  <?php
				include "../koneksi.php";
				$query = "select *  from tbl_arsipperkara
				
				inner join tbl_lemari on tbl_arsipperkara.kd_lemari = tbl_lemari.kd_lemari
				inner join tbl_rak on tbl_arsipperkara.kd_rak = tbl_rak.kd_rak
				inner join tbl_box on tbl_arsipperkara.id_boxperkara = tbl_box.id_boxperkara
				inner join tbl_perkara on tbl_arsipperkara.id_perkara = tbl_perkara.id_perkara where nama_perkara = 'perdata'";
				$hasil = mysql_query($query);
				if(mysql_num_rows($hasil) == 0){
					echo '<tr><td colspan="4">Tidak ada data!</td></tr>';
				}else{
					
					while ($data = mysql_fetch_array($hasil)){
						
					echo '<tr>';
						echo '<td>'.$data['no_pn'].'</td>';
						echo '<td>'.$data['no_pt'].'</td>';
						echo '<td>'.$data['lemari'].'</td>';
						echo '<td>'.$data['rak'].'</td>';
						echo '<td>'.$data['box'].'</td>';
						echo '<td>'.$data['tanggal'].'</td>';
						
						
						}
					}
				?>
				</table>
			</div>
		</div>
		