		<?php include('akses.php'); ?>
		<div id="content">
			<div id="page">Form Rak</div>
		</div>
		<div id="content">
			<div id="view-table-top">
				<a href="" onclick="window.history.back();" class="aback"><i class="fa-backward"></i> Kembali </a>
			</div>
		</div>
		<form action="index.php?page=raktambahproses" method="post">
		<div id="content">
			<div id="view-table">
				
				<table >
					<tr>
						<td>Kode Rak</td>
					</tr>
					<tr>
						<td>
							 <input class="input" type="text" name="raktxt" maxlength="200" required />
						</td>
					</tr>
					<tr>
						<td>Rak:</td>
					</tr>
					<tr>
						<td><input class="input" type="text" name="raktxt" maxlength="200" required /></td>
					</tr>

					
					<tr>
						<td><input class="inputsubmit" type="submit" name="raktambah" value="Submit">
						    <input class="inputclear" type="reset" value="Clear Data"></td>
					</tr>
				</table>
			</div>
		</div>
		</form>
		<div id="content">
			<div id="view-table">
				
							  <table id="table">
                <tr>
                  <th style="width: 10px">No.</th>
                  <th>Rak</th>
                  <th style="width: 40px"></th>
                </tr>
				
				
				
                <?php 
				require("../koneksi.php");
				$query = "select * from tbl_rak order by rak asc";
				$hasil = mysql_query($query);
				if ($hasil === FALSE) {
				die (mysql_error());
				}
				while ($data = mysql_fetch_array($hasil))
				{
				echo "<tr>
                  <td>".$data['kd_rak'].".</td>
                  <td>".$data['rak']."</td>
                  <td></td>
                </tr>";
				}
				?>
              </table>
			</div>
		</div>