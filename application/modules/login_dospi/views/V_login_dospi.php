
<!-- Contact section start -->
<div class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form content box start -->
                <div class="form-content-box">
                    <!-- details -->
                    <div class="details">
                        <!-- Logo -->
                        <a href="index-3.html">
                            <img src="assets/img/black-logo.png" class="cm-logo" alt="black-logo">
                        </a>
                        <!-- Name -->
                        <h3>Masuk</h3>
                        <!-- Form start -->
                        <form action="<?php echo base_url().'login_dospi/aksi_login' ?>" method="post">
                            <div class="form-group">
                                <input type="email" name="email" class="input-text" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="input-text" placeholder="Password">
                            </div>
                            <div class="form-group mb-0">
                                <label>
                                        <button class="btn-md button-theme btn-block" style="width: 30%; left: 35%; position: absolute;">Masuk</button><br><br><br>
                                        <a href="<?php echo base_url('halaman_index'); ?>" class="btn-md button-theme btn-block" style="width: 30%; left: 35%; position: absolute;">Kembali</a>
                                </label>
                            </div>
                            <br>
                            <div class="checkbox">
                                <div class="ez-checkbox pull-left">
                                    <label>
                                        <a href="lupa_password_penjual">Lupa password</a>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Footer -->
                    <div class="footer">
                        <span>Tidak mempunyai Akun? <a href="<?php echo base_url ().'user_pemilik' ?>">Registrasi</a></span>
                    </div>
                </div>
                <!-- Form content box end -->


            </div>
        </div>
    </div>
</div>
<!-- Contact section end -->
