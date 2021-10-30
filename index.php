<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="../img/favicon.png">
	<title> Data Perkara </title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/mobile.css">
	<link rel="stylesheet" href="css/slider.css">
	<link rel="stylesheet" href="css/icon/icon.css">
	
</head>
<body>
	<div id="container">
		<div id="header">
			<div id="head">
				<div class="slideshow-container">
					<div class="mySlides fade">
					  <div class="numbertext">1 / 3</div>
					  <img src="img/4.jpg" style="width:100%; height:375px;">
					 
					</div>

					<div class="mySlides fade">
					  <div class="numbertext">2 / 3</div>
					  <img src="img/8.jpg" style="width:100%; height:375px;">
					</div>

					<div class="mySlides fade">
					  <div class="numbertext">3 / 3</div>
					  <img src="img/1.jpg" style="width:100%; height:375px;">
					  
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
						<li><a href="index.php"><i class="fa-home"></i> Home</a></li>
						<li><a href="index.php?page=kontak"><i class="fa-address-book"></i> Contact</a></li>
						<li><a href="index.php?page=about"><i class="fa-info-circle"></i> About</a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div id="left">
			<div id="sidebar">
				<div id="sidebar-title"><span><i class="fa-hand-o-right"></i> Masuk</span></div>
				<div id="sidebar-login">
					<form method="POST" action="login.php" accept-charset="UTF-8">
						<input type="text" name="username" autocomplete="off" placeholder="Username" required /><br>
						<input type="password" name="password" placeholder="Password" required /><br>
						<input type="submit" value="Login">
					</form>
				</div>
			</div>
			<div id="sidebar">
				<div id="sidebar-title"><span><i class="fa-bars"></i>Data Perkara</span></div>
				<div id="sidebar-list">
				<a href="index.php?page=perdata"><i class="fa fa-arrow-right"></i>Perdata</a>
					<a href="index.php?page=pidana"><i class="fa fa-arrow-right"></i>Pidana</a>
					<a href="index.php?page=tipikor"><i class="fa fa-arrow-right"></i>Tipikor</a>
					
				</div>
			</div>
			
		</div>
		
		<div id="center">
					<?php 
				if(isset($_GET['page'])){
					$page = $_GET['page'];
			 
					switch ($page) {
						case 'home':
							include "page/home.php";
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
						case 'visimisi':
							include "page/visimisi.php";
							break;
						case 'tugasfungsi':
							include "page/tugasfungsi.php";
							break;
						case 'struktur':
							include "page/struktur.php";
							break;
						case 'map':
							include "page/map.php";
							break;
						case 'kontak':
							include "page/kontak.php";
							break;
							
						case 'about':
							include "page/about.php";
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
        <div id="right">
			<div id="sidebar">
				<div id="sidebar-title"><span><i class="fa-bars"></i> Profil Lembaga</span></div>
				<div id="sidebar-list">
				<a href="index.php?page=visimisi"><i class="fa fa-arrow-right"></i>Visi dan Misi</a>
					<a href="index.php?page=tugasfungsi"><i class="fa fa-arrow-right"></i>Tugas Pokok dan Fungsi</a>
					<a href="index.php?page=struktur"><i class="fa fa-arrow-right"></i>Struktur Organisasi</a>
					<a href="index.php?page=map"><i class="fa fa-arrow-right"></i>Peta Lokasi Kantor</a>
					
					
				</div>
			</div>
			<div id="sidebar">
				<div id="sidebar-title"><span><i class="fa-bars"></i> Web Link</span></div>
				<div id="sidebar-list">
				<a href="http://www.pn-manado.go.id/"><i class="fa fa-arrow-right"></i>PN Manado</a>
					<a href="http://www.pn-airmadidi.go.id/"><i class="
					fa fa-arrow-right"></i>PN Airmadidi</a>
					<a href="http://www.pn-bitung.go.id/"><i class="fa fa-arrow-right"></i>PN Bitung</a>
					<a href="http://www.pn-amurang.go.id/"><i class="fa fa-arrow-right"></i>PN Amurang</a>
					<a href="http://www.pn-tondano.go.id/"><i class="fa fa-arrow-right"></i>PN Tondano</a>
					<a href="#"><i class="fa fa-arrow-right"></i>PN Kotamobagu</a>
					<a href="http://www.pn-tahuna.go.id/"><i class="fa fa-arrow-right"></i>PN Tahuna</a>
					
				</div>
				</div>
			</div>
		
		
		<div id="footer">
			
		</div>
	</div>
</body>
</html>