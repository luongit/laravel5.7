<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blessing</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- LOAD CSS FILES -->
    <link href="{{url('public/home')}}/css/main.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="preloader"></div>
    <div id="wrapper">
        <!-- header begin -->
        <header>
            <div class="container">
                <span id="menu-btn"></span>
                <div class="row">
                    <div class="col-md-3">

                        <!-- logo begin -->
                        <div id="logo">
                            <div class="inner">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="" class="logo-1">
                                    <img src="img/logo-2.png" alt="" class="logo-2">
                                </a>

                            </div>
                        </div>
                        <!-- logo close -->

                    </div>

                    <div class="col-md-9">

                        <!-- mainmenu begin -->
                        <div id="mainmenu-container">
                            <ul id="mainmenu">
                                <li><a href="index.html">Home</a>
                                    <ul>
                                        <li><a href="index.html">Homepage 1</a></li>
                                        <li><a href="index-2.html">Homepage 2</a></li>
                                        <li><a href="index-3.html">Homepage 3</a></li>
                                    </ul>
                                </li>
                                <li><a href="events.html">Events</a>
                                    <ul>
                                        <li><a href="events.html">Events List</a></li>
                                        <li><a href="events-calendar.html">Events Calendar</a></li>
                                        <li><a href="event-single.html">Single Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="sermons.html">Sermons</a>
                                    <ul>
                                        <li><a href="sermons.html">Sermons List</a></li>
                                        <li><a href="sermon-single.html">Single Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="features.html">Features</a></li>
                                <li><a href="news.html">News</a>
									<ul>
                                        <li><a href="news.html">News List</a></li>
                                        <li><a href="news-single.html">Single Page</a></li>
                                    </ul>
								</li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                        <!-- mainmenu close -->

                        <!-- social icons -->
                        <div class="social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-rss"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-envelope-o"></i></a>
                        </div>
                        <!-- social icons close -->

                    </div>
                </div>
            </div>

        </header>
        <!-- header close -->
