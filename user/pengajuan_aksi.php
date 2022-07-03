<?php
include '../koneksi.php';
session_start();
date_default_timezone_set('Asia/Jakarta');

$waktu = date('Y-m-d H:i:s');
$instansi  = $_POST['instansi'];
$user = $_SESSION['id'];
$kategori = $_POST['kategori'];
$terbit  = $_POST['terbit'];
$keterangan = $_POST['keterangan'];
$rand = rand();
$allowed =  array('png', 'jpg', 'jpeg');
$filename = $_FILES['file']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if (!in_array($ext, $allowed)) {
    header("location:pengajuan.php?alert=gagal");
} else {
    move_uploaded_file($_FILES['file']['tmp_name'], '../user/bukti/' . $rand . '_' . $filename);
    $bukti = $rand . '_' . $filename;
    mysqli_query($koneksi, "insert into pengajuan values (NULL,'$waktu','$instansi','$user','$kategori','$terbit','$keterangan','0','$bukti','$ext')");
    header("location:pengajuan.php?alert=sukses");
}
