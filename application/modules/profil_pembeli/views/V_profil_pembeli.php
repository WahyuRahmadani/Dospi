<div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5">
                    <div class="dashboard-content">
                        <div class="dashboard-list">

                            <?php foreach ($tampil as $key) {
                                $id = $key->id_user;
                                $status=$key->status;
                            ?>

                            <h3 class="heading">Profile Saya</h3>
                            <div class="dashboard-message contact-2 bdr clearfix">
                                <div class="row">
                                    <div class="col-md-3">
                                        <!-- Edit profile photo -->
                                        <div class="form-group">
                                            <img src="<?php echo base_url ()?>assets/img/user/<?php echo $key->foto_profil?>"  width='180px' height='180'>
                                        </div>
                                    </div>
                                    <div class="col-lg-9 col-md-9">
                                        <form action="#" method="GET" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-7 col-md-6">
                                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<label>Username</label>
                                                        <h4><?php echo $key->username; ?></h4>
                                                </div><br><br><br><br><br>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group subject">
                                                        <label style="font-size: 14px;">Jenis Kelamin</label><br>
                                                        <i class="fa fa-venus-mars">&nbsp;Laki-Laki</i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group subject">
                                                        <label style="font-size: 14px;">Email</label><br>
                                                        <p><?php echo $key->email; ?><i class="fa fa-check" style="color: green;"></i></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group subject">
                                                        <label style="font-size: 14px;">No.Telephone</label><br>
                                                        <p><?php echo $key->no_tlp; ?></p>
                                                    </div>
                                                    <div class="form-group subject">
                                                        <label style="font-size: 14px;">Sebagai:</label><br>
                                                        <p><?php if ($status==1) {
                                                            echo "penjual";
                                                        }if ($status==2) {
                                                            echo "pembeli";
                                                        } ?></p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group subject">
                                                        <label style="font-size: 14px;">Foto KTP</label><br>
                                                        <img src="<?php echo base_url ()?>assets/img/user/<?php echo $key->foto_ktp?>" width="175" height="100">
                                                    </div>
                                                </div>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <p class="sub-banner-2 text-center">© Dospi 2020.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashbord end -->

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

 <!-- the end modal hapus -->