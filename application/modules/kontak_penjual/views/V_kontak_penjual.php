<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1>Kontak Dospi</h1>
            <ul class="breadcrumbs">
                <li><a href="index-3penjual.html">Home</a></li>
                <li class="active">Kontak Dospi</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Contact 2 start -->
<div class="contact-2 content-area-5">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1>Kontak Dospi</h1>
        </div>
        <!-- Contact info -->
        <form method="post" action="<?php echo base_url().'kontak_penjual/tambah' ?>" enctype="multipart/form-data">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-info-2">
                        <div class="media">
                            <i class="flaticon-phone"></i>
                            <div class="media-body">
                                <h5>No.hp:</h5>
                                <p><a href="#">0477 8556 552</a></p>
                            </div>
                        </div>
                        <div class="media">
                            <i class="flaticon-mail"></i>
                            <div class="media-body">
                                <h5>Email:</h5>
                                <p><a href="#">infodospi.com</a></p>
                            </div>
                        </div>
                        <div class="media mb-0">
                            <i class="flaticon-fax"></i>
                            <div class="media-body">
                                <h5>Alamat kantor:</h5>
                                <p><a href="#">Perum Permata  Regency 1 Blok 10/28, Perun  Gpa, Ngijo, Kec. Karang Ploso,Malang, Jawa Timur 65152</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-7">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group subject">
                                <input type="text" name="judul" class="form-control" placeholder="Subject" style="color: #333;">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group message">
                                <textarea class="form-control" name="pesan" placeholder="Tulis pesan" style="color: #333;"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="send-btn">
                                <button type="submit" class="btn btn-md button-theme">Kirim pesan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- Contact 2 end -->

<!-- Google map start -->
<div class="section">
    <div class="map">
        <div id="map" class="contact-map"></div>
    </div>
</div>
<!-- Google map end -->

