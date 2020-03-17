<!-- Sub banner start -->
<div class="sub-banner">
    <div class="container breadcrumb-area">
        <div class="breadcrumb-areas">
            <h1>Kontak kami</h1>
            <ul class="breadcrumbs">
                <li><a href="index-3.html">Home</a></li>
                <li class="active">Kontak kami</li>
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
            <h1>Kontak kami</h1>
        </div>
        <!-- Contact info -->
        <form action="#" method="GET" enctype="multipart/form-data">
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
                        <div class="col-md-6 text-left">
                            <div class="form-group name">
                                <input type="text" name="name" class="form-control" placeholder="Nama" style="color: #333;">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group email">
                                <input type="email" name="email" class="form-control" placeholder="Email" style="color: #333;">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group subject">
                                <input type="text" name="subject" class="form-control" placeholder="Subject" style="color: #333;">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group number">
                                <input type="text" name="phone" class="form-control" placeholder="Nomor" style="color: #333;">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group message">
                                <textarea class="form-control" name="message" placeholder="Tulis pesan" style="color: #333;"></textarea>
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







<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0N5pbJN10Y1oYFRd0MJ_v2g8W2QT74JE"></script>
<script>
    function LoadMap(propertes) {
        var defaultLat = 40.7110411;
        var defaultLng = -74.0110326;
        var mapOptions = {
            center: new google.maps.LatLng(defaultLat, defaultLng),
            zoom: 15,
            scrollwheel: false,
            styles: [
                {
                    featureType: "administrative",
                    elementType: "labels",
                    stylers: [
                        {visibility: "off"}
                    ]
                },
                {
                    featureType: "water",
                    elementType: "labels",
                    stylers: [
                        {visibility: "off"}
                    ]
                },
                {
                    featureType: 'poi.business',
                    stylers: [{visibility: 'off'}]
                },
                {
                    featureType: 'transit',
                    elementType: 'labels.icon',
                    stylers: [{visibility: 'off'}]
                },
            ]
        };
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        var infoWindow = new google.maps.InfoWindow();
        var myLatlng = new google.maps.LatLng(40.7110411, -74.0110326);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map
        });
        (function (marker) {
            google.maps.event.addListener(marker, "click", function (e) {
                infoWindow.setContent("" +
                    "<div class='map-properties contact-map-content'>" +
                    "<div class='map-content'>" +
                    "<p class='address'>20-21 Kathal St. Tampa City, FL</p>" +
                    "<ul class='map-properties-list'> " +
                    "<li><i class='flaticon-phone'></i>  +0477 8556 552</li> " +
                    "<li><i class='flaticon-phone'></i>  info@themevessel.com</li> " +
                    "<li><a href='index-3.html'><i class='fa fa-globe'></i>  http://www.example.com</li></a> " +
                    "</ul>" +
                    "</div>" +
                    "</div>");
                infoWindow.open(map, marker);
            });
        })(marker);
    }
    LoadMap();
</script>

</body>

<!-- Mirrored from storage.googleapis.com/themevessel-products/fort/contact-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2020 13:25:05 GMT -->
</html>
