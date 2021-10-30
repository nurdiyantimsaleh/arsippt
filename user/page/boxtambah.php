		<?php include('akses.php'); ?>
		<div id="content">
			<div id="page">Form Box</div>
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
						<td>Kode Box</td>
					</tr>
					<tr>
						<td>
							 <input class="input" type="text" name="kdtxt" maxlength="200" required />
						</td>
					</tr>
					<tr>
						<td>Box:</td>
					</tr>
					<tr>
						<td><input class="input" type="text" name="boxtxt" maxlength="200" required /></td>
					</tr>
					<tr>
						<td>Klasifikasi:</td>
					</tr>
					<tr>
						<td><input class="input" type="text" name="klasitxt" maxlength="200" required /></td>
					</tr>
					
					<tr>
						<td><input class="inputsubmit" type="submit" name="boxtambah" value="Submit">
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
                  <th>Box</th>
                  <th style="width: 40px">Klasifikasi</th>
                </tr>
				
				
				
                <?php 
				require("../koneksi.php");
				$query = "select * from tbl_box order by box asc";
				$hasil = mysql_query($query);
				if ($hasil === FALSE) {
				die (mysql_error());
				}
				while ($data = mysql_fetch_array($hasil))
				{
				echo "<tr>
                  <td>".$data['id_boxperkara'].".</td>
                  <td>".$data['box']."</td>
                  <td>".$data['klasifikasi']."</td>
                </tr>";
				}
				?>
              </table>
			</div>
		</div>