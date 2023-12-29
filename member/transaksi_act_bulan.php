<?php
        include('../koneksi.php');
        
          //menampung data dari inputan
          $bulan = $_POST['bulan'];
          $tahun = $_POST['tahun'];
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
         //query untuk menambahkan barang ke database, pastikan urutan nya sama dengan di database
          $data = mysqli_query($koneksi, "insert into resume_cannery_bulanan
            (bulan,tahun,tkline,tktidakhadir,tkproduksi,tonaseproses,tonasekirim,stock,jamkerja,sc,scjam,mppsc,kapasitas,recovery,akumrec,akumkap,mppkg,choice)values('$bulan','$tahun','$tkline','$tktidakhadir','$tkproduksi','$tonaseproses','$tonasekirim','$stock','$jamkerja','$sc','$scjam','$mppsc',
            '$kapasitas','$recovery','$akumrec','$akumkap','$mppkg','$choice')") or die(mysqli_error($koneksi));
          //id barang tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

          //ini untuk menampilkan alert berhasil dan redirect ke halaman index
         echo "<script>alert('data berhasil disimpan.');window.location='transaksi_bulanan.php';</script>";
        
  ?>