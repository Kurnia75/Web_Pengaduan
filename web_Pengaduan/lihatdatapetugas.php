<?php 
include('template/top.php');
include('template/navigasi.php');
 if(!isset($_SESSION)){
 	session_start();
 }
 if (empty($_SESSION['username'])) {
 	header('Location:login.php');
 }
?>
<div id="main">
	<div class="content">
		<h3>Data Petugas</h3>
	<button class="print" onclick="PrintDoc()"><img src="img/print.png">Print Data</button>
<button class="print" onclick="PrintPreview()"><img src="img/preview.png">Print Preview</button>

		<table id="tabel"  border="1" cellpadding="3" >
			<tr>
					<th style="width: 20px;">ID Petugas</th>
		<th style="width: 50px;">Nama Petugas</th>
		<th style="width: 60px;">Username</th>
		<th style="width: 100px;">Password</th>
		<th style="width: 60px;">Telepon</th>
		<th style="width: 20px;">Level</th>

			</tr>
			<?php include('koneksi/conn.php'); 
			$sql = "SELECT * FROM tbl_petugas ORDER BY id_petugas ASC"; 
			$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
			$no=1;
			while ($data = mysqli_fetch_array ($hasil)){
					$id_petugas=$data['id_petugas'];
$nama_petugas=$data['nama_petugas'];
$username=$data['username'];
$password=$data['password'];
$telepon=$data['telepon'];
$level=$data['level'];
		?>
		<tr>

	
			<td><center><?php echo $data['id_petugas'];?></center></td>
			<td><center><?php echo $data['nama_petugas']; ?></center></td>
			<td><center><?php echo $data['username']; ?></center></td>
			<td><center><?php echo $data['password']; ?></center></td>
			<td><center><?php echo $data['telepon']; ?></center></td>
			<td><center><?php echo $data['level']; ?></center></td>

				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
	<?php include('template/footer.php'); ?>