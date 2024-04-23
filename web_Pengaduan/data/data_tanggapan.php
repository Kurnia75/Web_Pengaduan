<table id="tabel"  border="1" cellpadding="3" >
	<tr>
		<th style="width: 20px;">ID Tanggapan</th>
		<th style="width: 50px;">ID Pengaduan</th>
		<th style="width: 100px;">Tanggal Tanggapan</th>
		<th style="width: 50px;">Tanggapan</th>
		<th style="width: 100px;">ID Petugas</th>

		<th style="width: 40px;">Delete</th>
		<th style="width: 40px;">Edit</th>
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
			<td class="delete">
				<a href="deletetanggapan.php?id=<?php echo $no_tanggapan ?>" onclick="return confirm('Apakah anda yakin?')" class="btn-aksi"> <img src="img/delete.png" alt="Delete Data"></a>
			</td>
			<td class="edit">
				<a href="edittanggapan.php?id=<?php echo $no_tanggapan?>" class="btn-aksi"><img src="img/edit.png" alt="Edit Data"></a>
			</td>
			
		</tr>
		<?php } ?>
	</table>
