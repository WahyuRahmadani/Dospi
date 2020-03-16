<div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5">
                    <div class="dashboard-content">
                        <div class="dashboard-header clearfix">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"><h4>Profil Saya</h4></div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="breadcrumb-nav">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php foreach ($tampil as $key) {
                            $id = $key->id_user;
                         ?>
                        <div class="dashboard-list">
                            <h3 class="heading">Profil Lengkap</h3>
                            <div class="dashboard-message contact-2 bdr clearfix">
                                <div class="row">
                                        <div class="col-lg-3 col-md-3">
                                            <div class="form-group" style="margin-top: -22%;"><br>
                                                <form action="<?php echo base_url().'edit_profil_pembeli/edit'; ?>" method="post" enctype="multipart/form-data">
                                                <input type="hidden" name="id_user" value="<?php echo $key->id_user; ?>">
                                                <label></label><br><br>
                                                <input type="file" name="foto_profil"> 
                                            </div>
                                        </div>
                                        <div class="col-lg-9 col-md-9">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group name">
                                                            <label>Username</label>
                                                            <input type="text" name="name" class="form-control" style="color: black;" value="<?php echo $key->username; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6">
                                                        <div class="form-group subject">
                                                            <label>Telepon</label>
                                                            <input type="text" name="telepon" class="form-control" style="color: black;" value="<?php echo $key->no_tlp; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-md-12">
                                                    <div class="send-btn">
                                                        <button class="btn btn-md button-theme"  style="margin-left: 67%;">Simpan perubahan</button>
                                                    </div>
                                                </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                        <br>
                        <br>
                        <br>  
                        <div class="row">
                            <div class="col-md-6">
                                <div class="dashboard-list">
                                    <h3 class="heading">Ganti Password</h3>
                                    <div class="dashboard-message contact-2">
                                        <form action="<?php echo base_url().'edit_profil/password'; ?>" method="post" enctype="multipart/form-data">
                                                    <input type="hidden" name="id_user" value="<?php echo $key->id_user; ?>">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group name">
                                                        <label>Password saat ini</label>
                                                        <input type="password" name="password_saat_ini" class="form-control" placeholder="Password saat ini" style="color: black;">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group email">
                                                        <label>Password Baru</label>
                                                        <input type="password" name="new-password" class="form-control" placeholder="Password Baru" style="color: black;">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group subject">
                                                        <label>Konfirmasi Password Baru</label>
                                                        <input type="password" name="confirm-new-password" class="form-control" placeholder="Konfirmasi Password Baru" style="color: black;">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12" style="margin-left: 46%;">
                                                    <div class="send-btn">
                                                        <button type="submit" class="btn btn-md button-theme">Ganti Kata Sandi</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                    </div>
                <?php } ?>
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