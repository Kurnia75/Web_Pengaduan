<?php 
include('koneksi/conn.php');
include('template/top.php');
include('template/navigasi.php');
$no = 1;
$sql = "SELECT * FROM tbl_petugas ORDER BY id_petugas DESC limit 1"; 
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
		<h3>Entry Petugas</h3>
		<form action="insertpetugas.php" method="POST" enctype="multipart/form-data">
				<div class="input-group">
					<br>
				<h>ID Petugas</h>
				<div></div>
						<select name="id_petugas" id="id_petugas" style="width: 200px;">
					<option value="0">-Pilih ID Petugas -</option>
					<?php 
					$sql = "SELECT * FROM tbl_tanggapan ORDER BY id_petugas ASC"; 
					$hasil=mysqli_query($conn,$sql) or die(mysql_error());
					while($rows=mysqli_fetch_array($hasil)){
						echo "<option value='". $rows['id_petugas']."'>". $rows['id_petugas']."</option>"; 
					}
					?>
				</select>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Nama Petugas" name="nama_petugas">
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
					<select name="level" id="">
					<option value="">-Level-</option>
						<option value="Admin">Admin</option>
						<option value="Petugas">Petugas</option>
					</select>
				</div>
				<div class="input-group">
					<button type="submit" class="btn">Kirim</button>
					<button type="reset" class="btn">Hapus</button>
				</div>

			</form>
			<hr/>
			<h3>Data Petugas</h3>
			<?php include('data/data_petugas.php') ?>
		</div>
	</div>
	<br>
	<br>
	<br>

<h3><font color="blue"><center>Copyright © 2020 Fitria Sa'adah</a></center></font></h3>

	<?php include('template/footer.php'); ?>
	