<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from storage.googleapis.com/themevessel-products/fort/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2020 13:24:21 GMT -->
<head>
    <title>Dospi HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-submenu.css">

    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/leaflet.css" type="text/css">
    <link rel="stylesheet" href="assets/css/map.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="assets/fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css"  href="assets/css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css"  href="assets/css/dropzone.css">
    <link rel="stylesheet" type="text/css"  href="assets/css/slick.css">


    <!-- Ionicons Script -->
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>


    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/default.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/Dospi.png" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,300,700">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="assets/css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script  src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script  src="js/html5shiv.min.js"></script>
    <script  src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="page_loader"></div>


<!-- Main header start -->
<header class="main-header fixed-header-2">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand company-logo" href="<?php echo base_url('halaman_index'); ?>">
                <img src="assets/img/logos/black-logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav header-ml">
                    <li >
                        <a class="nav-link dropdown" href="<?php echo base_url('halaman_index'); ?>" >
                            Home
                        </a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a class="nav-link dropdown" href="<?php echo base_url('shop_list_index'); ?>">
                            Shop
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown" href="#" id="navbarDropdownMenuLink7" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="<?php echo base_url('kontak_index'); ?>">Kontak Kami</a>
                            <a class="dropdown-item" href="<?php echo base_url('tata_cara_index'); ?>">Tata Cara Jual & Beli</a>
                            <a class="dropdown-item" href="<?php echo base_url('faq_index'); ?>">faq</a>
                            <a class="dropdown-item" href="404-2.html">Error</a>
                        </ul>
                    </li>
                    <li >
                        <a class="nav-link dropdown" href="<?php echo base_url('tentang_dospi_index'); ?>" >
                            Tentang
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown" href="#">
                            <i class="flaticon-logout"></i>Masuk
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li class="dropdown"><a class="dropdown-item" href="<?php echo base_url('login_dospi'); ?>">Penjual</a>
                            </li>
                            <li class="dropdown"><a class="dropdown-item" href="<?php echo base_url('login_pembeli'); ?>">Pembeli</a>
                            </li>
                        </ul>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link link-color" href="<?php echo base_url('login_dospi'); ?>"><i class="flaticon-plus"></i> Jual Ternakmu Disini</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->

                                <?php
                                  $this->load->view($namamodule .'/'.$namafileview);
                                ?>


<!-- Intro section start -->
<div class="intro-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12">
                <div class="intro-text">
                    <h3>Apakah Anda Ada Pertanyaan ?</h3>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-12">
                <a href="<?php echo base_url('kontak_index'); ?>" class="btn btn-md">Chat Disini !</a>
            </div>
        </div>
    </div>
</div>
<!-- Intro section end -->

<!-- Footer start -->
<footer class="footer">
    <div class="container footer-inner">
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6" style="margin-left: 4%;">
                <div class="footer-item clearfix">
                    <img src="assets/img/logos/white logo.jpg" alt="logo" class="f-logo">
                    <ul class="contact-info">
                        <li>
                            <i class="flaticon-pin"></i>Perum Permata Regency 1 Blok 10/28, Perun Gpa, Ngijo, Kec. Karang Ploso, Malang, Jawa Timur 65152
                        </li>
                        <li>
                            <i class="flaticon-mail"></i><a href="mailto:sales@hotelempire.com">Dospi@gmail.com</a>
                        </li>
                        <li>
                            <i class="flaticon-phone"></i><a href="tel:+55-417-634-7071">0333-897123</a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                    <div class="social-list-2">
                        <ul>
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
             <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6" style="margin-left: 11%;">
                <div class="footer-item">
                    <h4>
                        Tentang kami
                    </h4>
                    <ul class="links">
                        <li>
                            <a href="<?php echo base_url('tentang_dospi_index'); ?>">Tentang Dospi</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('kontak_index'); ?>">Kontak kami</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-3 col-md-6 col-sm-6" style="margin-left: 5%;">
                <div class="recent-properties footer-item">
                    <h4>Tata Cara</h4>
                    <div class="media mb-4">
                        <a class="pr-3" href="properties-details.html">
                        </a>
                        <div class="media-body align-self-center">
                            <h5>
                                <a href="<?php echo base_url('cara_penjualan_index'); ?>">Tata Cara Penjualan di Dospi</a>
                            </h5>
                            <div class="listing-post-meta">

                            </div>
                        </div>
                    </div>
                    <div class="media mb-4">
                        <a class="pr-3" href="properties-details.html">
                       
                        </a>
                        <div class="media-body align-self-center">
                            <h5>
                                <a href="<?php echo base_url('cara_pembelian_index'); ?>">Tata Cara Pembelian di Dospi</a>
                            </h5>
                            <div class="listing-post-meta">
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-lg-12">
                <p class="copy sub-footer">© Dospi 2020</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="http://storage.googleapis.com/themevessel-products/fort/index.html#">
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-sm button-theme">Cari</button>
    </form>
</div>

<script src="assets/js/jquery-2.2.0.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script  src="assets/js/bootstrap-submenu.js"></script>
<script  src="assets/js/rangeslider.js"></script>
<script  src="assets/js/jquery.mb.YTPlayer.js"></script>
<script  src="assets/js/bootstrap-select.min.js"></script>
<script  src="assets/js/jquery.easing.1.3.js"></script>
<script  src="assets/js/jquery.scrollUp.js"></script>
<script  src="assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script  src="assets/js/leaflet.js"></script>
<script  src="assets/js/leaflet-providers.js"></script>
<script  src="assets/js/leaflet.markercluster.js"></script>
<script  src="assets/js/dropzone.js"></script>
<script  src="assets/js/slick.min.js"></script>
<script  src="assets/js/jquery.filterizr.js"></script>
<script  src="assets/js/jquery.magnific-popup.min.js"></script>
<script  src="assets/js/jquery.countdown.js"></script>
<script  src="assets/js/maps.js"></script>
<script  src="assets/js/app.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="assets/js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script  src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

<!-- Mirrored from storage.googleapis.com/themevessel-products/fort/index-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2020 13:24:21 GMT -->
</html>