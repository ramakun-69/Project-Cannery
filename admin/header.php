<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrator - Sistem Informasi Cannery</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/bower_components/Ionicons/css/ionicons.min.css">



  <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="../assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../assets/bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="../assets/bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="../assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="../assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../=\plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <?php
  include '../koneksi.php';
  session_start();
  if ($_SESSION['status'] != "administrator_logedin") {
    header("location:../login.php?alert=belum_login");
  }
  ?>

</head>

<body class="hold-transition skin-blue sidebar-mini">

  <style>
    #table-datatable {
      width: 100% !important;
    }

    #table-datatable .sorting_disabled {
      border: 1px solid #f4f4f4;
    }
  </style>
  <div class="wrapper">

    <header class="main-header">
      <a href="index.php" class="logo">
        <span class="logo-mini"><b><i class="fa fa-money"></i></b> </span>
        <span class="logo-lg"><b>Website</b>Cannery</span>
      </a>
      <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <?php
                $id_user = $_SESSION['id'];
                $profil = mysqli_query($koneksi, "select * from user where user_id='$id_user'");
                $profil = mysqli_fetch_assoc($profil);
                if ($profil['user_foto'] == "") {
                ?>
                  <img src="../gambar/sistem/user.png" class="user-image">
                <?php } else { ?>
                  <img src="../gambar/user/<?php echo $profil['user_foto'] ?>" class="user-image">
                <?php } ?>
                <span class="hidden-xs"><?php echo $_SESSION['nama']; ?> - <?php echo $_SESSION['level']; ?></span>
              </a>
            </li>
            <li>
              <a href="logout.php"><i class="fa fa-sign-out"></i> LOGOUT</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <aside class="main-sidebar">
      <section class="sidebar">
        <div class="user-panel">
          <div class="pull-left image">
            <?php
            $id_user = $_SESSION['id'];
            $profil = mysqli_query($koneksi, "select * from user where user_id='$id_user'");
            $profil = mysqli_fetch_assoc($profil);
            if ($profil['user_foto'] == "") {
            ?>
              <img src="../gambar/sistem/user.png" class="img-circle">
            <?php } else { ?>
              <img src="../gambar/user/<?php echo $profil['user_foto'] ?>" class="img-circle" style="max-height:45px">
            <?php } ?>
          </div>
          <div class="pull-left info">
            <p><?php echo $_SESSION['nama']; ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>

          <li class="treeview">
            <a href="#">
              <i class="glyphicon glyphicon-stats"></i>
              <span>DASHBOARD</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
              <li><a href="index.php"><i class="fa fa-circle-o"></i> Grafik Data Recovery</a></li>
              <li><a href="grafik_tkline.php"><i class="fa fa-circle-o"></i> Grafik Data TK Line</a></li>
              <li><a href="grafik_tktidakhadir.php"><i class="fa fa-circle-o"></i> Grafik Data TK Tidak Hadir</a></li>
              <li><a href="grafik_tkproduksi.php"><i class="fa fa-circle-o"></i> Grafik Data TK Produksi</a></li>
              <li><a href="grafik_tonaseproses.php"><i class="fa fa-circle-o"></i> Grafik Data Tonase Proses</a></li>
              <li><a href="grafik_tonasekirim.php"><i class="fa fa-circle-o"></i> Grafik Data Tonase Kirim</a></li>
              <li><a href="grafik_stock.php"><i class="fa fa-circle-o"></i> Grafik Data Stock</a></li>
              <li><a href="grafik_sc.php"><i class="fa fa-circle-o"></i> Grafik Data SC<br>(Standar Cash)</a></li>
              <li><a href="grafik_scjam.php"><i class="fa fa-circle-o"></i> Grafik Data SC/jam<br>(Standar Cash)/Jam</a></li>
              <li><a href="grafik_mppsc.php"><i class="fa fa-circle-o"></i> Grafik MPP/SC<br>(Man Power Product)</a></li>
              <li><a href="grafik_kapasitas.php"><i class="fa fa-circle-o"></i> Grafik Data Kapasitas</a></li>
              <li><a href="grafik_mppkg.php"><i class="fa fa-circle-o"></i> Grafik MPP/KG<br>(Man Power Product)</a></li>
              <li><a href="grafik_choice.php"><i class="fa fa-circle-o"></i> Grafik Data Choice</a></li>
            </ul>
          </li>


          <li class="treeview">
            <a href="#">
              <i class="fa fa-folder"></i>
              <span>DATA TRANSAKSI</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
              <li><a href="transaksi.php"><i class="fa fa-circle-o"></i> Data Resume Cannery <br>Shift A</a></li>
              <li><a href="transaksi_b.php"><i class="fa fa-circle-o"></i> Data Resume Cannery <br>Shift B</a></li>
              <li><a href="transaksi_all.php"><i class="fa fa-circle-o"></i> Data Resume Cannery <br>ALL Shift</a></li>
              <li><a href="transaksi_bulanan.php"><i class="fa fa-circle-o"></i> Data Resume Cannery <br>Bulanan</a></li>
            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>DATA PENGGUNA</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
              <li><a href="user.php"><i class="fa fa-circle-o"></i> Data Pengguna</a></li>
              <li><a href="user_tambah.php"><i class="fa fa-circle-o"></i> Tambah Pengguna</a></li>
            </ul>
          </li>
          <li class="treeview">
            <a href="#">
              <i class="fa fa-laptop"></i>
              <span>LANDINGPAGE</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
              <li><a href="slider.php"><i class="fa fa-circle-o"></i> Slider</a></li>
              <li><a href="data_website.php"><i class="fa fa-circle-o"></i> Data Website</a></li>
            </ul>
          </li>

          <li>
            <a href="gantipassword.php">
              <i class="fa fa-lock"></i> <span>GANTI PASSWORD</span>
            </a>
          </li>

          <li>
            <a href="logout.php">
              <i class="fa fa-sign-out"></i> <span>LOGOUT</span>
            </a>
          </li>

        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>