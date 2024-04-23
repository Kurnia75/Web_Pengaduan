<?php 
include('koneksi/conn.php');
include('template/top.php');
include('template/navigasi.php');
$no = 1;
$sql = "SELECT * FROM tbl_tanggapan ORDER BY no_tanggapan DESC limit 1"; 
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
		<h3>Entry Tanggapan</h3>
		<form action="inserttanggapan.php" method="POST">
			<div class="input-group">
				<input type="text" placeholder="ID Tanggapan" name="no_tanggapan" >
			</div>
			
			<div class="input-group">
				<br>
				<h>ID Tanggapan</h>
				<div></div>
						<select name="no_pengaduan" id="no_pengaduan" style="width: 200px;">
					<option value="0">-Pilih Tanggapan-</option>
					<?php 
					$sql = "SELECT * FROM tbl_pengaduan ORDER BY no_pengaduan ASC"; 
					$hasil=mysqli_query($conn,$sql) or die(mysql_error());
					while($rows=mysqli_fetch_array($hasil)){
						echo "<option value='". $rows['no_pengaduan']."'>". $rows['no_pengaduan']."</option>"; 
					}
					?>
				</select>
			</div>
			<div class="input-group">
			<br>
				<h>Tanggal Tanggapan</h>
				<div></div>
				<type="text" name="tanggal_tanggapan" id="tanggal_tanggapan" placeholder="tanggal_tanggapan">
				<select name="tgl" id="tanggal_tanggapan">
					<option value='0'>-Pilih Tanggal-</option>
					<?php  for($tanggal=1;$tanggal<=31;$tanggal++) echo "<option value='".$tanggal."'>$tanggal</option>" ?>
				</select>
				<select name="bln" id="bulan">
					<?php $bulan = array("-Pilih Bulan-","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
					for($i=0;$i<=12;$i++)
					{
						echo "<option value=".$i.">".$bulan[$i]."</option>" ."<br>";
					}
					?>
				</select>
				<?php error_reporting(1); ?>
				<select name="thn" id="tahun" onchange="document.getElementById('dat').value=2016-this.options[this.selectedIndex].text">
				<option>-Pilih Tahun-<?php echo $_POST['tahun']?>
						<?php for($t=1990;$t<2016;$t++){?> <option><?php echo $t ?></option> 
						<?php };?>
					</select>
				</div>
				<div class="input-group">
				<input type="text" placeholder="Tanggapan" name="tanggapan">
			</div>
				<div class="input-group">
				<input type="text" placeholder="ID Petugas" name="id_petugas">
			</div>

			<div class="input-group">
				<button type="submit" class="btn">Kirim</button>
				<button type="reset" class="btn">Hapus</button>
			</div>

		</form>
		<hr/>
		<h3>Data Tanggapan</h3>
		<?php include('data/data_tanggapan.php'); ?>
	</div>
</div>

	<br>
	<br>
	<br>

<h3><font color="blue"><center>Copyright © 2020 Fitria Sa'adah</a></center></font></h3>
<?php include('template/footer.php'); ?>
