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
		<h3>Data Pengaduan</h3>
		<button class="print" onclick="PrintDoc()"><img src="img/print.png">Print Data</button>
<button class="print" onclick="PrintPreview()"><img src="img/preview.png">Print Preview</button>

		<table id="tabel"  border="1" cellpadding="0" >
			<tr>
		<th><center< style="width: 100px;">No Pemgaduan </center></th>
		<th><center< style="width: 100px;">Tanggal Pengaduan </center></th>
		<th><center< style="width: 100px;">NIK </center></th>
		<th><center< style="width: 100px;">Isi Laporan </center></th>
		<th><center< style="width: 100px;">Foto </center></th>
		<th><center< style="width: 100px;">Status</center></th>

			</tr>
<?php include('koneksi/conn.php'); 
	$sql = "SELECT * FROM tbl_pengaduan ORDER BY no_pengaduan ASC"; 
	$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
	$no=1;
	while ($data = mysqli_fetch_array ($hasil)){


$no_pengaduan=$data['no_pengaduan'];
$tanggal_pengaduan=$data['tanggal_pengaduan'];
$nik=$data['nik'];
$isi_laporan=$data['isi_laporan'];
$foto=$data['foto'];
$status=$data['status'];

				?>
				<tr>

					
			<td><center><?php echo $no_pengaduan;?></center></td>
			<td><center><?php echo $tanggal_pengaduan; ?></center></td>
			<td><center><?php echo $nik; ?></center></td>
			<td><center><?php echo $isi_laporan; ?></center></td>
			<td><center><img src="foto/<?php echo $foto; ?>" width="40" height="40"></center></td>
			<td><center><?php echo $status; ?></center></td>
				</tr>
				<?php } ?>
			</table>
		</div>
	</div>
	<?php include('template/footer.php'); ?>