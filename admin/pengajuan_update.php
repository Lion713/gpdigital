<?php
include '../koneksi.php';
session_start();
date_default_timezone_set('Asia/Jakarta');

$status  = $_POST['status'];
$id = $_POST['id_pengajuan'];
    mysqli_query($koneksi, "UPDATE pengajuan SET				 
				  status_pengajuan = '$status'
				  WHERE id_pengajuan = '$id' ");
    header("location:pengajuan.php?alert=sukses");

