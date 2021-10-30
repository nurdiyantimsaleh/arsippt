		<?php include('akses.php'); ?>
		<div id="content">
			<div id="page">Input Data Perkara</div>
		</div>
		<div id="content">
			<div id="view-table-top">
				<a href="" onclick="window.history.back();" class="aback"><i class="fa-backward"></i> Kembali </a>
			</div>
		</div>
		<form action="index.php?page=perkaratambahproses" method="post" enctype="multipart/form-data">
		<div id="content">
			<div id="view-table">
				
				<table>
					<tr>
						<td>Perkara</td>
						<td><select name="perkaralist" id="perkaralist">
                    
					<?php
					require ("../koneksi.php");
					$perintah="select * from tbl_perkara order by nama_perkara asc";
					$hasil=mysql_query($perintah);
					if ($hasil === FALSE) {
					die (mysql_error());
					}
					while ($data = mysql_fetch_array($hasil))
					{
					?>
					<option value="<?php echo "$data[id_perkara]"; ?>"><?php echo "$data[nama_perkara]"; } ?></option>
                    
                  </select></td>
						
					</tr>
					<tr>
						<td>Tanggal:</td>
						<td><input type="date" name="tgltxt" required /></td>
					</tr>
					<tr>
						<td>Nomor PN</td>
						<td><input class="input" type="text" name="nopntxt" maxlength="200" placeholder="NO PN.." required /></td>
					</tr>
					<tr>
						<td>Nomor PT</td>
						<td><input class="input" type="text" name="nopttxt" maxlength="50" placeholder="NO PT.." required /></td>
					</tr>
					<tr>
						<td>Lemari</td>
						<td>
							 <select name="lemarilist" id="lemarilist">
                    
					<?php
					require ("../koneksi.php");
					$perintah="select * from tbl_lemari order by lemari asc";
					$hasil=mysql_query($perintah);
					if ($hasil === FALSE) {
					die (mysql_error());
					}
					while ($data = mysql_fetch_array($hasil))
					{
					?>
					<option value="<?php echo "$data[kd_lemari]"; ?>"><?php echo "$data[lemari]"; } ?></option>
                    
                  </select>
						</td>
					</tr>
					<tr>
						<td>Rak</td>
						<td>
							 <select name="raklist" id="raklist">
                    
					<?php
					require ("../koneksi.php");
					$perintah="select * from tbl_rak order by rak asc";
					$hasil=mysql_query($perintah);
					if ($hasil === FALSE) {
					die (mysql_error());
					}
					while ($data = mysql_fetch_array($hasil))
					{
					?>
					<option value="<?php echo "$data[kd_rak]"; ?>"><?php echo "$data[rak]"; } ?></option>
                    
                  </select>
						</td>
					</tr>
					
					<tr>
						<td>Box</td>
						<td>
							 <select name="boxlist" id="boxlist">
                    
					<?php
					require ("../koneksi.php");
					$perintah="select * from tbl_box order by box asc";
					$hasil=mysql_query($perintah);
					if ($hasil === FALSE) {
					die (mysql_error());
					}
					while ($data = mysql_fetch_array($hasil))
					{
					?>
					<option value="<?php echo "$data[id_boxperkara]"; ?>"><?php echo "$data[box]"; } ?></option>
                    
                  </select>
						</td>
					</tr>
					<tr>
						<td>Upload File</td>
						<td>
							<input type="file" name="file"> 
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							
						</td>
					</tr>
					
					<tr>
						<td colspan="2"><input class="inputsubmit" type="submit" name="perkaratambah" value="Submit">
						    <input class="inputclear" type="reset" value="Clear Data"></td>
					</tr>
				</table>
			</div>
		</div>
		</form>
		