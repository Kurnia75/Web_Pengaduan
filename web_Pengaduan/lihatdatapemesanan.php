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
		<h3>Data Pemesanan</h3>
<button class="print" onclick="PrintDoc()"><img src="img/print.png">Print Data</button>
<button class="print" onclick="PrintPreview()"><img src="img/preview.png">Print Preview</button>
<table id="tabel"  border="1" cellpadding="30" >
	<tr>
		<th >No Pemesanan</th>
		<th >Kode Pemesanan</th>
		<th >Tanggal Pemesanan</th>
		<th >Tempat Pemesanan</th>
		<th>Id Pelanggan</th>
		<th>Kode Kursi</th>
		<th >Id Rute</th>
		<th >Tujuan</th>
		<th >Tanggal Berangkat</th>
		<th >Jam Cekin</th>
		<th >Jam Berangkat</th>
		<th >Total Bayar</th>
		<th >Id Tugas</th>
		<th >Delete</th>
		<th >Edit</th>
	</tr>
	<?php include('koneksi/conn.php'); 
	$sql = "SELECT * FROM tbl_pemesanan ORDER BY no_pemesanan ASC"; 
	$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
	$no=1;
	while ($data = mysqli_fetch_array ($hasil)){
	
$no_pemesanan=$data['no_pemesanan'];
$kode_pemesanan=$data['kode_pemesanan'];
$tanggal_pemesanan=date('Y-m-d', strtotime($data['tanggal_pemesanan']));
$tempat_pemesanan=$data['tempat_pemesanan'];
$id_pelanggan=$data['id_pelanggan'];
$kode_kursi=$data['kode_kursi'];
$id_rute=$data['id_rute'];
$tujuan=$data['tujuan'];
$tanggal_berangkat=date('Y-m-d', strtotime($data['tanggal_berangkat']));
$jam_cekin=$data['jam_cekin'];
$jam_berangkat=$data['jam_berangkat'];
$total_bayar=$data['total_bayar'];
$id_tugas=$data['id_tugas'];

		?>
		<tr>

			<td><?php echo $no_pemesanan;?></td>
			<td><?php echo $kode_pemesanan; ?></td>
			<td><?php echo $tanggal_pemesanan; ?></td>
			<td><?php echo $tempat_pemesanan; ?></td>
			<td><?php echo $id_pelanggan; ?></td>
			<td><?php echo $kode_kursi; ?></td>
			<td><?php echo $id_rute; ?></td>
			<td><?php echo $tujuan;?></td>
			<td><?php echo $tanggal_berangkat; ?></td>
			<td><?php echo $jam_cekin; ?></td>
			<td><?php echo $jam_berangkat; ?></td>
			<td><?php echo $total_bayar; ?></td>
			<td><?php echo $id_tugas; ?></td>
			
		</tr>
		<?php } ?>
	</table>
</div>
</div>
<?php include('template/footer.php'); ?>