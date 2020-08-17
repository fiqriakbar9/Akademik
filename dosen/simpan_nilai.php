<?php
// menghubungkan php dengan koneksi database
include '../connect/koneksi.php';

session_start();
if(!isset($_SESSION['nip']))
{
    header("location:../index.php");
}

if(isset($_POST['submit'])){
	
$id_krs 		= $_POST['id_krs'];
$nilai		 	= $_POST['nilai'];


$query =  mysqli_query($koneksi,"UPDATE krs set nilai='$nilai' where id_krs='$id_krs' ")  or die($mysql_error($koneksi));

header("location:nilai.php?Berhasil");
}
?>