<?php
        include('../koneksi.php');
        
          //menampung data dari inputan
          $id  = $_POST['id'];
          $bulan  = $_POST['bulan'];
          $tahun = $_POST['tahun'];
          $nanas_a1  = $_POST['nanas_a1'];
          $nanas_a2  = $_POST['nanas_a2'];
          $nanas_a25  = $_POST['nanas_a25'];
          $nanas_a5  = $_POST['nanas_a5'];
          $nanas_a10 = $_POST['nanas_a10'];
          

          //query untuk menambahkan barang ke database, pastikan urutan nya sama dengan di database
          $data = mysqli_query($koneksi,"update resume_cannery_bulanan set bulan='$bulan', tahun='$tahun',  nanas_a1='$nanas_a1', nanas_a2='$nanas_a2', nanas_a25='$nanas_a25', nanas_a5='$nanas_a5',nanas_a10='$nanas_a10' where id='$id'") or die(mysqli_error($koneksi));
          //id barang tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

          //ini untuk menampilkan alert berhasil dan redirect ke halaman index
         echo "<script>alert('data berhasil diubah.');window.location='transaksi_bulanan.php';</script>";
        
  ?>