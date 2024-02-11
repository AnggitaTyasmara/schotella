    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Schotella </title>
        <!-- plugins:css -->
        <link rel="stylesheet" href="<?= base_url() ?>/public/vendors/feather/feather.css">
        <link rel="stylesheet" href="<?= base_url() ?>/public/vendors/mdi/css/materialdesignicons.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>/public/vendors/ti-icons/css/themify-icons.css">
        <link rel="stylesheet" href="<?= base_url() ?>/public/vendors/typicons/typicons.css">
        <link rel="stylesheet" href="<?= base_url() ?>/public/vendors/simple-line-icons/css/simple-line-icons.css">
        <link rel="stylesheet" href="<?= base_url() ?>/public/vendors/css/vendor.bundle.base.css">
        <!-- endinject -->
        <!-- Plugin css for this page -->
        <!-- End plugin css for this page -->
        <!-- inject:css -->
        <link rel="stylesheet" href="<?= base_url() ?>/public/css/vertical-layout-light/style.css">
        <!-- endinject -->
        <link rel="shortcut icon" href="<?= base_url() ?>/public/images/favicons.png" />

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


        <style>
            /********** Template CSS **********/
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
                background: linear-gradient(rgba(15, 23, 43, .9), rgba(15, 23, 43, .9)), url();
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

            .main-panel {
                margin-left: auto;
                margin-right: auto;
                background-color: #0F172B;
            }

            .card {

                background: rgba(255, 255, 255, 0.27);
                border-radius: 16px;
                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                backdrop-filter: blur(3px);
                -webkit-backdrop-filter: blur(3px);
                border: 1px solid rgba(255, 255, 255, 0.67);
            }

            .card-body .btn {
                color: #F1F8FF;
            }

            .form-control {
                padding: 1.2231400000000001rem 0.75rem;
            }
        </style>
    </head>

    <body>

        <div class="container-xxl bg-dark position-relative p-0">
            <!-- partial:../../partials/_navbar.html -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0 mb-4">
                <div class="container-fluid">
                    <a href="<?php echo base_url('home'); ?>" class="navbar-brand p-0">
                        <h1 class="text-primary m-0"><i><img src="public\images\No BG.PNG" alt="Logo"></i>Schotella</h1>
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav ms-auto py-0 pe-4">
                            <button type="button" class="btn btn-social-icon-text btn-warning text-white floating-button" style="font-family: inherit" onclick="bukaModalKeranjang()">
                                <i class="mdi mdi-cart-outline"></i>Keranjang <b id="jmlPesanan">(0)</b>
                            </button>
                            <button type="button" class="btn btn-social-icon-text btn-danger ms-2" style="font-family: inherit" onclick="bukaModalLogin()">
                                <i class="mdi mdi-account-check"></i>Admin
                            </button>

                        </div>
                    </div>
                </div>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">

                <!-- partial -->
                <div class="main-panel">

                    <?php if ($bolognese) : ?>
                        <div class="content-wrapper text-center bg-dark">

                            <h2 class="text-light">Bolognese</h2>
                            <hr>
                            <div class="row justify-content-center">

                                <?php for ($i = 0; $i < count($bolognese); $i++) :
                                    if ($bolognese[$i]["jenis"] == 1) : ?>
                                        <div class="col-lg-3 col-md-6 grid-margin stretch-card mb-4">
                                            <div class="card" style="width: 18rem;">
                                                <div class="card-body p-0">
                                                    <img src="<?= base_url() ?>/public/images/menu/<?= $bolognese[$i]["foto"] ?>" class="card-img-top" <?php if ($bolognese[$i]["status"] == 0) {
                                                                                                                                                            echo 'style = "filter: grayscale(100%);-webkit-filter: grayscale(100%);"';
                                                                                                                                                        } ?> alt="...">
                                                    <div class="card-body ">
                                                        <h5 class="text-primary fw-bolder"><?= $bolognese[$i]["nama"] ?></h5>
                                                        <i class="text-light">Rp. <?= $bolognese[$i]["harga"] ?></i></p>
                                                        <button class="btn btn-warning btn-sm btn-fw mt-2" <?php if ($bolognese[$i]["status"] == 0) {
                                                                                                                echo "disabled";
                                                                                                            } ?> onclick='tambahPesanan(<?= $bolognese[$i]["id"] ?>, "<?= $bolognese[$i]["nama"] ?>", <?= $bolognese[$i]["harga"] ?> )'><?php if ($bolognese[$i]["status"] == 0) {
                                                                                                                                                                                                                                            echo "Habis";
                                                                                                                                                                                                                                        } else {
                                                                                                                                                                                                                                            echo "Tambah";
                                                                                                                                                                                                                                        } ?></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    endif;
                                endfor; ?>
                            </div>
                        </div>
                    <?php
                    endif;
                    if ($macncheese) : ?>
                        <div class="content-wrapper text-center bg-dark">
                            <h2 class="text-light">Mac N Cheese</h2>
                            <hr>
                            <div class="row justify-content-center">
                                <?php for ($i = 0; $i < count($macncheese); $i++) :
                                    if ($macncheese[$i]["jenis"] == 2) : ?>
                                        <div class="col-lg-3 col-md-6 grid-margin stretch-card mb-4">
                                            <div class="card" style="width: 18rem;">
                                                <div class="card-body p-0">
                                                    <img src="<?= base_url() ?>/public/images/menu/<?= $macncheese[$i]["foto"] ?>" class="card-img-top" <?php if ($macncheese[$i]["status"] == 0) {
                                                                                                                                                            echo 'style = "filter: grayscale(100%);-webkit-filter: grayscale(100%);"';
                                                                                                                                                        } ?> alt="...">
                                                    <div class="card-body text-center">
                                                        <h5 class="text-primary fw-bolder"><?= $macncheese[$i]["nama"] ?></h5>
                                                        <i class="text-light">Rp. <?= $macncheese[$i]["harga"] ?></i><br>
                                                        <button class="btn btn-warning btn-sm btn-fw mt-2" <?php if ($macncheese[$i]["status"] == 0) {
                                                                                                                echo "disabled";
                                                                                                            } ?> onclick='tambahPesanan(<?= $macncheese[$i]["id"] ?>, "<?= $macncheese[$i]["nama"] ?>", <?= $macncheese[$i]["harga"] ?> )'><?php if ($macncheese[$i]["status"] == 0) {
                                                                                                                                                                                                                                                echo "Habis";
                                                                                                                                                                                                                                            } else {
                                                                                                                                                                                                                                                echo "Tambah";
                                                                                                                                                                                                                                            } ?></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    endif;
                                endfor; ?>
                            </div>
                        </div>
                    <?php endif;
                    if ($mentai) : ?>
                        <div class="content-wrapper text-center bg-dark">
                            <h2 class="text-light">Mentai</h2>
                            <hr>
                            <div class="row justify-content-center">
                                <?php for ($i = 0; $i < count($mentai); $i++) :
                                    if ($mentai[$i]["jenis"] == 3) : ?>
                                        <div class="col-lg-3 col-md-6 grid-margin stretch-card mb-4">
                                            <div class="card" style="width: 18rem;">
                                                <div class="card-body p-0">
                                                    <img src="<?= base_url() ?>/public/images/menu/<?= $mentai[$i]["foto"] ?>" class="card-img-top" <?php if ($mentai[$i]["status"] == 0) {
                                                                                                                                                        echo 'style = "filter: grayscale(100%);-webkit-filter: grayscale(100%);"';
                                                                                                                                                    } ?> alt="...">
                                                    <div class="card-body text-center">
                                                        <h5 class="text-primary fw-bolder"><?= $mentai[$i]["nama"] ?></h5>
                                                        <i class="text-light">Rp. <?= $mentai[$i]["harga"] ?></i><br>
                                                        <button class="btn btn-warning btn-sm btn-fw mt-2" <?php if ($mentai[$i]["status"] == 0) {
                                                                                                                echo "disabled";
                                                                                                            } ?> onclick='tambahPesanan(<?= $mentai[$i]["id"] ?>, "<?= $mentai[$i]["nama"] ?>", <?= $mentai[$i]["harga"] ?> )'><?php if ($mentai[$i]["status"] == 0) {
                                                                                                                                                                                                                                    echo "Habis";
                                                                                                                                                                                                                                } else {
                                                                                                                                                                                                                                    echo "Tambah";
                                                                                                                                                                                                                                } ?></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    endif;
                                endfor; ?>
                            </div>
                        </div>
                    <?php endif;
                    if ($seaweed) : ?>
                        <div class="content-wrapper text-center bg-dark">
                            <h2 class="text-light">Seaweed</h2>
                            <hr>
                            <div class="row justify-content-center">
                                <?php for ($i = 0; $i < count($seaweed); $i++) :
                                    if ($seaweed[$i]["jenis"] == 4) : ?>
                                        <div class="col-lg-3 col-md-6 grid-margin stretch-card mb-4">
                                            <div class="card" style="width: 18rem;">
                                                <div class="card-body p-0">
                                                    <img src="<?= base_url() ?>/public/images/menu/<?= $seaweed[$i]["foto"] ?>" class="card-img-top" <?php if ($seaweed[$i]["status"] == 0) {
                                                                                                                                                            echo 'style = "filter: grayscale(100%);-webkit-filter: grayscale(100%);"';
                                                                                                                                                        } ?> alt="...">
                                                    <div class="card-body text-center">
                                                        <h5 class="text-primary fw-bolder"><?= $seaweed[$i]["nama"] ?></h5>
                                                        <i class="text-light">Rp. <?= $seaweed[$i]["harga"] ?></i><br>
                                                        <button class="btn btn-warning btn-sm btn-fw mt-2" <?php if ($seaweed[$i]["status"] == 0) {
                                                                                                                echo "disabled";
                                                                                                            } ?> onclick='tambahPesanan(<?= $seaweed[$i]["id"] ?>, "<?= $seaweed[$i]["nama"] ?>", <?= $seaweed[$i]["harga"] ?> )'><?php if ($seaweed[$i]["status"] == 0) {
                                                                                                                                                                                                                                        echo "Habis";
                                                                                                                                                                                                                                    } else {
                                                                                                                                                                                                                                        echo "Tambah";
                                                                                                                                                                                                                                    } ?></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                    endif;
                                endfor; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Modal -->
                    <div class="modal fade" id="modalKeranjang" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Pesanan</h5>
                                </div>
                                <div class="modal-body p-0 text-center">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-warning text-white">Nama</span>
                                                    </div>
                                                    <input type="text" id="nama" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <span class="input-group-text bg-warning text-white">No Hp</span>
                                                    </div>
                                                    <input type="tel" id="noHp" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <table class="table text-center bg-white" id="dataTable">
                                        <thead>
                                            <tr>
                                                <th>Nama</th>
                                                <th>Jml</th>
                                                <th>Harga</th>
                                                <th>Total</th>
                                                <th>Hapus</th>
                                            </tr>
                                        </thead>
                                        <tbody id="tabelPesanan">
                                            <td colspan="5">Data Kosong</td>
                                        </tbody>
                                    </table>

                                    <b id="peringatan" class="badge badge-danger text-black">Silahkan isi Nama dan No HP.</b><br>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" onclick="tutupModalKeranjang()">Tutup</button>
                                    <button type="button" class="btn btn-warning" onclick="prosesTransaksi()" id="simpanTransaksi">Pesan dan Bayar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="modalSelesai" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Pesanan Berhasil.</h5>
                                </div>
                                <div class="modal-body">
                                    Pesanan Berhasil dibuat. atas nama <b id="namaPemesan"></b> dengan nomor hp <b id="nomorHP"></b>.
                                    <br> <br> Mohon Menunggu sebentar kak, pesanan anda sedang di masak<br> <br>
                                    <b>Terimakasih...</b><br><br>
                                    <i>Tunggu Konfirmasi dari Admin yaa </i>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-warning" onclick="tutupModalSelesai()">Siap</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Login admin.</h5>
                                </div>
                                <div class="modal-body">
                                    <div id="errorLogin" class="mb-3"></div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <select id="idUser" class="form-control text-dark">
                                                <?php for ($i = 0; $i < count($user); $i++) {
                                                    echo "<option value='" . $user[$i]["id"] . "'>" . $user[$i]["nama"] . "</option>";
                                                } ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text bg-warning text-white">Password</span>
                                            </div>
                                            <input type="password" id="pass" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" onclick="tutupModalLogin()">Batal</button>
                                    <button type="button" class="btn btn-warning" onclick="login()" id="simpanTransaksi">Log in</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- main-panel ends -->
                </div>
                <!-- page-body-wrapper ends -->
            </div>
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
            <script src="<?php echo base_url() ?>/public/js/jquery/jquery.min.js"></script>
            <script>
                var pesanan = [];
                var ditemukan = false
                var jmlPesanan = 0

                function bukaModalKeranjang() {
                    tampilkanPesanan()
                    $("#modalKeranjang").modal("show")
                    $("#peringatan").hide()
                }

                function bukaModalLogin() {
                    $("#modalLogin").modal("show")
                }

                function login() {
                    idUser = $("#idUser").val()
                    pass = $("#pass").val()

                    if ($("#pass").val() == "") {
                        $("#pass").focus();
                    } else {
                        $.ajax({
                            type: 'POST',
                            data: 'idUser=' + idUser + '&pass=' + pass,
                            url: '<?= base_url() ?>/dashboard/auth',
                            dataType: 'json',
                            success: function(data) {
                                if (data == "") {
                                    window.location.href = "antrian";
                                } else {
                                    $("#errorLogin").html(data)
                                }
                            }
                        });
                    }
                }

                function tutupModalLogin() {
                    $("#modalLogin").modal("hide")
                }

                function prosesTransaksi() {
                    var nama = $('#nama').val();
                    var noHp = $('#noHp').val();

                    if (nama == "") {
                        $("#nama").focus()
                        $("#peringatan").show()
                    } else if (noHp == "") {
                        $("#noHp").focus()
                        $("#peringatan").show()
                    } else {
                        $("#simpanTransaksi").html('<i class="mdi mdi-reload fa-pulse"></i> Memproses..')
                        $.ajax({
                            type: 'POST',
                            url: '<?= base_url() ?>/dashboard/tambahPesanan',
                            data: {
                                'pesanan': pesanan,
                                'nama': nama,
                                'noHp': noHp
                            },
                            dataType: 'json',
                            success: function(data) {
                                $("#modalKeranjang").modal("hide")
                                pesanan = [];
                                $('#nama').val("");
                                $('#noHp').val("");
                                tampilkanPesanan();

                                // Set jumlah keranjang menjadi 0
                                $("#jmlPesanan").html("(0)");

                                $("#simpanTransaksi").html('Pesan dan Bayar')
                                $("#namaPemesan").html(nama)
                                $("#nomorHP").html(noHp)
                                $("#modalSelesai").modal("show")
                            }
                        });
                    }
                }

                function tutupModalKeranjang() {
                    $("#modalKeranjang").modal("hide")
                }

                function tutupModalSelesai() {
                    $("#modalSelesai").modal("hide")
                }



                function tambahPesanan(id, nama, harga) {
                    ditemukan = false
                    jmlPesanan = 0
                    for (let i = 0; i < pesanan.length; i++) {
                        if (pesanan[i][0] == id) {
                            pesanan[i][2] += 1
                            ditemukan = true
                        }
                        jmlPesanan += pesanan[i][2]
                    }
                    if (ditemukan == false) {
                        pesanan.push([id, nama, 1, harga])
                        jmlPesanan += 1
                    }

                    $("#jmlPesanan").html("(" + jmlPesanan + ")")
                }

                function tampilkanPesanan() {
                    var isiPesanan = ""

                    for (let i = 0; i < pesanan.length; i++) {
                        isiPesanan += "<tr><td>" + pesanan[i][1] + "</td><td>" + pesanan[i][2] + "</td><td>" + formatRupiah(pesanan[i][3].toString()) + "</td><td>" + formatRupiah((pesanan[i][2] * pesanan[i][3]).toString()) + "</td><td><button href='#' class='badge btn-danger' onClick='hapusPesanan(" + i + ")'>x</button></td></tr>"
                    }
                    if (pesanan.length < 1) {
                        $("#simpanTransaksi").prop("disabled", true)
                        isiPesanan = "<td colspan='5'>Pesanan Masih Kosong</td>"
                    } else {
                        $("#simpanTransaksi").prop("disabled", false)
                    }

                    $("#tabelPesanan").html(isiPesanan)
                }

                function hapusPesanan(id) {
                    pesanan.splice(id, 1);
                    tampilkanPesanan();

                    // Update the total quantity in the shopping cart
                    updateTotalQuantity();
                }

                function updateTotalQuantity() {
                    var totalQuantity = 0;
                    for (let i = 0; i < pesanan.length; i++) {
                        totalQuantity += pesanan[i][2];
                    }
                    $("#jmlPesanan").html("(" + totalQuantity + ")");
                }

                function formatRupiah(angka, prefix) {
                    var number_string = angka.replace(/[^,\d]/g, '').toString(),
                        split = number_string.split(','),
                        sisa = split[0].length % 3,
                        rupiah = split[0].substr(0, sisa),
                        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                    // tambahkan titik jika yang di input sudah menjadi angka ribuan
                    if (ribuan) {
                        separator = sisa ? '.' : '';
                        rupiah += separator + ribuan.join('.');
                    }

                    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
                }
            </script>


            <script src="<?= base_url() ?>/public/vendors/js/vendor.bundle.base.js"></script>
            <script src="<?= base_url() ?>/public/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
            <script src="<?= base_url() ?>/public/js/off-canvas.js"></script>
            <script src="<?= base_url() ?>/public/js/hoverable-collapse.js"></script>
            <script src="<?= base_url() ?>/public/js/template.js"></script>
            <script src="<?= base_url() ?>/public/js/settings.js"></script>
            <script src="<?= base_url() ?>/public/js/todolist.js"></script>
            <!-- endinject -->
    </body>

    </html>