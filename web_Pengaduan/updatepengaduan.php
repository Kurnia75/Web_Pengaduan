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
	$no_pengaduan=$_POST['no_pengaduan'];
$tanggal_pengaduan=$_POST['tgl']."-".$_POST['bln']."-".$_POST['thn'];
$nik=$_POST['nik'];
$isi_laporan=$_POST['isi_laporan'];
$foto=$_POST['foto'];
$status=$_POST['status'];
		$update = mysqli_query ($conn,"UPDATE  tbl_pengaduan SET tanggal_pengaduan='$tanggal_pengaduan',nik='$nik',isi_laporan='$isi_laporan',foto='$foto',status='$status' where no_pengaduan='$no_pengaduan' ") or die (mysqli_error());

//jika query update sukses
		if($update){

  echo '<br/><br/>Data berhasil di Update ';  //Pesan jika proses simpan sukses
  echo '<a href="entry_pengaduan.php" class="btn">Kembali</a>'; //membuat Link untuk kembali ke halaman edit
  
}else{

  echo 'Gagal menyimpan data! ';  //Pesan jika proses simpan gagal
  echo '<a href="editpengaduan.php?no_pengaduan='.$id.'" class="btn">Kembali</a>'; //membuat Link untuk kembali ke halaman edit
  
}


?>

</div>
</div>


<?php include('template/footer.php'); ?>

