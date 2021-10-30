<!DOCTYPE html>
<html>
<title>DPMPTSP</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">

<!-- Sidebar on click -->
<nav class="w3-sidebar w3-bar-block w3-white w3-card-2 w3-animate-left w3-xxlarge" style="display:none;z-index:2" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-display-topright w3-text-teal">Close
    <i class="fa fa-remove"></i>
  </a>
  <a href="#" class="w3-bar-item w3-button">Link 1</a>
  <a href="#" class="w3-bar-item w3-button">Link 2</a>
  <a href="#" class="w3-bar-item w3-button">Link 3</a>
  <a href="#" class="w3-bar-item w3-button">Link 4</a>
  <a href="#" class="w3-bar-item w3-button">Link 5</a>
</nav>

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-teal"><i class="fa fa-home w3-margin-right"></i>Home</a>
  <a href="mekanisme.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Mekanisme</a>
  <a href="formulir.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Formulir</a>
  <a href="investasi.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Investasi</a>
  <a href="data.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">data</a>
  <a href="data1.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Daftar Pengguna yang ba urus</a>
    <div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">Izin <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="perizinan.php" class="w3-bar-item w3-button">Sektor Perizinan</a>
      <a href="pm.php" class="w3-bar-item w3-button">Sektor Penanaman Modal</a>
    </div>

  </div>
  <a href="admin/index.php" class="w3-bar-item w3-button w3-hide-small w3-hover-white">Admin</a>
 </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-theme-d2 w3-hide w3-hide-large w3-hide-medium">
    <a href="#team" class="w3-bar-item w3-button">Mekanisme</a>
    <a href="#work" class="w3-bar-item w3-button">Formulir</a>
    <a href="#pricing" class="w3-bar-item w3-button">....</a>
    <a href="#contact" class="w3-bar-item w3-button">Contact</a>
  </div>
</div>

<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
  <img src="header2.JPG" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Go To W3.CSS">PROFIL DPMPTSP</button>
  </div>
</div>

<!-- Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-top">
    <header class="w3-container w3-teal w3-display-container"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
      <h4><img src="http://sunrisegroupmalaysia.com/wp-content/uploads/2015/04/companyProfileMain.jpg" alt="boat" style="width:864px;height:232px;"></h4>
    </header>
    <div class="w3-container">
      <p>Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kota Bitung merupakan salah satu perangkat daerah yang dibentuk berdasarkan Peraturan Daerah Kota Bitung Nomor 20 Tahun 2008 sebagaimana telah diubah dengan Peraturan Daerah Kota Bitung Nomor 13 Tahun 2009 kemudian dicabut dengan Peraturan Daerah Kota Bitung Nomor 12 Tahun 2012 tentang Organisasi dan Tata Kerja Inspektorat, Badan Perencanaan Pembangunan Daerah, Lembaga Teknis dan Lembaga lainnya dan dijabarkan lebih lanjut dalam Peraturan Walikota Bitung Nomor 45 Tahun 2008 yang telah dicabut dengan Peraturan Walikota Bitung Nomor 43 Tahun 2012 tentang Rincian Tugas dan Tata Kerja Badan Pelayanan Perizinan Terpadu dan Penanaman Modal Daerah Kota Bitung . Sebagai unsur pendukung Kepala Daerah dibidang Pelayanan Perizinan Terpadu dan Penanaman Modal Daerah mempunyai tugas untuk melaksanakan penyusunan dan pelaksanaan kebijakan daerah dibidang pelayanan perizinan dan penanaman modal daerah .</p>
    </div>
    <footer class="w3-container w3-teal">
      <p><strong>Copyright &copy; 2017</strong></p>
    </footer>
  </div>
</div>



<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Contact Us</span></div>
      <h3>Address</h3>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>&nbsp; Jl.DR.Sam Ratulangi No.45 (komp. Kantor Walikota) <br> &nbsp; &nbsp; Kel. Bitung Barat, Kec. Maesa, Bitung</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>  043821425</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>  ptspbitung@gmail.com</p>
    </div>
    <div class="w3-col m7">
	<h3 style="color:#009688;">PENGADUAN</h3>	
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="" method = "post">
      <div class="w3-section">   
        <label for="fname">Nama Lengkap</label>
        <input class="w3-input" type="text" id="fname" name="nama_dpn" placeholder="nama lengkap" required>
      </div>
      <div class="w3-section">      
        <label for="lname">Email</label>
        <input class="w3-input" type="text" id="lname" name="nama_blkg" placeholder="email anda" required>
      </div>
      <div class="w3-section">      
        <label for="subjek">Subjek</label>
        <input class="w3-input" type="text" id="subjek" name="subjek" placeholder="judul pesan.." required>
      </div>  
	  <div class="w3-section">      
       <label for="pesan">Pesan</label>
        <textarea class="w3-input" id="pesan" name="pesan" placeholder="Write something.." style="height:200px" required></textarea>
      </div> 
      <button type="submit" class="w3-button w3-right w3-theme" name="tambahp">Send</button>
      </form>
    </div>
  </div>
</div>
<?php
if(isset($_POST['tambahp'])){
	include('koneksi.php');
	
	$nama_dpn = $_POST['nama_dpn'];
	$nama_blkg = $_POST['nama_blkg'];
	$subjek	= $_POST['subjek'];
	$pesan	= $_POST['pesan'];
	
	$sqlc = "INSERT INTO tbl_pengaduan VALUES ('','$nama_dpn','$nama_blkg','$subjek','$pesan')";
	$resultc = mysql_query($sqlc);	
	
	if ($resultc) {
		echo '<script language="javascript">alert("Terima Kasih, Pesan Sudah Terkirim!"); document.location="temp.php";</script>';
	}else{
		echo '<script language="javascript">alert("Gagal Di Masukan!"); document.location="temp.php";</script>';
	}
}
?>
<!-- Google Maps -->
<div id="map" style="width:100%;height:500px"></div>

<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var myCenter = new google.maps.LatLng(1.445441,125.183644);
  var mapOptions = {center: myCenter, zoom: 15};
  var map = new google.maps.Map(mapCanvas,mapOptions);
  var marker = new google.maps.Marker({
    position: myCenter,
    animation: google.maps.Animation.BOUNCE
  });
  marker.setMap(map);
}
</script>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA9n8-C0m9HWMgO9A5dsKDaW4bSUEW1Bgs&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->
<script>
// Script for side navigation
function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "300px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}

// Close side navigation
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>