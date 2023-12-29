<?php
include '../koneksi.php';
$title = $_POST['title'];
$id = $_POST['id'];
$rand = rand();
$allowed =  array('gif', 'png', 'jpg', 'jpeg');
$filename = $_FILES['image']['name'];

$ext = pathinfo($filename, PATHINFO_EXTENSION);
if ($filename == "") {
    mysqli_query($koneksi, "update slider set title='$title' where id='$id'");
    header("location:slider.php");
} else {
    if (!in_array($ext, $allowed)) {
        header("location:slider.php?alert=gagal");
    } else {
        $data = mysqli_query($koneksi, "select * from slider where id='$id'");
        $d = mysqli_fetch_assoc($data);
        $foto = $d['image'];
        unlink("../gambar/slider/$foto");
        move_uploaded_file($_FILES['image']['tmp_name'], '../gambar/slider/' . $rand . '_' . $filename);
        $file_gambar = $rand . '_' . $filename;
        mysqli_query($koneksi, "update slider set title='$title', image='$file_gambar' where id='$id'");
        header("location:slider.php");
    }
}
