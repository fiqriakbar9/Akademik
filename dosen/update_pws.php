<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['nip']))
{
    header("location:../index.php");
}

if(isset($_POST['update'])){
	
$nip 		= $_POST['nip'];
$password 	= $_POST['password'];


$query =  mysqli_query($koneksi,"UPDATE data_dosen set password='$password' where nip='$nip' ")  or die($mysql_error($koneksi));

header("location:profile.php?Berhasil");
}
?>