<?php
include('koneksi/conn.php');
$no_nik=$_POST['no_nik'];
$nama=$_POST['nama'];
$username=$_POST['username'];
$password=$_POST['password'];
$telepon=$_POST['telepon'];


$query	= "INSERT INTO tbl_masyarakat values('$no_nik','$nama','$username','$password','$telepon')";
$result = mysqli_query($conn,$query)or die(mysqli_error());
if($result){
	echo "<script type='text/javascript'>
	alert('Data Berhasil Disimpan..!');
</script>";
echo "<meta http-equiv='refresh' content='0; url=entry_masyarakat.php'>";
}else{
	echo "<script type='text/javascript'>
	onload =function(){
		alert('data gagal disimpan!');
	}
</script>";

var_dump($_FILES);
//KEMBALI KE LIST.PHP
echo "data berhasil dimasukkan";
echo "<meta http-equiv=refresh content=3;url=entry_masyarakat.php>";
}
?>


