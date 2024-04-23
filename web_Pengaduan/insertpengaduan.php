<?php
include('koneksi/conn.php');
$no_pengaduan=$_POST['no_pengaduan'];
$tanggal_pengaduan=$_POST['tgl']."-".$_POST['bln']."-".$_POST['thn'];
$no_nik=$_POST['no_nik'];
$isi_laporan=$_POST['isi_laporan'];



if($_FILES["foto"]["name"]!=''){
	$loc=$_FILES['foto']['tmp_name'];
	$des="foto/".$_FILES['foto']['name'];
	if( move_uploaded_file($loc, $des))
		{$pesan='.Foto asli berhasil di upload';}
	else
		{$pesan='.Foto asli gagal di upload';}	
}
$status=$_POST['status'];

$query	= "INSERT INTO tbl_pengaduan values('$no_pengaduan','$tanggal_pengaduan','$no_nik','$isi_laporan','".$_FILES["foto"]["name"]."','$status')";
$result = mysqli_query($conn,$query)or die(mysqli_error());
if($result){
	echo "<script type='text/javascript'>
	alert('Data Berhasil Disimpan..!');
</script>";
echo "<meta http-equiv='refresh' content='0; url=entry_pengaduan.php'>";
}else{
	echo "<script type='text/javascript'>
	onload =function(){
		alert('data gagal disimpan!');
	}
</script>";

var_dump($_FILES);
//KEMBALI KE LIST.PHP
echo "data berhasil dimasukkan";
echo "<meta http-equiv=refresh content=3;url=entry_pengaduan.php>";
}
?>


