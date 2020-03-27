<div class="col-lg-9 col-md-12 col-sm-12 col-pad">
    <div class="content-area5 dashboard-content">
        <div class="dashboard-header clearfix">
            <div class="row">
                <div class="col-sm-12 col-md-6"><h4>Pesan</h4></div>
                <div class="col-sm-12 col-md-6">
                    <div class="breadcrumb-nav">
                    </div>
                </div>
            </div>
        </div>
        <div class="submit-address dashboard-list">
            <form method="GET">
                <h4>Daftar Pesan</h4>
                <div class="row pad-20">
                    <div class="col-lg-12">
                        <div class="comment">
                            <div class="comment-author">
                                <a href="#">
                                    <img src="assets/img/avatar/avatar-1.jpg" alt="comments-user">
                                </a>
                            </div>
                             <?php foreach($tampil as $pesanpenjual) {
                                    $id = $pesanpenjual->id_pesan;
                                ?>
                            <div class="comment-content">
                                <div class="comment-meta">
                                    <h6>
                                        Dicky Dharmawan
                                        <span class="float-right">11/28/2018<a data-toggle="modal" data-target="#jajal" style="color: blue;">Balasan</a><a data-toggle="modal" data-target="#hapus" style="color: red;">Hapus</a></span>
                                    </h6>
                                </div>
                                <P><?php echo $pesanpenjual->isi_pesan ?></P>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <p class="sub-banner-2 text-center">© Dospi 2020.</p>
    </div>
</div>
</div>
</div>
</div>
<!-- Dashboard end -->

<!-- The Modal balas -->
<div class="modal fade" id="jajal" style="top: 15%;">
<div class="modal-dialog modal-md">
<div class="modal-content">
<form action="<?php echo base_url().'pesan_penjual/balas'?>" method="post" enctype="multipart/form-data">

<!-- Modal Header -->
<div class="modal-header">
<h4 class="modal-title">Balas</h4>
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<!-- Modal body -->
<div class="modal-body">
<div class="form-group">
<label for="comment">Comment:</label>
<textarea class="form-control" rows="5" id="comment" name="balas"></textarea>
</div>
</div>

<!-- Modal footer -->
<div class="modal-footer">
<button type="button" class="btn btn-success" data-dismiss="modal">Kirim</button>
</div>

</div>
</div>
</div>
<!-- the end modal balas -->

<!-- The Modal hapus -->
<div class="modal fade" id="hapus" style="top: 15%;">
<div class="modal-dialog modal-md">
<div class="modal-content">

<!-- Modal Header -->
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">&times;</button>
</div>

<!-- Modal body -->
<div class="modal-body">
<center><h6>Apakah Anda yakin Untuk Menghapus Pesan ini ???</h6></center>
</div>

<!-- Modal footer -->
<div class="modal-footer">
<button type="button" class="btn btn-danger" data-dismiss="modal">Hapus</button>
</div>

</div>
</div>
</div>

<!-- the end modal hapus -->


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