@if(request()->is('/'))
        <!-- slider -->
        <div id="slider">
            <!-- revolution slider begin -->
            <div class="fullwidthbanner-container">
                <div id="revolution-slider">
                    <ul>
                        <li data-transition="fade" data-slotamount="10" data-masterspeed="1500">
                            <!--  BACKGROUND IMAGE -->
                            <img src="{{url('public/home')}}/img-rev-slider/bg-1.jpg" alt="">
                            <div class="tp-caption border-v lft"
                                data-x="540"
                                data-y="center"
                                data-speed="800"
                                data-start="400"
                                data-easing="easeInOutCubic"
                                data-endspeed="300">
                            </div>

                            <div class="tp-caption custom-font-1 lft"
                                data-x="600"
                                data-y="140"
                                data-speed="800"
                                data-start="1000"
                                data-easing="easeInOutCubic"
                                data-endspeed="300">
                                Transforming Live
                            </div>

                            <div class="tp-caption lft custom-font-2"
                                data-x="600"
                                data-y="190"
                                data-speed="800"
                                data-start="800"
                                data-easing="easeInOutCubic">
                                Restoring Hope 
                            </div>

                            <div class="tp-caption tp-text sfb text-left"
                                data-x="600"
                                data-y="240"
                                data-speed="800"
                                data-start="1400"
                                data-easing="easeInOutCubic">
                                Transforming lives and societies through education, research and innovation.<br>
                                Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.<br>
                            </div>

                            <div class="tp-caption sfb text-left"
                                data-x="600"
                                data-y="320"
                                data-speed="800"
                                data-start="1600"
                                data-easing="easeInOutCubic">
                                <a class="btn btn-slider" href="#">Read More</a>
                            </div>
                        </li>

                        <li data-transition="fade" data-slotamount="10" data-masterspeed="1500">
                            <!--  BACKGROUND IMAGE -->
                            <img src="{{url('public/home')}}/img-rev-slider/bg-2.jpg" alt="">
                            <div class="tp-caption custom-font-1 lft"
                                data-x="left"
                                data-y="140"
                                data-speed="800"
                                data-start="400"
                                data-easing="easeInOutCubic"
                                data-endspeed="300">
                                Put Your Faith 
                            </div>

                            <div class="tp-caption sfr custom-font-2"
                                data-x="left"
                                data-y="190"
                                data-speed="800"
                                data-start="800"
                                data-easing="easeInOutCubic">
                                Into Action 
                            </div>

                            <div class="tp-caption sfb tp-text text-left"
                                data-x="left"
                                data-y="240"
                                data-speed="800"
                                data-start="1200"
                                data-easing="easeInOutCubic">
                                Put your faith into action today and let your actions be fueled by your faith.<br>
                                Incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.<br>
                            </div>

                            <div class="tp-caption sfb text-left"
                                data-x="left"
                                data-y="320"
                                data-speed="800"
                                data-start="1600"
                                data-easing="easeInOutCubic">
                                <a class="btn btn-slider" href="#">Read More</a>
                            </div>
                        </li>

                        <li data-transition="fade" data-slotamount="10" data-masterspeed="1500">
                            <!--  BACKGROUND IMAGE -->
                            <img src="{{url('public/home')}}/img-rev-slider/bg-3.jpg" alt="">
                            <div class="tp-caption border-v lft"
                                data-x="540"
                                data-y="center"
                                data-speed="800"
                                data-start="400"
                                data-easing="easeInOutCubic"
                                data-endspeed="300">
                            </div>

                            <div class="tp-caption custom-font-1 lft"
                                data-x="600"
                                data-y="140"
                                data-speed="800"
                                data-start="1000"
                                data-easing="easeInOutCubic"
                                data-endspeed="300">
                                total surrender 
                            </div>

                            <div class="tp-caption lft custom-font-2"
                                data-x="600"
                                data-y="190"
                                data-speed="800"
                                data-start="800"
                                data-easing="easeInOutCubic">
                                to God 
                            </div>

                            <div class="tp-caption sfb tp-text text-left"
                                data-x="600"
                                data-y="240"
                                data-speed="800"
                                data-start="1400"
                                data-easing="easeInOutCubic">
                                The first step in overcoming any kind of situation that holds me in bondage<br>
                                in my thoughts,mind, body and spirit is to surrender it to God<br>
                            </div>

                            <div class="tp-caption sfb text-left"
                                data-x="600"
                                data-y="320"
                                data-speed="800"
                                data-start="1600"
                                data-easing="easeInOutCubic">
                                <a class="btn btn-slider" href="#">Read More</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- revolution slider close -->
        </div>
        <!-- slider close -->
@endif
        <div class="clearfix"></div>

        <!-- content begin -->
        <div id="content" class="no-padding">

            @yield('content')

        </div>
        <!-- footer begin -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        &copy; Copyiright 2017 - Blessing by SatriaThemes
                    </div>
                    <div class="col-md-6">
                        <nav>
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Events</a></li>
                                <li><a href="#">News</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer close -->
    </div>

    <!-- LOAD JS FILES -->
    <script src="{{url('public/home')}}/js/jquery.min.js"></script>
    <script src="{{url('public/home')}}/js/bootstrap.min.js"></script>
    <script src="{{url('public/home')}}/js/jquery.isotope.min.js"></script>
    <script src="{{url('public/home')}}/js/jquery.prettyPhoto.js"></script>
    <script src="{{url('public/home')}}/js/easing.js"></script>
    <script src="{{url('public/home')}}/js/jquery.ui.totop.js"></script>
    <script src="{{url('public/home')}}/js/ender.js"></script>
    <script src="{{url('public/home')}}/js/responsiveslides.min.js"></script>
    <script src="{{url('public/home')}}/js/owl.carousel.js"></script>
    <script src="{{url('public/home')}}/js/jquery.fitvids.js"></script>
    <script src="{{url('public/home')}}/js/jquery.plugin.js"></script>
    <script src="{{url('public/home')}}/js/jquery.countdown.js"></script>
    <script src="{{url('public/home')}}/js/countdown-custom.js"></script>
    <script src="{{url('public/home')}}/js/wow.min.js"></script>
    <script src="{{url('public/home')}}/js/custom.js"></script>

    <!-- SLIDER REVOLUTION SCRIPTS  -->
    <script type="text/javascript" src="{{url('public/home')}}/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="{{url('public/home')}}/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="{{url('public/home')}}/js/rev-setting-1.html"></script>

</body>
</html>
