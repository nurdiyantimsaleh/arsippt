		<?php include('akses.php'); ?>
		<div id="content">
			<div id="page">Edit Data Sampel & Parameter</div>
		</div>
		<div id="content">
			<div id="view-table-top">
				<a href="" onclick="window.history.back();" class="aback"><i class="fa-backward"></i> Kembali </a>
			</div>
		</div>
		<?php
		include('../koneksi.php');
		$idsampel = $_GET['id'];
		$show = mysql_query("SELECT * FROM tbl_parameter INNER JOIN tbl_lab ON tbl_parameter.id_lab=tbl_lab.id_lab WHERE id_sampel='$idsampel'");
		$data = mysql_fetch_assoc($show);
		?>
		<form action="index.php?app=proses" method="post">
		<div id="content">
			<div id="view-table">
				<input type="hidden" name="id_sampel" value="<?php echo $idsampel; ?>">
				<input type="hidden" name="sampel" id="nama_jenis_uji" value="<?php echo $data['sampel']; ?>" maxlength="100">
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
								echo '<option value="'.$row['id_lab'].'"'.(($row['id_lab']==$data['id_lab'])?'selected="selected"':"").'>'.$row['nama_jenis_uji'].'</option>';  
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
						<td><input class="input" type="text" name="nama_lab" id="nama_lab" maxlength="100" value="<?php echo $data['nama_lab']; ?>" readonly required /></td>
					</tr>
					<tr>
						<td>Parameter Uji</td>
					</tr>
					<tr>
						<td><input class="input" type="text" name="parameter_uji" maxlength="200" value="<?php echo $data['parameter_uji']; ?>" required /></td>
					</tr>
					<tr>
						<td>Harga</td>
					</tr>
					<tr>
						<td><input class="input" type="text" name="harga" maxlength="50" value="<?php echo $data['harga']; ?>" required /></td>
					</tr>
					<tr>
						<td></td>
					</tr>
					<tr>
						<td><input class="inputsubmit" type="submit" name="sampeledit" value="Submit">
						    <input class="inputclear" type="reset" value="Clear Data"></td>
					</tr>
				</table>
			</div>
		</div>
		</form>
		