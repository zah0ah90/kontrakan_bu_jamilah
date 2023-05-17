<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Kontrakan Bu Jamilah</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/img/favicon.png" rel="icon">
    <link href="<?= base_url() ?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: OnePage
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center justify-content-between">

            <h1 class="logo"><a href="index.html">Kontrakan Bu Jamilah</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
                    <li><a class="nav-link scrollto" href="#pricing">Harga</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
                    <li><a class="nav-link scrollto" href="<?= base_url('auth') ?>">Akun</a></li>
                    <li>
                        <a class="getstarted scrollto" href="https://api.whatsapp.com/send?phone=<?= $nomorWhatsapp ?>&text=Hallo%20apakah%20masih%20setersedia%20kontrakan%20nya?%20terimakasih" target="_blank">Hubungi</a>
                    </li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">
            <div class="row justify-content-center">
                <div class="col-xl-7 col-lg-9 text-center">
                    <h1>Selamat Datang Di Kontrakan Bu Jamilah</h1>
                    <h2>Sisa Kontrakan <b><?= ($total == 0 ? 'Kontrakan sudah penuh' : $total) ?></b></h2>
                </div>
            </div>
            <div class="text-center">
                <a href="https://api.whatsapp.com/send?phone=<?= $nomorWhatsapp ?>&text=Hallo%20apakah%20masih%20setersedia%20kontrakan%20nya?%20terimakasih" target="_blank" class="btn-get-started scrollto">Hubungi</a>
            </div>

            <div class="row icon-boxes" style="text-align: center;">

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-stack-line"></i></div>
                        <h4 class="title"><a href=""></a></h4>
                        <p class="description">Terletak di dearah Cikarang, dekat dengan jalan raya dan pabrik pabrik
                            cikarang</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-map-line"></i></div>
                        <h4 class="title"><a href="#"></a></h4>
                        <p class="description">Dekat dengan kawasan MM2100 Cikarang</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-map-line"></i></div>
                        <h4 class="title"><a href=""></a></h4>
                        <p class="description">Dekat dengan Jalan Raya Setu dan Jalan Raya Cibarusah</p>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in" data-aos-delay="400">
                    <div class="icon-box">
                        <div class="icon"><i class="ri-star-line"></i></div>
                        <h4 class="title"><a href=""></a></h4>
                        <p class="description">Harga Bersaing dan fasilitas lengkap</p>
                    </div>
                </div>

            </div>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Tetang Kontrakan Bu Jamilah</h2>
                    <p></p>
                </div>

                <!-- <div class="row content">
          <div class="col-lg-6">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
              dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat</li>
            </ul>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
              voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <a href="#" class="btn-learn-more">Learn More</a>
          </div>
        </div> -->

            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <!-- <section id="counts" class="counts section-bg">
      <div class="container">

        <div class="row justify-content-end">

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="65" data-purecounter-duration="2"
                class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="2"
                class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="2"
                class="purecounter"></span>
              <p>Years of experience</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-5 col-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="2"
                class="purecounter"></span>
              <p>Awards</p>
            </div>
          </div>

        </div>

      </div>
    </section> -->
        <!-- End Counts Section -->

        <!-- ======= About Video Section ======= -->
        <section id="about-video" class="about-video">
            <div class="container" data-aos="fade-up">

                <div class="row">

                    <div class="col-lg-6 video-box align-self-baseline" data-aos="fade-right" data-aos-delay="100">

                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="assets/img/gambar_kontrakan.jpeg" class="img-fluid d-block w-100" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/gambar_kontrakan-1.jpeg" class="img-fluid d-block w-100" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/gambar_kontrakan-2.jpeg" class="img-fluid d-block w-100" alt="">
                                </div>
                                <div class="carousel-item">
                                    <img src="assets/img/gambar_kontrakan-3.jpeg" class="img-fluid d-block w-100" alt="">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>

                    </div>

                    <div class="col-lg-6 pt-3 pt-lg-0 content" data-aos="fade-left" data-aos-delay="100">
                        <h3>Harga perbulan hanya <?= $bulanan ?></h3>
                        <p class="fst-italic">
                            Sudah mendapatkan kontrakan 3 petak. Kontrakan bu jamilah dekat dengan jalan raya ciburasah
                            dan jalan raya
                            setu memudahkan anda untuk
                            berpergian. kontrakan bu jamilah juga dekat dengan kawan MM2100
                        </p>
                        <ul>
                            <li><i class="bx bx-check-double"></i> GRATIS Air dan Listrik</li>
                            <li><i class="bx bx-check-double"></i> GRATIS Parkiran 1 Motor</li>
                            <li><i class="bx bx-check-double"></i> Harga lebih murah jika pembayaran setahun</li>
                            <li><i class="bx bx-check-double"></i> Pembayaran bulanan setiap tanggal 10. Pembayaran bisa
                                via Transfer
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </section><!-- End About Video Section -->

        <!-- ======= Clients Section ======= -->
        <!-- <section id="clients" class="clients section-bg">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center" data-aos="zoom-in">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section> -->
        <!-- End Clients Section -->










        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>HARGA</h2>
                    <p></p>
                </div>

                <div class="row">



                    <div class="col-lg-6 col-md-6 mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box featured">
                            <h3>BULANAN</h3>
                            <h4><sup>Rp</sup><?= $bulanan ?><span> / Bulan</span></h4>
                            <ul>
                                <li>Gratis Air dan Listrik</li>
                                <li>Gratis Parkiran 1 Motor</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Hubungi</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="100">
                        <div class="box">
                            <h3>TAHUNAN</h3>
                            <h4><sup>Rp</sup><?= $tahunan ?><span> / month</span></h4>
                            <ul>
                                <li>Gratis Air dan Listrik</li>
                                <li>Gratis Parkiran 1 Motor</li>
                                <li>Lebih hemat</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="#" class="btn-buy">Hubungi</a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Pricing Section -->



        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>HUBUNGI</h2>
                    <p></p>
                </div>
                <div>
                </div>

                <div class="row mt-5">
                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Lokasi:</h4>
                                <p>Jl. Raya Cibening - Cikedokan, Cikedokan, Kec. Cikarang Bar., Kabupaten Bekasi, Jawa
                                    Barat 17530</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Hubungi:</h4>
                                <p>+<?= $nomorWhatsapp ?></p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">
                        <iframe style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d15861.625666914484!2d107.0764515!3d-6.3413771!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwMjAnMjguNSJTIDEwN8KwMDQnMzUuNCJF!5e0!3m2!1sid!2sid!4v1683704520466!5m2!1sid!2sid" frameborder="0" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">



        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    Kontrakan Bu Jamilah
                </div>
                <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
                    Jl. Raya Cibening - Cikedokan,
                    Cikedokan, Kec. Cikarang Bar,
                    Kabupaten Bekasi, Jawa Barat 17530
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">

            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="<?= base_url() ?>assets/vendor/aos/aos.js"></script>
    <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets/js/main.js"></script>

</body>

</html>