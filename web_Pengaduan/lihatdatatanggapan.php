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
		<h3>Data Tanggapan</h3>
		<button class="print" onclick="PrintDoc()"><img src="img/print.png">Print Data</button>
<button class="print" onclick="PrintPreview()"><img src="img/preview.png">Print Preview</button>

		<table id="tabel"  border="1" cellpadding="3" >
			<tr>
		<th style="width: 20px;">ID Tanggapan</th>
		<th style="width: 50px;">ID Pengaduan</th>
		<th style="width: 100px;">Tanggal Tanggapan</th>
		<th style="width: 50px;">Tanggapan</th>
		<th style="width: 100px;">ID Petugas</th>

	</tr>
<?php include('koneksi/conn.php'); 
	$sql = "SELECT * FROM tbl_tanggapan ORDER BY no_tanggapan ASC"; 
	$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
	$no=1;
	while ($data = mysqli_fetch_array ($hasil)){


$no_tanggapan=$data['no_tanggapan'];
$no_pengaduan=$data['no_pengaduan'];
$tanggal_tanggapan=$data['tanggal_tanggapan'];
$tanggapan=$data['tanggapan'];
$id_petugas=$data['id_petugas'];
		?>
		<tr>

			
			<td><center><?php echo $data['no_tanggapan'];?></center></td>
			<td><center><?php echo $data['no_pengaduan']; ?></center></td>
			<td><center><?php echo $data['tanggal_tanggapan']; ?></center></td>
			<td><center><?php echo $data['tanggapan']; ?></center></td>
			<td><center><?php echo $data['id_petugas']; ?></center></td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
	<?php include('template/footer.php'); ?>