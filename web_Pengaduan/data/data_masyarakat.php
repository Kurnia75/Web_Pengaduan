<table id="tabel"  border="1" cellpadding="3" >
	<tr>
		<th style="width: 100px;">NIK</th>
		<th style="width: 100px;">Nama</th>
		<th style="width: 100px;">Username</th>
		<th style="width: 100px;">Password</th>
		<th style="width: 100px;">telepon</th>
		<th style="width: 100px;">Delete</th>
		<th style="width: 100px;">Edit</th>
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
			<th class="delete">
				<a href="deletemasyarakat.php?id=<?php echo $no_nik?>" onclick="return confirm('Apakah anda yakin?')" class="btn-aksi"> <img src="img/delete.png" alt="Delete Data"></a>
			</th>
			<th class="edit">
				<a href="editmasyarakat.php?id=<?php echo $nama?>" class="btn-aksi"><img src="img/edit.png" alt="Edit Dasta"></a>
			</th>
			
		</tr>
		<?php } ?>
	</table>
