

<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1>Shop</h1>
            <ul class="breadcrumbs">
                <li><a href="<?php echo base_url('halaman_penjual'); ?>">Home</a></li>
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
                        <?php
                            $no = $this->uri->segment(3)+1;
                            foreach($tampil as $shoplist) {
                        ?>
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="property-box">
                            <div class="property-thumbnail">
                                <a href="" class="property-img">
                                    <div class="tag">Beli Sekarang</div>
                                    <div class="price-box"><span>Rp&nbsp;<?php echo $shoplist->harga_hewan; ?></div>
                                    <img class="d-block w-100" src="assets/img/properties/Sapi Limusin Coklat.jpg" value="<?php echo $shoplist->gambar ?>" alt="properties">
                                </a>
                            </div>
                            <div class="detail">
                                <h1 class="title">
                                    <a href="<?php echo base_url('shop_detail_penjual/detail/').$shoplist->id_datahewan ?>"><?php echo $shoplist->jenis_hewan; ?></a>
                                </h1>
                                <div class="location">
                                    <a href="properties-detailspenjual.html">
                                        <i class="flaticon-pin"></i><?php echo $shoplist->kabupaten; ?>
                                    </a>
                                </div>
                                <ul class="facilities-list clearfix">
                                    <li>
                                        <i class="fa fa-arrows-alt"></i>&nbsp;<?php echo $shoplist->ukuran_hewan; ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-balance-scale"></i>&nbsp;<?php echo $shoplist->berat_hewan; ?>&nbsp;Kg
                                    </li>
                                    <li>
                                        <i class="fa fa-venus-mars"></i>&nbsp;<?php echo $shoplist->jenis_kelamin; ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-cutlery"></i>&nbsp;<?php echo $shoplist->nama_makanan; ?>
                                    </li>
                                    <li>
                                        <ion-icon name="color-palette" style="font-size: 17px;"></ion-icon>&nbsp;<?php echo $shoplist->warna_hewan; ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                        <?php } ?>
                </div>


<?php echo $this->pagination->create_links(); ?>

                <!-- Page navigation start -->
<!--                 <div class="pagination-box text-center">
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
 -->                
            </div>
        </div>
    </div>
</div>
<!-- Properties section body end -->


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
          <a href="index-3penjual.html" class="btn btn-danger" data-dismiss="modal">Tidak</a>          
          <a href="index-3.html" class="btn btn-success">Iya</a>
        </div>
        
      </div>
    </div>
  </div>
