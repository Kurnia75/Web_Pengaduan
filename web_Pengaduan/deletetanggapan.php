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

$no_tanggapan=$_GET['id'];
$sql = "DELETE FROM tbl_tanggapan where no_tanggapan='$no_tanggapan'";
$result = mysqli_query ($conn,$sql) or die ('gagal');
?>

<div id="main">
	<div class="content">	
		<?php
		echo "<br/><br/><h4>Data telah di hapus</h4>";
		echo "<meta http-equiv=refresh content=1;url=entry_tanggapan.php>";
		?>
	</div>
</div>


<?php include('template/footer.php'); ?>

