<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['nim']))
{
    header("location:../index.php");
}

if(isset($_POST['submit'])){
	
$nim 			= $_POST['nim'];
$kd_matakuliah 	= $_POST['kd_matakuliah'];
$semester	 	= $_POST['semester'];


$query =  mysqli_query($koneksi,"INSERT INTO krs VALUES ('','$nim','$kd_matakuliah','$semester',NULL)")  or die(mysqli_error($koneksi));

header("location:riwayat_nilai.php?Berhasil");
}
?>