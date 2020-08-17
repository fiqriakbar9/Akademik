<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['username']))
{
    header("location:../login.php");
}
	
$kd_jurusan = $_GET['kd_jurusan'];

$query=mysqli_query($koneksi,"DELETE FROM jurusan WHERE kd_jurusan='$kd_jurusan'");
 
header("location:data_jurusan.php?Berhasil");
?>