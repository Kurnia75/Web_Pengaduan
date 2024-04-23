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
		<?php
		include('koneksi/conn.php');
$no_tanggapan=$_POST['no_tanggapan'];
$no_pengaduan=$_POST['no_pengaduan'];
$tanggal_tanggapan=$_POST['tgl']."-".$_POST['bln']."-".$_POST['thn'];
$tanggapan=$_POST['tanggapan'];
$id_petugas=$_POST['id_petugas'];


		$update = mysqli_query ($conn,"UPDATE  tbl_tanggapan SET no_pengaduan='$no_pengaduan',tanggal_tanggapan='$tanggal_tanggapan',tanggapan='$tanggapan',id_petugas='$id_petugas' where no_tanggapan='$no_tanggapan' ") or die (mysqli_error());

//jika query update sukses
		if($update){

  echo '<br/><br/>Data berhasil di Update ';  //Pesan jika proses simpan sukses
  echo '<a href="entry_tanggapan.php" class="btn">Kembali</a>'; //membuat Link untuk kembali ke halaman edit
  
}else{

  echo 'Gagal menyimpan data! ';  //Pesan jika proses simpan gagal
  echo '<a href="edittanggapan.php?no_tanggapan='.$id.'" class="btn">Kembali</a>'; //membuat Link untuk kembali ke halaman edit
  
}


?>

</div>
</div>


<?php include('template/footer.php'); ?>

