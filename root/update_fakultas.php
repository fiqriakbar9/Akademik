<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['username']))
{
    header("location:../index.php");
}

if(isset($_POST['update'])){
	
$kd_fakultas 		= $_POST['kd_fakultas'];
$nama_fakultas		= $_POST['nama_fakultas'];


$query =  mysqli_query($koneksi,"UPDATE fakultas set nama_fakultas='$nama_fakultas' where kd_fakultas='$kd_fakultas' ")  or die($mysql_error($koneksi));

header("location:data_fakultas.php?Berhasil");
}
?>