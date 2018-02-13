<footer id="footer" class="footer">
        <div class="container">
            <!-- Start Logo Footer -->
            <div class="logo-footer wow fadeInUp" data-wow-duration="1s">
                <a href="#">
                    <img src="images/logo.png" alt="Applora" title="Applora">
                </a>
            </div>
            <!-- End Logo Footer -->
            <!-- Start Social Links -->
            <div class="social-footer text-center wow fadeInUp" data-wow-duration="1s">
                <a class="social-applora-gradient" href="#"><i  class='fa fa-facebook'></i></a>
                <a class="social-applora-gradient" href="#"><i  class='fa fa-twitter'></i></a>
                <a class="social-applora-gradient" href="#"><i  class='fa fa-behance'></i></a>
                <a class="social-applora-gradient" href="#"><i  class='fa fa-linkedin'></i></a>
                <a class="social-applora-gradient" href="#"><i  class='fa fa-pinterest'></i></a>
            </div>
            <!-- End Social Links -->
            <!-- Start Copyright -->
            <div class="copyright text-center wow fadeInUp" data-wow-duration="1s">
                <p>Copyright © 2018 <a href="https://themeforest.net/user/alaa_ahmed/portfolio">Alaa Ahmed</a>. All Rights Reserved.</p>
            </div>
            <!-- End Copyright -->
        </div>
        <!-- End container -->
    </footer>
    <!-- End footer -->

    <!--
        End Footer
        ==================================== -->

    <!--
        Start Back To Top
        ==================================== -->

    <div id="scroll-top">
        <i class="fa fa-angle-up fa-2x"></i>
    </div>

    <!--
        End Back To Top
        ==================================== -->

    <!--
        Start Preloader
        ==================================== -->

    <div id="loading-mask">
        <div class="loader">
            <div class="loader-inner"></div>
            <div class="loader-inner"></div>
            <div class="loader-inner"></div>
            <div class="loader-inner"></div>
            <div class="loader-inner"></div>
        </div>
    </div>

    <!--
        End Preloader
        ==================================== -->

    <!--
            JS Files
            ==================================== -->

    <!-- Plugins -->
    <script src="js/plugins.js"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAj9b_nyz33KEaocu6ZOXRgqwwUZkDVEAw"></script>
    <!-- Custom JS -->
    <script src="js/custom.js"></script>
    <script>
        // Google Map
        function initialize() {
            var mapOptions = {
                zoom: 15,
                scrollwheel: false,
                center: new google.maps.LatLng(30.596492, 32.271459)
            };
            var map = new google.maps.Map(document.getElementById('googleMap'),
                mapOptions);
            var marker = new google.maps.Marker({
                position: map.getCenter(),
                animation: google.maps.Animation.BOUNCE,
                icon: 'img/map-marker.png',
                map: map
            });
        }
        google.maps.event.addDomListener(window, 'load', initialize);
    </script>