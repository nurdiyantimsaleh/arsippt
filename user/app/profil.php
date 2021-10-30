		<?php include('akses.php'); ?>
		<div id="content">
			<div id="page">Profil BTKLPP Manado</div>
		</div>
		<?php
		include('../koneksi.php');
		$show = mysql_query("SELECT * FROM tbl_login where username='$_SESSION[username]'");
		$data = mysql_fetch_assoc($show);
		?>
		<form action="index.php?app=proses" method="post">
		<div id="content">
			<div id="view-table-nobtn">
				<input type="hidden" name="id_login" value="<?php echo $data['id_login'];; ?>">
				<table>
					<tr>
						<td>Username</td>
					</tr>
					<tr>
						<td><input class="input" type="text" name="username" maxlength="100" value="<?php echo $data['username']; ?>" required /></td>
					</tr>
					<tr>
						<td>Password</td>
					</tr>
					<tr>
						<td><input class="input" type="password" name="password" maxlength="100" required /></td>
					</tr>
					<tr>
						<td>No. Rek</td>
					</tr>
					<tr>
						<td><input class="input" type="text" name="no_rek" maxlength="200" value="<?php echo $data['no_rek']; ?>" required /></td>
					</tr>
					<tr>
						<td>alamat_btklpp</td>
					</tr>
					<tr>
						<td><input class="input" type="text" name="alamat_btklpp" maxlength="50" value="<?php echo $data['alamat_btklpp']; ?>" required /></td>
					</tr>
					<tr>
						<td></td>
					</tr>
					<tr>
						<td><input class="inputsubmit" type="submit" name="profiledit" value="Submit">
						    <input class="inputclear" type="reset" value="Clear Data"></td>
					</tr>
				</table>
			</div>
		</div>
		</form>
		