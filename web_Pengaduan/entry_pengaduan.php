<?php 
include('koneksi/conn.php');
include('template/top.php');
include('template/navigasi.php');
$no = 1;
$sql = "SELECT * FROM tbl_pengaduan ORDER BY no_pengaduan DESC limit 1"; 
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
		<h3>Entry Pengaduan</h3>
		<form action="insertpengaduan.php" method="POST" enctype="multipart/form-data">
			<div class="input-group">
				<input type="text" placeholder="No Pengaduan" value="<?php while($rows=mysqli_fetch_array($hasil)){ $num = $rows['no_pengaduan']+$no; echo $num; }?>" name="no_pengaduan">
			</div>
			<div class="input-group">
<br>
				<h>Tanggal Pemesanan</h>
				<div></div>
				<type="text" name="tanggal_pengaduan" id="tanggal_pengaduan" placeholder="tanggal_pemesanan">
				<select name="tgl" id="tanggal_pengaduan">
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
						<br>
				<h>Nomor NIK</h>
				<div></div>
						<select name="no_nik" id="no_nik" style="width: 200px;">
					<option value="0">-Pilih Nomor NIK-</option>
					<?php 
					$sql = "SELECT * FROM tbl_masyarakat ORDER BY no_nik ASC"; 
					$hasil=mysqli_query($conn,$sql) or die(mysql_error());
					while($rows=mysqli_fetch_array($hasil)){
						echo "<option value='". $rows['no_nik']."'>". $rows['no_nik']."</option>"; 
					}
					?>
				</select>
			</div>
				<div class="input-group">
				<input type="text" placeholder="Isi Laporan" name="isi_laporan">
			</div>
<br>
				<div class="input-group">
					<label for="">Foto Pengaduan</label>
					<br>
					<input type="file" name="foto" >
			</div>
				<div class="input-group">
					<select name="status" id="">
					<option value="">-Status-</option>
						<option value="Proses">Proses</option>
						<option value="Selelai">Selesai</option>
					</select>
				</div>
				<div class="input-group">
					<button type="submit" class="btn">Kirim</button>
					<button type="reset" class="btn">Hapus</button>
				</div>

			</form>
			<hr/>
			<h3>Data Pengaduan</h3>
			<?php include('data/data_pengaduan.php') ?>
		</div>
	</div>

	<br>
	<br>
	<br>

<h3><font color="blue"><center>Copyright © 2020 Fitria Sa'adah</a></center></font></h3>
	<?php include('template/footer.php'); ?>