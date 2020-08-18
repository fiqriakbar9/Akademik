<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['username']))
{
    header("location:../index.php");
}

if(isset($_POST['submit'])){
	
$kd_matakuliah 	= $_POST['kd_matakuliah'];
$nama_matakuliah= $_POST['nama_matakuliah'];
$sks			= $_POST['sks'];
$semester		= $_POST['semester'];
$nip			= $_POST['nip'];


$query =  mysqli_query($koneksi,"INSERT INTO matakuliah VALUES('$kd_matakuliah','$nama_matakuliah','$sks','$semester','$nip')")  or die (mysql_error($koneksi));

header("location:data_matakuliah.php?Berhasil");
}
?>