		<?php include('akses.php'); ?>
		<div id="content">
			<div id="page">Daftar Pelanggan</div>
		</div>
		<div id="content">
			<div id="view-table-custom-nobtn">
				<table id="table">
				  <tr>
					<th>No</th>
					<th>Nama Pelanggan</th>
					<th>Alamat</th>
					<th>No. Telp</th>
					<th>Sampel</th>
					<th>Parameter Uji</th>
					<th>Harga</th>
					<th>Tanggal Pengambilan</th>
					<th>Jam Pengambilan</th>
					<th>Option</th>
				  </tr>
				  <?php
				include "../koneksi.php";
				$query = "SELECT * FROM tbl_pendaftaran 
						  INNER JOIN tbl_pelanggan ON tbl_pendaftaran.id_pelanggan=tbl_pelanggan.id_pelanggan
						  INNER JOIN tbl_parameter ON tbl_pendaftaran.id_sampel=tbl_parameter.id_sampel";
				$hasil = mysql_query($query);
				if(mysql_num_rows($hasil) == 0){
					echo '<tr><td colspan="10">Tidak ada data!</td></tr>';
				}else{
					$no = 1;
					while ($data = mysql_fetch_array($hasil)){
						
					echo '<tr>';
						echo '<td>'.$no.'</td>';
						echo '<td style="white-space: nowrap;">'.$data['nama_pelanggan'].'</td>';
						echo '<td style="width: 120px;">'.$data['alamat'].'</td>';
						echo '<td>'.$data['no_telp'].'</td>';
						echo '<td style="white-space: nowrap;">'.$data['sampel'].'</td>';
						echo '<td>'.$data['parameter_uji'].'</td>';
						echo '<td style="white-space: nowrap;">'.$data['harga'].'</td>';
						echo '<td style="text-align: center;">'.$data['tgl_ambil'].'</td>';
						echo '<td style="text-align: center;">'.$data['jam_ambil'].'</td>';
						echo '<td style="white-space: nowrap;"><a href="index.php?app=sampeledit&id='.$data['id_sampel'].'" class="aedit"><i class="fa-edit"></i> Edit </a>
				                  <a href="index.php?app=daftardelete&id='.$data['id_pelanggan'].'" class="adelete" onclick="return confirm(\'Anda yakin ingin menghapus data ini ?\')"><i class="fa-trash"></i> Hapus </a></td>';
					echo '</tr>';
						
						$no++;
						}
					}
				?>
				</table>
			</div>
		</div>
		