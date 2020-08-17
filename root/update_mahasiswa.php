<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['username']))
{
    header("location:../index.php");
}

if(isset($_POST['update'])){
	
$nim			= $_POST['nim'];
$password 		= $_POST['password'];
$nama_mahasiswa	= $_POST['nama_mahasiswa'];
$email 			= $_POST['email'];
$tempat_lahir  	= $_POST['tempat_lahir'];
$tanggal_lahir 	= $_POST['tanggal_lahir'];
$jk 			= $_POST['jk'];
$agama	 		= $_POST['agama'];
$jenjang 		= $_POST['jenjang'];
$semester 		= $_POST['semester'];
$kd_jurusan		= $_POST['kd_jurusan'];


$query =  mysqli_query($koneksi,"UPDATE data_mhs set password='$password', nama_mahasiswa='$nama_mahasiswa', email='$email', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jk='$jk', agama='$agama', jenjang='$jenjang', semester='$semester', kd_jurusan='$kd_jurusan' where nim='$nim' ")  or die ($mysql_error($koneksi));

header("location:data_mahasiswa.php?Berhasil");
}
?>