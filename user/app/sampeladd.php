		<?php include('akses.php'); ?>
		<div id="content">
			<div id="page">Input Data Sampel & Parameter</div>
		</div>
		<div id="content">
			<div id="view-table-top">
				<a href="" onclick="window.history.back();" class="aback"><i class="fa-backward"></i> Kembali </a>
			</div>
		</div>
		<form action="index.php?app=proses" method="post">
		<div id="content">
			<div id="view-table">
				<input type="hidden" name="sampel" id="nama_jenis_uji" maxlength="100">
				<input class="input" type="hidden" name="harga" maxlength="50" value="Rp. " required />
				<table>
					<tr>
						<td>Sampel</td>
					</tr>
					<tr>
						<td>
							<?php
							include '../koneksi.php';
							$result = mysql_query("SELECT * FROM tbl_lab");    
							$jsArray = "var id_lab = new Array();\n";    
							echo '<select class="select" name="id_lab" onchange="changeValue(this.value)" required>';    
							echo '<option value="" disabled="disabled" selected> -- Pilih Sampel -- </option>';    
							while ($row = mysql_fetch_array($result)) {    
								echo '<option value="'.$row['id_lab'].'">'.$row['nama_jenis_uji'].'</option>';    
								$jsArray .= "id_lab['" . $row['id_lab'] . "'] = {nama_lab:'" . addslashes($row['nama_lab']) . "',nama_jenis_uji:'".addslashes($row['nama_jenis_uji']). "'};\n";    
							}    
							echo '</select>';
							?>
							<script type="text/javascript">    
								<?php echo $jsArray; ?>  
								function changeValue(id){  
								document.getElementById('nama_lab').value = id_lab[id].nama_lab;  
								document.getElementById('nama_jenis_uji').value = id_lab[id].nama_jenis_uji;
								};  
							</script>
						</td>
					</tr>
					<tr>
						<td>Labolatorium</td>
					</tr>
					<tr>
						<td><input class="input" type="text" name="nama_lab" id="nama_lab" maxlength="100" readonly required /></td>
					</tr>
					<tr>
						<td>Parameter Uji</td>
					</tr>
					<tr>
						<td><input class="input" type="text" name="parameter_uji" maxlength="200" required /></td>
					</tr>
					<tr>
						<td>Harga</td>
					</tr>
					<tr>
						<td><input class="input" type="text" name="harga" maxlength="50" required /></td>
					</tr>
					<tr>
						<td></td>
					</tr>
					<tr>
						<td><input class="inputsubmit" type="submit" name="sampeladd" value="Submit">
						    <input class="inputclear" type="reset" value="Clear Data"></td>
					</tr>
				</table>
			</div>
		</div>
		</form>
		