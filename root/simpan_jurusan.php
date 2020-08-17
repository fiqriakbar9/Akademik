<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['username']))
{
    header("location:../index.php");
}

if(isset($_POST['submit'])){
	
$kd_jurusan		= $_POST['kd_jurusan'];
$nama_jurusan	= $_POST['nama_jurusan'];
$kd_fakultas	= $_POST['kd_fakultas'];


$query =  mysqli_query($koneksi,"INSERT INTO jurusan VALUES('$kd_jurusan','$nama_jurusan','$kd_fakultas')")  or die (mysql_error($koneksi));

header("location:data_jurusan.php?Berhasil");
}
?>