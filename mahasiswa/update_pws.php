<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['nim']))
{
    header("location:../index.php");
}

if(isset($_POST['update'])){
	
$nim 		= $_POST['nim'];
$password 	= $_POST['password'];


$query =  mysqli_query($koneksi,"UPDATE data_mhs set password='$password' where nim='$nim' ")  or die($mysql_error($koneksi));

header("location:profile.php?Berhasil");
}
?>