<?php
include('koneksi/conn.php');
$no_tanggapan=$_POST['no_tanggapan'];
$no_pengaduan=$_POST['no_pengaduan'];
$tanggal_tanggapan=$_POST['thn']."-".$_POST['bln']."-".$_POST['tgl'];
$tanggapan=$_POST['tanggapan'];
$id_petugas=$_POST['id_petugas'];



$query	= "INSERT INTO tbl_tanggapan values('$no_tanggapan','$no_pengaduan','$tanggal_tanggapan','$tanggapan','$id_petugas')";
$result = mysqli_query($conn,$query)or die(mysqli_error());
if($result){
	echo "<script type='text/javascript'>
	alert('Data Berhasil Disimpan..!');
</script>";
echo "<meta http-equiv='refresh' content='0; url=entry_tanggapan.php'>";
}else{
	echo "<script type='text/javascript'>
	onload =function(){
		alert('data gagal disimpan!');
	}
</script>";

var_dump($_FILES);
//KEMBALI KE LIST.PHP
echo "data berhasil dimasukkan";
echo "<meta http-equiv=refresh content=3;url=entry_tanggapan.php>";
}
?>


