<?php
include '../koneksi.php';
$tentang_kami = htmlspecialchars($_POST['tentang_kami']);
$alamat = $_POST['alamat'];
$contact_person = $_POST['contact_person'];
$embed = $_POST['embed'];
$query = "UPDATE settings SET tentang_kami='$tentang_kami', alamat='$alamat', contact_person='$contact_person', embed='$embed' WHERE id='1'";
$update = mysqli_query($koneksi, $query);
if (!$update) {
    die("Query update gagal: " . mysqli_error($koneksi));
}
header("location:data_website.php");
