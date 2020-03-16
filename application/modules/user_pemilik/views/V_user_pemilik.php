<style>
        
#image-preview{
    display:none;
    width : 150px;
    height : 150px;
}
    </style>
</head>
<body class="bg-grea-3">
<div class="page_loader"></div>

<!-- Contact section start -->
<div class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form content box start -->
                <div class="form-content-box">
                    <!-- details -->
                    <div class="details">
                        <!-- Logo-->
                        <a href="index-3.html">
                            <img src="assets/img/black-logo.png" class="cm-logo" alt="black-logo">
                        </a>
                        <!-- Name -->
                        <h3>Buat Akun</h3>
                        <!-- Form start-->

                        <?= form_open_multipart('user_pemilik/register_pemilik'); ?>
                            <div class="form-group">
                                <input type="username" name="username" class="input-text" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Password" name="password" class="input-text" id="password" required>
        
                            </div>
                            <div class="form-group">
                                <input type="password" placeholder="Confirm Password" class="input-text" id="confirm_password" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="input-text" placeholder="Email">
                            </div>
                            <div class="form-group">
                                  <p style="margin-left: 1%; position: absolute;">Jenis Kelamin:</p><br><br>
                                    <div class="row">
                                        <div class="col-md-3">
                                          <input type="radio" id="laki-laki" name="gender" value="laki-laki">
                                          <label for="laki-laki">laki-laki</label><br>
                                        </div>
                                        <div class="col-md-4">
                                          <input type="radio" id="perempuan" name="gender" value="perempuan">
                                          <label for="perempuan">perempuan</label>
                                        </div>

                                    </div>
                            </div>
                            <div class="form-group">
                                <input type="text" name="no_tlp" class="input-text" placeholder="Nomor Telepon/Whatsapp">
                            </div>
                            <!-- <p>Tambahkan Foto Ktp</p> -->
                            <div class="form-group">
                                    <div class="col-md-8 " style="margin-top: 2%">
                                           <input type="file" name="gambar" id="image-source" onchange="previewImage();"/>
                                    </div>
                                                  
                                               
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3"></div>
                                            <div class="col-md-3">
                                                <img id="image-preview" alt="image preview"/>
                                            </div>
                                        </div>      
                                        

                                    <br><br>
                                    <div class="form-group mb-0">
                                        <button class="btn-md button-theme btn-block">Daftar</button>
                                        <a href="index-3.html" class="btn-md button-theme btn-block">Kembali</a>
                                    </div>
                                <?= form_close(); ?>
                            </div>
                        <!-- Footer -->
                        <div class="footer">
                            <span>Siap jadi anggota? <a href="login.html">Daftar</a></span>
                        </div>
                    </div>
                    <!-- Form content box end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact section end -->

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
<script>
    var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("confrim password anda salah!!");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

<script type="text/javascript">

function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    var oFReader = new FileReader();
     oFReader.readAsDataURL(document.getElementById("image-source").files[0]);
 
    oFReader.onload = function(oFREvent) {
      document.getElementById("image-preview").src = oFREvent.target.result;
    };
  };
</script>

</body>

<!-- Mirrored from storage.googleapis.com/themevessel-products/fort/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2020 13:25:07 GMT -->
</html>