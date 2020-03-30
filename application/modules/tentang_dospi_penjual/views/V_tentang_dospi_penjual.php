<!-- Sub banner start -->

<div class="sub-banner">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1>Tentang Dospi</h1>
            <ul class="breadcrumbs">
                <li><a href="index-3penjual.html">Home</a></li>
                <li class="active">Tentang Dospi</li>
            </ul>
            <?php foreach($tampil as $tentangdospipenjual) {
    $id = $tentangdospipenjual->id_tentang;
?>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- About city estate start -->

<div class="about-real-estate  content-area-5">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-xs-12">
                <div class="about-slider-box simple-slider">
                    <img class="d-block w-100" src="assets/img/about.jpg" alt="about">
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-xs-12">
                <div class="about-content">
                    <h3><?php echo $tentangdospipenjual->judul ?> </h3>
                    <p><?php echo $tentangdospipenjual->konten ?></p>
                <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About city estate end -->


