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
$nama=$_GET['id'];

$no=1;
$sql = "SELECT * FROM tbl_masyarakat WHERE nama='$nama' "; 
$hasil=mysqli_query($conn,$sql) or die(mysqli_error());
while ($tampil=mysqli_fetch_array($hasil))
{

?>

<div id="main">
	<div class="content">
		<h3>Entry Masyarakat</h3>
		<form action="updatemasyarakat.php" method="POST">
			<div class="input-group">
				<input type="text"  value="<?php echo $tampil['no_nik']; ?>" name="no_nik">
			</div>
			<div class="input-group">
				<input type="text"  name="nama" value="<?php echo $tampil['nama']; ?>" >
			</div>
				<div class="input-group">
				<input type="text"  name="username" value="<?php echo $tampil['username']; ?>" >
			</div>
				<div class="input-group">
				<input type="text"  name="password" value="<?php echo $tampil['password']; ?>" >
			</div>

			<div class="input-group">
				<input type="text" name="telepon" value="<?php echo $tampil['telepon']; ?>">
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