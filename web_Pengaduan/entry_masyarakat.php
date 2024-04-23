<?php 
include('koneksi/conn.php');
include('template/top.php');
include('template/navigasi.php');
$no = 1;
$sql = "SELECT * FROM tbl_masyarakat ORDER BY no_nik DESC limit 0,1"; 
$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
 if(!isset($_SESSION)){
 	session_start();
 }
 if (empty($_SESSION['username'])) {
 	header('Location:login.php');
 }

?>


<div id="main">
	<div class="content">
		<h3>Entry Masyarakat</h3>
		<form action="insertmasyarakat.php" method="POST" enctype="multipart/form-data">
			<div class="input-group">
				<input type="text" placeholder="No NIK" name="no_nik">
			</div>
			<div class="input-group">
				<input type="text" placeholder="Nama" name="nama">
			</div>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username">
			</div>
			<div class="input-group">
				<input type="text" placeholder="Password" name="password">
			</div>
				
				<div class="input-group">
				<input type="text" placeholder="Nomor Telepon" name="telepon">
			</div>
				<div class="input-group">
					<button type="submit" class="btn">Kirim</button>
					<button type="reset" class="btn">Hapus</button>
				</div>

			</form>
			<hr/>
			<h3>Data Masyarakat</h3>
			<?php include('data/data_masyarakat.php') ?>
		</div>
	</div>
		<hr>

		<br >
		<br >
		<br >
		
<h3><font color="blue"><center>Copyright © 2020 Fitria Sa'adah</a></center></font></h3>

	</div>
</div>s
	<?php include('template/footer.php'); ?>
