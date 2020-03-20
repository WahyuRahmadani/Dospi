<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from storage.googleapis.com/themevessel-products/fort/my-profile2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2020 13:25:07 GMT -->
<head>
    <title>Dospi</title>
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

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/default.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >

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


<?php 
$rows = $this->db->query("SELECT * FROM user where email='".$this->session->email."'")->row_array();
 ?>


<!-- Main header start -->
<header class="main-header header-2 fixed-header">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo pad-0" href="<?php echo base_url('halaman_pembeli'); ?>">
                <img src="assets/img/logos/black-logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto d-lg-none d-xl-none">
                    <li class="nav-item dropdown">
                        <a href="<?php echo base_url('pesan_pembeli'); ?>" class="nav-link">Pesan</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="<?php echo base_url('pemesanan_pembeli'); ?>" class="nav-link">Pemesanan</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="<?php echo base_url('pembelian_pembeli'); ?>" class="nav-link">Pembelian</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="<?php echo base_url('faktur_pembeli'); ?>" class="nav-link">Faktur Saya</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="<?php echo base_url('profil_pembeli'); ?>" class="nav-link">Profil Saya</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="<?php echo base_url('edit_profil_pembeli'); ?>">Setting</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="<?php echo base_url('syarat_ketentuan_pembeli'); ?>" class="nav-link">Syarat & ketentuan</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="<?php echo base_url('faq_dashboard_pembeli'); ?>" class="nav-link">Faq</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="<?php echo base_url('halaman_index'); ?>" class="nav-link">Keluar</a>
                    </li>
                </ul>
                <div class="navbar-buttons ml-auto d-none d-xl-block d-lg-block">
                    <ul>
                        <li>
                            <div class="dropdown btns">
                                <a class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="<?php echo base_url('assets/img/foto_login/'.$rows['foto_profil']) ?>" alt="avatar">
                                    <?php echo $rows['username'] ?>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="<?php echo base_url('pessan_pembeli'); ?>">Pesan</a>
                                    <a class="dropdown-item" href="<?php echo base_url('pemesanan_pembeli'); ?>">Pemesanan</a>
                                    <a class="dropdown-item" href="<?php echo base_url('pembelian_pembeli'); ?>">Pembelian</a>
                                    <a class="dropdown-item" href="<?php echo base_url('profil_pembeli'); ?>">Profil Saya</a>
                                    <a class="dropdown-item" href="<?php echo base_url('edit_profil_pembeli'); ?>">Setting</a>
                                    <a class="dropdown-item" href="<?php echo base_url('syarat_ketentuan_pembeli'); ?>">Syarat & ketentuan</a>
                                    <a class="dropdown-item" href="<?php echo base_url('faq_dashboard_pembeli'); ?>">Faq</a>
                                    <a class="dropdown-item" href="<?php echo base_url('halaman_index'); ?>" data-toggle="modal" data-target="#keluar">Keluar</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->

<!-- Dashbord start -->
<div class="dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-pad">
                <div class="dashboard-nav d-none d-xl-block d-lg-block">
                    <div class="dashboard-inner">
                        <h4>UTAMA</h4>
                        <ul>
                            <li><a href="<?php echo base_url('pesan_pembeli'); ?>"><i class="flaticon-mail"></i> Pesan <span class="nav-tag">5</span></a></li>
                            <li><a href="<?php echo base_url('pemesanan_pembeli'); ?>"><i class="flaticon-calendar"></i> Pemesanan</a></li>
                            <li><a href="<?php echo base_url('faktur_pembeli'); ?>"><i class="flaticon-bill"></i>Faktur Saya</a></li>
                            <li><a href="<?php echo base_url('pembelian_pembeli'); ?>"><i class="fa fa-money"></i>Pembelian</a></li>
                            <li><a href="<?php echo base_url('Pembayaran'); ?>"><i class="fa fa-credit-card"></i> Pembayaran</a></li>
                             <li><a href="<?php echo base_url('riwayat_pembayaran_Pembeli'); ?>"><i class="fa fa-history"></i> Riwayat Pembayaran</a></li>
                        </ul>
                        <h4>AKUN</h4>
                        <ul>
                            <li><a href="<?php echo base_url('profil_pembeli'); ?>"><i class="fa fa-user"></i>Profil Saya</a></li>
                            <li><a href="<?php echo base_url('edit_profil_pembeli'); ?>"><i class="fa fa-gear"></i>Setting</a></li>
                            <li><a href="<?php echo base_url('syarat_ketentuan_pembeli'); ?>"><i class="flaticon-bill"></i>Syarat & ketentuan</a></li>
                            <li><a href="<?php echo base_url('faq_dashboard_pembeli'); ?>"><i class="flaticon-bill"></i>Faq</a></li>
                            <li><a href="<?php echo base_url('halaman_index'); ?>"><i class="flaticon-logout"></i>Keluar</a></li>
                        </ul>
                    </div>
                </div>
            </div>
          

                        <?php
                             $this->load->view($namamodule .'/'.$namafileview);
                        ?>

        </div>
    </div>
</div>




                <!-- The Modal hapus -->
                  <div class="modal fade" id="keluar" style="top: 15%;">
                    <div class="modal-dialog modal-md">
                      <div class="modal-content">
                      
                        <!-- Modal Header -->
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        
                        <!-- Modal body -->
                        <div class="modal-body">
                          <center><h6>Apakah Anda yakin Untuk Keluar</h6></center>
                        </div>
                        
                        <!-- Modal footer -->
                        <div class="modal-footer">
                          <a href="<?php echo base_url('pemesanan_pembeli'); ?>" class="btn btn-danger" data-dismiss="modal">Tidak</a>          
                          <a href="<?php echo base_url('halaman_index'); ?>" class="btn btn-success">Iya</a>
                        </div>
                        
                      </div>
                    </div>
                  </div>

                 <!-- the end modal hapus -->





<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="http://storage.googleapis.com/themevessel-products/fort/index-3.html#">
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

<!-- Mirrored from storage.googleapis.com/themevessel-products/fort/my-profile2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2020 13:25:07 GMT -->
</html>