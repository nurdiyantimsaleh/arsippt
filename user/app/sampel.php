		<?php include('akses.php'); ?>
		<div id="content">
			<div id="page">Sampel & Parameter</div>
		</div>
		<div id="content">
			<div id="view-table-top">
				<a href="index.php?app=sampeladd" class="aadd"><i class="fa-plus-square"></i> Tambah Data </a>
			</div>
		</div>
		<div id="content">
			<div id="view-table">
				<table id="table">
				  <tr>
					<th>No</th>
					<th>Nama Lab</th>
					<th>Sampel</th>
					<th>Parameter Uji</th>
					<th>Harga</th>
					<th>Option</th>
				  </tr>
				  <?php
				include "../koneksi.php";
				$query = "SELECT * FROM tbl_parameter INNER JOIN tbl_lab ON tbl_parameter.id_lab=tbl_lab.id_lab";
				$hasil = mysql_query($query);
				if(mysql_num_rows($hasil) == 0){
					echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
				}else{
					$no = 1;
					while ($data = mysql_fetch_array($hasil)){
						
					echo '<tr>';
						echo '<td>'.$no.'</td>';
						echo '<td>'.$data['nama_lab'].'</td>';
						echo '<td>'.$data['sampel'].'</td>';
						echo '<td style="width: 180px; height: 108px;">'.$data['parameter_uji'].'</td>';
						echo '<td>'.$data['harga'].'</td>';
						echo '<td style="text-align: center;"><a href="index.php?app=sampeledit&id='.$data['id_sampel'].'" class="aedit"><i class="fa-edit"></i> Edit </a>
				                  <a href="index.php?app=sampeldelete&id='.$data['id_sampel'].'" class="adelete" onclick="return confirm(\'Anda yakin ingin menghapus data ini ?\')"><i class="fa-trash"></i> Hapus </a></td>';
					echo '</tr>';
						
						$no++;
						}
					}
				?>
				</table>
			</div>
		</div>
		