<?php 
include '../koneksi.php';
$id  = $_GET['id'];
$data = mysqli_query($koneksi, "select * from resume_cannery_b where id='$id'");
$d = mysqli_fetch_assoc($data);

mysqli_query($koneksi, "delete from resume_cannery_b where id='$id'");
header("location:transaksi_b.php");