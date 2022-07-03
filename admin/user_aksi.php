<?php
include 'koneksi.php';
$nama  = $_POST['nama'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = md5($_POST['password']);

$rand = rand();
$allowed =  array('gif', 'png', 'jpg', 'jpeg');
$filename = $_FILES['foto']['name'];


$daftar = mysqli_query($koneksi, "SELECT * FROM user ");
$cek = mysqli_num_rows($daftar);

if ($cek > 0) {
	header("location:user_daftar.php?alert=gagaldaftar");
} elseif ($cek == "") {
	mysqli_query($koneksi, "insert into user values (NULL,'$nama','$email','$username','$password','')");
	header("location:user_daftar.php?alert=suksesdaftar");
} else {
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	if (!in_array($ext, $allowed)) {
		header("location:user_daftar.php?alert=gagalfoto");
	} else {
		move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/user/' . $rand . '_' . $filename);
		$file_gambar = $rand . '_' . $filename;
		mysqli_query($koneksi, "insert into user values (NULL,'$nama','$email','$username','$password','')");
		header("location:user_daftar.php");
	}
}
