<?php
        include('../koneksi.php');
        
          //menampung data dari inputan
          $id  = $_POST['id'];
          $tanggal  = $_POST['tanggal'];
          $shift  = $_POST['shift'];
          $tkline  = $_POST['tkline'];
          $tktidakhadir  = $_POST['tktidakhadir'];
          $tkproduksi  = $_POST['tkproduksi'];
          $tonaseproses  = $_POST['tonaseproses'];
          $tonasekirim = $_POST['tonasekirim'];
          $stock = $_POST['stock'];
          $jamkerja = $_POST['jamkerja'];
          $sc = $_POST['sc'];
          $scjam = $_POST['scjam'];
          $mppsc = $_POST['mppsc'];
          $kapasitas = $_POST['kapasitas'];
          $recovery = $_POST['recovery'];
          $akumrec = $_POST['akumrec'];
          $akumkap = $_POST['akumkap'];
          $mppkg = $_POST['mppkg'];
          $choice = $_POST['choice'];

          //query untuk menambahkan barang ke database, pastikan urutan nya sama dengan di database
          $data = mysqli_query($koneksi,"update resume_cannery_a set tanggal='$tanggal', shift='$shift', tkline='$tkline', tktidakhadir='$tktidakhadir', tkproduksi='$tkproduksi', tonaseproses='$tonaseproses',tonasekirim='$tonasekirim',stock='$stock',jamkerja='$jamkerja',sc='$sc',scjam='$scjam',mppsc='$mppsc',kapasitas='$kapasitas',recovery='$recovery',akumrec='$akumrec',akumkap='$akumkap',mppkg='$mppkg',choice='$choice' where id='$id'") or die(mysqli_error($koneksi));
          //id barang tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

          //ini untuk menampilkan alert berhasil dan redirect ke halaman index
         echo "<script>alert('data berhasil diubah.');window.location='transaksi.php';</script>";
        
  ?>