<!DOCTYPE html>
<html class="html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="assets/imgs/favicon.png" />
	<meta name="description" content=" Interswitch Connects is a technology product fair/exhibition that will showcase Interswitch’s entire product portfolio across various services to existing and new targets
">

    <title>  @yield('title')Interswitch Connects </title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
    <!-- inject:css -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/vendor/bootsnav/css/bootsnav.css">
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/vendor/custom-icon/css/style.css">
    <link rel="stylesheet" href="assets/vendor/owl.carousel2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css">
    <link rel="stylesheet" href="assets/vendor/animate.css/animate.min.css">
    <link rel="stylesheet" href="assets/vendor/swiper/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/main.min.css">
    <!-- endinject -->
     

</head>
<body>

    <!--header start-->
    <header id="header" class="Sticky">
        <!-- Start Navigation -->
        <nav class="navbar navbar-default navbar-fixed white no-background bootsnav">

            <div class="container">
                      <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="">
                        <img src="assets/imgs/logo-light.png" class="logo logo-display" alt="">
                        <img src="assets/imgs/logo.png" class="logo logo-scrolled" alt="">
                    </a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav navbar-right" data-in="" data-out="">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home</a>
                            <!--<ul class="dropdown-menu">
                                <li><a href="home-register.html">Home Register</a></li>
                                <li><a href="home-rev-slider.html">Home Slider Rev</a></li>
                                <li><a href="home-countdown.html">Home Countdown</a></li>
                                <li><a href="home-youtube.html">Home Video (YouTube)</a></li>
                                <li><a href="index-2.html">Home Classic</a></li>
                            </ul>-->
                        </li>
                        <li class="dropdown">
                            <a href="#schedule" class="dropdown-toggle" data-toggle="dropdown" >Schedule</a>
                           <!-- <ul class="dropdown-menu">
                                <li><a href="schedule-tab.html">Tab View</a></li>
                                <li><a href="schedule-timeline.html">Timeline View</a></li>
                            </ul>-->
                        </li>

                        <li class="dropdown">
                            <a href="#speakers" class="dropdown-toggle" data-toggle="dropdown" >Speakers</a>
                           <!-- <ul class="dropdown-menu">
                                <li><a href="speakers-grid.html">Speakers Grid</a></li>
                                <li><a href="speakers-classic.html">Speakers Classic</a></li>
                            </ul>-->
                        </li>

                       <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Pages</a>
                            <ul class="dropdown-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact-us.html">Contact Us</a></li>
                                <li><a href="pricing-table.html">Pricing Table</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                                <li><a href="404.html">404 Error</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                            </ul>
                        </li>-->

                        <li class="dropdown">
                            <a href="#sponsor" class="dropdown-toggle" data-toggle="dropdown" >Sponsors</a>
                            <!--<ul class="dropdown-menu">
                                <li><a href="become-sponsors.html">Become a Sponsor</a></li>
                                <li><a href="venue.html">Venue</a></li>
                            </ul>hidden-xs hidden-sm-->
                        </li>
						
						 <li class="dropdown buy-btn "><a href="#"><span class="btn btn-sm btn-primary n-MarginTop5 text-uppercase">700 SEATS LEFT</span></a></li>

                       <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blog</a>
                            <ul class="dropdown-menu">
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog-single.html">Blog Centered</a></li>
                                <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                                <li><a href="blog-details-centered.html">Blog Details Centered</a></li>
                            </ul>
                        </li>-->
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>

            <!-- Start Side Menu --
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <div class="widget u-MarginTop50">
                    <!--<h4 class="title">Shortlinks</h4>--
                    <ul class="link">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Schedules</a></li>
                        <li><a href="#">Speakers</a></li>
                        <li><a href="#">Sponsors</a></li>
                        <li><a href="#">Venue</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Shortcodes</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>

                <div class="widget">
                    <!--<h5 class="title">Social Links</h5>--
                    <div class="social-links sl-default border-link round-link colored-link">
                        <a href="#" class="facebook">
                            <i class="fa fa-facebook"></i>
                        </a>
                        <a href="#" class="twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="#" class="g-plus">
                            <i class="fa fa-google-plus"></i>
                        </a>
                        <a href="#" class="youtube">
                            <i class="fa fa-youtube"></i>
                        </a>
                        <a href="#" class="dribbble">
                            <i class="fa fa-dribbble"></i>
                        </a>
                        <a href="#" class="behance">
                            <i class="fa fa-behance"></i>
                        </a>
                    </div>
                </div>
            </div>
             End Side Menu -->
        </nav>
        <!-- End Navigation -->
        <div class="clearfix"></div>
    </header>
    <!--header end-->

   @yield('content')
    <!--footer start-->
    <footer class="bg-darker u-PaddingTop100 u-sm-PaddingTop30 u-PaddingBottom100 u-sm-PaddingBottom30 ">
        <div class="container text-center text-sm">
            <img class="retina u-MarginBottom50 u-sm-MarginBottom30" src="assets/imgs/logo-light.png" alt="">
            <div class="social-links sl-default light-link solid-link circle-link colored-hover">
                <a href="#" class="facebook">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="#" class="twitter">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="#" class="g-plus">
                    <i class="fa fa-google-plus"></i>
                </a>
                <a href="#" class="youtube">
                    <i class="fa fa-youtube"></i>
                </a>
                <a href="#" class="dribbble">
                    <i class="fa fa-dribbble"></i>
                </a>
                <a href="#" class="behance">
                    <i class="fa fa-behance"></i>
                </a>
            </div>
            <p class="u-MarginBottom5 u-MarginTop20">Copyright 2017</p>
        </div>
    </footer>
    <!--footer end-->


    <!-- inject:js -->
    <script src="assets/vendor/jquery/jquery-1.12.0.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendor/bootsnav/js/bootsnav.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/waypoints/sticky.min.js"></script>
    <script src="assets/vendor/headroom/headroom.min.js"></script>
    <script src="assets/vendor/jquery.countTo/jquery.countTo.min.js"></script>
    <script src="assets/vendor/owl.carousel2/owl.carousel.min.js"></script>
    <script src="assets/vendor/jquery.appear/jquery.appear.js"></script>
    <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.js"></script>
    <script src="assets/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendor/jquery.countdown.min.js"></script>
    <script src="assets/vendor/swiper/js/swiper.min.js"></script>
    <script src="assets/js/main.js"></script>
	<script>
// Set the date we're counting down to
var countDownDate = new Date("Sept 14, 2017 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = "&nbsp;" + days + "&nbsp;&nbsp;&nbsp; " + hours + "&nbsp;&nbsp;&nbsp;&nbsp;  "
    + minutes + " &nbsp;&nbsp; " + seconds + " &nbsp;&nbsp; ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script>
    <!-- endinject -->

    <!--google map-->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCVkU7YnGfown4_i_sm6X36HP2jWTv54&amp;callback=initMap"> </script>

    <script>
        function initMap() {
            var location, map, marker;

            location = {lat: 6.423596, lng: 3.4448516};
            map = new google.maps.Map(document.getElementById('map'), {
                center: location,
                zoom: 15,
                scrollwheel:false
            });
            marker = new google.maps.Marker({
                position: location,
                map: map
            });
        }
    </script>
	

</body>
</html>
