<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['username']))
{
    header("location:../index.php");
}

if(isset($_POST['submit'])){
	
$nim			= $_POST['nim'];
$nama_mahasiswa	= $_POST['nama_mahasiswa'];
$jenjang		= $_POST['jenjang'];
$semester		= $_POST['semester'];
$email			= $_POST['email'];
$password		= $_POST['password'];
$kd_jurusan		= $_POST['kd_jurusan'];


$query =  mysqli_query($koneksi,"INSERT INTO data_mhs VALUES('$nim','$password','$nama_mahasiswa','$email',NULL,NULL,NULL,NULL,'$jenjang','$semester','$kd_jurusan')")  or die (mysql_error($koneksi));

header("location:data_mahasiswa.php?Berhasil");
}
?>