<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['username']))
{
    header("location:../index.php");
}

if(isset($_POST['update'])){
	
$nip 		= $_POST['nip'];
$nama_dosen	= $_POST['nama_dosen'];
$email 		= $_POST['email'];
$alamat 	= $_POST['alamat'];
$tempat_lahir  = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jk 		= $_POST['jk'];
$agama	 	= $_POST['agama'];
$password 	= $_POST['password'];


$query =  mysqli_query($koneksi,"UPDATE data_dosen set nama_dosen='$nama_dosen', email='$email', alamat='$alamat', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jk='$jk', agama='$agama', password='$password' where nip='$nip' ")  or die($mysql_error($koneksi));

header("location:data_dosen.php?Berhasil");
}
?>