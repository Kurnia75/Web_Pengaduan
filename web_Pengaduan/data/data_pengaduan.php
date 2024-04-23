<table id="tabel"  border="1" cellpadding="3" >
	<tr>
		<th style="width: 20px;">No Pemgaduan</th>
		<th style="width: 100px;">Tanggal Pengaduan</th>
		<th style="width: 100px;">NIK</th>
		<th style="width: 100px;">Isi Laporan</th>
		<th style="width: 100px;">Foto</th>
		<th style="width: 100px;">Status</th>
		<th style="width: 40px;">Delete</th>
		<th style="width: 40px;">Edit</th>
	</tr>
	<?php include('koneksi/conn.php'); 
	$sql = "SELECT * FROM tbl_pengaduan ORDER BY no_pengaduan ASC"; 
	$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
	$no=1;
	while ($data = mysqli_fetch_array ($hasil)){


$no_pengaduan=$data['no_pengaduan'];
$tanggal_pengaduan=$data['tanggal_pengaduan'];
$no_nik=$data['no_nik'];
$isi_laporan=$data['isi_laporan'];
$foto=$data['foto'];
$status=$data['status'];


		?>
		<tr>


			<td><center><?php echo $no_pengaduan;?></center></td>
			<td><center><?php echo $tanggal_pengaduan; ?></center></td>
			<td><center><?php echo $no_nik; ?></center></td>
			<td><center><?php echo $isi_laporan; ?></center></td>
			<td><center><img src="foto/<?php echo $foto; ?>" width="40" height="40"></center></td>
			<td><center><?php echo $status; ?></center></td>
			<td class="delete">
				<a href="deletepengaduan.php?id=<?php echo $no_pengaduan ?>" onclick="return confirm('Apakah anda yakin?')" class="btn-aksi"> <img src="img/delete.png" alt="Delete Data"></a>
			</td>
			<td class="edit">
				<a href="editpengaduan.php?id=<?php echo $tanggal_pengaduan?>" class="btn-aksi"><img src="img/edit.png" alt="Edit Dasta"></a>
			</td>
			
		</tr>
		<?php } ?>
	</table>
