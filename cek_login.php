<?php
session_start();

include "connect/koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];

$q = mysqli_query($koneksi,"select * from data_mhs where nim='$username' and password='$password'") or die (mysqli_error($koneksi));
$r = mysqli_fetch_array($q);
$q2 = mysqli_query($koneksi,"select * from data_dosen where nip='$username' and password='$password'") or die (mysqli_error($koneksi));
$r = mysqli_fetch_array($q2);
$q3 = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'") or die (mysqli_error($koneksi));
$r = mysqli_fetch_array($q3);

if ( mysqli_num_rows($q) == 1) {
    $_SESSION['nim'] = $username;
    $_SESSION['password'] = $r['password'];
    header('location:mahasiswa/index.php');
}
elseif ( mysqli_num_rows($q2) == 1) {
    $_SESSION['nip'] = $username;
    $_SESSION['password'] = $r['password'];
    header('location:dosen/index.php');
}
elseif ( mysqli_num_rows($q3) == 1) {
    $_SESSION['username'] = $username;
    $_SESSION['password'] = $r['password'];
    header('location:root/index.php');
} else {
   header("location:index.php?pesan=gagal");
}
?>