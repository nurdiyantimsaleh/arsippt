		<?php include('akses.php'); ?>
		<div id="content">
			<div id="page">Form Lemari</div>
		</div>
		<div id="content">
			<div id="view-table-top">
				<a href="" onclick="window.history.back();" class="aback"><i class="fa-backward"></i> Kembali </a>
			</div>
		</div>
		<form action="index.php?page=lemaritambahproses" method="post">
		<div id="content">
			<div id="view-table">
				
				<table >
					<tr>
						<td>Kode Lemari</td>
					</tr>
					<tr>
						<td>
							 <input class="input" type="text" name="kdtxt" maxlength="200" required />
						</td>
					</tr>
					<tr>
						<td>Lemari:</td>
					</tr>
					<tr>
						<td><input class="input" type="text" name="lemaritxt" maxlength="200" required /></td>
					</tr>
					
					<tr>
						<td><input class="inputsubmit" type="submit" name="lemaritambah" value="Submit">
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
                  <th>Lemari</th>
                  <th style="width: 40px"></th>
                </tr>
				
				
				
                <?php 
				require("../koneksi.php");
				$query = "select * from tbl_lemari order by lemari asc";
				$hasil = mysql_query($query);
				if ($hasil === FALSE) {
				die (mysql_error());
				}
				while ($data = mysql_fetch_array($hasil))
				{
				echo "<tr>
                  <td>".$data['kd_lemari'].".</td>
                  <td>".$data['lemari']."</td>
                  <td></td>
                </tr>";
				}
				?>
              </table>
			</div>
		</div>