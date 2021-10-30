	
		<div id="content">
			<div id="page">Laporan Berkas Perkara Perdata</div>
		</div>
		
		<div id="content">
			<div id="view-table">
				
				<br><form action="index.php?page=laporanperdata" method="post" >
				 
			<table>
				<tr>
					<td width="15%"> <label>Tanggal Awal:</label> </td>
					<td width="20%"> <i class="fa fa-calendar"></i>
						<input name="dateawal" type="date" class="form-control pull-right"></td>
					<td> - </td>
					<td width="15%"> <label>Tanggal Akhir:</label></td>
					<td> <i class="fa fa-calendar"></i>
						<input name="dateakhir" type="date" class="form-control pull-right"></td>
				</tr>
                
			<tr>
			<td colspan="5">
				<button type="submit" class="btn btn-info pull-right" name="laporanhasil">Submit</button></td>
            </tr>        
                
			</table>
          </form>
		  </div>
		  </div>
            <div id="content">
              <div id="view-table">
              <table id="table" >
                <tr>
                  <th>Perkara</th>
                  <th>Tanggal</th>
                  <th>Nomor PN</th>
                  <th>Nomor PT</th>
                  <th>Lemari</th>
				  <th>Row</th>
				  <th>Box</th>
				  <th>Klasifikasi</th>
                </tr>
                
				<?php 
				if (isset ($_POST['laporanhasil'])) {
					$awal = $_POST['dateawal'];
					$akhir = $_POST['dateakhir'];
					
				require ("../koneksi.php");
				$query = "select tbl_arsipperkara.kode_perkara, tbl_arsipperkara.tanggal,  tbl_arsipperkara.no_pn, tbl_arsipperkara.no_pt, tbl_perkara.nama_perkara, tbl_lemari.lemari, tbl_rak.rak, tbl_box.box, tbl_box.klasifikasi
				from ((((tbl_arsipperkara 
				inner join tbl_lemari on tbl_arsipperkara.kd_lemari = tbl_lemari.kd_lemari)
				inner join tbl_rak on tbl_arsipperkara.kd_rak = tbl_rak.kd_rak)
				inner join tbl_box on tbl_arsipperkara.id_boxperkara = tbl_box.id_boxperkara)
				inner join tbl_perkara on tbl_arsipperkara.id_perkara = tbl_perkara.id_perkara) where tanggal between '$awal' and '$akhir' && nama_perkara = 'perdata'";
				$hasil = mysql_query($query);
				if ($hasil === FALSE) {
				die (mysql_error());
				}
				while ($data = mysql_fetch_array($hasil))
				echo"
				
				<tr>
				  <td>".$data['nama_perkara']."</td>
				  <td>".$data['tanggal']."</td>
				  <td>".$data['no_pn']."</td>
                  <td>".$data['no_pt']."</td>
                  <td>".$data['lemari']."</td>
                  <td>".$data['rak']."</td>
				  <td>".$data['box']."</td>
				  <td>".$data['klasifikasi']."</td>
				  
                </tr>
                ";}
				?>
                
              </table>
            </div>

					</div>
			
			</div>
			
			