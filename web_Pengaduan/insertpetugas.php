<?php
include('koneksi/conn.php');
$id_petugas=$_POST['id_petugas'];
$nama_petugas=$_POST['nama_petugas'];
$username=$_POST['username'];
$password=$_POST['password'];
$telepon=$_POST['telepon'];
$level=$_POST['level'];

$query	= "INSERT INTO tbl_petugas values('$id_petugas','$nama_petugas','$username','$password','$telepon','$level')";
$result = mysqli_query($conn,$query)or die(mysqli_error());
if($result){
	echo "<script type='text/javascript'>
	alert('Data Berhasil Disimpan..!');
</script>";
echo "<meta http-equiv='refresh' content='0; url=entry_petugas.php'>";
}else{
	echo "<script type='text/javascript'>
	onload =function(){
		alert('data gagal disimpan!');
	}
</script>";

var_dump($_FILES);
//KEMBALI KE LIST.PHP
echo "data berhasil dimasukkan";
echo "<meta http-equiv=refresh content=3;url=entry_petugas.php>";
}
?>


