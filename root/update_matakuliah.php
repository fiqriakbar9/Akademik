<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['username']))
{
    header("location:../index.php");
}

if(isset($_POST['update'])){
	
$kd_matakuliah		= $_POST['kd_matakuliah'];
$nama_matakuliah	= $_POST['nama_matakuliah'];
$sks 				= $_POST['sks'];
$semester			= $_POST['semester'];
$nip				= $_POST['nip'];


$query =  mysqli_query($koneksi,"UPDATE matakuliah set nama_matakuliah='$nama_matakuliah', sks='$sks', semester='$semester', nip='$nip' where kd_matakuliah='$kd_matakuliah' ")  or die($mysql_error($koneksi));

header("location:data_matakuliah.php?Berhasil");
}
?>