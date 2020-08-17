<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['username']))
{
    header("location:../index.php");
}

if(isset($_POST['update'])){
	
$username 		= $_POST['username'];
$password 	= $_POST['password'];


$query =  mysqli_query($koneksi,"UPDATE data_mhs set password='$password' where username='$username' ")  or die($mysql_error($koneksi));

header("location:profile.php?Berhasil");
}
?>