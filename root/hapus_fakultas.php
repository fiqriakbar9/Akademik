<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['username']))
{
    header("location:../login.php");
}
	
$kd_fakultas = $_GET['kd_fakultas'];

$query=mysqli_query($koneksi,"DELETE FROM fakultas WHERE kd_fakultas='$kd_fakultas'");
 
header("location:data_fakultas.php?Berhasil");
?>