		<?php include('akses.php'); ?>
		<div id="content">
			<div id="page">
				Pendaftaran Pelanggan
			</div>
		</div>
		<form action="index.php?app=proses" method="post">
		<div id="content">
			<div id="view-table-nobtn">
				<table>
					<tr>
						<td>Nama Pelanggan</td>
					</tr>
					<tr>
						<td><input class="input" type="text" name="nama_pelanggan" maxlength="100" required /></td>
					</tr>
					<tr>
						<td>Alamat Pelanggan</td>
					</tr>
					<tr>
						<td><input class="input" type="text" name="alamat" maxlength="100" required /></td>
					</tr>
					<tr>
						<td>No. Telp</td>
					</tr>
					<tr>
						<td><input class="input" type="text" name="no_telp" maxlength="12" required /></td>
					</tr>
					<tr>
						<td>Sampel</td>
					</tr>
					<tr>
						<td>
							<?php
							include '../koneksi.php';
							$result = mysql_query("SELECT * FROM tbl_parameter");    
							$jsArray = "var id_sampel = new Array();\n";    
							echo '<select class="select" name="id_sampel" onchange="changeValue(this.value)" required>';    
							echo '<option value="" disabled="disabled" selected> -- Pilih Sampel -- </option>';    
							while ($row = mysql_fetch_array($result)) {    
								echo '<option value="'.$row['id_sampel'].'">'.$row['sampel'].'</option>';    
								$jsArray .= "id_sampel['" . $row['id_sampel'] . "'] = {parameter_uji:'" . addslashes($row['parameter_uji']) . "',harga:'".addslashes($row['harga']). "'};\n";    
							}    
							echo '</select>';
							?>
							<script type="text/javascript">    
								<?php echo $jsArray; ?>  
								function changeValue(id){  
								document.getElementById('parameter_uji').value = id_sampel[id].parameter_uji;  
								document.getElementById('harga').value = id_sampel[id].harga;
								};  
							</script>
						</td>
					</tr>
					<tr>
						<td>Parameter Uji</td>
					</tr>
					<tr>
						<td><input class="input" type="text" name="parameter_uji" id="parameter_uji" readonly required /></td>
					</tr>
					<tr>
						<td>Harga</td>
					</tr>
					<tr>
						<td><input class="input" type="text" name="harga" id="harga" readonly required /></td>
					</tr>
					<tr>
						<td>Tanggal Pengambilan</td>
					</tr>
					<tr>
						<td><input class="inputdate" type="date" name="tgl_ambil" required /></td>
					</tr>
					<tr>
						<td>Jam Pengambilan</td>
					</tr>
					<tr>
						<td><input class="inputtime" type="time" name="jam_ambil" required /></td>
					</tr>
					<tr>
						<td></td>
					</tr>
					<tr>
						<td><input class="inputsubmit" type="submit" name="daftaradd" value="Submit">
						    <input class="inputclear" type="reset" value="Clear Data"></td>
					</tr>
				</table>
			</div>
		</div>
		</form>
		