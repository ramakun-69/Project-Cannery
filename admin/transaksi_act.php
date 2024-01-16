 <?php
        include('../koneksi.php');
        
          //menampung data dari inputan
          $tanggal  = $_POST['tanggal'];
          $shift  = $_POST['shift'];
          $nanas_a1  = $_POST['nanas_a1'];
          $nanas_a2  = $_POST['nanas_a2'];
          $nanas_a25  = $_POST['nanas_a25'];
          $nanas_a5  = $_POST['nanas_a5'];
          $nanas_a10 = $_POST['nanas_a10'];

          //query untuk menambahkan data ke database, pastikan urutan nya sama dengan di database
          $data = mysqli_query($koneksi, "insert into resume_cannery_a
            (tanggal,shift,nanas_a1,nanas_a2,nanas_a25,nanas_a5,nanas_a10)values('$tanggal','$shift','$nanas_a1','$nanas_a2','$nanas_a25','$nanas_a5','$nanas_a10')") or die(mysqli_error($koneksi));
          //id data tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

          //ini untuk menampilkan alert berhasil dan redirect ke halaman transaksi
         echo "<script>alert('data berhasil disimpan.');window.location='transaksi.php';</script>";
        
  ?>