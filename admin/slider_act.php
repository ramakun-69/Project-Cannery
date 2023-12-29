<?php
include '../koneksi.php';
$title = $_POST['title'];
$rand = rand();
$allowed =  array('gif', 'png', 'jpg', 'jpeg');
$filename = $_FILES['image']['name'];

$ext = pathinfo($filename, PATHINFO_EXTENSION);
if (!in_array($ext, $allowed)) {
    header("location:sider.php?alert=gagal");
} else {
    move_uploaded_file($_FILES['image']['tmp_name'], '../gambar/slider/' . $rand . '_' . $filename);
    $file_gambar = $rand . '_' . $filename;
    mysqli_query($koneksi, "insert into slider values(NULL,'$title','$file_gambar')");
    header("location:slider.php");
}
