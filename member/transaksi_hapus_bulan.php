<?php 
include '../koneksi.php';
$id  = $_GET['id'];
$data = mysqli_query($koneksi, "select * from resume_cannery_bulanan where id='$id'");
$d = mysqli_fetch_assoc($data);

$bulan = mysqli_query($koneksi,"select * from  resume_cannery_bulanan where bulan=$bulan'");
$b = mysqli_fetch_assoc($bulan);

mysqli_query($koneksi, "delete from resume_cannery_bulanan where id='$id'");
header("location:transaksi_bulanan.php");