<?php
session_start();
require 'function.php';
$slider = query("SELECT * FROM slider");
$settings = query("SELECT * FROM settings WHERE id=1")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Cannery</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="landingpage/assets/img/favicon.png" rel="icon">
    <link href="landingpage/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="landingpage/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="landingpage/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="landingpage/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="landingpage/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="landingpage/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="landingpage/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="landingpage/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="landingpage/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="landingpage/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Medicio
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex align-items-center justify-content-center justify-content-md-between">

        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <a href="index.html" class="logo me-auto"><img src="landingpage/assets/img/logo.png" alt=""></a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

            <nav id="navbar" class="navbar order-last order-lg-0">
                <ul>
                    <li><a class="nav-link scrollto " href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
            <?php
            if (isset($_SESSION["username"])) { ?>
                <a href="login.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">DASHBOARD</a>
            <?php } else { ?>
                <a href="login.php" class="appointment-btn scrollto"><span class="d-none d-md-inline">LOGIN</a>
            <?php } ?>
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->

    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">
                <?php
                foreach ($slider as $s) { ?>
                    <!-- Slide 1 -->
                    <div class="carousel-item active" style="background-image: url('gambar/slider/<?= $s['image'] ?>')">
                    </div>
                <?php } ?>


            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">


        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Tentang Kami</h2>
                    <?= htmlspecialchars_decode(strip_tags($settings['tentang_kami'])) ?>
                </div>

            </div>
        </section><!-- End About Us Section -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                </div>
            </div>

            <div>
                <iframe style="border:0; width: 100%; height: 350px;" src="<?= $settings['embed'] ?>" frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="container">

                <div class="row mt-5">

                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>Alamat</h3>
                                    <p><?= $settings['alamat'] ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>Contact Person</h3>
                                    <p><?= $settings['contact_person'] ?></p>
                                </div>
                            </div>

                        </div>

                    </div>


                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span><a href="wa.me/6282244812291">Erasites Citra Digital Indonesia</a></span></strong> Hosted By <strong><span><a href="https://idwebhost.com/aff/22028">ID Webhost</a></span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="landingpage/assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="landingpage/assets/vendor/aos/aos.js"></script>
    <script src="landingpage/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="landingpage/assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="landingpage/assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="landingpage/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="landingpage/assets/js/main.js"></script>

</body>

</html>