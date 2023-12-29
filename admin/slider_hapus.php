<?php
include '../koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "select * from slider where id='$id'");
$d = mysqli_fetch_assoc($data);
$foto = $d['image'];
unlink("../gambar/slider/$foto");
mysqli_query($koneksi, "delete from slider where id='$id'");
header("location:slider.php");
