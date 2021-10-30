

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Data Perkara </title>
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/mobile.css">
	<link rel="stylesheet" href="../css/slider.css">
	<link rel="stylesheet" href="../css/icon/icon.css">
	<link rel="stylesheet" href="../css/jquery.dataTables.min.css">
</head>
<body>
	<div id="container">
		<div id="header">
			<div id="head">
				<div class="slideshow-container">
					<div class="mySlides fade">
					  <div class="numbertext">1 / 3</div>
					  <img src="../img/4.jpg" style="width:100%; height:375px;">
					</div>

					<div class="mySlides fade">
					  <div class="numbertext">2 / 3</div>
					  <img src="../img/2.jpg" style="width:100%; height:375px;">
					</div>

					<div class="mySlides fade">
					  <div class="numbertext">3 / 3</div>
					  <img src="../img/1.jpg" style="width:100%; height:375px;">
					</div>

					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>
					
					<div class="dotclick">
					<span class="dot" onclick="currentSlide(1)"></span> 
					<span class="dot" onclick="currentSlide(2)"></span> 
					<span class="dot" onclick="currentSlide(3)"></span> 
					</div>

				</div>
				<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
				
				<div id="menu-header">
					<ul>
						<li><a href="index.php"><i class="fa-home"></i> Data Perkara</a></li>
						<li class="dropdown">
							<a href="index.php?page=laporanperkara" class="dropbtn"><i class="fa-tags" style="padding-right: 5px;"></i>Laporan Perkara</a>
							<div class="dropdown-content">
							<a href="index.php?page=laporanperdata" class="dropbtn"><i class="fa-tags" style="padding-right: 5px;"></i>Laporan Perdata</a>
							<a href="index.php?page=laporanpidana" class="dropbtn"><i class="fa-tags" style="padding-right: 5px;"></i>Laporan Pidana</a>
							<a href="index.php?page=laporantipikor" class="dropbtn"><i class="fa-tags" style="padding-right: 5px;"></i>Laporan Tipikor</a></div>
							
						</li>
						
						<li><a href="logout.php"><i class="fa-info-circle"></i> Logout</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div id="left">
			<div id="sidebar">
				<div id="sidebar-title"><span><i class="fa-bars"></i> Perkara</span></div>
				<div id="sidebar-list">
				<a href="index.php?page=perdata"><i class="fa fa-arrow-right"></i>Perdata</a>
					<a href="index.php?page=pidana"><i class="
				fa fa-arrow-right"></i>Pidana</a>
					<a href="index.php?page=tipikor"><i class="fa fa-arrow-right"></i>Tipikor</a>
					
				</div>
			</div>
			<div id="sidebar">
				<div id="sidebar-title"><span><i class="fa-bars"></i> Setting</span></div>
				<div id="sidebar-list">
				<a href="index.php?page=lemaritambah"><i class="fa fa-arrow-right"></i>Lemari</a>
					<a href="index.php?page=raktambah"><i class="
					fa fa-arrow-right"></i>Rak</a>
					<a href="index.php?page=boxtambah"><i class="fa fa-arrow-right"></i>Box</a>
					
				</div>
				</div>
		</div>
		
		<div id="full">
					<?php 
				if(isset($_GET['page'])){
					$page = $_GET['page'];
			 
					switch ($page) {
						case 'home':
							include "page/home.php";
							break;
						case 'homecari':
							include "page/homecari.php";
							break;
						case 'perdata':
							include "page/perdata.php";
							break;
						case 'pidana':
							include "page/pidana.php";
							break;
						case 'tipikor':
							include "page/tipikor.php";
							break;
						case 'perkaratambah':
							include "page/perkaratambah.php";
							break;
						case 'perkaratambahproses':
							include "page/perkaratambahproses.php";
							break;
						case 'perkaraedit':
							include "page/perkaraedit.php";
							break;	
						case 'perkaraeditproses':
							include "page/perkaraeditproses.php";
							break;	
						case 'perkarahapus':
							include "page/perkarahapus.php";
							break;
						case 'lemaritambah':
							include "page/lemaritambah.php";
							break;
						case 'lemaritambahproses':
							include "page/lemaritambahproses.php";
							break;
						case 'raktambah':
							include "page/raktambah.php";
							break;
						case 'raktambahproses':
							include "page/raktambahproses.php";
							break;
						case 'boxtambah':
							include "page/boxtambah.php";
							break;
						case 'boxtambahproses':
							include "page/boxtambahproses.php";
							break;
						case 'laporanperkara':
							include "page/laporanperkara.php";
							break;
						case 'laporanperdata':
							include "page/laporanperdata.php";
							break;
						case 'laporanpidana':
							include "page/laporanpidana.php";
							break;
						case 'laporantipikor':
							include "page/laporantipikor.php";
							break;
							
						default:
							echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
							break;
					}
				}else{
					include "page/home.php";
				}
			?>
			</div>
        
		
		
		
	</div>
</body>
</html>