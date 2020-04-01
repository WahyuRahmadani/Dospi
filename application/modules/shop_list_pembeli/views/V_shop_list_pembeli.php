<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1>Shop</h1>
            <ul class="breadcrumbs">
                <li><a href="<?php echo base_url('halaman_pembeli'); ?>">Home</a></li>
                <li class="active">Shop</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Properties section body start -->
<div class="properties-section-body content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-left">
                    <!-- Advanced search start -->
                    <div class="widget advanced-search">
                        <h3 class="sidebar-title">Cari Berdasarkan</h3>
                        <form method="GET">
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="all-status">
                                    <option>Filter Hewan</option>
                                    <option>Sapi</option>
                                    <option>Kambing</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="your name" placeholder="Jenis Hewan">
                            </div>
                            <div class="form-group">
                                <select class="selectpicker search-fields" name="Jenis Kelamin">
                                    <option>Jenis Kelamin</option>
                                    <option>Jantan</option>
                                    <option>Betina</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="your name" placeholder="Lokasi">
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                   <div class="form-group">
                                <input type="text" class="form-control" name="your name" placeholder="Berat Min">
                            </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="form-group">
                                <input type="text" class="form-control" name="your name" placeholder="Berat Max">
                            </div>
                                </div>
                            </div>
                            <div class="range-slider">
                                <label>Harga</label>
                                <div data-min="0" data-max="150000000"  data-min-name="min_price" data-max-name="max_price" data-unit="RP" class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                <div class="clearfix"></div>
                            </div>
                            
                            <div class="form-group mb-0">
                                <button class="search-button">Cari</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <!-- Option bar start -->
                <div class="option-bar clearfix">
                    <div class="sorting-options2">
                        <span class="sort">Cari Berdasarkan:</span>
                        <select class="selectpicker search-fields" name="default-order">
                            <option>Harga</option>
                            <option>Harga Tertinggi</option>
                            <option>Harga Terendah</option>
                        </select>
                    </div>
                </div>

                               <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="property-box">
                            <div class="property-thumbnail">
                                <a href="<?php echo base_url('shop_detail_pembeli'); ?>" class="property-img">
                                    <div class="tag">Beli Sekarang</div>
                                    <div class="price-box"><span>Rp 100.000.000 </div>
                                    <img class="d-block w-100" src="assets/img/properties/Sapi Limusin Coklat.jpg" alt="properties">
                                </a>
                            </div>
                            <div class="detail">
                                <h1 class="title">
                                    <a href="<?php echo base_url('shop_detail_pembeli'); ?>">Sapi Limusin</a>
                                </h1>
                                <div class="location">
                                    <a href="<?php echo base_url('shop_detail_pembeli'); ?>">
                                        <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                    </a>
                                </div>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="fa fa-arrows-alt"></i> 2m x 1.5m x 2m
                                    </li>
                                    <li>
                                        <i class="fa fa-balance-scale"></i> 2 ton
                                    </li>
                                    <li>
                                        <i class="fa fa-venus-mars"></i> Jantan
                                    </li>
                                    <li>
                                        <i class="fa fa-cutlery"></i> Combor
                                    </li>
                                    <li>
                                        <ion-icon name="color-palette" style="font-size: 17px;"></ion-icon> Merah
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="property-box">
                            <div class="property-thumbnail">
                                <a href="<?php echo base_url('shop_detail_pembeli'); ?>" class="property-img">
                                    <div class="tag">Beli Sekarang</div>
                                    <div class="price-box"><span>Rp 5.000.000</div>
                                    <img class="d-block w-100" src="assets/img/properties/Kambing Etawa.jpg" alt="properties">
                                </a>
                            </div>
                            <div class="detail">
                                <h1 class="title">
                                    <a href="<?php echo base_url('shop_detail_pembeli'); ?>">Kambing Etawa</a>
                                </h1>
                                <div class="location">
                                    <a href="<?php echo base_url('shop_detail_pembeli'); ?>">
                                        <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                    </a>
                                </div>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="fa fa-arrows-alt"></i> 2m x 1.5m x 2m
                                    </li>
                                    <li>
                                        <i class="fa fa-balance-scale"></i> 2 ton
                                    </li>
                                    <li>
                                        <i class="fa fa-venus-mars"></i> Jantan
                                    </li>
                                    <li>
                                        <i class="fa fa-cutlery"></i> Combor
                                    </li>
                                    <li>
                                        <ion-icon name="color-palette" style="font-size: 17px;"></ion-icon> Merah
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="property-box">
                            <div class="property-thumbnail">
                                <a href="<?php echo base_url('shop_detail_pembeli'); ?>" class="property-img">
                                    <div class="tag">Beli Sekarang</div>
                                    <div class="price-box"><span>Rp 150.000.000</div>
                                    <img class="d-block w-100" src="assets/img/properties/Sapi Brahman Putih.jpg" alt="properties">
                                </a>
                            </div>
                            <div class="detail">
                                <h1 class="title">
                                    <a href="<?php echo base_url('shop_detail_pembeli'); ?>">Sapi Brahman</a>
                                </h1>
                                <div class="location">
                                    <a href="<?php echo base_url('shop_detail_pembeli'); ?>">
                                        <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                    </a>
                                </div>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="fa fa-arrows-alt"></i> 2m x 1.5m x 2m
                                    </li>
                                    <li>
                                        <i class="fa fa-balance-scale"></i> 2 ton
                                    </li>
                                    <li>
                                        <i class="fa fa-venus-mars"></i> Jantan
                                    </li>
                                    <li>
                                        <i class="fa fa-cutlery"></i> Combor
                                    </li>
                                    <li>
                                        <ion-icon name="color-palette" style="font-size: 17px;"></ion-icon> Merah
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="property-box">
                            <div class="property-thumbnail">
                                <a href="<?php echo base_url('shop_detail_pembeli'); ?>" class="property-img">
                                    <div class="tag">Beli Sekarang</div>
                                    <div class="price-box"><span>Rp 5.000.000</div>
                                    <img class="d-block w-100" src="assets/img/properties/Kambing Boer.jpg" alt="properties">
                                </a>
                            </div>
                            <div class="detail">
                                <h1 class="title">
                                    <a href="<?php echo base_url('shop_detail_pembeli'); ?>">Kambing Boer</a>
                                </h1>
                                <div class="location">
                                    <a href="<?php echo base_url('shop_detail_pembeli'); ?>">
                                        <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                    </a>
                                </div>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="fa fa-arrows-alt"></i> 2m x 1.5m x 2m
                                    </li>
                                    <li>
                                        <i class="fa fa-balance-scale"></i> 2 ton
                                    </li>
                                    <li>
                                        <i class="fa fa-venus-mars"></i> Jantan
                                    </li>
                                    <li>
                                        <i class="fa fa-cutlery"></i> Combor
                                    </li>
                                    <li>
                                        <ion-icon name="color-palette" style="font-size: 17px;"></ion-icon> Merah
                                    </li>                     
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="property-box">
                            <div class="property-thumbnail">
                                <a href="<?php echo base_url('shop_detail_pembeli'); ?>" class="property-img">
                                    <div class="tag">Beli Sekarang</div>
                                    <div class="price-box"><span>Rp 125.000.000</div>
                                    <img class="d-block w-100" src="assets/img/properties/Sapi Simmental Coklat.jpg" alt="properties">
                                </a>
                            </div>
                            <div class="detail">
                                <h1 class="title">
                                    <a href="<?php echo base_url('shop_detail_pembeli'); ?>">Sapi Simmental</a>
                                </h1>
                                <div class="location">
                                    <a href="<?php echo base_url('shop_detail_pembeli'); ?>">
                                        <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                    </a>
                                </div>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="fa fa-arrows-alt"></i> 2m x 1.5m x 2m
                                    </li>
                                    <li>
                                        <i class="fa fa-balance-scale"></i> 2 ton
                                    </li>
                                    <li>
                                        <i class="fa fa-venus-mars"></i> Jantan
                                    </li>
                                    <li>
                                        <i class="fa fa-cutlery"></i> Combor
                                    </li>
                                    <li>
                                        <ion-icon name="color-palette" style="font-size: 17px;"></ion-icon> Merah
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="property-box">
                            <div class="property-thumbnail">
                                <a href="<?php echo base_url('shop_detail_pembeli'); ?>" class="property-img">
                                    <div class="tag">Beli Sekarang</div>
                                    <div class="price-box"><span>Rp 5.000.000</div>
                                    <img class="d-block w-100" src="assets/img/properties/Kambing Jawarandu.jpg" alt="properties">
                                </a>
                            </div>
                            <div class="detail">
                                <h1 class="title">
                                    <a href="<?php echo base_url('shop_detail_pembeli'); ?>">Kambing Jawa Randu</a>
                                </h1>
                                <div class="location">
                                    <a href="<?php echo base_url('shop_detail_pembeli'); ?>">
                                        <i class="flaticon-pin"></i>123 Kathal St. Tampa City,
                                    </a>
                                </div>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="fa fa-arrows-alt"></i> 2m x 1.5m x 2m
                                    </li>
                                    <li>
                                        <i class="fa fa-balance-scale"></i> 2 ton
                                    </li>
                                    <li>
                                        <i class="fa fa-venus-mars"></i> Jantan
                                    </li>
                                    <li>
                                        <i class="fa fa-cutlery"></i> Combor
                                    </li>
                                    <li>
                                        <ion-icon name="color-palette" style="font-size: 17px;"></ion-icon> Merah
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Page navigation start -->
                <div class="pagination-box text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa fa-angle-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link active" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa fa-angle-right"></i></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Properties section body end -->