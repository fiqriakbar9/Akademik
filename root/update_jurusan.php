<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['username']))
{
    header("location:../index.php");
}

if(isset($_POST['update'])){
	
$kd_jurusan			= $_POST['kd_jurusan'];
$nama_jurusan		= $_POST['nama_jurusan'];
$kd_fakultas 		= $_POST['kd_fakultas'];


$query =  mysqli_query($koneksi,"UPDATE jurusan set nama_jurusan='$nama_jurusan', kd_fakultas='$kd_fakultas' where kd_jurusan='$kd_jurusan' ")  or die($mysql_error($koneksi));

header("location:data_jurusan.php?Berhasil");
}
?>