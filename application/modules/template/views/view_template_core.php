<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from storage.googleapis.com/themevessel-products/fort/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2020 13:25:07 GMT -->
<head>
    <title>Dospi HTML Template</title>
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
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script  src="js/ie-emulation-modes-warning.js"></script>


                        <?php
                             $this->load->view($namamodule .'/'.$namafileview);
                        ?>


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
