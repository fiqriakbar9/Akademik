<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['nim']))
{
    header("location:../index.php");
}

if(isset($_POST['update'])){
	
$nim			= $_POST['nim'];
$nama_mahasiswa	= $_POST['nama_mahasiswa'];
$email 			= $_POST['email'];
$tempat_lahir  	= $_POST['tempat_lahir'];
$tanggal_lahir 	= $_POST['tanggal_lahir'];
$jk 			= $_POST['jk'];
$agama	 		= $_POST['agama'];


$query =  mysqli_query($koneksi,"UPDATE data_mhs set nama_mahasiswa='$nama_mahasiswa', email='$email', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jk='$jk', agama='$agama' where nim='$nim' ")  or die ($mysql_error($koneksi));

header("location:profile.php?Berhasil");
}
?>
