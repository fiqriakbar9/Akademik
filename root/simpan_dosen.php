<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['username']))
{
    header("location:../index.php");
}

if(isset($_POST['submit'])){
	
$nip 		= $_POST['nip'];
$nama_dosen	= $_POST['nama_dosen'];
$email		= $_POST['email'];
$password	= $_POST['password'];


$query =  mysqli_query($koneksi,"INSERT INTO data_dosen VALUES('$nip','$password','$nama_dosen','$email',NULL,NULL,NULL,NULL,NULL)")  or die (mysql_error($koneksi));

header("location:data_dosen.php?Berhasil");
}
?>