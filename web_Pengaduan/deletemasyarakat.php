<?php 
session_start();
include('template/top.php');
include('template/navigasi.php');
include 'koneksi/conn.php';
 if(!isset($_SESSION)){
 	session_start();
  }
 if (empty($_SESSION['username'])) {
 	header('Location:login.php');
 }

$no_nik=$_GET['id'];
$sql = "DELETE FROM tbl_masyarakat where no_nik='$no_nik'";
$result = mysqli_query ($conn,$sql) or die ('gagal');
?>

<div id="main">
	<div class="content">	
		<?php
		echo "<br/><br/><h4>Data telah di hapus</h4>";
		echo "<meta http-equiv=refresh content=1;url=entry_masyarakat.php>";
		?>
	</div>
</div>


<?php include('template/footer.php'); ?>

