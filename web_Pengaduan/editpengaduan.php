<?php 
include('koneksi/conn.php');
include('template/top.php');
include('template/navigasi.php');
 if(!isset($_SESSION)){
 	session_start();
 }
 if (empty($_SESSION['username'])) {
 	header('Location:login.php');
 }
$tanggal_pengaduan=$_GET['id'];

$no=1;
$sql = "SELECT * FROM tbl_pengaduan WHERE tanggal_pengaduan='$tanggal_pengaduan' "; 
$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
while ($tampil=mysqli_fetch_array($hasil))
{
?>

<div id="main">
	<div class="content">
		<h3>Entry Pengaduan</h3>
		<form action="updatepengaduan.php" method="POST">
				<div class="input-group">
				<input type="text"  value="<?php echo $tampil['no_pengaduan']; ?>" name="no_pengaduan">
			</div>
			

			<div class="input-group">
					<input type="text" name="tanggal_pengaduan" id="tanggal_pengaduan"  value="<?php echo $tampil['tanggal_pengaduan']; ?>"> /
					<select name="tgl" id="tanggal">
						<option value="0">-Pilih Tanggal-</option>
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
				<input type="text"  name="nik" value="<?php echo $tampil['nik']; ?>" >
			</div>
				<div class="input-group">
				<input type="text"  name="isi_laporan" value="<?php echo $tampil['isi_laporan']; ?>" >
			</div>
					<div class="input-group">
					<label for="">Foto Pengaduan</label>
					<input type="file" name="foto" value="<?php echo $tampil['foto']; ?>" >
			</div>

			<div class="input-group">
						<select name="status" id="" >
							<option value="<?php echo $tampil['status']; ?>">-Status-</option>
							<option value="Proses">Proses</option>
							<option value="Selesai">selesai</option>
						</select>
					</div>
			<div class="input-group">
				<button type="submit" class="btn">Kirim</button>
				<button type="reset" class="btn">Hapus</button>
			</div>

		</form>

	</div>
</div>
		<hr>

		<br >
		<br >
		<br >
		
<h3><font color="blue"><center>Copyright © 2020 Fitria Sa'adah</a></center></font></h3>

	</div>
</div>

<?php include('template/footer.php'); }?>