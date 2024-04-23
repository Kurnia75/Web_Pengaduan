<?php 
session_start();
if(isset($_SESSION["username"])){
}else{
	echo header("location:login.php");
	
}
include('template/top.php');
include('template/navigasi.php');

?>

<div id="main">
	<div class="content">
		<marquee style="background: #07A0DC; padding:5px; color: #fff;">Selamat Datang di Aplikasi Pelaporan Pengaduan Masyarakat</marquee>
		<div id="profile">
			<img src="img/2.jpg" alt="" class="animated flipInY">
			<center>
				<h2>PELAPORAN PENGADUAN MASYARAKAT</h2>
				<hr/>
			</center>

<h4>Pengaduan adalah laporan yang mengandung informasi atau indikasi  terjadinya penyalahgunaan wewenang, penyimpangan atau pelanggaran  perilaku yang dilakukan oleh aparat pengadilan, yang berasal dari masyarakat</h4>

		</div>
		<hr>

		<br >
		<br >
		<br >
		
<h3><font color="blue"><center>Copyright © 2020 Fitria Sa'adah</a></center></font></h3>

	</div>
</div>


<?php include('template/footer.php'); ?>