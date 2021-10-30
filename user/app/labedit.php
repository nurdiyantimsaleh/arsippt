		<?php include('akses.php'); ?>
		<div id="content">
			<div id="page">Labolatorium</div>
		</div>
		<div id="content">
			<div id="view-table-top">
				<a href="" onclick="window.history.back();" class="aadd"><i class="fa-backward"></i> Kembali </a>
			</div>
		</div>
		<?php
		include('../koneksi.php');
		$idlab = $_GET['id'];
		$show = mysql_query("SELECT * FROM tbl_lab WHERE id_lab='$idlab'");
		$data = mysql_fetch_assoc($show);
		?>
		<form action="index.php?app=proses" method="post">
		<div id="content">
			<div id="view-table">
				<input type="hidden" name="id_lab" value="<?php echo $idlab; ?>">
				<table>
					<tr>
						<td>Nama Lab</td>
					</tr>
					<tr>
						<td><input class="input" type="text" name="nama_lab" maxlength="50" value="<?php echo $data['nama_lab']; ?>" required /></td>
					</tr>
					<tr>
						<td>Jenis Uji</td>
					</tr>
					<tr>
						<td><input class="input" type="text" name="nama_jenis_uji" maxlength="50" value="<?php echo $data['nama_jenis_uji']; ?>" required /></td>
					</tr>
					<tr>
						<td></td>
					</tr>
					<tr>
						<td><input class="inputsubmit" type="submit" name="labedit" value="Submit">
						    <input class="inputclear" type="reset" value="Clear Data"></td>
					</tr>
				</table>
			</div>
		</div>
		</form>
		