<?php
include 'koneksi.php';
$nama  = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$daftar = mysqli_query($koneksi, "SELECT * FROM user WHERE email='$email'");
$cek = mysqli_num_rows($daftar);

if ($cek > 0) {

    header("location:user_daftar.php?alert=gagaldaftar");
} else {
    mysqli_query($koneksi, "insert into user values (NULL,'$nama','$email','$username','$password','')");
    header("location:user_daftar.php?alert=suksesdaftar");
}
