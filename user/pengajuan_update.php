<?php
include '../koneksi.php';
session_start();
date_default_timezone_set('Asia/Jakarta');
$instansi_pengajuan = $_POST['pengajuan'];
$keterangan = $_POST['keterangan'];
$kategori_pengajuan = $_POST['kategori'];
$data_terbit  = $_POST['terbit'];
$id = $_POST['id_pengajuan'];
    mysqli_query($koneksi, "UPDATE pengajuan SET				 
				  instansi_pengajuan = '$instansi_pengajuan',
				  keterangan_pengajuan = '$keterangan',
				  kategori_pengajuan = '$kategori_pengajuan',
				  data_terbit = '$data_terbit'
				  WHERE id_pengajuan = '$id' ");
    header("location:pengajuan.php?alert=sukses");

