<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Schotella</title>

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?= base_url('/public/images/favicons.png') ?>" />
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('/public/pss/lib/animate/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('/public/pss/lib/owlcarousel/assets/owl.carousel.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('/public/pss/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') ?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('/public/pss/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <style>
        /********** Template CSS **********/
        :root {
            --primary: #FEA116;
            --light: #F1F8FF;
            --dark: #0F172B;
        }

        .ff-secondary {
            font-family: 'Pacifico', cursive;
        }

        .fw-medium {
            font-weight: 600 !important;
        }

        .fw-semi-bold {
            font-weight: 700 !important;
        }

        .back-to-top {
            position: fixed;
            display: none;
            right: 45px;
            bottom: 45px;
            z-index: 99;
        }


        /*** Spinner ***/
        #spinner {
            opacity: 0;
            visibility: hidden;
            transition: opacity .5s ease-out, visibility 0s linear .5s;
            z-index: 99999;
        }

        #spinner.show {
            transition: opacity .5s ease-out, visibility 0s linear 0s;
            visibility: visible;
            opacity: 1;
        }


        /*** Button ***/
        .btn {
            font-family: 'Nunito', sans-serif;
            font-weight: 500;
            text-transform: uppercase;
            transition: .5s;
        }

        .btn.btn-primary,
        .btn.btn-secondary {
            color: #FFFFFF;
        }

        .btn-square {
            width: 38px;
            height: 38px;
        }

        .btn-sm-square {
            width: 32px;
            height: 32px;
        }

        .btn-lg-square {
            width: 48px;
            height: 48px;
        }

        .btn-square,
        .btn-sm-square,
        .btn-lg-square {
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: normal;
            border-radius: 2px;
        }


        /*** Navbar ***/
        .navbar-dark .navbar-nav .nav-link {
            position: relative;
            margin-left: 25px;
            padding: 35px 0;
            font-size: 15px;
            color: var(--light) !important;
            text-transform: uppercase;
            font-weight: 500;
            outline: none;
            transition: .5s;
        }

        .sticky-top.navbar-dark .navbar-nav .nav-link {
            padding: 20px 0;
        }

        .navbar-dark .navbar-nav .nav-link:hover,
        .navbar-dark .navbar-nav .nav-link.active {
            color: var(--primary) !important;
        }

        .navbar-dark .navbar-brand img {
            max-height: 60px;
            transition: .5s;
        }

        .sticky-top.navbar-dark .navbar-brand img {
            max-height: 45px;
        }

        @media (max-width: 991.98px) {
            .sticky-top.navbar-dark {
                position: relative;
            }

            .navbar-dark .navbar-collapse {
                margin-top: 15px;
                border-top: 1px solid rgba(255, 255, 255, .1)
            }

            .navbar-dark .navbar-nav .nav-link,
            .sticky-top.navbar-dark .navbar-nav .nav-link {
                padding: 10px 0;
                margin-left: 0;
            }

            .navbar-dark .navbar-brand img {
                max-height: 45px;
            }
        }

        @media (min-width: 992px) {
            .navbar-dark {
                position: absolute;
                width: 100%;
                top: 0;
                left: 0;
                z-index: 999;
                background: transparent !important;
            }

            .sticky-top.navbar-dark {
                position: fixed;
                background: var(--dark) !important;
            }
        }


        /*** Hero Header ***/
        .hero-header {
            background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url(public/pss/img/bg-hero.jpeg);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .hero-header img {
            animation: imgRotate 50s linear infinite;
        }

        @keyframes imgRotate {
            100% {
                transform: rotate(360deg);
            }
        }

        .breadcrumb-item+.breadcrumb-item::before {
            color: rgba(255, 255, 255, .5);
        }


        /*** Section Title ***/
        .section-title {
            position: relative;
            display: inline-block;
        }

        .section-title::before {
            position: absolute;
            content: "";
            width: 45px;
            height: 2px;
            top: 50%;
            left: -55px;
            margin-top: -1px;
            background: var(--primary);
        }

        .section-title::after {
            position: absolute;
            content: "";
            width: 45px;
            height: 2px;
            top: 50%;
            right: -55px;
            margin-top: -1px;
            background: var(--primary);
        }

        .section-title.text-start::before,
        .section-title.text-end::after {
            display: none;
        }

        /*** Footer ***/

        .footer .btn.btn-social {
            margin-right: 5px;
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--light);
            border: 1px solid #FFFFFF;
            border-radius: 35px;
            transition: .3s;
        }

        .footer .btn.btn-social:hover {
            color: var(--primary);
        }

        .footer .btn.btn-link {
            display: block;
            margin-bottom: 5px;
            padding: 0;
            text-align: left;
            color: #FFFFFF;
            font-size: 15px;
            font-weight: normal;
            text-transform: capitalize;
            transition: .3s;
        }

        .footer .btn.btn-link::before {
            position: relative;
            content: "\f105";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            margin-right: 10px;
        }

        .footer .btn.btn-link:hover {
            letter-spacing: 1px;
            box-shadow: none;
        }

        .footer .copyright {
            padding: 25px 0;
            font-size: 15px;
            border-top: 1px solid rgba(256, 256, 256, .1);
        }

        .footer .copyright a {
            color: var(--light);
        }

        .footer .footer-menu a {
            margin-right: 15px;
            padding-right: 15px;
            border-right: 1px solid rgba(255, 255, 255, .1);
        }

        .footer .footer-menu a:last-child {
            margin-right: 0;
            padding-right: 0;
            border-right: none;
        }
    </style>
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary m-0"><i><img src="public\images\No BG.PNG" alt="Logo"></i>Schotella</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="home" class="nav-item nav-link active">Home</a>
                    </div>
                    <a href="<?php echo base_url('dashboard'); ?>" class="btn btn-primary py-2 px-4">Pesan</a>

                </div>

            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5 ">
                <div class="container my-5 py-5">
                    <div class="row align-items-center g-5">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="display-3 text-white animated slideInLeft">Nikmati<br>Schotel Kami</h1>
                            <p class="text-white animated slideInLeft mb-4 pb-2">Kelezatan sejati dengan Schotella, produk unggulan kami yang menggoda selera Anda dengan cita rasa luar biasa dan keaslian yang memikat. Schotella bukan sekadar camilan, melainkan pengalaman kuliner yang tak terlupakan.</p>
                            <a href="<?php echo base_url('dashboard'); ?>" class="btn btn-primary py-sm-3 px-sm-5 me-3 animated slideInLeft">Pesan Sekarang</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-end overflow-hidden">
                            <img class="img-fluid" src="<?php echo base_url('/pss/img/bahan.png'); ?>" alt="Schotella Image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->




        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="row g-3">
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.1s" src="<?php echo base_url('/pss/img/Small.jpeg'); ?>">
                            </div>
                            <div class="col-6 text-start">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.3s" src="<?php echo base_url('/pss/img/Medium.jpeg'); ?>" style="margin-top: 25%;">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-75 wow zoomIn" data-wow-delay="0.5s" src="<?php echo base_url('/pss/img/bg-hero.jpeg'); ?>">
                            </div>
                            <div class="col-6 text-end">
                                <img class="img-fluid rounded w-100 wow zoomIn" data-wow-delay="0.7s" src="<?php echo base_url('/pss/img/Semua.jpeg'); ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Pemesanan</h5>
                        <h1 class="mb-4">Cara <i class="fa fa-utensils text-primary me-2"></i>Pesan</h1>
                        <p class="mb-4">1. Pilih menu pesan.</p>
                        <p class="mb-4">2. Tambahkan item yang ingin di pesan ke dalam keranjang.</p>
                        <p class="mb-4">3. Isi data diri anda.</p>
                        <p class="mb-4">4. Pastikan data diri sesuai.</p>
                        <p class="mb-4">5. Pilih Pesan & Bayar.</p>
                        <p class="mb-4">6. Tunggu Admin Schotella konfirmasi pesanan anda melalui Whatsapp.</p>
                        <p class="mb-4">7. Kirimkan bukti pembayaran/transaksi pada Admin Schotella atau bayar di tempat</p>
                        <p class="mb-4">8. Tunggu pesanan disiapkan 10-15 menit.</p>
                        <p class="mb-4">9. Ambil Pesanan di Toko Schotella.</p>
                        <div class="row g-4 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">4</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Varian</p>
                                        <h6 class="text-uppercase mb-0">Rasa</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center border-start border-5 border-primary px-3">
                                    <h1 class="flex-shrink-0 display-5 text-primary mb-0" data-toggle="counter-up">3</h1>
                                    <div class="ps-4">
                                        <p class="mb-0">Size</p>
                                        <h6 class="text-uppercase mb-0">Yang berbeda</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7905.603101380952!2d110.31741647626569!3d-7.810820834878526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7af9f7c5f6ba9f%3A0x347407e865cc27b8!2sSchotella!5e0!3m2!1sen!2sid!4v1703082203148!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-4 mt-4 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-4">
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Kontak Kami</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Jl. Sunan Kudus No.74, Gatak, Tamantirto, Kec. Kasihan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55183</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>0851-7951-5199</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>schotella.id@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://maps.app.goo.gl/ebAGg1tyiERgDbs9A"><i class="fab fa-google"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/schotella.id/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA=="><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://api.whatsapp.com/send?phone=085179515199"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Jam Buka</h4>
                        <h5 class="text-light fw-normal">Buka Setiap Hari</h5>
                        <p>16:00 - 22:00</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="https://schotella.my.id/">Schotella 2023</a>, All Right Reserved.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>/public/pss/lib/wow/wow.min.js"></script>
    <script src="<?= base_url() ?>/public/pss/lib/easing/easing.min.js"></script>
    <script src="<?= base_url() ?>/public/pss/lib/waypoints/waypoints.min.js"></script>
    <script src="<?= base_url() ?>/public/pss/lib/counterup/counterup.min.js"></script>
    <script src="<?= base_url() ?>/public/pss/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>/public/pss/lib/tempusdominus/js/moment.min.js"></script>
    <script src="<?= base_url() ?>/public/pss/lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="<?= base_url() ?>/public/pss/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="<?= base_url() ?>/public/pss/js/main.js"></script>
    <script src="<?php echo base_url() ?>/public/js/jquery/jquery.min.js"></script>

</body>

</html>