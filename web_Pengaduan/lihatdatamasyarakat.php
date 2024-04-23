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
		<h3>Data Masyarakat</h3>
<button class="print" onclick="PrintDoc()"><img src="img/print.png">Print Data</button>
<button class="print" onclick="PrintPreview()"><img src="img/preview.png">Print Preview</button>
<table id="tabel"  border="1" cellpadding="0" >
	<tr>
		<th style="width: 100px;">NIK</th>
		<th style="width: 100px;">Nama</th>
		<th style="width: 100px;">Username</th>
		<th style="width: 100px;">Password</th>
		<th>Nomor Telepon</th>
	</tr>
	<?php include('koneksi/conn.php'); 
	$sql = "SELECT * FROM tbl_masyarakat ORDER BY no_nik ASC"; 
	$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
	$no=1;
	while ($data = mysqli_fetch_array ($hasil)){
		$no_nik=$data['no_nik'];
		$nama=$data['nama'];
		$username=$data['username'];
		$password=$data['password'];
		$telepon=$data['telepon'];
		


		?>
		<tr>

			<td><center><?php echo $no_nik;?></center></td>
			<td><center><?php echo $nama; ?></center></td>
			<td><center><?php echo $username; ?></center></td>
			<td><center><?php echo $password; ?></center></td>
			<td><center><?php echo $telepon; ?></center></td>
			
		</tr>
		<?php } ?>
	</table>
</div>
</div>
<?php include('template/footer.php'); ?>