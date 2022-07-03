<?php
include '../koneksi.php';
$id = $_GET['id'];

// hapus pengajuan
$data = mysqli_query($koneksi, "select * from pengajuan where id_pengajuan='$id'");
mysqli_query($koneksi, "delete from pengajuan where id_pengajuan='$id'");
header("location:pengajuan.php");
